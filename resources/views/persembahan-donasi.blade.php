@extends('layouts.app')

@section('title', 'Persembahan & Donasi - Paroki Karangpanas Semarang')
@section('nav-active', 'donasi')

{{-- ============================================================
     DATA REKENING & QRIS: WAJIB diganti dengan data asli paroki.
     Angka di bawah hanya contoh dari desain.
     ============================================================ --}}
@php
  $qrisNama = 'Gereja Katolik Karangpanas';
  $qrisNmid = 'ID1020038849201';
  // Taruh gambar QRIS asli di public/images/qris.png (otomatis dipakai bila ada)
  $qrisFile = file_exists(public_path('images/qris.png')) ? asset('images/qris.png') : null;

  // [singkatan bank, nomor tampil, nomor polos (untuk disalin), atas nama / keterangan]
  $rekening = [
    ['BCA',     '009-8812-990',     '0098812990',    'a.n. PGPM Paroki St. Athanasius Agung (Kolekte & Operasional)'],
    ['MANDIRI', '135-00-18290-333', '1350018290333', 'a.n. PGPM Karangpanas (Pembangunan & Perawatan Gereja)'],
  ];
@endphp

@section('content')
<section class="w-full max-w-[1240px] mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-space-xl" id="donasi">
  <div class="bg-surface-container-lowest rounded-2xl shadow-xl overflow-hidden">

    <div class="p-6 sm:p-space-xl bg-gradient-to-r from-primary-container via-primary to-tertiary text-on-primary">
      <div class="max-w-3xl">
        <span class="inline-flex items-center gap-1 bg-secondary-container text-on-secondary-container px-2 py-0.5 rounded text-label-sm font-label-sm font-semibold uppercase">
          <span class="material-symbols-outlined text-[14px]">shield</span> Transparansi &amp; Akuntabilitas Kasih
        </span>
        <h1 class="font-headline-lg text-2xl sm:text-headline-lg text-surface-container-lowest mt-space-xs">Persembahan, Kolekte &amp; Donasi Kasih</h1>
        <p class="font-body-lg text-sm sm:text-body-lg text-primary-fixed mt-space-xs">Dukungan umat beriman menopang kelangsungan ibadat liturgi, pemeliharaan gedung gereja, karya sosial bagi yang miskin dan tersisih, serta operasional pastoral paroki.</p>
      </div>
    </div>

    <div class="p-5 sm:p-space-xl bg-surface-container-low grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">

      <!-- QRIS -->
      <div class="lg:col-span-5 bg-surface-container-lowest p-space-lg rounded-2xl shadow-md border border-outline-variant/30 flex flex-col items-center text-center">
        <div class="flex items-center justify-between w-full mb-space-sm text-label-sm font-label-sm font-bold text-on-surface">
          <span>QRIS STANDAR NASIONAL</span>
          <span class="text-secondary bg-secondary-container/30 px-2 py-0.5 rounded text-[11px]">Bebas Biaya Admin</span>
        </div>
        <div class="bg-surface-container-lowest p-space-md rounded-xl border border-outline-variant/40 shadow-inner flex flex-col items-center">
          <span class="font-title-md text-title-md font-bold text-on-surface tracking-wider uppercase">{{ $qrisNama }}</span>
          <span class="font-mono text-on-surface-variant text-[11px] mt-0.5">NMID: {{ $qrisNmid }}</span>

          <div class="my-space-sm bg-white p-2 rounded-lg shadow-sm">
            @if ($qrisFile)
              <img src="{{ $qrisFile }}" alt="QRIS {{ $qrisNama }}" class="w-48 h-48 object-contain"/>
            @else
              {{-- Placeholder desain, BUKAN QR yang bisa dipindai --}}
              <svg class="w-48 h-48 text-on-surface" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Contoh QRIS">
                <rect fill="currentColor" height="24" width="24" x="8" y="8" rx="3"></rect>
                <rect fill="#FFFFFF" height="16" width="16" x="12" y="12" rx="2"></rect>
                <rect fill="currentColor" height="8" width="8" x="16" y="16" rx="1"></rect>
                <rect fill="currentColor" height="24" width="24" x="88" y="8" rx="3"></rect>
                <rect fill="#FFFFFF" height="16" width="16" x="92" y="12" rx="2"></rect>
                <rect fill="currentColor" height="8" width="8" x="96" y="16" rx="1"></rect>
                <rect fill="currentColor" height="24" width="24" x="8" y="88" rx="3"></rect>
                <rect fill="#FFFFFF" height="16" width="16" x="12" y="92" rx="2"></rect>
                <rect fill="currentColor" height="8" width="8" x="16" y="96" rx="1"></rect>
                <rect fill="currentColor" height="6" width="6" x="58" y="12"></rect>
                <rect fill="currentColor" height="6" width="6" x="68" y="12"></rect>
                <rect fill="currentColor" height="6" width="6" x="48" y="24"></rect>
                <rect fill="currentColor" height="6" width="6" x="68" y="24"></rect>
                <rect fill="currentColor" height="6" width="6" x="12" y="48"></rect>
                <rect fill="currentColor" height="6" width="6" x="24" y="48"></rect>
                <rect fill="currentColor" height="6" width="6" x="12" y="60"></rect>
                <rect fill="currentColor" height="6" width="6" x="24" y="68"></rect>
                <rect fill="currentColor" height="8" width="8" x="84" y="48"></rect>
                <rect fill="currentColor" height="8" width="8" x="98" y="48"></rect>
                <rect fill="currentColor" height="6" width="6" x="84" y="62"></rect>
                <rect fill="currentColor" height="10" width="10" x="96" y="62"></rect>
                <rect fill="currentColor" height="8" width="8" x="48" y="84"></rect>
                <rect fill="currentColor" height="8" width="8" x="62" y="84"></rect>
                <rect fill="currentColor" height="10" width="10" x="48" y="98"></rect>
                <rect fill="currentColor" height="8" width="8" x="68" y="98"></rect>
                <rect fill="currentColor" height="8" width="8" x="84" y="84"></rect>
                <rect fill="currentColor" height="8" width="8" x="98" y="84"></rect>
                <rect fill="currentColor" height="10" width="22" x="84" y="98"></rect>
                <rect fill="#7a1526" height="32" rx="4" width="32" x="44" y="44"></rect>
                <rect fill="#FFFFFF" height="24" width="4" x="58" y="48"></rect>
                <rect fill="#FFFFFF" height="4" width="20" x="50" y="55"></rect>
              </svg>
            @endif
          </div>

          <div class="mt-2 text-[11px] font-semibold text-primary">Scan menggunakan BCA Mobile, Livin, GoPay, OVO, atau ShopeePay</div>
        </div>
        <div class="mt-space-md text-label-sm font-label-sm text-on-surface-variant">Pindai saat Kolekte Misa atau untuk persembahan syukur keluarga</div>
      </div>

      <!-- Rekening -->
      <div class="lg:col-span-7 flex flex-col gap-space-md">
        <h2 class="font-headline-sm text-headline-sm text-primary">Rekening Resmi PGPM Paroki Karangpanas</h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Semua transaksi perbankan resmi paroki hanya atas nama yayasan pengelola gereja: <strong>PGPM Paroki Santo Athanasius Agung Karangpanas</strong>.</p>

        <div class="space-y-space-sm">
          @foreach ($rekening as $r)
          <div class="bg-surface-container p-space-md rounded-xl flex flex-col sm:flex-row items-start sm:items-center justify-between gap-space-sm">
            <div class="flex items-center gap-space-sm">
              <div class="w-12 h-12 rounded bg-surface-container-lowest font-bold text-primary flex items-center justify-center text-[11px] shadow-sm shrink-0">{{ $r[0] }}</div>
              <div class="flex flex-col">
                <span class="font-title-md text-title-md text-on-surface font-mono font-bold tracking-wider">{{ $r[1] }}</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant">{{ $r[3] }}</span>
              </div>
            </div>
            <button type="button" data-copy="{{ $r[2] }}" class="copy-btn inline-flex items-center gap-1 bg-surface-container-lowest hover:bg-surface-container-high text-primary font-label-sm text-label-sm px-space-md py-space-xs rounded shadow-sm transition-all shrink-0">
              <span class="material-symbols-outlined text-sm">content_copy</span>
              <span class="copy-label">Salin No. Rek</span>
            </button>
          </div>
          @endforeach
        </div>

        <div class="p-space-sm bg-surface-container-lowest rounded-lg flex items-center gap-space-sm text-label-sm font-label-sm text-on-surface">
          <span class="material-symbols-outlined text-secondary text-xl shrink-0">fact_check</span>
          <span>Laporan pertanggungjawaban penerimaan kolekte &amp; dana pastoral diumumkan secara berkala setiap bulan melalui <a class="font-bold underline text-primary hover:text-secondary" href="{{ url('/warta-paroki') }}">Warta Paroki</a> dan diaudit secara internal oleh Tim Keuangan Paroki (BGKP).</span>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.copy-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      const label = btn.querySelector('.copy-label');
      const old = label.textContent;
      const done = () => { label.textContent = 'Tersalin!'; setTimeout(() => label.textContent = old, 1500); };
      if (navigator.clipboard) {
        navigator.clipboard.writeText(btn.dataset.copy).then(done, () => { label.textContent = 'Gagal'; setTimeout(() => label.textContent = old, 1500); });
      }
    });
  });
});
</script>
@endpush