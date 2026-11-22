<?php

namespace Tests\Feature;

use App\Models\ApiToken;
use App\Models\Content;
use App\Models\MemberRegistration;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ApiAccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_api_login_returns_a_hashed_revocable_bearer_token(): void
    {
        $user = User::factory()->create([
            'email' => 'admin@example.com',
            'role' => User::ROLE_ADMIN,
            'password' => 'a long api password',
        ]);

        $response = $this->postJson('/api/v1/auth/login', [
            'email' => $user->email,
            'password' => 'a long api password',
        ])->assertOk()->assertJsonPath('user.role', User::ROLE_ADMIN);

        $plainTextToken = $response->json('token');
        $this->assertNotSame($plainTextToken, ApiToken::query()->firstOrFail()->token_hash);

        $this->withToken($plainTextToken)->getJson('/api/v1/auth/me')->assertOk()->assertJsonPath('data.email', $user->email);
        $this->withToken($plainTextToken)->postJson('/api/v1/auth/logout')->assertOk();
        $this->withToken($plainTextToken)->getJson('/api/v1/auth/me')->assertUnauthorized();
    }

    public function test_only_superadmins_can_manage_accounts_and_admins_can_manage_content(): void
    {
        $admin = User::factory()->create(['role' => User::ROLE_ADMIN]);
        $superadmin = User::factory()->create(['role' => User::ROLE_SUPERADMIN]);

        $this->withToken($this->tokenFor($admin))
            ->postJson('/api/v1/contents', [
                'slug' => 'warta-paroki',
                'title' => 'Warta Paroki',
                'body' => 'Isi warta.',
                'status' => 'published',
            ])
            ->assertCreated();

        Content::create([
            'slug' => 'internal-draft',
            'title' => 'Draft',
            'body' => 'Not public.',
            'status' => 'draft',
            'created_by' => $admin->id,
        ]);
        $this->getJson('/api/v1/contents')->assertOk()->assertJsonFragment(['slug' => 'warta-paroki'])->assertJsonMissing(['slug' => 'internal-draft']);

        $this->withToken($this->tokenFor($admin))->getJson('/api/v1/users')->assertForbidden();

        $this->withToken($this->tokenFor($superadmin))
            ->postJson('/api/v1/users', [
                'name' => 'Admin Baru',
                'email' => 'admin-baru@example.com',
                'password' => 'long secure password',
                'role' => User::ROLE_ADMIN,
            ])
            ->assertCreated()
            ->assertJsonPath('data.role', User::ROLE_ADMIN)
            ->assertJsonMissingPath('data.password');

        $this->withToken($this->tokenFor($superadmin))->getJson('/api/v1/contents')->assertOk();
    }

    public function test_last_superadmin_cannot_be_removed_or_demoted(): void
    {
        $superadmin = User::factory()->create(['role' => User::ROLE_SUPERADMIN]);
        $token = $this->tokenFor($superadmin);

        $this->withToken($token)
            ->putJson('/api/v1/users/'.$superadmin->id, ['role' => User::ROLE_ADMIN])
            ->assertUnprocessable();

        $this->withToken($token)->putJson('/api/v1/users/'.$superadmin->id, ['is_active' => '0'])->assertUnprocessable();
        $this->withToken($token)->deleteJson('/api/v1/users/'.$superadmin->id)->assertUnprocessable();
    }

    public function test_staff_can_download_member_documents_but_invalid_document_names_are_hidden(): void
    {
        Storage::fake('local');
        Storage::disk('local')->put('member-registrations/family.pdf', 'private family document');

        $admin = User::factory()->create(['role' => User::ROLE_ADMIN]);
        $member = User::factory()->create(['role' => User::ROLE_UMAT]);
        $registration = MemberRegistration::create([
            'user_id' => $member->id,
            'registration_type' => 'mutasi',
            'baptismal_name' => 'Maria',
            'nik' => '1234567890123456',
            'birth_place' => 'Semarang',
            'birth_date' => '1990-01-01',
            'gender' => 'P',
            'address' => 'Jalan Contoh',
            'pastoral_region' => 'Wilayah 1',
            'neighborhood' => 'Lingkungan 1',
            'family_document_path' => 'member-registrations/family.pdf',
            'sacrament_document_path' => 'member-registrations/sacrament.pdf',
        ]);

        $this->withToken($this->tokenFor($admin))
            ->get('/api/v1/member-registrations/'.$registration->id.'/documents/family')
            ->assertDownload('family.pdf');

        $this->withToken($this->tokenFor($admin))
            ->getJson('/api/v1/member-registrations')
            ->assertOk()
            ->assertJsonMissingPath('data.data.0.nik')
            ->assertJsonMissingPath('data.data.0.family_document_path');

        $this->withToken($this->tokenFor($admin))
            ->get('/api/v1/member-registrations/'.$registration->id.'/documents/nik')
            ->assertNotFound();
    }

    private function tokenFor(User $user): string
    {
        $plainTextToken = 'test-token-'.str()->random(40);

        $user->apiTokens()->create([
            'name' => 'test',
            'token_hash' => hash('sha256', $plainTextToken),
            'expires_at' => now()->addDay(),
        ]);

        return $plainTextToken;
    }
}
