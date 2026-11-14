@extends('layouts.app')

@section('title', 'Jadwal Misa - Paroki Karangpanas Semarang')
@section('nav-active', 'jadwal-misa')

@section('content')

<!-- HERO -->
<section class="relative w-full bg-primary overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-primary via-tertiary to-primary-container opacity-95"></div>
  <div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-secondary/15 blur-3xl pointer-events-none"></div>
  <div class="absolute -left-20 bottom-0 w-80 h-80 rounded-full bg-tertiary-container/30 blur-2xl pointer-events-none"></div>

  <div class="relative max-w-[1240px] mx-auto px-gutter py-space-xl">
    <div class="max-w-3xl flex flex-col gap-space-md text-on-primary">
      <span class="inline-flex w-fit items-center gap-2 px-3 py-1 rounded-full bg-surface-container-lowest/10 backdrop-blur-md text-secondary-fixed font-label-sm text-label-sm tracking-widest uppercase">
        <span class="w-2 h-2 rounded-full bg-secondary-fixed animate-pulse"></span>
        Keuskupan Agung Semarang • Dekanat Semarang Timur
      </span>
      <h1 class="font-headline-lg text-2xl sm:text-headline-lg text-surface-container-lowest leading-tight">Jadwal Perayaan Ekaristi &amp; Ibadat Paroki</h1>
      <p class="font-body-lg text-sm sm:text-body-lg text-primary-fixed max-w-2xl">
        "Sebab di mana dua atau tiga orang berkumpul dalam Nama-Ku, di situ Aku ada di tengah-tengah mereka."
        <span class="block mt-1 font-label-sm text-label-sm text-secondary-fixed font-semibold">— Injil Matius 18:20</span>
      </p>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-space-sm pt-space-xs">
        <div class="bg-surface-container-lowest/10 backdrop-blur-md p-space-sm rounded-xl">
          <p class="font-label-sm text-label-sm text-secondary-fixed">Warna Liturgi</p>
          <p class="font-title-md text-title-md text-surface-container-lowest flex items-center gap-1.5 mt-0.5"><span class="w-2.5 h-2.5 rounded-full bg-emerald-500 border border-white/40"></span> Hijau</p>
        </div>
        <div class="bg-surface-container-lowest/10 backdrop-blur-md p-space-sm rounded-xl">
          <p class="font-label-sm text-label-sm text-secondary-fixed">Gereja Paroki</p>
          <p class="font-title-md text-title-md text-surface-container-lowest mt-0.5">Karangpanas</p>
        </div>
        <div class="bg-surface-container-lowest/10 backdrop-blur-md p-space-sm rounded-xl">
          <p class="font-label-sm text-label-sm text-secondary-fixed">Pengakuan Dosa</p>
          <p class="font-title-md text-title-md text-surface-container-lowest mt-0.5">Sabtu 16.30</p>
        </div>
        <div class="bg-surface-container-lowest/10 backdrop-blur-md p-space-sm rounded-xl">
          <p class="font-label-sm text-label-sm text-secondary-fixed">Kehadiran</p>
          <p class="font-title-md text-title-md text-surface-container-lowest mt-0.5">15 Menit Pra-Misa</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="max-w-[1240px] mx-auto px-gutter py-space-xl space-y-16">

  <!-- JADWAL + FILTER -->
  <section class="space-y-6">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-4 border-b border-outline-variant">
      <div>
        <h2 class="font-headline-md text-headline-md text-primary flex items-center gap-2">
          <span class="material-symbols-outlined text-secondary text-2xl">calendar_month</span>
          Jadwal Misa &amp; Perayaan Sakramen
        </h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Pilih kategori untuk melihat jam dan lokasi ibadat.</p>
      </div>
      <div class="flex flex-wrap gap-2" id="misa-filter" role="tablist">
        <button data-filter="all" class="misa-tab px-4 py-2 font-label-md text-label-md rounded-lg border transition-all bg-primary text-on-primary border-primary">Semua Misa</button>
        <button data-filter="mingguan" class="misa-tab px-4 py-2 font-label-md text-label-md rounded-lg border transition-all bg-surface-container-lowest text-on-surface border-outline-variant hover:border-secondary hover:text-primary">Misa Mingguan</button>
        <button data-filter="harian" class="misa-tab px-4 py-2 font-label-md text-label-md rounded-lg border transition-all bg-surface-container-lowest text-on-surface border-outline-variant hover:border-secondary hover:text-primary">Misa Harian</button>
        <button data-filter="khusus" class="misa-tab px-4 py-2 font-label-md text-label-md rounded-lg border transition-all bg-surface-container-lowest text-on-surface border-outline-variant hover:border-secondary hover:text-primary">Jumat Pertama</button>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="misa-grid">

      <div data-cat="harian" class="misa-card bg-surface-container-lowest rounded-xl p-6 shadow-sm hover:shadow-md transition-all relative overflow-hidden">
        <div class="w-1.5 h-full bg-secondary absolute top-0 left-0"></div>
        <div class="pl-2">
          <div class="flex items-center justify-between mb-3">
            <span class="font-label-sm text-label-sm px-2.5 py-1 rounded bg-surface-container text-primary font-semibold">SENIN – SABTU</span>
            <span class="material-symbols-outlined text-outline">wb_twilight</span>
          </div>
          <h3 class="font-headline-sm text-headline-sm text-primary">Misa Harian</h3>
          <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Perayaan Ekaristi pembuka hari bagi umat beriman.</p>
          <div class="mt-5 pt-4 border-t border-outline-variant/50 space-y-2 font-body-sm text-body-sm">
            <div class="flex justify-between"><span class="text-on-surface-variant">Waktu</span><span class="text-primary font-bold">05.30 WIB</span></div>
            <div class="flex justify-between"><span class="text-on-surface-variant">Tempat</span><span class="font-semibold">Gereja Utama</span></div>
          </div>
        </div>
      </div>

      <div data-cat="khusus" class="misa-card bg-gradient-to-br from-surface-container-lowest to-surface-container-low rounded-xl p-6 shadow-sm hover:shadow-md transition-all relative overflow-hidden">
        <div class="w-1.5 h-full bg-primary absolute top-0 left-0"></div>
        <div class="pl-2">
          <div class="flex items-center justify-between mb-3">
            <span class="font-label-sm text-label-sm px-2.5 py-1 rounded bg-secondary-fixed/50 text-secondary font-semibold">JUMAT PERTAMA</span>
            <span class="material-symbols-outlined text-secondary">favorite</span>
          </div>
          <h3 class="font-headline-sm text-headline-sm text-primary">Misa Jumat Pertama</h3>
          <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Penghormatan Hati Kudus Yesus disertai Adorasi Sakramen Mahakudus.</p>
          <div class="mt-5 pt-4 border-t border-outline-variant/50 space-y-2 font-body-sm text-body-sm">
            <div class="flex justify-between"><span class="text-on-surface-variant">Sesi Pagi</span><span class="text-primary font-bold">05.30 WIB</span></div>
            <div class="flex justify-between"><span class="text-on-surface-variant">Sesi Sore</span><span class="text-primary font-bold">18.00 WIB</span></div>
            <div class="flex justify-between"><span class="text-on-surface-variant">Keterangan</span><span class="text-secondary font-semibold">Adorasi &amp; Berkat</span></div>
          </div>
        </div>
      </div>

      <div data-cat="mingguan" class="misa-card bg-surface-container-lowest rounded-xl p-6 shadow-sm hover:shadow-md transition-all relative overflow-hidden">
        <div class="w-1.5 h-full bg-secondary absolute top-0 left-0"></div>
        <div class="pl-2">
          <div class="flex items-center justify-between mb-3">
            <span class="font-label-sm text-label-sm px-2.5 py-1 rounded bg-surface-container text-primary font-semibold">SABTU SORE</span>
            <span class="material-symbols-outlined text-outline">nights_stay</span>
          </div>
          <h3 class="font-headline-sm text-headline-sm text-primary">Misa Antisipasi Minggu</h3>
          <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Misa Mingguan I, perayaan hari Minggu yang dirayakan pada Sabtu sore.</p>
          <div class="mt-5 pt-4 border-t border-outline-variant/50 space-y-2 font-body-sm text-body-sm">
            <div class="flex justify-between"><span class="text-on-surface-variant">Waktu</span><span class="text-primary font-bold">17.30 WIB</span></div>
            <div class="flex justify-between"><span class="text-on-surface-variant">Tempat</span><span class="font-semibold">Gereja Utama</span></div>
            <div class="flex justify-between"><span class="text-on-surface-variant">Pengakuan Dosa</span><span class="text-primary font-semibold">16.30 WIB</span></div>
          </div>
        </div>
      </div>

      <div data-cat="mingguan" class="misa-card bg-surface-container-lowest rounded-xl p-6 shadow-sm hover:shadow-md transition-all relative overflow-hidden">
        <div class="w-1.5 h-full bg-secondary absolute top-0 left-0"></div>
        <div class="pl-2">
          <div class="flex items-center justify-between mb-3">
            <span class="font-label-sm text-label-sm px-2.5 py-1 rounded bg-surface-container text-primary font-semibold">MINGGU PAGI I</span>
            <span class="material-symbols-outlined text-outline">wb_sunny</span>
          </div>
          <h3 class="font-headline-sm text-headline-sm text-primary">Misa Minggu Pagi I</h3>
          <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Ekaristi pagi untuk umat umum.</p>
          <div class="mt-5 pt-4 border-t border-outline-variant/50 space-y-2 font-body-sm text-body-sm">
            <div class="flex justify-between"><span class="text-on-surface-variant">Pukul</span><span class="text-primary font-bold">06.00 WIB</span></div>
            <div class="flex justify-between"><span class="text-on-surface-variant">Peruntukan</span><span class="font-semibold">Umum</span></div>
          </div>
        </div>
      </div>

      <div data-cat="mingguan" class="misa-card bg-surface-container-lowest rounded-xl border-2 border-secondary/60 p-6 shadow-sm hover:shadow-md transition-all relative overflow-hidden">
        <div class="w-1.5 h-full bg-secondary absolute top-0 left-0"></div>
        <div class="pl-2">
          <div class="flex items-center justify-between mb-3">
            <span class="font-label-sm text-label-sm px-2.5 py-1 rounded bg-secondary-fixed text-on-secondary-fixed-variant font-bold">MINGGU PAGI II</span>
            <span class="material-symbols-outlined text-secondary">groups</span>
          </div>
          <h3 class="font-headline-sm text-headline-sm text-primary">Misa Keluarga &amp; Anak</h3>
          <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Ekaristi bersama keluarga, anak-anak, dan PIA/PIR.</p>
          <div class="mt-5 pt-4 border-t border-outline-variant/50 space-y-2 font-body-sm text-body-sm">
            <div class="flex justify-between"><span class="text-on-surface-variant">Pukul</span><span class="text-primary font-bold">08.00 WIB</span></div>
            <div class="flex justify-between"><span class="text-on-surface-variant">Peruntukan</span><span class="text-secondary font-semibold">Anak &amp; PIA/PIR</span></div>
          </div>
        </div>
      </div>

      <div data-cat="mingguan" class="misa-card bg-surface-container-lowest rounded-xl p-6 shadow-sm hover:shadow-md transition-all relative overflow-hidden">
        <div class="w-1.5 h-full bg-secondary absolute top-0 left-0"></div>
        <div class="pl-2">
          <div class="flex items-center justify-between mb-3">
            <span class="font-label-sm text-label-sm px-2.5 py-1 rounded bg-surface-container text-primary font-semibold">MINGGU SORE</span>
            <span class="material-symbols-outlined text-outline">music_note</span>
          </div>
          <h3 class="font-headline-sm text-headline-sm text-primary">Misa OMK &amp; Kaum Muda</h3>
          <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Ekaristi sore yang dilayani Orang Muda Katolik.</p>
          <div class="mt-5 pt-4 border-t border-outline-variant/50 space-y-2 font-body-sm text-body-sm">
            <div class="flex justify-between"><span class="text-on-surface-variant">Pukul</span><span class="text-primary font-bold">17.30 WIB</span></div>
            <div class="flex justify-between"><span class="text-on-surface-variant">Peruntukan</span><span class="text-primary font-semibold">OMK &amp; Kaum Muda</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PETUGAS LITURGI + PENGAKUAN DOSA -->
  <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
    <div class="lg:col-span-7 bg-surface-container-lowest rounded-xl p-6 lg:p-8 shadow-sm">
      <div class="flex items-center justify-between mb-6 pb-4 border-b border-outline-variant">
        <div>
          <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Pelayanan Altar &amp; Perayaan</span>
          <h3 class="font-headline-sm text-headline-sm text-primary">Petugas Liturgi Pekan Ini</h3>
        </div>
      </div>
      <div class="space-y-4">
        @php
          $petugas = [
            ['Misa Sabtu Sore (17.30 WIB)', 'Wilayah Santo Petrus', 'Lingk. St. Maria Magdalena', 'Sdr. Vincent & Sdri. Maria', 'Ibu Elisabeth W.', 'Wilayah Petrus'],
            ['Misa Minggu Pagi I (06.00 WIB)', 'Wilayah Santo Yakobus', 'PS Cecilia Karangpanas', 'Bpk. Stefanus & Ibu Anna', 'Bpk. Aloysius K.', 'Lingk. St. Mikael'],
            ['Misa Minggu Pagi II (08.00 WIB)', 'Anak & PIA/PIR', 'Anak Bina Iman Katolik', 'Remaja OMK & BIAK', 'Tim Santo Tarsisius', 'Paguyuban Ibu Paroki'],
            ['Misa Minggu Sore (17.30 WIB)', 'OMK & Kaum Muda', 'Cantate Domino OMK', 'Sdr. Kevin & Sdri. Agnes', 'Sdri. Gracia P.', 'OMK Rayon Karangpanas'],
          ];
        @endphp
        @foreach ($petugas as $p)
        <div class="p-4 rounded-lg bg-surface-container-low hover:bg-surface-container-high transition-colors">
          <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
            <span class="font-title-md text-title-md text-primary font-bold">{{ $p[0] }}</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant">{{ $p[1] }}</span>
          </div>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 font-body-sm text-body-sm">
            <div><span class="text-outline block text-label-sm">Koor</span>{{ $p[2] }}</div>
            <div><span class="text-outline block text-label-sm">Lektor</span>{{ $p[3] }}</div>
            <div><span class="text-outline block text-label-sm">Pemazmur / Misdinar</span>{{ $p[4] }}</div>
            <div><span class="text-outline block text-label-sm">Tata Tertib</span>{{ $p[5] }}</div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <div class="lg:col-span-5 bg-gradient-to-br from-surface-container-lowest to-surface-container rounded-xl p-6 lg:p-8 shadow-sm space-y-6">
      <div class="flex items-center gap-3">
        <div class="w-12 h-12 rounded-lg bg-tertiary-container flex items-center justify-center shrink-0">
          <span class="material-symbols-outlined text-2xl text-secondary-fixed">lock_open</span>
        </div>
        <div>
          <span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider">Sakramen Penyembuhan</span>
          <h3 class="font-headline-sm text-headline-sm text-primary">Jadwal Pengakuan Dosa</h3>
        </div>
      </div>
      <p class="font-body-md text-body-md text-on-surface-variant">Setiap pekan gereja membuka pintu kerahiman Allah bagi umat yang hendak menerima Sakramen Tobat.</p>
      <div class="bg-surface-container-lowest p-5 rounded-lg space-y-3">
        <div class="flex items-start gap-3">
          <span class="material-symbols-outlined text-primary mt-0.5">event_available</span>
          <div>
            <p class="font-title-md text-title-md text-primary font-bold">Rutin Setiap Sabtu</p>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Pukul 16.30 WIB, sebelum Misa Sabtu Sore dimulai.</p>
          </div>
        </div>
        <div class="border-t border-outline-variant/60 pt-3 flex items-start gap-3">
          <span class="material-symbols-outlined text-primary mt-0.5">hourglass_top</span>
          <div>
            <p class="font-title-md text-title-md text-primary font-bold">Masa Prapaskah &amp; Adven</p>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Ibadat Tobat bersama dilayani para romo se-Dekanat Semarang Timur.</p>
          </div>
        </div>
      </div>
      <a class="inline-flex items-center gap-2 font-label-md text-label-md text-primary hover:text-secondary underline decoration-secondary transition-colors" href="#kontak">
        Butuh pelayanan minyak suci atau pengakuan pribadi? Hubungi Romo Paroki
        <span class="material-symbols-outlined text-sm">arrow_forward</span>
      </a>
    </div>
  </section>

  <!-- INTENSI MISA -->
  <section id="intensi" class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-xl">
    <div class="grid grid-cols-1 lg:grid-cols-12">
      <div class="lg:col-span-5 bg-gradient-to-br from-primary-container to-primary text-on-primary p-8 lg:p-10 space-y-4">
        <span class="inline-block px-3 py-1 rounded bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold uppercase">Pelayanan Liturgis Umat</span>
        <h3 class="font-headline-md text-headline-md text-surface-container-lowest">Pendaftaran Intensi Misa Kudus</h3>
        <p class="font-body-md text-body-md text-primary-fixed">Ekaristi dapat dipersembahkan untuk arwah orang beriman, ucapan syukur, maupun permohonan kesembuhan.</p>
        <div class="pt-4 border-t border-white/15 space-y-3 font-body-sm text-body-sm text-primary-fixed">
          <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary-fixed">schedule</span>Batas pendaftaran: maksimal 2 jam sebelum Misa.</div>
          <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary-fixed">receipt_long</span>Intensi dibacakan lektor dalam Doa Umat.</div>
        </div>
      </div>
      <div class="lg:col-span-7 p-8 lg:p-10 space-y-6 bg-surface-container-low">
        <h4 class="font-title-lg text-title-lg text-primary">Prosedur Pengajuan Intensi</h4>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
          <div class="p-4 rounded-lg bg-surface-container-lowest"><span class="text-secondary font-bold text-headline-sm block">1</span><p class="font-title-md text-title-md text-primary mt-1">Pilih Kategori</p><p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Syukur, arwah, atau permohonan khusus.</p></div>
          <div class="p-4 rounded-lg bg-surface-container-lowest"><span class="text-secondary font-bold text-headline-sm block">2</span><p class="font-title-md text-title-md text-primary mt-1">Data Lengkap</p><p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Nama pemohon, nama yang didoakan, tanggal &amp; jam Misa.</p></div>
          <div class="p-4 rounded-lg bg-surface-container-lowest"><span class="text-secondary font-bold text-headline-sm block">3</span><p class="font-title-md text-title-md text-primary mt-1">Stipendium</p><p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Disalurkan sukarela lewat transfer atau sekretariat.</p></div>
        </div>
        <div class="flex flex-col sm:flex-row gap-3">
          <a class="inline-flex items-center justify-center gap-2 bg-primary-container hover:bg-primary text-on-primary font-label-md text-label-md px-space-lg py-space-sm rounded-lg shadow-sm transition-all" href="https://wa.me/6281234567890" rel="noopener noreferrer" target="_blank">
            <span class="material-symbols-outlined text-[18px] text-secondary-fixed">chat</span> Daftar via WhatsApp Sekretariat
          </a>
          <a class="inline-flex items-center justify-center gap-2 bg-surface-container-lowest text-primary hover:bg-surface-container font-label-md text-label-md px-space-lg py-space-sm rounded-lg shadow-sm transition-all" href="{{ url('/#donasi') }}">
            <span class="material-symbols-outlined text-[18px] text-secondary">qr_code_scanner</span> Persembahan via QRIS
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- BUSANA + FAQ -->
  <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
    <div class="lg:col-span-5 bg-surface-container-lowest p-6 lg:p-8 rounded-xl shadow-sm space-y-5">
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center"><span class="material-symbols-outlined text-xl text-secondary-fixed">styler</span></div>
        <div>
          <span class="font-label-sm text-label-sm text-secondary font-bold uppercase">Sopan &amp; Pantas</span>
          <h3 class="font-headline-sm text-headline-sm text-primary">Tata Tertib Berbusana</h3>
        </div>
      </div>
      <div class="space-y-3 font-body-sm text-body-sm">
        <div class="flex items-start gap-3 p-3 bg-emerald-50 rounded-lg">
          <span class="material-symbols-outlined text-emerald-800 mt-0.5">check_circle</span>
          <div><strong class="text-emerald-900 block">Dianjurkan</strong><span class="text-emerald-950">Kemeja berkerah, batik, pakaian berlengan sopan, celana atau rok panjang, sepatu atau sandal rapi.</span></div>
        </div>
        <div class="flex items-start gap-3 p-3 bg-rose-50 rounded-lg">
          <span class="material-symbols-outlined text-rose-800 mt-0.5">cancel</span>
          <div><strong class="text-rose-900 block">Hindari</strong><span class="text-rose-950">Kaos tanpa kerah, celana pendek, sandal jepit, pakaian tanpa lengan atau tembus pandang.</span></div>
        </div>
        <div class="flex items-start gap-3 p-3 bg-surface-container rounded-lg">
          <span class="material-symbols-outlined text-secondary mt-0.5">smartphone</span>
          <div><strong class="text-primary block">Gawai</strong><span class="text-on-surface-variant">Matikan nada dering atau aktifkan mode hening sebelum masuk gereja.</span></div>
        </div>
      </div>
    </div>

    <div class="lg:col-span-7 bg-surface-container-lowest p-6 lg:p-8 rounded-xl shadow-sm space-y-3">
      <div class="mb-2">
        <span class="font-label-sm text-label-sm text-secondary font-bold uppercase">Pertanyaan Umum Umat</span>
        <h3 class="font-headline-sm text-headline-sm text-primary">Tanya Jawab Seputar Misa</h3>
      </div>
      @php
        $faq = [
          ['Apakah perlu reservasi untuk Misa Mingguan?', 'Tidak perlu. Seluruh Ekaristi terbuka bagi umat paroki maupun tamu tanpa sistem reservasi.'],
          ['Bagaimana akses bagi lansia dan disabilitas?', 'Tersedia jalur kursi roda (ramp) serta bangku prioritas untuk lansia dan difabel.'],
          ['Apakah ada siaran Misa langsung untuk umat yang sakit?', 'Siaran langsung disediakan lewat kanal YouTube Komsos Karangpanas. Cek Warta Paroki untuk jadwal terbaru.'],
          ['Kapan batas penyerahan intensi arwah?', 'Sebaiknya paling lambat H-1 ke sekretariat atau via WhatsApp, agar sempat dicetak di lembar Doa Umat.'],
        ];
      @endphp
      @foreach ($faq as $i => $f)
      <details class="group rounded-lg bg-surface-container-low p-4 [&_summary::-webkit-details-marker]:hidden" {{ $i === 0 ? 'open' : '' }}>
        <summary class="flex items-center justify-between gap-3 cursor-pointer font-title-md text-title-md text-primary font-bold">
          <span>{{ $f[0] }}</span>
          <span class="material-symbols-outlined transition-transform duration-300 group-open:rotate-180 text-secondary shrink-0">expand_more</span>
        </summary>
        <p class="font-body-sm text-body-sm text-on-surface-variant mt-3 pt-3 border-t border-outline-variant/60">{{ $f[1] }}</p>
      </details>
      @endforeach
    </div>
  </section>

  <!-- KONTAK -->
  <section id="kontak" class="rounded-2xl bg-gradient-to-r from-primary-container via-primary to-tertiary text-on-primary p-8 lg:p-10 flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl">
    <div class="space-y-2 text-center md:text-left">
      <h3 class="font-headline-md text-headline-md text-surface-container-lowest">Ada Pertanyaan Mengenai Sakramen &amp; Ibadat?</h3>
      <p class="font-body-md text-body-md text-primary-fixed max-w-xl">Jl. Dr. Wahidin No. 110, Karangpanas, Candisari, Semarang 50254. Kantor buka Senin–Jumat 08.00–15.30 dan Sabtu 08.00–13.00 WIB.</p>
    </div>
    <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
      <a class="inline-flex items-center justify-center gap-2 bg-secondary-container hover:bg-secondary-fixed text-on-secondary-container font-label-lg text-label-lg px-space-lg py-space-sm rounded-lg shadow-md transition-all" href="tel:0248312633">
        <span class="material-symbols-outlined text-[20px]">phone_in_talk</span> (024) 8312633
      </a>
      <a class="inline-flex items-center justify-center gap-2 bg-surface-container-lowest text-primary hover:bg-surface-container-low font-label-lg text-label-lg px-space-lg py-space-sm rounded-lg shadow-sm transition-all" href="mailto:sekretariat@karangpanas.org">
        <span class="material-symbols-outlined text-[20px]">mail</span> Kirim Surel
      </a>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
  const tabs = document.querySelectorAll('.misa-tab');
  const cards = document.querySelectorAll('.misa-card');
  const on  = ['bg-primary','text-on-primary','border-primary'];
  const off = ['bg-surface-container-lowest','text-on-surface','border-outline-variant','hover:border-secondary','hover:text-primary'];

  tabs.forEach(tab => tab.addEventListener('click', () => {
    const f = tab.dataset.filter;
    tabs.forEach(t => {
      const active = t === tab;
      on.forEach(c => t.classList.toggle(c, active));
      off.forEach(c => t.classList.toggle(c, !active));
    });
    cards.forEach(c => c.classList.toggle('hidden', f !== 'all' && c.dataset.cat !== f));
  }));
});
</script>
@endpush