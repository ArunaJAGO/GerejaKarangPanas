<?php

namespace Tests\Feature;

use App\Models\MemberRegistration;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PortalAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_portal_login_authenticates_an_active_user_and_rejects_an_inactive_user(): void
    {
        $admin = User::factory()->create([
            'role' => User::ROLE_ADMIN,
            'password' => 'correct horse battery',
        ]);

        $this->post(route('portal.login.submit'), [
            'identifier' => $admin->email,
            'password' => 'correct horse battery',
        ])->assertRedirect(route('admin.dashboard'));

        $this->assertAuthenticatedAs($admin);

        auth()->logout();
        $admin->update(['is_active' => false]);

        $this->from(route('portal.login'))->post(route('portal.login.submit'), [
            'identifier' => $admin->email,
            'password' => 'correct horse battery',
        ])->assertRedirect(route('portal.login'))->assertSessionHasErrors('identifier');

        $this->assertGuest();
    }

    public function test_kkg_registration_creates_a_member_account_and_keeps_documents_private(): void
    {
        Storage::fake('local');

        $this->post(route('portal.daftar.submit'), [
            'jenis_pendaftaran' => 'mutasi',
            'nama_lengkap' => 'Maria Contoh',
            'nama_baptis' => 'Maria',
            'nik' => '1234567890123456',
            'tempat_lahir' => 'Semarang',
            'tanggal_lahir' => '1990-01-01',
            'jenis_kelamin' => 'P',
            'golongan_darah' => 'O',
            'whatsapp' => '081234567890',
            'email' => 'maria@example.com',
            'alamat' => 'Jalan Contoh 1',
            'wilayah' => 'Wilayah 1',
            'lingkungan' => 'Lingkungan 1',
            'lapor_lingkungan' => 'sudah',
            'file_kk' => UploadedFile::fake()->create('kk.pdf', 100, 'application/pdf'),
            'file_sakramen' => UploadedFile::fake()->create('sakramen.pdf', 100, 'application/pdf'),
            'password' => 'member password',
            'password_confirmation' => 'member password',
            'setuju_benar' => '1',
            'setuju_data' => '1',
        ])->assertRedirect(route('portal.login'))->assertSessionHas('status');

        $user = User::query()->where('email', 'maria@example.com')->firstOrFail();
        $registration = MemberRegistration::query()->where('user_id', $user->id)->firstOrFail();

        $this->assertSame(User::ROLE_UMAT, $user->role);
        $this->assertSame('+6281234567890', $user->phone);
        $this->assertTrue(Hash::check('member password', $user->password));
        $this->assertSame('1234567890123456', $registration->nik);
        $this->assertNotSame('1234567890123456', $registration->getRawOriginal('nik'));
        Storage::disk('local')->assertExists($registration->family_document_path);
        Storage::disk('local')->assertExists($registration->sacrament_document_path);
    }

    public function test_admin_can_manage_content_and_umat_cannot_open_admin_panel(): void
    {
        $admin = User::factory()->create(['role' => User::ROLE_ADMIN]);
        $umat = User::factory()->create(['role' => User::ROLE_UMAT]);

        $this->actingAs($admin)
            ->post(route('admin.contents.store'), [
                'slug' => 'jadwal-misa',
                'title' => 'Jadwal Misa',
                'body' => 'Jadwal terbaru.',
                'status' => 'published',
            ])
            ->assertRedirect();

        $this->assertDatabaseHas('contents', ['slug' => 'jadwal-misa', 'created_by' => $admin->id]);

        $this->actingAs($umat)->get(route('admin.dashboard'))->assertForbidden();
    }

    public function test_database_seeder_creates_two_admins_and_two_superadmins_from_unique_passwords(): void
    {
        $accounts = [
            ['name' => 'Superadmin 1', 'email' => 'superadmin1@example.com', 'password' => 'unique superadmin one', 'role' => 'superadmin'],
            ['name' => 'Superadmin 2', 'email' => 'superadmin2@example.com', 'password' => 'unique superadmin two', 'role' => 'superadmin'],
            ['name' => 'Admin 1', 'email' => 'admin1@example.com', 'password' => 'unique admin password one', 'role' => 'admin'],
            ['name' => 'Admin 2', 'email' => 'admin2@example.com', 'password' => 'unique admin password two', 'role' => 'admin'],
        ];

        config(['initial_accounts' => $accounts]);
        $this->seed(DatabaseSeeder::class);

        $this->assertDatabaseCount('users', 4);
        $this->assertSame(2, User::query()->where('role', User::ROLE_ADMIN)->count());
        $this->assertSame(2, User::query()->where('role', User::ROLE_SUPERADMIN)->count());
        $this->assertTrue(Hash::check($accounts[0]['password'], User::query()->where('email', $accounts[0]['email'])->value('password')));
    }
}
