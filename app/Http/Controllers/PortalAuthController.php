<?php

namespace App\Http\Controllers;

use App\Models\MemberRegistration;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Throwable;

class PortalAuthController extends Controller
{
    public function showLogin(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route(Auth::user()->role === User::ROLE_UMAT ? 'beranda' : 'admin.dashboard');
        }

        return view('portal.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'identifier' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string'],
        ]);

        $identifier = trim($validated['identifier']);
        $phone = $this->normalisePhone($identifier);

        $user = User::query()
            ->where(function ($query) use ($identifier, $phone): void {
                $query->where('email', $identifier)
                    ->orWhere('church_family_number', $identifier);

                if ($phone !== null) {
                    $query->orWhere('phone', $phone);
                }
            })
            ->first();

        if (! $user || ! $user->is_active || ! Hash::check($validated['password'], $user->password)) {
            return back()
                ->withErrors(['identifier' => 'Email/nomor atau kata sandi tidak sesuai.'])
                ->onlyInput('identifier');
        }

        Auth::login($user, $request->boolean('remember'));
        $request->session()->regenerate();

        return redirect()->intended(
            $user->role === User::ROLE_UMAT ? route('beranda') : route('admin.dashboard'),
        );
    }

    public function register(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'jenis_pendaftaran' => ['required', Rule::in(['mutasi', 'pemekaran', 'belum_tercatat'])],
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'nama_baptis' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'digits:16'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date', 'before_or_equal:today'],
            'jenis_kelamin' => ['required', Rule::in(['L', 'P'])],
            'golongan_darah' => ['nullable', Rule::in(['A', 'B', 'AB', 'O', '-'])],
            'whatsapp' => ['required', 'string', 'max:32'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'alamat' => ['required', 'string', 'max:5000'],
            'wilayah' => ['required', 'string', 'max:255'],
            'lingkungan' => ['required', 'string', 'max:255'],
            'lapor_lingkungan' => ['required', Rule::in(['sudah', 'belum'])],
            'paroki_asal' => ['nullable', 'string', 'max:255'],
            'keuskupan_asal' => ['nullable', 'string', 'max:255'],
            'no_surat_pindah' => ['nullable', 'string', 'max:255'],
            'file_kk' => ['required', 'file', 'mimes:pdf,jpg,jpeg,png', 'max:5120'],
            'file_sakramen' => ['required', 'file', 'mimes:pdf,jpg,jpeg,png', 'max:5120'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'setuju_benar' => ['accepted'],
            'setuju_data' => ['accepted'],
        ]);

        $phone = $this->normalisePhone($validated['whatsapp']);

        if ($phone === null) {
            return back()->withErrors(['whatsapp' => 'Nomor WhatsApp tidak valid.'])->withInput();
        }

        if (User::query()->where('phone', $phone)->exists()) {
            return back()->withErrors(['whatsapp' => 'Nomor WhatsApp sudah terdaftar.'])->withInput();
        }

        $storedPaths = [];

        try {
            $storedPaths['family'] = $request->file('file_kk')->store('member-registrations', 'local');
            $storedPaths['sacrament'] = $request->file('file_sakramen')->store('member-registrations', 'local');

            if (! is_string($storedPaths['family']) || ! is_string($storedPaths['sacrament'])) {
                throw new \RuntimeException('Berkas pendaftaran tidak dapat disimpan ke penyimpanan privat.');
            }

            DB::transaction(function () use ($validated, $phone, $storedPaths): void {
                $user = User::create([
                    'name' => $validated['nama_lengkap'],
                    'email' => $validated['email'],
                    'phone' => $phone,
                    'password' => $validated['password'],
                    'role' => User::ROLE_UMAT,
                ]);

                MemberRegistration::create([
                    'user_id' => $user->id,
                    'registration_type' => $validated['jenis_pendaftaran'],
                    'baptismal_name' => $validated['nama_baptis'],
                    'nik' => $validated['nik'],
                    'birth_place' => $validated['tempat_lahir'],
                    'birth_date' => $validated['tanggal_lahir'],
                    'gender' => $validated['jenis_kelamin'],
                    'blood_type' => $validated['golongan_darah'] ?? null,
                    'address' => $validated['alamat'],
                    'pastoral_region' => $validated['wilayah'],
                    'neighborhood' => $validated['lingkungan'],
                    'reported_to_neighborhood' => $validated['lapor_lingkungan'],
                    'origin_parish' => $validated['paroki_asal'] ?? null,
                    'origin_diocese' => $validated['keuskupan_asal'] ?? null,
                    'transfer_letter_number' => $validated['no_surat_pindah'] ?? null,
                    'family_document_path' => $storedPaths['family'],
                    'sacrament_document_path' => $storedPaths['sacrament'],
                ]);
            });
        } catch (Throwable $exception) {
            Storage::disk('local')->delete(array_filter($storedPaths, 'is_string'));

            throw $exception;
        }

        return redirect()
            ->route('portal.login')
            ->with('status', 'Pendaftaran tersimpan. Silakan masuk menggunakan email atau WhatsApp Anda.');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('portal.login');
    }

    private function normalisePhone(string $value): ?string
    {
        $digits = preg_replace('/\D+/', '', $value);

        if ($digits === '') {
            return null;
        }

        if (str_starts_with($digits, '0')) {
            $digits = '62'.substr($digits, 1);
        } elseif (! str_starts_with($digits, '62')) {
            $digits = '62'.$digits;
        }

        return strlen($digits) >= 10 && strlen($digits) <= 15 ? '+'.$digits : null;
    }
}
