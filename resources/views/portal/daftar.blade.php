@extends('layouts.app')

@section('title', 'Pendaftaran Umat Baru (KKG) - Paroki Karangpanas Semarang')
@section('nav-active', 'none')

{{-- ============================================================
     DATA: daftar wilayah & lingkungan di bawah hanya CONTOH dari desain.
     Ganti dengan data asli paroki (idealnya dari database).
     ============================================================ --}}
@php
  $wa = 'https://wa.me/6281225001925'; // ganti dengan WhatsApp sekretariat asli

  $wilayah = [
    'Wilayah 1 - Santo Fransiskus Xaverius',
    'Wilayah 2 - Santo Petrus Canisius',
    'Wilayah 3 - Santa Theresia dari Kanak-Kanak Yesus',
    'Wilayah 4 - Santo Ignatius Loyola',
    'Wilayah 5 - Santo Yohanes Rasul',
    'Wilayah 6 - Santa Maria Ratu Para Rasul',
    'Belum mengetahui wilayah',
  ];
  $lingkungan = [
    'Santo Stefanus (Karanganyar Gunung)',
    'Santa Monika (Jatingaleh)',
    'Santo Thomas Aquinas (Candi Baru)',
    'Santo Mikael (Kaliwiru)',
    'Santa Elisabeth (Tegalsari)',
    'Belum tahu (minta bantuan tim sensus paroki)',
  ];
  $jenis = [
    'mutasi'         => ['Warga Katolik baru pindah domisili ke Karangpanas (mutasi paroki)', 'Pindah dari paroki lain, membawa surat pengantar/pindah paroki.'],
    'pemekaran'      => ['Keluarga Katolik baru menikah (pemekaran KK)', 'Pasangan yang baru menerima Sakramen Perkawinan dan membentuk keluarga mandiri.'],
    'belum_tercatat' => ['Warga paroki lama yang belum tercatat di sistem digital', 'Sudah lama tinggal di wilayah paroki tetapi belum memiliki KKG atau belum tervalidasi.'],
  ];

  $inp = 'w-full rounded-lg border-outline-variant bg-surface-container-lowest font-body-md text-body-md focus:border-primary-container focus:ring-2 focus:ring-secondary-fixed';
  $lbl = 'block font-label-md text-label-md text-on-surface font-semibold mb-1';
  $card = 'bg-surface-container-lowest rounded-xl p-6 shadow-sm';
@endphp

