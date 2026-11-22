# GerejaKarangPanas

## Login, roles, dan data umat

- Akun disimpan di tabel `users`; kata sandi di-hash oleh Laravel.
- Peran akun: `umat` (akun pendaftaran biasa), `admin` (kelola konten dan pengajuan KKG), dan `superadmin` (kelola seluruh akun serta website).
- Form login Portal Umat menerima email, nomor WhatsApp, atau nomor KKG. Login web dibatasi 5 percobaan per menit.
- Form pendaftaran KKG menyimpan akun dan data pemohon ke database dalam satu transaksi. NIK dienkripsi menggunakan `APP_KEY`; berkas persyaratan berada di disk privat `storage/app/private/member-registrations`.
- Admin dapat mengelola konten dari `/admin`; konten berstatus terbit tampil di `/konten` dan `/konten/{slug}`. Superadmin juga dapat membuat akun pengelola dan mengelola akun melalui API.
- API menggunakan bearer token acak yang hanya ditampilkan saat login dan disimpan sebagai hash SHA-256. Token berlaku 30 hari dan dapat dicabut dengan endpoint logout.

## Menyiapkan empat akun awal

Atur email (opsional) dan empat kata sandi unik dengan panjang minimal 12 karakter di `.env`:

```dotenv
SUPERADMIN_1_EMAIL=superadmin1@example.com
SUPERADMIN_1_PASSWORD=
SUPERADMIN_2_EMAIL=superadmin2@example.com
SUPERADMIN_2_PASSWORD=
ADMIN_1_EMAIL=admin1@example.com
ADMIN_1_PASSWORD=
ADMIN_2_EMAIL=admin2@example.com
ADMIN_2_PASSWORD=
```

Jangan menyimpan kata sandi di Git. Setelah database aktif dan `.env` diisi, jalankan:

```sh
php artisan migrate
php artisan db:seed
```

Seeder membuat dua akun superadmin dan dua akun admin, serta aman dijalankan kembali untuk memperbarui empat akun tersebut. Seeder berhenti dengan pesan yang jelas jika kata sandi belum diisi. Pastikan `APP_KEY` sudah dibuat dan gunakan kata sandi berbeda sebelum produksi.

## Endpoint API v1

Semua respons menggunakan JSON.

| Method | Endpoint | Akses | Keterangan |
| --- | --- | --- | --- |
| `POST` | `/api/v1/auth/login` | Publik, 10 percobaan/menit | Masuk memakai `email`, `password`, dan opsional `device_name`; respons memberi bearer token |
| `GET` | `/api/v1/auth/me` | Token | Profil akun dan peran |
| `POST` | `/api/v1/auth/logout` | Token | Cabut token saat ini |
| `GET` | `/api/v1/contents` | Publik | Daftar konten terbit |
| `GET` | `/api/v1/contents/{slug}` | Publik | Baca konten terbit |
| `POST` | `/api/v1/contents` | Admin/Superadmin | Tambah konten |
| `PUT` | `/api/v1/contents/{id}` | Admin/Superadmin | Ubah konten |
| `DELETE` | `/api/v1/contents/{id}` | Admin/Superadmin | Hapus konten |
| `GET` | `/api/v1/member-registrations` | Admin/Superadmin | Daftar pengajuan KKG (data NIK tidak dikirim) |
| `PATCH` | `/api/v1/member-registrations/{id}` | Admin/Superadmin | Verifikasi/tolak pengajuan; verifikasi memerlukan `church_family_number` |
| `GET` | `/api/v1/member-registrations/{id}/documents/{family\|sacrament}` | Admin/Superadmin | Unduh dokumen pengajuan dari penyimpanan privat |
| `GET` | `/api/v1/users` | Superadmin | Daftar akun |
| `POST` | `/api/v1/users` | Superadmin | Buat akun admin/superadmin |
| `PUT` | `/api/v1/users/{id}` | Superadmin | Ubah profil, peran, status aktif, atau kata sandi |
| `DELETE` | `/api/v1/users/{id}` | Superadmin | Hapus akun |

Kirim header `Authorization: Bearer <token>` untuk endpoint terlindungi. Konten menerima `slug`, `title`, `body`, dan `status` (`draft` atau `published`). Pembuatan akun API menerima `name`, `email`, `password` (minimal 12 karakter), dan `role` (`admin` atau `superadmin`).

## Pengujian

```sh
php artisan test
```
