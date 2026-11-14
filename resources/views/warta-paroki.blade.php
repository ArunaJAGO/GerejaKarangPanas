@extends('layouts.app')

@section('title', 'Warta Paroki - Paroki Karangpanas Semarang')
@section('nav-active', 'warta-terkini')

{{-- ============================================================
     DATA WARTA: edit bagian ini saja tiap terbit edisi baru.
     Semua isi di bawah masih CONTOH, ganti dengan data asli.
     ============================================================ --}}
@php
  $edisi = [
    'nomor'    => 42,
    'tanggal'  => '18 Mei 2025',
    'tajuk'    => 'Menjadi Saksi Pengharapan yang Tangguh di Tengah Keberagaman',
    'penulis'  => 'RD. E. Didik Chrestiyan H., Pr (Pastor Kepala Paroki)',
    'ringkas'  => 'Umat diajak merawat benih kerukunan di lingkungan masing-masing serta membangkitkan kesadaran ekologis lewat peringatan ensiklik Laudato Si’.',
    'pdf'      => '#',  // ganti dengan link PDF, mis. asset('warta/edisi-42.pdf')
    'cover'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCLVHNdczg_OXSzpkmPOpUqiAMOnt-XRLeWOvwBRKUukQQNlAIP5exV8odZqiAg27p5ZTUcwcFw1nx5VGtATociCpfc6uEwEPuHpDwpuFeiL2CLTkwjkdm4gx7YOdgjwxE6x2V7rubtyOxFDIx61FgV-Jr4JHqdORHzPzLsV7U54vmgiOeLyTSFrvH3GXapxkiP8tmd9OKu_rurDVjkUzK44I6_fG06tZ1bwkjsyY0',
  ];

  $arsip = [
    ['Edisi 41', '11 Mei 2025', 'Hari Minggu Panggilan Sedunia', '#'],
    ['Edisi 40', '4 Mei 2025',  'Pembukaan Bulan Maria', '#'],
    ['Edisi 39', '27 April 2025', 'Minggu Kerahiman Ilahi', '#'],
    ['Edisi 38', '20 April 2025', 'Hari Raya Paskah', '#'],
  ];

  $berita = [
    ['Sakramen', 'bg-primary', '12 Mei 2025', 'Kunjungan Kanonik & Penerimaan Sakramen Krisma 2025',
      '184 krismawan-krismawati dari 11 wilayah menerima Sakramen Krisma dari Bapak Uskup Keuskupan Agung Semarang.',
      'https://lh3.googleusercontent.com/aida-public/AB6AXuDOzqqNXEdfoK10JVXijBcyoPzpS-D4Gd7Kwi76ugj4ovUA2GVc0AbGFD_Ncj6An245xYOqS3s5Q1KaGs9f5mdYtCwX8k5eZecviMXOU0PV0-7qw6uHLrOXt4GBmZbaLUJl8NB4CxQIf5-oaWeI8iOMRPJucQSKCBhJroeYHRKh-pEYx8xbq4DhTFq8UQxk_MFDiT-zwS-TBR28cT2K01EAnt_pAKfXRBXLSiQNwWE'],
    ['Sosial', 'bg-secondary', '5 Mei 2025', 'Aksi Nyata APP: Pasar Murah Karangpanas Berbagi',
      'Dana Aksi Puasa Pembangunan diwujudkan dalam 850 paket sembako murah bagi warga pra-sejahtera di sekitar paroki.',
      'https://lh3.googleusercontent.com/aida-public/AB6AXuDfT5QgLc2rBAEE3bmsBZNBG_w-Qh8evzokEcziZityEgQoAQZohrJYdOhgBfVxs1y4KMgHa6K9aRhmB7PjtPMjYSi0IMWCCnaPxjEv_HIzqC0QxYMQaM6lGFOrl9gVOKuZX9C_qkwxaJ-CGCPBoCPW_rQR_UltbD02hALtlN52GdnEhCMlEXWvNGtcPkBQezmTffzFIvVwUWuaOva5hXKQWUzNO7kfqTBb1q-vTMs'],
    ['OMK', 'bg-tertiary-container', '29 April 2025', 'Retret OMK: Menjadi Garam dan Terang di Era Digital',
      '90 kaum muda lintas lingkungan berefleksi tentang panggilan kerasulan digital dan kepedulian sosial.',
      'https://lh3.googleusercontent.com/aida-public/AB6AXuA25dKeuGnVgEW_PfKk_hBmeIhLREL__bO0ZlPu2NZqexyatiV74lV6l0ctjN6eFsjDheX7WenoNFfuKZnWHibFeBeUG-I1rqFWkw5V16m04iUezTiqBGnCmUn_FW4JigTFYl-3i-dPmemqsWZSdyN8BslSAfc_wP-aOnkPM9WXgUv6GfKAS-KhPv14H9_KZAlknhkGl91zhgYfmjD2aN9PBztYBZiV7FMsKwoln6c'],
    ['Pembinaan Iman', 'bg-primary-container', '22 April 2025', 'Pembinaan Bina Iman Anak & Gladi Pelantikan Misdinar',
      'Rekoleksi dan pembekalan liturgis bagi calon pelayan altar baru St. Tarsisius.',
      'https://lh3.googleusercontent.com/aida-public/AB6AXuCQC3xtsLTZneiE9io-PKA_gn5Z781Ep82OnLWz56uQVf165sJX1tISnOSgpDUqy_mxECc_XPPfqMN41A6JKfCnu2mm4w--QuDcped_hZKzuQ3zUobDqNkwAvr2E8GWIYTxiIeBIKU26aU0O7N_uO05YxYOK8wOnrrJqOMfJp9XMObbd8IfB2m7N3xk5CmsCIVoAJkO6sAnfd6pE_5pW6vsv4vS4j4WFXJBc3mQb8Y'],
  ];

  $agenda = [
    ['MEI', '21', 'Pastoral Keluarga', 'Rekoleksi Pasutri (Ulang Tahun Perkawinan Mei)', '18.00 WIB', 'Gd. Serbaguna St. Maria'],
    ['MEI', '24', 'Seksi Liturgi & Musik', 'Latihan Koor Gabungan Hari Raya Tubuh & Darah Kristus', '19.30 WIB', 'Panti Paroki Karangpanas'],
    ['MEI', '28', 'Dewan Pastoral', 'Rapat Pleno DPP Inti Triwulan II', '19.00 WIB', 'Ruang Rapat St. Athanasius'],
  ];

  $media = [
    ['smart_display', 'bg-red-700', 'text-red-700', 'Live Streaming Misa', 'Paroki Karangpanas TV',
      'Siaran langsung Ekaristi mingguan serta rekaman homili Romo Paroki.', 'Buka Kanal YouTube', 'https://youtube.com'],
    ['photo_camera', 'bg-gradient-to-tr from-amber-600 via-pink-600 to-purple-600', 'text-pink-700', 'Warta Visual & Infografis', '@@parokikarangpanas',
      'Update cepat agenda liturgi, foto kegiatan OMK, dan pengumuman paroki.', 'Ikuti di Instagram', 'https://instagram.com'],
    ['podcasts', 'bg-emerald-700', 'text-emerald-800', 'Podcast Renungan', 'Renungan Embun Surgawi',
      'Refleksi harian bacaan Misa dari para romo dan katekis.', 'Dengarkan di Spotify', 'https://spotify.com'],
  ];