@section('content')
<!-- HERO -->
<section class="relative w-full bg-primary overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-primary via-tertiary to-primary-container opacity-95"></div>
  <div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-secondary/15 blur-3xl pointer-events-none"></div>
  <div class="absolute -left-20 bottom-0 w-80 h-80 rounded-full bg-tertiary-container/30 blur-2xl pointer-events-none"></div>
  <div class="relative max-w-[1240px] mx-auto px-gutter py-space-xl">
    <div class="max-w-3xl flex flex-col gap-space-md text-on-primary">
      <nav class="flex items-center gap-2 font-label-md text-label-md text-primary-fixed" aria-label="Breadcrumb">
        <a href="{{ route('portal.login') }}" class="hover:text-secondary-fixed flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">home</span> Portal Umat</a>
        <span class="text-primary-fixed-dim">/</span>
        <span class="text-secondary-fixed font-semibold">Pendaftaran KKG Baru</span>
      </nav>
      <h1 class="font-headline-lg text-2xl sm:text-headline-lg text-surface-container-lowest leading-tight">Pendaftaran Umat Baru &amp; Kartu Keluarga Gereja (KKG)</h1>
      <p class="font-body-lg text-sm sm:text-body-lg text-primary-fixed">Isi data keluarga Katolik Anda dengan benar dan sesuai catatan sakramen, demi kelancaran reksa pastoral Paroki Santo Athanasius Agung Karangpanas.</p>

      <div class="grid grid-cols-2 lg:grid-cols-4 gap-space-sm pt-space-xs">
        @foreach ([['1','Isi formulir & unggah berkas'],['2','Verifikasi Ketua Lingkungan'],['3','Verifikasi Sekretariat Paroki'],['4','Nomor KKG diterbitkan']] as $s)
        <div class="bg-surface-container-lowest/10 backdrop-blur-md p-3 rounded-xl flex items-start gap-3">
          <span class="w-7 h-7 rounded-full bg-secondary-container text-on-secondary-container font-bold font-label-md text-label-md flex items-center justify-center shrink-0">{{ $s[0] }}</span>
          <span class="font-body-sm text-body-sm text-surface-container-lowest leading-snug">{{ $s[1] }}</span>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<div class="max-w-[1240px] mx-auto px-gutter py-space-xl">
  @if (session('info'))
    <div class="mb-6 p-4 rounded-xl bg-secondary-container/40 text-on-secondary-container font-body-sm text-body-sm flex items-start gap-2">
      <span class="material-symbols-outlined shrink-0">info</span><span>{{ session('info') }}</span>
    </div>
  @endif
  @if ($errors->any())
    <div class="mb-6 p-4 rounded-xl bg-error-container text-on-error-container font-body-sm text-body-sm">
      <div class="flex items-center gap-2 font-semibold mb-1"><span class="material-symbols-outlined">error</span> Mohon periksa kembali isian Anda:</div>
      <ul class="list-disc list-inside">@foreach ($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
  @endif

  <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

    <!-- FORM -->
    <form method="POST" action="{{ route('portal.daftar.submit') }}" enctype="multipart/form-data" class="lg:col-span-8 space-y-6">
      @csrf

      <!-- A -->
      <div class="{{ $card }}">
        <h2 class="font-headline-sm text-headline-sm text-primary flex items-center gap-2 mb-1"><span class="material-symbols-outlined">category</span> A. Tipe Pendaftaran</h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">Pilih situasi yang sesuai dengan keluarga Anda:</p>
        <div class="space-y-3">
          @foreach ($jenis as $val => $j)
          <label class="flex items-start p-3.5 rounded-lg cursor-pointer bg-surface-container-low hover:bg-surface-container-high transition-colors">
            <input type="radio" name="jenis_pendaftaran" value="{{ $val }}" class="jenis-radio mt-1 text-primary-container focus:ring-secondary-fixed" {{ old('jenis_pendaftaran', 'mutasi') === $val ? 'checked' : '' }}>
            <span class="ml-3">
              <span class="block font-label-lg text-label-lg text-primary font-semibold">{{ $j[0] }}</span>
              <span class="block font-body-sm text-body-sm text-on-surface-variant">{{ $j[1] }}</span>
            </span>
          </label>
          @endforeach
        </div>
      </div>

      <!-- B -->
      <div class="{{ $card }}">
        <h2 class="font-headline-sm text-headline-sm text-primary flex items-center gap-2 mb-4 pb-2 border-b border-outline-variant/40"><span class="material-symbols-outlined">person</span> B. Data Kepala Keluarga / Pemohon</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="md:col-span-2">
            <label class="{{ $lbl }}" for="nama_lengkap">Nama Lengkap (sesuai KTP) <span class="text-error">*</span></label>
            <input id="nama_lengkap" name="nama_lengkap" type="text" required value="{{ old('nama_lengkap') }}" placeholder="Contoh: Aloysius Bambang Hendarto" class="{{ $inp }}">
          </div>
          <div>
            <label class="{{ $lbl }}" for="nama_baptis">Nama Baptis <span class="text-error">*</span></label>
            <input id="nama_baptis" name="nama_baptis" type="text" required value="{{ old('nama_baptis') }}" placeholder="Contoh: Aloysius Gonzaga" class="{{ $inp }}">
          </div>
          <div>
            <label class="{{ $lbl }}" for="nik">NIK KTP <span class="text-error">*</span></label>
            <input id="nik" name="nik" type="text" required inputmode="numeric" pattern="[0-9]{16}" maxlength="16" value="{{ old('nik') }}" placeholder="16 digit NIK" class="{{ $inp }}">
          </div>
          <div>
            <label class="{{ $lbl }}" for="tempat_lahir">Tempat Lahir <span class="text-error">*</span></label>
            <input id="tempat_lahir" name="tempat_lahir" type="text" required value="{{ old('tempat_lahir') }}" placeholder="Contoh: Semarang" class="{{ $inp }}">
          </div>
          <div>
            <label class="{{ $lbl }}" for="tanggal_lahir">Tanggal Lahir <span class="text-error">*</span></label>
            <input id="tanggal_lahir" name="tanggal_lahir" type="date" required value="{{ old('tanggal_lahir') }}" class="{{ $inp }}">
          </div>
          <div>
            <label class="{{ $lbl }}" for="jenis_kelamin">Jenis Kelamin <span class="text-error">*</span></label>
            <select id="jenis_kelamin" name="jenis_kelamin" required class="{{ $inp }}">
              <option value="">Pilih jenis kelamin</option>
              <option value="L" {{ old('jenis_kelamin') === 'L' ? 'selected' : '' }}>Laki-laki</option>
              <option value="P" {{ old('jenis_kelamin') === 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
          </div>
          <div>
            <label class="{{ $lbl }}" for="golongan_darah">Golongan Darah</label>
            <select id="golongan_darah" name="golongan_darah" class="{{ $inp }}">
              <option value="">Pilih golongan darah</option>
              @foreach (['A','B','AB','O'] as $g)<option value="{{ $g }}" {{ old('golongan_darah') === $g ? 'selected' : '' }}>{{ $g }}</option>@endforeach
              <option value="-" {{ old('golongan_darah') === '-' ? 'selected' : '' }}>Tidak tahu</option>
            </select>
          </div>
          <div>
            <label class="{{ $lbl }}" for="whatsapp">Nomor WhatsApp Aktif <span class="text-error">*</span></label>
            <div class="relative">
              <span class="absolute left-3 top-2.5 font-body-sm text-body-sm text-outline">+62</span>
              <input id="whatsapp" name="whatsapp" type="tel" required inputmode="numeric" value="{{ old('whatsapp') }}" placeholder="812-3456-7890" class="{{ $inp }} pl-12">
            </div>
            <span class="font-label-sm text-label-sm text-on-surface-variant">Untuk verifikasi dan notifikasi KKG</span>
          </div>
          <div>
            <label class="{{ $lbl }}" for="email">Email Aktif <span class="text-error">*</span></label>
            <input id="email" name="email" type="email" required autocomplete="email" value="{{ old('email') }}" placeholder="nama@email.com" class="{{ $inp }}">
            <span class="font-label-sm text-label-sm text-on-surface-variant">Digunakan untuk masuk ke Portal Umat</span>
          </div>
        </div>
      </div>

      <!-- C -->
      <div class="{{ $card }}">
        <h2 class="font-headline-sm text-headline-sm text-primary flex items-center gap-2 mb-4 pb-2 border-b border-outline-variant/40"><span class="material-symbols-outlined">pin_drop</span> C. Wilayah &amp; Domisili Gerejawi</h2>
        <div class="space-y-4">
          <div>
            <label class="{{ $lbl }}" for="alamat">Alamat Lengkap Saat Ini <span class="text-error">*</span></label>
            <textarea id="alamat" name="alamat" rows="2" required placeholder="Nama jalan, nomor rumah, RT/RW, kelurahan, kecamatan, kota" class="{{ $inp }}">{{ old('alamat') }}</textarea>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="{{ $lbl }}" for="wilayah">Wilayah Pastoral <span class="text-error">*</span></label>
              <select id="wilayah" name="wilayah" required class="{{ $inp }}">
                <option value="">Pilih wilayah</option>
                @foreach ($wilayah as $w)<option value="{{ $w }}" {{ old('wilayah') === $w ? 'selected' : '' }}>{{ $w }}</option>@endforeach
              </select>
            </div>
            <div>
              <label class="{{ $lbl }}" for="lingkungan">Lingkungan Domisili <span class="text-error">*</span></label>
              <select id="lingkungan" name="lingkungan" required class="{{ $inp }}">
                <option value="">Pilih lingkungan</option>
                @foreach ($lingkungan as $l)<option value="{{ $l }}" {{ old('lingkungan') === $l ? 'selected' : '' }}>{{ $l }}</option>@endforeach
              </select>
            </div>
          </div>
          <div>
            <span class="{{ $lbl }}">Sudah melapor ke Ketua Lingkungan setempat? <span class="text-error">*</span></span>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              @foreach (['sudah' => ['Sudah melapor','Telah bertemu pengurus lingkungan'], 'belum' => ['Belum melapor','Perlu bantuan kontak Ketua Lingkungan']] as $v => $t)
              <label class="flex items-center gap-3 p-3 rounded-lg bg-surface-container-low hover:bg-surface-container-high cursor-pointer">
                <input type="radio" name="lapor_lingkungan" value="{{ $v }}" required class="text-primary-container focus:ring-secondary-fixed" {{ old('lapor_lingkungan', 'sudah') === $v ? 'checked' : '' }}>
                <span><span class="block font-label-md text-label-md text-on-surface font-semibold">{{ $t[0] }}</span><span class="block font-body-sm text-body-sm text-on-surface-variant">{{ $t[1] }}</span></span>
              </label>
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <!-- D: hanya untuk mutasi -->
      <div class="{{ $card }}" id="blok-mutasi">
        <div class="flex items-center justify-between mb-4 pb-2 border-b border-outline-variant/40">
          <h2 class="font-headline-sm text-headline-sm text-primary flex items-center gap-2"><span class="material-symbols-outlined">history_edu</span> D. Asal Paroki Sebelumnya</h2>
          <span class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container-high text-on-surface-variant">Khusus mutasi</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="{{ $lbl }}" for="paroki_asal">Nama Paroki Asal &amp; Kota</label>
            <input id="paroki_asal" name="paroki_asal" type="text" value="{{ old('paroki_asal') }}" placeholder="Contoh: Paroki Santa Maria Regina, Surakarta" class="{{ $inp }}">
          </div>
          <div>
            <label class="{{ $lbl }}" for="keuskupan_asal">Keuskupan Asal</label>
            <input id="keuskupan_asal" name="keuskupan_asal" type="text" value="{{ old('keuskupan_asal') }}" placeholder="Contoh: Keuskupan Agung Semarang" class="{{ $inp }}">
          </div>
          <div class="md:col-span-2">
            <label class="{{ $lbl }}" for="no_surat_pindah">Nomor Surat Pengantar / Pindah Paroki (jika ada)</label>
            <input id="no_surat_pindah" name="no_surat_pindah" type="text" value="{{ old('no_surat_pindah') }}" placeholder="Boleh dikosongkan jika sedang diurus" class="{{ $inp }}">
          </div>
        </div>
      </div>

      <!-- E -->
      <div class="{{ $card }}">
        <h2 class="font-headline-sm text-headline-sm text-primary flex items-center gap-2 mb-1 pb-2 border-b border-outline-variant/40"><span class="material-symbols-outlined">upload_file</span> E. Dokumen Persyaratan Awal</h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant my-3">Format PDF, JPG, atau PNG, maksimum 5 MB per berkas. Pastikan tulisan terbaca jelas.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          @foreach ([['file_kk','Kartu Keluarga Sipil (KK/KTP)','id_card','Pilih berkas KK'], ['file_sakramen','Surat Baptis / Akta Nikah Gereja','menu_book','Pilih berkas sakramen']] as $f)
          <label class="block border-2 border-dashed border-outline-variant hover:border-primary-container rounded-lg p-5 text-center bg-surface-container-low/50 transition-colors cursor-pointer">
            <span class="w-10 h-10 mx-auto mb-2 rounded-full bg-secondary-container/60 text-secondary flex items-center justify-center"><span class="material-symbols-outlined">{{ $f[2] }}</span></span>
            <span class="block font-label-lg text-label-lg text-on-surface font-semibold mb-1">{{ $f[1] }}</span>
            <span class="file-name block font-label-sm text-label-sm text-on-surface-variant mb-3">{{ $f[3] }}</span>
            <input type="file" name="{{ $f[0] }}" accept=".pdf,.jpg,.jpeg,.png" class="file-input sr-only" required>
            <span class="inline-block px-3 py-1.5 bg-surface-container-lowest rounded text-primary font-label-md text-label-md shadow-sm">Telusuri…</span>
          </label>
          @endforeach
        </div>
        <p class="mt-4 p-3.5 rounded-lg bg-surface-container-high/60 flex items-start gap-2.5 font-body-sm text-body-sm text-on-surface">
          <span class="material-symbols-outlined text-secondary shrink-0">info</span>
          <span><strong>Catatan:</strong> berkas anggota keluarga lain (surat krisma, komuni pertama, surat pindah) dapat dilengkapi setelah pendaftaran ini diverifikasi.</span>
        </p>
      </div>

      <!-- F -->
      <div class="{{ $card }}">
        <h2 class="font-headline-sm text-headline-sm text-primary flex items-center gap-2 mb-1 pb-2 border-b border-outline-variant/40"><span class="material-symbols-outlined">lock</span> F. Akun Portal Umat</h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant my-3">Kata sandi ini dipakai untuk masuk ke Portal Umat.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="{{ $lbl }}" for="password">Kata Sandi <span class="text-error">*</span></label>
            <input id="password" name="password" type="password" required minlength="8" autocomplete="new-password" placeholder="Minimal 8 karakter" class="{{ $inp }}">
            <div class="mt-2 flex items-center gap-1.5">
              @for ($i = 0; $i < 4; $i++)<div class="pw-bar h-1.5 flex-1 bg-outline-variant rounded-full transition-colors"></div>@endfor
              <span id="pw-label" class="font-label-sm text-label-sm text-on-surface-variant ml-1 w-20">—</span>
            </div>
          </div>
          <div>
            <label class="{{ $lbl }}" for="password_confirmation">Konfirmasi Kata Sandi <span class="text-error">*</span></label>
            <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" placeholder="Ulangi kata sandi" class="{{ $inp }}">
            <span id="pw-match" class="font-label-sm text-label-sm"></span>
          </div>
        </div>
        <div class="mt-5 space-y-3 pt-3 border-t border-outline-variant/40">
          <label class="flex items-start gap-3 cursor-pointer">
            <input type="checkbox" name="setuju_benar" value="1" required class="mt-1 rounded text-primary-container focus:ring-secondary-fixed">
            <span class="font-body-sm text-body-sm text-on-surface">Saya menyatakan bahwa data yang saya isi benar dan sesuai dokumen sipil serta catatan sakramen Gereja Katolik.</span>
          </label>
          <label class="flex items-start gap-3 cursor-pointer">
            <input type="checkbox" name="setuju_data" value="1" required class="mt-1 rounded text-primary-container focus:ring-secondary-fixed">
            <span class="font-body-sm text-body-sm text-on-surface">Saya menyetujui data keluarga ini diproses untuk keperluan administrasi pastoral dan verifikasi oleh Ketua Lingkungan serta Sekretariat Paroki Santo Athanasius Agung Karangpanas.</span>
          </label>
        </div>
      </div>

      <div class="flex flex-col sm:flex-row items-center justify-between gap-4 p-5 bg-surface-container-low rounded-xl">
        <a href="{{ route('portal.login') }}" class="font-label-lg text-label-lg text-primary hover:underline">Sudah punya akun? Masuk</a>
        <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-primary-container hover:bg-primary text-on-primary font-label-lg text-label-lg px-space-lg py-3 rounded-lg shadow-md transition-all">
          Kirim Pengajuan KKG <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
        </button>
      </div>
    </form>

    <!-- SIDEBAR -->
    <aside class="lg:col-span-4 space-y-6 lg:sticky lg:top-24">
      <div class="{{ $card }}">
        <h3 class="font-headline-sm text-headline-sm text-primary flex items-center gap-2 mb-3"><span class="material-symbols-outlined text-secondary">verified_user</span> Mengapa Perlu KKG?</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">Kartu Keluarga Gereja (KKG) adalah bukti keanggotaan umat dalam reksa pastoral Paroki Karangpanas.</p>
        <ul class="space-y-3 font-body-sm text-body-sm text-on-surface">
          @foreach ([['Pelayanan Sakramen','Memudahkan administrasi Baptis, Komuni Pertama, Krisma, hingga Perkawinan.'],['Buku Induk Paroki','Tercatat resmi dalam data umat paroki.'],['Persekutuan Lingkungan','Terhubung dengan Romo, Dewan Paroki, dan sesama umat di lingkungan.'],['Layanan Umat','Kemudahan pengajuan intensi Misa dan pelayanan lain.']] as $m)
          <li class="flex items-start gap-2.5"><span class="material-symbols-outlined text-secondary text-[18px] mt-0.5 shrink-0">check_circle</span><span><strong>{{ $m[0] }}:</strong> {{ $m[1] }}</span></li>
          @endforeach
        </ul>
      </div>

      <div class="{{ $card }}">
        <h3 class="font-headline-sm text-headline-sm text-primary flex items-center gap-2 mb-3"><span class="material-symbols-outlined">support_agent</span> Layanan Sekretariat</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">Kesulitan menentukan lingkungan atau berkas sakramen hilang? Hubungi sekretariat:</p>
        <div class="space-y-3 font-body-sm text-body-sm">
          <div class="flex items-start gap-2.5"><span class="material-symbols-outlined text-primary shrink-0">schedule</span><div><span class="font-semibold block">Jam operasional</span><span class="text-on-surface-variant">Senin–Jumat 08.00–15.30 WIB<br>Sabtu 08.00–13.00 WIB</span></div></div>
          <div class="flex items-start gap-2.5"><span class="material-symbols-outlined text-secondary shrink-0">chat</span><div><span class="font-semibold block">WhatsApp</span><a class="text-primary font-bold hover:underline" href="{{ $wa }}" target="_blank" rel="noopener">Chat sekretariat</a></div></div>
          <div class="flex items-start gap-2.5"><span class="material-symbols-outlined text-primary shrink-0">location_on</span><div><span class="font-semibold block">Alamat</span><span class="text-on-surface-variant">Jl. Dr. Wahidin No. 110, Karangpanas, Candisari, Semarang 50254</span></div></div>
        </div>
      </div>
    </aside>
  </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
  // Blok D hanya untuk "mutasi paroki"
  const blok = document.getElementById('blok-mutasi');
  function syncJenis() {
    const v = (document.querySelector('.jenis-radio:checked') || {}).value;
    blok.classList.toggle('hidden', v !== 'mutasi');
  }
  document.querySelectorAll('.jenis-radio').forEach(r => r.addEventListener('change', syncJenis));
  syncJenis();

  // Nama berkas + batas 5 MB
  document.querySelectorAll('.file-input').forEach(function (inp) {
    inp.addEventListener('change', function () {
      const label = inp.parentElement.querySelector('.file-name');
      const f = inp.files[0];
      if (!f) return;
      if (f.size > 5 * 1024 * 1024) { alert('Ukuran berkas maksimum 5 MB.'); inp.value = ''; label.textContent = 'Pilih berkas'; return; }
      label.textContent = f.name;
    });
  });

  // Kekuatan kata sandi + cocokkan konfirmasi
  const pw = document.getElementById('password'), cf = document.getElementById('password_confirmation');
  const bars = document.querySelectorAll('.pw-bar'), lab = document.getElementById('pw-label'), mt = document.getElementById('pw-match');
  const warna = ['bg-error', 'bg-secondary-fixed-dim', 'bg-secondary', 'bg-primary'];
  const nama = ['Lemah', 'Cukup', 'Baik', 'Kuat'];
  function nilai(s) {
    let n = 0;
    if (s.length >= 8) n++;
    if (/[a-z]/.test(s) && /[A-Z]/.test(s)) n++;
    if (/\d/.test(s)) n++;
    if (/[^A-Za-z0-9]/.test(s) || s.length >= 12) n++;
    return n;
  }
  function cekPw() {
    const n = pw.value ? nilai(pw.value) : 0;
    bars.forEach((b, i) => { warna.forEach(c => b.classList.remove(c)); b.classList.toggle('bg-outline-variant', i >= n); if (i < n) b.classList.add(warna[n - 1]); });
    lab.textContent = n ? nama[n - 1] : '—';
    if (cf.value) {
      const ok = cf.value === pw.value;
      mt.textContent = ok ? 'Kata sandi cocok' : 'Kata sandi belum sama';
      mt.className = 'font-label-sm text-label-sm ' + (ok ? 'text-secondary' : 'text-error');
    } else { mt.textContent = ''; }
  }
  pw.addEventListener('input', cekPw); cf.addEventListener('input', cekPw);
});
</script>
@endpush