@endphp

@section('content')

<!-- HERO -->
<section class="relative w-full bg-primary overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-primary via-tertiary to-primary-container opacity-95"></div>
  <div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-secondary/15 blur-3xl pointer-events-none"></div>
  <div class="absolute -left-20 bottom-0 w-80 h-80 rounded-full bg-tertiary-container/30 blur-2xl pointer-events-none"></div>

  <div class="relative max-w-[1240px] mx-auto px-gutter py-space-xl">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 text-on-primary">
      <div class="max-w-3xl flex flex-col gap-space-md">
        <span class="inline-flex w-fit items-center gap-2 px-3 py-1 rounded-full bg-surface-container-lowest/10 backdrop-blur-md text-secondary-fixed font-label-sm text-label-sm tracking-widest uppercase">
          <span class="w-2 h-2 rounded-full bg-secondary-fixed animate-pulse"></span>
          Keuskupan Agung Semarang • Dekanat Semarang Timur
        </span>
        <h1 class="font-headline-lg text-2xl sm:text-headline-lg text-surface-container-lowest leading-tight">Warta Karangpanas &amp; Agenda Pastoral</h1>
        <p class="font-body-lg text-sm sm:text-body-lg text-primary-fixed max-w-2xl">Informasi terkini umat, warta mingguan, serta agenda pastoral Paroki Santo Athanasius Agung Karangpanas.</p>
      </div>
      <div class="bg-surface-container-lowest/10 backdrop-blur-md rounded-xl p-space-md flex gap-6 shrink-0">
        <div>
          <div class="font-label-sm text-label-sm text-secondary-fixed">Edisi Terbaru</div>
          <div class="font-title-lg text-title-lg text-surface-container-lowest">No. {{ $edisi['nomor'] }}</div>
          <div class="font-label-sm text-label-sm text-primary-fixed">{{ $edisi['tanggal'] }}</div>
        </div>
        <div class="w-px bg-white/20"></div>
        <div>
          <div class="font-label-sm text-label-sm text-secondary-fixed">Agenda Terdekat</div>
          <div class="font-title-lg text-title-lg text-surface-container-lowest">{{ count($agenda) }} Kegiatan</div>
          <div class="font-label-sm text-label-sm text-primary-fixed">Pekan Ini</div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="max-w-[1240px] mx-auto px-gutter py-space-xl space-y-16">

  <!-- WARTA MINGGUAN -->
  <section class="space-y-6" id="warta-terkini">
    <div class="flex items-center justify-between pb-3 border-b border-outline-variant">
      <h2 class="font-headline-md text-headline-md text-primary flex items-center gap-2.5">
        <span class="material-symbols-outlined text-secondary text-2xl">newspaper</span> Warta Paroki Mingguan
      </h2>
      <span class="font-label-sm text-label-sm text-on-surface-variant hidden sm:block">Terbit setiap akhir pekan</span>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
      <!-- Edisi terbaru -->
      <div class="lg:col-span-8 bg-surface-container-lowest rounded-xl shadow-xl overflow-hidden flex flex-col md:flex-row">
        <div class="md:w-5/12 bg-surface-container-low p-6 flex flex-col items-center justify-center">
          <img class="w-48 h-64 object-cover rounded-lg shadow-md" alt="Sampul Warta Karangpanas edisi {{ $edisi['nomor'] }}" src="{{ $edisi['cover'] }}"/>
          <p class="mt-4 font-label-sm text-label-sm text-on-surface-variant">Edisi {{ $edisi['nomor'] }}</p>
        </div>
        <div class="md:w-7/12 p-6 flex flex-col justify-between gap-4">
          <div class="space-y-3">
            <div class="flex items-center gap-2">
              <span class="px-2 py-0.5 rounded bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">Edisi Terbaru</span>
              <span class="font-label-sm text-label-sm text-on-surface-variant">{{ $edisi['tanggal'] }}</span>
            </div>
            <h3 class="font-headline-sm text-headline-sm text-primary">“{{ $edisi['tajuk'] }}”</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant italic">Tajuk Redaksi: {{ $edisi['penulis'] }}</p>
            <p class="font-body-sm text-body-sm text-on-surface">{{ $edisi['ringkas'] }}</p>
          </div>
          <a class="inline-flex w-fit items-center gap-2 bg-primary-container hover:bg-primary text-on-primary font-label-md text-label-md px-space-lg py-space-sm rounded-lg shadow-sm transition-all" href="{{ $edisi['pdf'] }}">
            <span class="material-symbols-outlined text-[18px] text-secondary-fixed">download</span> Unduh PDF Warta
          </a>
        </div>
      </div>

      <!-- Arsip -->
      <div class="lg:col-span-4 bg-surface-container-lowest rounded-xl p-6 shadow-sm flex flex-col">
        <div class="flex items-center justify-between pb-3 mb-4 border-b border-outline-variant/60">
          <h3 class="font-title-md text-title-md text-primary flex items-center gap-2"><span class="material-symbols-outlined text-secondary">folder_zip</span> Arsip Warta</h3>
          <span class="font-label-sm text-label-sm text-on-surface-variant">PDF</span>
        </div>
        <div class="space-y-2.5 flex-1">
          @foreach ($arsip as $a)
          <a href="{{ $a[3] }}" class="p-3 rounded-lg bg-surface-container-low hover:bg-surface-container-high transition-colors flex items-center justify-between gap-3">
            <div>
              <div class="font-label-md text-label-md text-primary">{{ $a[0] }} ({{ $a[1] }})</div>
              <div class="font-label-sm text-label-sm text-on-surface-variant">{{ $a[2] }}</div>
            </div>
            <span class="material-symbols-outlined text-primary">file_download</span>
          </a>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <!-- BERITA -->
  <section class="space-y-6" id="berita">
    <div class="flex items-center justify-between pb-3 border-b border-outline-variant">
      <h2 class="font-headline-md text-headline-md text-primary flex items-center gap-2.5">
        <span class="material-symbols-outlined text-secondary text-2xl">article</span> Berita &amp; Liputan Pastoral
      </h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      @foreach ($berita as $b)
      <article class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col">
        <div class="relative h-44 bg-surface-dim">
          <img class="w-full h-full object-cover" alt="{{ $b[3] }}" src="{{ $b[5] }}" loading="lazy"/>
          <span class="absolute top-3 left-3 {{ $b[1] }} text-on-primary px-2.5 py-0.5 rounded font-label-sm text-label-sm uppercase tracking-wider">{{ $b[0] }}</span>
        </div>
        <div class="p-4 space-y-2 flex-1 flex flex-col">
          <span class="font-label-sm text-label-sm text-on-surface-variant">{{ $b[2] }}</span>
          <h3 class="font-title-md text-title-md text-primary line-clamp-2">{{ $b[3] }}</h3>
          <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3 flex-1">{{ $b[4] }}</p>
          <a class="font-label-md text-label-md text-primary hover:text-secondary inline-flex items-center gap-1 pt-1" href="#">
            Baca selengkapnya <span class="material-symbols-outlined text-sm">chevron_right</span>
          </a>
        </div>
      </article>
      @endforeach
    </div>
  </section>

  <!-- KALENDER + AGENDA -->
  <section class="space-y-6" id="agenda">
    <div class="flex items-center justify-between pb-3 border-b border-outline-variant">
      <h2 class="font-headline-md text-headline-md text-primary flex items-center gap-2.5">
        <span class="material-symbols-outlined text-secondary text-2xl">event_note</span> Kalender &amp; Agenda Paroki
      </h2>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
      <!-- Kalender (otomatis mengikuti tanggal hari ini) -->
      <div class="lg:col-span-7 bg-surface-container-lowest rounded-xl p-6 shadow-sm">
        <div class="flex items-center justify-between mb-4">
          <h3 class="font-title-lg text-title-lg text-primary" id="cal-title">—</h3>
          <div class="flex items-center gap-1">
            <button id="cal-prev" type="button" class="p-1.5 rounded-lg bg-surface-container-low hover:bg-surface-container-high text-on-surface-variant" aria-label="Bulan sebelumnya"><span class="material-symbols-outlined text-base">chevron_left</span></button>
            <button id="cal-today" type="button" class="px-3 py-1.5 rounded-lg font-label-sm text-label-sm bg-surface-container-high text-primary font-semibold">Hari Ini</button>
            <button id="cal-next" type="button" class="p-1.5 rounded-lg bg-surface-container-low hover:bg-surface-container-high text-on-surface-variant" aria-label="Bulan berikutnya"><span class="material-symbols-outlined text-base">chevron_right</span></button>
          </div>
        </div>
        <div class="grid grid-cols-7 gap-1 text-center font-label-md text-label-md text-on-surface-variant pb-2 mb-2 border-b border-outline-variant/50">
          <span>Min</span><span>Sen</span><span>Sel</span><span>Rab</span><span>Kam</span><span>Jum</span><span>Sab</span>
        </div>
        <div class="grid grid-cols-7 gap-1 text-center font-body-sm text-body-sm" id="cal-grid"></div>
      </div>

      <!-- Agenda -->
      <div class="lg:col-span-5 bg-surface-container-lowest rounded-xl p-6 shadow-sm">
        <div class="flex items-center justify-between pb-3 mb-4 border-b border-outline-variant/60">
          <h3 class="font-title-lg text-title-lg text-primary">Agenda Terdekat</h3>
        </div>
        <div class="space-y-3">
          @foreach ($agenda as $e)
          <div class="p-3 rounded-lg bg-surface-container-low flex items-start gap-3">
            <div class="w-12 h-12 rounded-lg bg-primary-container text-on-primary flex flex-col items-center justify-center shrink-0">
              <span class="font-label-sm text-label-sm leading-none text-secondary-fixed">{{ $e[0] }}</span>
              <span class="font-title-lg text-title-lg leading-tight">{{ $e[1] }}</span>
            </div>
            <div class="space-y-0.5">
              <span class="font-label-sm text-label-sm text-secondary uppercase font-semibold">{{ $e[2] }}</span>
              <h4 class="font-title-md text-title-md text-primary">{{ $e[3] }}</h4>
              <p class="font-body-sm text-body-sm text-on-surface-variant">{{ $e[4] }} • {{ $e[5] }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <!-- MEDIA -->
  <section class="bg-surface-container-lowest rounded-xl shadow-xl overflow-hidden">
    <div class="p-space-xl bg-gradient-to-r from-primary-container via-primary to-tertiary text-on-primary">
      <span class="inline-flex items-center gap-1 bg-secondary-container text-on-secondary-container px-2 py-0.5 rounded font-label-sm text-label-sm font-semibold uppercase">
        <span class="material-symbols-outlined text-[14px]">rss_feed</span> Komunikasi Sosial
      </span>
      <h2 class="font-headline-lg text-headline-lg text-surface-container-lowest mt-space-xs">Saluran Media &amp; Siaran Rohani</h2>
      <p class="font-body-lg text-body-lg text-primary-fixed mt-space-xs max-w-3xl">Tetap terhubung dalam doa dan warta lewat kanal resmi Paroki Santo Athanasius Agung Karangpanas.</p>
    </div>
    <div class="p-space-xl bg-surface-container-low grid grid-cols-1 md:grid-cols-3 gap-6">
      @foreach ($media as $m)
      <a href="{{ $m[7] }}" target="_blank" rel="noopener" class="group p-6 rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between gap-6">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-lg {{ $m[1] }} text-white flex items-center justify-center shadow-sm"><span class="material-symbols-outlined text-2xl">{{ $m[0] }}</span></div>
          <div>
            <span class="font-label-sm text-label-sm {{ $m[2] }} font-semibold">{{ $m[3] }}</span>
            <h3 class="font-title-lg text-title-lg text-primary">{{ $m[4] }}</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">{{ $m[5] }}</p>
          </div>
        </div>
        <div class="flex items-center justify-between font-label-md text-label-md text-primary group-hover:text-secondary">
          <span>{{ $m[6] }}</span><span class="material-symbols-outlined text-sm">open_in_new</span>
        </div>
      </a>
      @endforeach
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
  const bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
  const grid = document.getElementById('cal-grid');
  const title = document.getElementById('cal-title');
  let view = new Date(); view.setDate(1);

  function render() {
    const y = view.getFullYear(), m = view.getMonth();
    const first = new Date(y, m, 1).getDay();
    const days = new Date(y, m + 1, 0).getDate();
    const today = new Date();
    title.textContent = bulan[m] + ' ' + y;
    let html = '';
    for (let i = 0; i < first; i++) html += '<span class="py-2.5"></span>';
    for (let d = 1; d <= days; d++) {
      const isToday = d === today.getDate() && m === today.getMonth() && y === today.getFullYear();
      html += isToday
        ? '<span class="py-2.5 rounded-lg bg-primary text-on-primary font-bold shadow-sm">' + d + '</span>'
        : '<span class="py-2.5 rounded-lg font-medium hover:bg-surface-container-low">' + d + '</span>';
    }
    grid.innerHTML = html;
  }

  document.getElementById('cal-prev').addEventListener('click', () => { view.setMonth(view.getMonth() - 1); render(); });
  document.getElementById('cal-next').addEventListener('click', () => { view.setMonth(view.getMonth() + 1); render(); });
  document.getElementById('cal-today').addEventListener('click', () => { view = new Date(); view.setDate(1); render(); });
  render();
});
</script>
@endpush