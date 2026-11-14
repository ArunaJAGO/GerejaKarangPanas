@extends('layouts.app')

@section('title', 'Beranda - Gereja Santo Athanasius Agung Karangpanas')
@section('nav-active', 'beranda')

@section('content')
<div class="flex flex-col w-full">

<!-- Hero Section -->
<section class="relative w-full bg-primary overflow-hidden" id="beranda">
<div class="absolute inset-0 bg-gradient-to-br from-primary via-tertiary to-primary-container opacity-95"></div>
<div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-secondary/15 blur-3xl pointer-events-none"></div>
<div class="absolute -left-20 bottom-0 w-80 h-80 rounded-full bg-tertiary-container/30 blur-2xl pointer-events-none"></div>
<div class="absolute inset-0 opacity-20 mix-blend-luminosity bg-cover bg-center" data-alt="Interior Gereja Santo Athanasius Agung Karangpanas Semarang" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBEOtgi_mSNghfVvgzRnRwnqL8up1iraKsj57KM73aIqXKFZEYcE5IYZ-_zYRUkr_opYq6z1fpdieV7_rSZAFaDnIimOH7eAsNH3ZfBNRGIgB5CllGx1w4rYLjB9r3fV4FE2PiZe0nqb2GMIxqP3vFlKu9okwpaxiyqwEzOR9kjYYGWKPeVZ6Q7IEc2zZFTmWRnxNqDjCtwlyG8A6gzzsoGqexftbB2nZZ7NVmv9pRL')"></div>
<div class="relative max-w-[1240px] mx-auto px-gutter py-space-xl">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">

<div class="lg:col-span-7 flex flex-col gap-space-md text-on-primary">
<div class="flex items-center gap-space-md">
<div class="w-16 h-16 shrink-0 rounded-full p-1 bg-surface-container-lowest/10 backdrop-blur-md shadow-md flex items-center justify-center overflow-hidden">
<img alt="Lambang Paroki Santo Athanasius Agung Karangpanas" class="w-full h-full object-contain rounded-full" src="{{ asset('logogereja.png') }}" onerror="this.onerror=null; this.src='/logogereja.png';"/>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm tracking-widest uppercase text-secondary-fixed">Keuskupan Agung Semarang • Dekanat Semarang Timur</span>
<span class="font-title-md text-title-md text-surface-container-lowest">Paroki Karangpanas</span>
</div>
</div>
<h1 class="font-headline-lg text-2xl sm:text-headline-lg text-surface-container-lowest leading-tight">Gereja Katolik Santo Athanasius Agung Karangpanas</h1>
<p class="font-body-lg text-sm sm:text-body-lg text-primary-fixed leading-relaxed max-w-2xl">Menjadi Paguyuban Murid-Murid Kristus yang Guyub, Beriman Tangguh, dan Terbuka Bagi Semua demi Terwujudnya Peradaban Kasih.</p>

<div class="flex flex-wrap items-center gap-space-md pt-space-xs">
<a class="inline-flex items-center gap-space-xs bg-secondary-container hover:bg-secondary-fixed text-on-secondary-container font-label-lg text-label-lg px-space-lg py-space-sm rounded-lg shadow-md transition-all" href="{{ url('/jadwal-misa') }}">
<span class="material-symbols-outlined text-[20px]">calendar_today</span>
<span>Jadwal Misa Lengkap</span>
</a>
<a class="inline-flex items-center gap-space-xs bg-surface-container-lowest text-primary hover:bg-surface-container-low font-label-lg text-label-lg px-space-lg py-space-sm rounded-lg shadow-sm transition-all" href="{{ url('/warta-paroki') }}">
<span class="material-symbols-outlined text-[20px]">article</span>
<span>Unduh Warta Paroki PDF</span>
</a>
<a class="inline-flex items-center gap-space-xs text-surface-container-lowest hover:text-secondary-fixed font-label-lg text-label-lg px-space-md py-space-sm transition-colors" href="{{ url('/pelayanan-sakramen') }}">
<span class="material-symbols-outlined text-[20px]">volunteer_activism</span>
<span>Pelayanan Sakramen</span>
</a>
</div>

<div class="mt-space-sm bg-surface-container-lowest/10 backdrop-blur-md rounded-xl p-space-md text-surface-container-lowest max-w-2xl shadow-sm">
<div class="flex items-start gap-space-sm">
<span class="material-symbols-outlined text-secondary-fixed text-2xl shrink-0">format_quote</span>
<div class="flex flex-col">
<p class="font-title-md text-title-md italic font-light text-surface-container-lowest leading-snug">"Marilah kepada-Ku, semua yang letih lesu dan berbeban berat, Aku akan memberi kelegaan kepadamu."</p>
<span class="font-label-sm text-label-sm text-secondary-fixed mt-1 font-semibold tracking-wide">— Injil Matius 11:28 (Ayat Harian Umat)</span>
</div>
</div>
</div>
</div>

<!-- Kartu Jadwal Misa Ringkas -->
<div class="lg:col-span-5 w-full" id="jadwal-misa">
<div class="bg-surface-container-lowest text-on-surface rounded-xl shadow-xl overflow-hidden">
<div class="bg-gradient-to-r from-primary-container to-primary px-space-lg py-space-md text-on-primary flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-secondary-fixed text-2xl">church</span>
<div class="flex flex-col">
<h2 class="font-headline-sm text-headline-sm leading-tight text-surface-container-lowest">Jadwal Perayaan Ekaristi</h2>
<span class="font-label-sm text-label-sm text-secondary-fixed">Gereja Utama Santo Athanasius Agung</span>
</div>
</div>
<span class="inline-flex items-center gap-1 bg-surface-container-lowest/15 px-2 py-1 rounded text-label-sm font-label-sm">
<span class="w-2 h-2 rounded-full bg-secondary-fixed animate-ping"></span> Live &amp; Tatap Muka
</span>
</div>

<div class="p-space-md space-y-space-sm bg-surface">
<div class="bg-surface-container-lowest p-space-sm rounded-lg shadow-sm flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-lg bg-surface-container-high text-primary flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-xl">wb_twilight</span></div>
<div class="flex flex-col"><span class="font-title-md text-title-md text-primary">Misa Harian</span><span class="font-body-sm text-body-sm text-on-surface-variant">Senin s/d Sabtu (Gereja Utama)</span></div>
</div>
<div class="text-right"><span class="font-title-lg text-title-lg text-on-surface font-bold">05.30</span><span class="block font-label-sm text-label-sm text-on-surface-variant">WIB</span></div>
</div>

<div class="bg-surface-container-lowest p-space-sm rounded-lg shadow-sm flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-xl">favorite</span></div>
<div class="flex flex-col"><span class="font-title-md text-title-md text-primary">Jumat Pertama</span><span class="font-body-sm text-body-sm text-on-surface-variant">Adorasi Sakramen Mahakudus</span></div>
</div>
<div class="text-right"><span class="font-title-md text-title-md text-on-surface font-semibold">05.30 • 18.00</span><span class="block font-label-sm text-label-sm text-on-surface-variant">WIB</span></div>
</div>

<div class="bg-surface-container-lowest p-space-sm rounded-lg shadow-sm flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-lg bg-secondary-container/40 text-on-secondary-container flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-xl">nights_stay</span></div>
<div class="flex flex-col"><span class="font-title-md text-title-md text-primary">Misa Sabtu Sore</span><span class="font-body-sm text-body-sm text-on-surface-variant">Misa Mingguan I (Antisipasi)</span></div>
</div>
<div class="text-right"><span class="font-title-lg text-title-lg text-on-surface font-bold">17.30</span><span class="block font-label-sm text-label-sm text-on-surface-variant">WIB</span></div>
</div>

<div class="bg-surface-container-low p-space-md rounded-lg shadow-sm flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-primary text-xl">sunny</span><span class="font-title-md text-title-md text-primary font-bold">Misa Hari Minggu</span></div>
<span class="font-label-sm text-label-sm text-secondary bg-surface-container-lowest px-2 py-0.5 rounded font-semibold">3 Perayaan</span>
</div>
<div class="grid grid-cols-3 gap-2 mt-1 pt-1">
<div class="bg-surface-container-lowest p-2 rounded text-center"><span class="block font-label-sm text-label-sm text-on-surface-variant">Pagi I</span><span class="font-title-md text-title-md text-on-surface font-bold">06.00</span><span class="block text-[11px] text-on-surface-variant">Umum</span></div>
<div class="bg-surface-container-lowest p-2 rounded text-center"><span class="block font-label-sm text-label-sm text-on-surface-variant">Pagi II</span><span class="font-title-md text-title-md text-on-surface font-bold">08.00</span><span class="block text-[11px] text-secondary font-semibold">Anak &amp; PIA/PIR</span></div>
<div class="bg-surface-container-lowest p-2 rounded text-center"><span class="block font-label-sm text-label-sm text-on-surface-variant">Sore</span><span class="font-title-md text-title-md text-on-surface font-bold">17.30</span><span class="block text-[11px] text-primary font-semibold">OMK &amp; Kaum Muda</span></div>
</div>
</div>

<div class="p-space-sm bg-surface-container-lowest rounded-lg flex items-center justify-between text-body-sm font-body-sm">
<div class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-lg">spa</span><span>Pengakuan Dosa: <strong>Sabtu 16.30 WIB</strong></span></div>
<a class="font-label-sm text-label-sm text-primary hover:underline font-semibold" href="{{ url('/jadwal-misa') }}">Cek Detail →</a>
</div>
</div>

<div class="p-space-sm bg-surface-container text-center">
<span class="font-label-sm text-label-sm text-on-surface-variant">Petugas Liturgi Pekan Ini: <strong>Wilayah Yohanes Rasul</strong> • Koor: <strong>Cecilia Choir</strong></span>
</div>
</div>
</div>

</div>
</div>
</section>

<!-- HERO SECTION: Profil Paroki -->
<section class="relative bg-primary-container text-on-primary overflow-hidden border-b-2 border-secondary-fixed scroll-mt-20" id="profil">
  <div class="absolute inset-0 opacity-15 bg-[radial-gradient(#ffe088_1px,transparent_1px)] [background-size:24px_24px]"></div>
  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-24 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
      <div class="lg:col-span-8 space-y-5">
        <div class="inline-flex items-center space-x-2 px-3 py-1 rounded bg-white/10 border border-secondary-fixed/40 backdrop-blur-sm text-secondary-fixed text-label-sm font-label-sm">
          <span class="material-symbols-outlined text-[16px]">auto_stories</span>
          <span>Jejak Langkah Iman Sejak 1968</span>
        </div>
        <h2 class="text-display-lg-mobile lg:text-display-lg font-display-lg tracking-tight text-white leading-tight">
          Profil Paroki Santo Athanasius Agung Karangpanas
        </h2>
        <p class="text-body-lg font-body-lg text-primary-fixed max-w-3xl leading-relaxed">
          Berdiri anggun di perbukitan Semarang Selatan, Paroki Karangpanas menjadi oase rohani, perjumpaan kasih Allah, dan wadah paguyuban murid-murid Kristus yang mandiri, misioner, serta berbuah bagi sesama dan masyarakat luas.
        </p>
        <div class="pt-2 flex flex-wrap gap-4 text-label-md font-label-md">
          <a class="inline-flex items-center space-x-2 px-5 py-2.5 bg-secondary-fixed text-primary rounded-lg font-semibold shadow hover:bg-secondary-fixed-dim transition-all" href="#sejarah">
            <span class="material-symbols-outlined text-[18px]">history_edu</span>
            <span>Telusuri Sejarah</span>
          </a>
          <a class="inline-flex items-center space-x-2 px-5 py-2.5 bg-primary/40 border border-secondary-fixed/50 text-white rounded-lg hover:bg-primary/70 transition-all" href="#pastor">
            <span class="material-symbols-outlined text-[18px]">supervisor_account</span>
            <span>Gembala &amp; Dewan Paroki</span>
          </a>
        </div>
      </div>
      <!-- Metric Badges Box -->
      <div class="lg:col-span-4 bg-primary/60 border border-secondary-fixed/30 rounded-xl p-6 backdrop-blur-sm shadow-xl space-y-4">
        <div class="flex items-center space-x-3 pb-3 border-b border-white/10">
          <div class="p-2.5 bg-secondary-fixed/20 text-secondary-fixed rounded-lg">
            <span class="material-symbols-outlined text-2xl">account_balance</span>
          </div>
          <div>
            <div class="text-label-sm text-primary-fixed uppercase tracking-wider">Pelindung Gereja</div>
            <div class="text-title-lg font-title-lg text-white">St. Athanasius Agung</div>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-4 pt-1">
          <div class="p-3 bg-white/5 rounded-lg border border-white/10">
            <span class="text-headline-md font-headline-md text-secondary-fixed block">14</span>
            <span class="text-label-sm font-label-sm text-primary-fixed">Wilayah Pastoral</span>
          </div>
          <div class="p-3 bg-white/5 rounded-lg border border-white/10">
            <span class="text-headline-md font-headline-md text-secondary-fixed block">58</span>
            <span class="text-label-sm font-label-sm text-primary-fixed">Lingkungan Umat</span>
          </div>
        </div>
        <div class="p-3 bg-white/5 rounded-lg border border-white/10">
          <span class="text-label-sm font-label-sm text-primary-fixed block">Pesta Nama Pelindung:</span>
          <span class="text-title-md font-title-md text-white">2 Mei (Uskup &amp; Pujangga Gereja)</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAIN CANVAS PROFIL -->
<div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 space-y-24">
  <!-- SEKSI 1: SEJARAH & VISI MISI (Bento Layout) -->
  <section class="space-y-8 scroll-mt-24" id="sejarah">
    <div class="text-center max-w-2xl mx-auto space-y-2">
      <span class="text-label-sm font-label-sm text-secondary tracking-widest uppercase font-semibold">Akar Iman &amp; Spiritualitas</span>
      <h2 class="text-headline-lg font-headline-lg text-primary">Riwayat &amp; Visi Perutusan</h2>
      <div class="w-16 h-0.5 bg-secondary-fixed mx-auto"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
      <!-- Kartu Sejarah (7 Cols) -->
      <div class="md:col-span-7 bg-surface-container-lowest rounded-xl border border-outline-variant p-8 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between">
        <div class="space-y-4">
          <div class="flex items-center justify-between pb-3 border-b border-outline-variant/60">
            <div class="flex items-center space-x-2">
              <span class="material-symbols-outlined text-primary text-2xl">cottage</span>
              <h3 class="text-headline-sm font-headline-sm text-on-surface">Sejarah Gereja di Perbukitan Candi</h3>
            </div>
            <span class="text-label-sm font-label-sm px-2.5 py-1 rounded bg-surface-container-high text-primary font-medium">Est. 1968</span>
          </div>
          <p class="text-body-md text-on-surface-variant leading-relaxed">
            Kisah Paroki Karangpanas berawal dari pemekaran Paroki Santo Yusuf Gedangan dan Paroki Perawan Maria di Grogol. Terletak di kontur berbukit sejuk Jl. Dr. Wahidin 110 Semarang Selatan, benih iman ditaburkan melalui kelompok doa keluarga sebelum akhirnya gereja megah didirikan untuk menampung pertumbuhan umat Katolik di kawasan Candi, Jangli, Kaliwiru, hingga Banyumanik.
          </p>
          <p class="text-body-md text-on-surface-variant leading-relaxed">
            Memilih <strong>Santo Athanasius Agung</strong>—seorang Bapa Gereja pembela ajaran iman sejati mengenai keilahian Kristus—paroki ini mewarisi keteguhan iman, keberanian membela kebenaran injili, dan dedikasi total pada pembaruan rohani jemaat.
          </p>
        </div>
        <div class="mt-6 pt-4 border-t border-outline-variant/60 flex items-center justify-between text-body-sm text-secondary">
          <span class="font-semibold italic">"Contra Mundum pro Deo" — Berdiri teguh demi kemuliaan Allah</span>
          <span class="material-symbols-outlined">verified</span>
        </div>
      </div>
      <!-- Kartu Visi KAS (5 Cols) -->
      <div class="md:col-span-5 bg-gradient-to-br from-primary to-primary-container text-on-primary rounded-xl p-8 shadow-md border-t-4 border-secondary-fixed flex flex-col justify-between">
        <div class="space-y-4">
          <div class="inline-flex items-center space-x-2 px-3 py-1 rounded bg-white/10 text-secondary-fixed text-label-sm font-label-sm">
            <span class="material-symbols-outlined text-[16px]">flag</span>
            <span>Arah Dasar Pastoral KAS</span>
          </div>
          <h3 class="text-headline-sm font-headline-sm text-white">Visi Bersama</h3>
          <blockquote class="italic text-title-md font-title-md text-surface-container-highest border-l-2 border-secondary-fixed pl-4 py-1">
            "Gereja yang Mandiri, Misioner, Berdaya Ubah, dan Menjadi Berkat bagi Sesama Masyarakat."
          </blockquote>
          <p class="text-body-sm text-primary-fixed leading-relaxed">
            Menyelaraskan gerak pastoral se-Keuskupan Agung Semarang dalam bingkai peradaban kasih, persaudaraan lintas agama, dan perlindungan keutuhan ciptaan Tuhan.
          </p>
        </div>
        <div class="pt-6 flex items-center space-x-3 text-secondary-fixed text-label-sm">
          <span class="material-symbols-outlined">volunteer_activism</span>
          <span>Berjalan Bersama Menuju Gereja Sinodal</span>
        </div>
      </div>
      <!-- Kartu Misi Lima Tugas Gereja (12 Cols Bento) -->
      <div class="md:col-span-12 bg-surface-container-lowest rounded-xl border border-outline-variant p-8 shadow-sm">
        <h3 class="text-headline-sm font-headline-sm text-primary mb-6 flex items-center space-x-2">
          <span class="material-symbols-outlined text-secondary">lan</span>
          <span>Misi Pelayanan: Panca Tugas Gereja (Panca Tugas Pastoral)</span>
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
          <div class="p-4 rounded-lg bg-surface-container-low border border-outline-variant/60 hover:border-secondary transition-colors">
            <div class="w-8 h-8 rounded bg-primary-container text-white flex items-center justify-center mb-3">
              <span class="material-symbols-outlined text-[18px]">menu_book</span>
            </div>
            <h4 class="text-title-md font-title-md text-on-surface">Kerygma</h4>
            <p class="text-label-sm font-label-sm text-secondary uppercase font-semibold mb-1">Pewartaan</p>
            <p class="text-body-sm font-body-sm text-on-surface-variant">Katekese umat, inisiasi sakramental, BIAK, BIR, katekumenat, dan pendalaman iman lingkungan.</p>
          </div>
          <div class="p-4 rounded-lg bg-surface-container-low border border-outline-variant/60 hover:border-secondary transition-colors">
            <div class="w-8 h-8 rounded bg-primary-container text-white flex items-center justify-center mb-3">
              <span class="material-symbols-outlined text-[18px]">local_fire_department</span>
            </div>
            <h4 class="text-title-md font-title-md text-on-surface">Liturgia</h4>
            <p class="text-label-sm font-label-sm text-secondary uppercase font-semibold mb-1">Pengudusan</p>
            <p class="text-body-sm font-body-sm text-on-surface-variant">Perayaan Ekaristi berbobot dan khidmat, devosi sakramental, pelayanan adorasi, paduan suara, lektor, dan misdinar.</p>
          </div>
          <div class="p-4 rounded-lg bg-surface-container-low border border-outline-variant/60 hover:border-secondary transition-colors">
            <div class="w-8 h-8 rounded bg-primary-container text-white flex items-center justify-center mb-3">
              <span class="material-symbols-outlined text-[18px]">diversity_3</span>
            </div>
            <h4 class="text-title-md font-title-md text-on-surface">Koinonia</h4>
            <p class="text-label-sm font-label-sm text-secondary uppercase font-semibold mb-1">Paguyuban</p>
            <p class="text-body-sm font-body-sm text-on-surface-variant">Menghidupkan keakraban umat rukun tetangga berbasis 58 Lingkungan dan rukun paguyuban kategorial lintas generasi.</p>
          </div>
          <div class="p-4 rounded-lg bg-surface-container-low border border-outline-variant/60 hover:border-secondary transition-colors">
            <div class="w-8 h-8 rounded bg-primary-container text-white flex items-center justify-center mb-3">
              <span class="material-symbols-outlined text-[18px]">favorite</span>
            </div>
            <h4 class="text-title-md font-title-md text-on-surface">Diakonia</h4>
            <p class="text-label-sm font-label-sm text-secondary uppercase font-semibold mb-1">Pelayanan Kasih</p>
            <p class="text-body-sm font-body-sm text-on-surface-variant">Tindakan belarasa konkret bagi kaum KLMTD (Kecil, Lemah, Miskin, Tersingkir, Difabel), beasiswa pendidikan, dan klinik paroki.</p>
          </div>
          <div class="p-4 rounded-lg bg-surface-container-low border border-outline-variant/60 hover:border-secondary transition-colors">
            <div class="w-8 h-8 rounded bg-primary-container text-white flex items-center justify-center mb-3">
              <span class="material-symbols-outlined text-[18px]">campaign</span>
            </div>
            <h4 class="text-title-md font-title-md text-on-surface">Martyria</h4>
            <p class="text-label-sm font-label-sm text-secondary uppercase font-semibold mb-1">Kesaksian Hidup</p>
            <p class="text-body-sm font-body-sm text-on-surface-variant">Menjadi garam dan terang di tengah masyarakat pluralis Kota Semarang lewat dialog kebangsaan dan persaudaraan sejati.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEKSI 2: DEWAN GEMBALA (PASTOR & ROMO REKAN) -->
  <section class="space-y-8 scroll-mt-24" id="pastor">
    <div class="flex flex-col md:flex-row md:items-end justify-between border-b border-outline-variant pb-4">
      <div>
        <span class="text-label-sm font-label-sm text-secondary tracking-widest uppercase font-semibold">Gembala Umat &amp; Sakramen</span>
        <h2 class="text-headline-lg font-headline-lg text-primary">Para Gembala Paroki</h2>
      </div>
      <p class="text-body-sm font-body-sm text-on-surface-variant mt-2 md:mt-0 max-w-md">
        Imam diosesan Keuskupan Agung Semarang yang mempersembahkan diri melayani sakramen, reksa pastoral, dan pembinaan iman umat Karangpanas.
      </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Pastor Kepala Paroki -->
      <div class="bg-surface-container-lowest rounded-xl border border-outline-variant overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col">
        <div class="h-64 bg-surface-dim overflow-hidden relative">
          <img class="w-full h-full object-cover" data-alt="Potret pastoral RD. E. Didik Chrestiyan H., Pr" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6UWufHnAre4FMKbwDUgJVMEQmy1EWhbeR8vEneXWZMLGfnPjBsCtilpC1-wWodnshZfNw4hFt7scCuWLAEnzYsHfQwh_hSpDb_DcjnCMWPQzNYKP1vOsJ_uKsmu0_AmKkp4Vu1X1kXX2rVQhdnCqqXjGF8JMKxDFhPjmys8dPiavPObhjxfbIMqPvFKNfpSIKKQH0m3VkL1N9V1_9_9gEeUphrvQ0Au8IeOFqDXk"/>
          <div class="absolute top-3 left-3 bg-primary text-on-primary text-label-sm font-label-sm px-2.5 py-1 rounded">
            Pastor Kepala Paroki
          </div>
        </div>
        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
          <div>
            <h3 class="text-headline-sm font-headline-sm text-primary">RD. E. Didik Chrestiyan H., Pr</h3>
            <p class="text-label-md font-label-md text-secondary">Ketua Umum DPP &amp; Penanggung Jawab Pastoral</p>
            <p class="text-body-sm font-body-sm text-on-surface-variant mt-3 leading-relaxed">
              Menahkodai paroki dengan visi sinodalitas yang inklusif, memperkuat jejaring ketahanan keluarga katolik dan pendampingan terpadu bagi lansia serta anak berkebutuhan khusus.
            </p>
          </div>
          <div class="pt-4 border-t border-outline-variant/50">
            <span class="text-label-sm font-label-sm text-on-surface-variant italic block mb-1">Pesan Gembala:</span>
            <p class="text-body-sm italic text-primary font-medium">"Jadilah lentera kasih yang senantiasa menyejukkan hati sesama di manapun kita diutus."</p>
          </div>
        </div>
      </div>
      <!-- Pastor Vikaris -->
      <div class="bg-surface-container-lowest rounded-xl border border-outline-variant overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col">
        <div class="h-64 bg-surface-dim overflow-hidden relative">
          <img class="w-full h-full object-cover" data-alt="Potret RD. Ign. Triatmoko, Pr" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAvhFhIJ-58hRvI9pEdmhlbApJ-sPiiMURyYK4yNjaId3PoZ66-iKrDyJSUE4eBvq8h5ASFhy4kdK8QVTQzscy8CDuUklsVRj2-tywohCwgyj5sh2HdPeqyaXjNswO5N-zSAksx1hT5_66GZS1dRrc8VeypkXZCaxp-Wt5-5jP9VLNWofXgC0-NSa8ZySqD_coPWJN_iiD2inTdsU9o4dzpIZHDqhjnL0Jt1gQDNKk"/>
          <div class="absolute top-3 left-3 bg-secondary text-on-secondary text-label-sm font-label-sm px-2.5 py-1 rounded">
            Pastor Vikaris
          </div>
        </div>
        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
          <div>
            <h3 class="text-headline-sm font-headline-sm text-primary">RD. Ign. Triatmoko, Pr</h3>
            <p class="text-label-md font-label-md text-secondary">Pendamping OMK, Remaja &amp; Kategorial</p>
            <p class="text-body-sm font-body-sm text-on-surface-variant mt-3 leading-relaxed">
              Fokus membimbing Orang Muda Katolik (OMK Karangpanas), pendampingan katekese kaum muda di era digital, penguatan kerasulan sosial mahasiswa Universitas Diponegoro dan sekitarnya.
            </p>
          </div>
          <div class="pt-4 border-t border-outline-variant/50">
            <span class="text-label-sm font-label-sm text-on-surface-variant italic block mb-1">Pesan Gembala:</span>
            <p class="text-body-sm italic text-primary font-medium">"Kaum muda bukan sekadar masa depan gereja, melainkan masa kini yang menghidupkan altar dan masyarakat."</p>
          </div>
        </div>
      </div>
      <!-- Romo Rekan / Purnakarya -->
      <div class="bg-surface-container-lowest rounded-xl border border-outline-variant overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col">
        <div class="h-64 bg-surface-dim overflow-hidden relative">
          <img class="w-full h-full object-cover" data-alt="Potret RD. FX. Sugiyana, Pr" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1TYL9nES5rkG-UFChIGA888lu4X2oL7v3oAyydg36HTA7BUaNU5qt9hS_sQyVelBTzcxwxCVytYMCXsMJQ6PGm5N0cvodEHPxHdc0jFy-JtSzU-ou2phtlR35yIeg4L7dCIzproFOffHdwyMx5x4xJETwpXFn0P6Ga5et-OSooQcEdqqeoe1aYUBNIaWWvtp0mn6IkHWSGVZw2Fm6-EccqGGQ8gmuxJtSeRR6LvM"/>
          <div class="absolute top-3 left-3 bg-inverse-surface text-white text-label-sm font-label-sm px-2.5 py-1 rounded">
            Pastor Rekan / Purnakarya
          </div>
        </div>
        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
          <div>
            <h3 class="text-headline-sm font-headline-sm text-primary">RD. FX. Sugiyana, Pr</h3>
            <p class="text-label-md font-label-md text-secondary">Pelayan Sakramen Rekonsiliasi &amp; Doa Batin</p>
            <p class="text-body-sm font-body-sm text-on-surface-variant mt-3 leading-relaxed">
              Mendedikasikan waktu purnabakti untuk mendengarkan pengakuan dosa umat, bimbingan rohani pribadi, kunjungan orang sakit lansia, serta doa hening kontemplatif bagi keutuhan paroki.
            </p>
          </div>
          <div class="pt-4 border-t border-outline-variant/50">
            <span class="text-label-sm font-label-sm text-on-surface-variant italic block mb-1">Pesan Rohani:</span>
            <p class="text-body-sm italic text-primary font-medium">"Dalam doa yang senyap dan hening, rahmat kerahiman Allah selalu melimpah bagi yang mencari-Nya."</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEKSI 3: STRUKTUR DEWAN PASTORAL PAROKI (DPP) & DEWAN KEUANGAN (BGKP) -->
  <section class="space-y-8 scroll-mt-24" id="organisasi">
    <div class="text-center max-w-2xl mx-auto space-y-2">
      <span class="text-label-sm font-label-sm text-secondary tracking-widest uppercase font-semibold">Sinergi Pelayanan Umat</span>
      <h2 class="text-headline-lg font-headline-lg text-primary">Struktur Dewan Pastoral Paroki (DPP)</h2>
      <p class="text-body-sm font-body-sm text-on-surface-variant">Periode Pelayanan 2023 - 2026 • Bersama Membangun Tubuh Mistik Kristus</p>
      <div class="w-16 h-0.5 bg-secondary-fixed mx-auto"></div>
    </div>
    <div class="space-y-6">
      <!-- Pucuk Pimpinan -->
      <div class="max-w-md mx-auto bg-primary-container text-white p-5 rounded-xl text-center shadow-md border-t-2 border-secondary-fixed">
        <span class="text-label-sm font-label-sm text-secondary-fixed uppercase tracking-wider block">Ketua Umum DPP</span>
        <div class="text-title-lg font-title-lg text-white mt-1">RD. E. Didik Chrestiyan H., Pr</div>
        <div class="text-body-sm text-primary-fixed mt-1">Pastor Kepala Paroki Santo Athanasius Agung</div>
      </div>
      <div class="w-0.5 h-6 bg-outline-variant mx-auto"></div>
      <!-- Tim Inti Harian DPP & BGKP -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
        <div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant shadow-sm text-center">
          <span class="material-symbols-outlined text-secondary text-2xl">account_tree</span>
          <span class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider block mt-1">Wakil Ketua DPP</span>
          <div class="text-title-md font-title-md text-primary mt-1">Bpk. F.X. Hendro Pranoto</div>
          <p class="text-body-sm text-on-surface-variant mt-1">Koordinasi Harian Dewan Paroki Pleno</p>
        </div>
        <div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant shadow-sm text-center">
          <span class="material-symbols-outlined text-secondary text-2xl">draw</span>
          <span class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider block mt-1">Sekretariat &amp; Administrasi</span>
          <div class="text-title-md font-title-md text-primary mt-1">Ibu M.M. Sri Wahyuni</div>
          <p class="text-body-sm text-on-surface-variant mt-1">Sekretaris DPP &amp; Tata Kelola Dokumen</p>
        </div>
        <div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant shadow-sm text-center">
          <span class="material-symbols-outlined text-secondary text-2xl">account_balance_wallet</span>
          <span class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider block mt-1">Ketua BGKP (Dewan Keuangan)</span>
          <div class="text-title-md font-title-md text-primary mt-1">Bpk. Ign. Bambang Sutrisno</div>
          <p class="text-body-sm text-on-surface-variant mt-1">Transparansi Keuangan &amp; Aset Gereja</p>
        </div>
      </div>
      <div class="w-0.5 h-6 bg-outline-variant mx-auto"></div>
      <!-- 4 Bidang Pelayanan Utama -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-surface-container-lowest p-6 rounded-xl border-t-4 border-primary border-x border-b border-outline-variant shadow-sm hover:shadow-md transition-all">
          <div class="flex items-center space-x-2 text-primary mb-2">
            <span class="material-symbols-outlined">book</span>
            <h4 class="text-title-md font-title-md">Bidang Liturgi</h4>
          </div>
          <p class="text-label-md font-label-md text-secondary mb-3">Koordinator: Bpk. V. Agus Kristanto</p>
          <ul class="text-body-sm text-on-surface-variant space-y-1.5 list-disc list-inside">
            <li>Tim Tata Perayaan Ekaristi (TPE)</li>
            <li>Seksi Putra-Putri Altar (PPA)</li>
            <li>Seksi Lektor &amp; Pemazmur</li>
            <li>Seksi Paduan Suara / Koor</li>
            <li>Seksi Dekorasi &amp; Koster Altar</li>
          </ul>
        </div>
        <div class="bg-surface-container-lowest p-6 rounded-xl border-t-4 border-secondary-fixed-dim border-x border-b border-outline-variant shadow-sm hover:shadow-md transition-all">
          <div class="flex items-center space-x-2 text-primary mb-2">
            <span class="material-symbols-outlined">record_voice_over</span>
            <h4 class="text-title-md font-title-md">Bidang Pewartaan</h4>
          </div>
          <p class="text-label-md font-label-md text-secondary mb-3">Koordinator: Ibu Ch. Endang Susilowati</p>
          <ul class="text-body-sm text-on-surface-variant space-y-1.5 list-disc list-inside">
            <li>Inisiasi Katekumenat Dewasa &amp; Anak</li>
            <li>BIAK (Bina Iman Anak Katolik)</li>
            <li>BIR (Bina Iman Remaja)</li>
            <li>Kerasulan Kitab Suci (KKS)</li>
            <li>Pendampingan Baptis Bayi &amp; Krisma</li>
          </ul>
        </div>
        <div class="bg-surface-container-lowest p-6 rounded-xl border-t-4 border-primary border-x border-b border-outline-variant shadow-sm hover:shadow-md transition-all">
          <div class="flex items-center space-x-2 text-primary mb-2">
            <span class="material-symbols-outlined">handshake</span>
            <h4 class="text-title-md font-title-md">Bidang Kemasyarakatan</h4>
          </div>
          <p class="text-label-md font-label-md text-secondary mb-3">Koordinator: Bpk. Dr. Paulus Hartanto</p>
          <ul class="text-body-sm text-on-surface-variant space-y-1.5 list-disc list-inside">
            <li>Penyaluran Beras &amp; Bantuan KLMTD</li>
            <li>Seksi Hubungan Antar Agama (HAAK)</li>
            <li>Keadilan, Perdamaian &amp; Lingkungan Hidup</li>
            <li>Pelayanan Kesehatan &amp; Donor Darah</li>
            <li>Advokasi Ketenagakerjaan Warga</li>
          </ul>
        </div>
        <div class="bg-surface-container-lowest p-6 rounded-xl border-t-4 border-secondary-fixed-dim border-x border-b border-outline-variant shadow-sm hover:shadow-md transition-all">
          <div class="flex items-center space-x-2 text-primary mb-2">
            <span class="material-symbols-outlined">groups_3</span>
            <h4 class="text-title-md font-title-md">Bidang Paguyuban</h4>
          </div>
          <p class="text-label-md font-label-md text-secondary mb-3">Koordinator: Bpk. Robertus Danang</p>
          <ul class="text-body-sm text-on-surface-variant space-y-1.5 list-disc list-inside">
            <li>Presidium Orang Muda Katolik (OMK)</li>
            <li>Paguyuban Lansia Santo Simeon &amp; Hana</li>
            <li>Keluarga Mahasiswa Katolik (KMK)</li>
            <li>Wanita Katolik RI (WKRI) Ranting</li>
            <li>Paguyuban Kematian Santo Joseph</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- SEKSI 4: PETA WILAYAH & 58 LINGKUNGAN UMAT -->
  <section class="space-y-8 scroll-mt-24" id="wilayah">
    <div class="flex flex-col md:flex-row md:items-end justify-between border-b border-outline-variant pb-4">
      <div>
        <span class="text-label-sm font-label-sm text-secondary tracking-widest uppercase font-semibold">Komunitas Basis Eklesial</span>
        <h2 class="text-headline-lg font-headline-lg text-primary">Peta 14 Wilayah &amp; 58 Lingkungan</h2>
      </div>
      <div class="mt-3 md:mt-0 flex items-center space-x-2 text-label-sm font-label-sm">
        <span class="px-3 py-1 rounded bg-secondary-fixed text-primary font-semibold">Terdaftar: 6.420 Jiwa Umat</span>
      </div>
    </div>
    <!-- Overview Info Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="bg-surface-container-low p-6 rounded-xl border border-outline-variant">
        <div class="flex items-center space-x-3 mb-2">
          <span class="material-symbols-outlined text-primary text-2xl">explore</span>
          <h3 class="text-title-md font-title-md text-on-surface">Cakupan Geografis</h3>
        </div>
        <p class="text-body-sm text-on-surface-variant">
          Membentang dari Kawasan Candi Baru, Kaliwiru, Jatingaleh, Jangli, Karanganyar Gunung, hingga perbatasan Tembalang dan Gombel.
        </p>
      </div>
      <div class="bg-surface-container-low p-6 rounded-xl border border-outline-variant">
        <div class="flex items-center space-x-3 mb-2">
          <span class="material-symbols-outlined text-secondary text-2xl">hub</span>
          <h3 class="text-title-md font-title-md text-on-surface">Format Persekutuan</h3>
        </div>
        <p class="text-body-sm text-on-surface-variant">
          Ibadat sabda bergilir malam Rabu/Jumat di rumah-rumah umat, doa Rosario bulan Mei &amp; Oktober, serta aksi kepedulian kas lingkungan.
        </p>
      </div>
      <div class="bg-surface-container-low p-6 rounded-xl border border-outline-variant">
        <div class="flex items-center space-x-3 mb-2">
          <span class="material-symbols-outlined text-primary text-2xl">badge</span>
          <h3 class="text-title-md font-title-md text-on-surface">Administrasi Paroki</h3>
        </div>
        <p class="text-body-sm text-on-surface-variant">
          Surat pengantar baptis, krisma, dan kanonik perkawinan dikoordinasikan langsung melalui Ketua Lingkungan sebelum verifikasi sekretariat.
        </p>
      </div>
    </div>
    <!-- Tabular Wilayah & Lingkungan -->
    <div class="bg-surface-container-lowest rounded-xl border border-outline-variant overflow-hidden shadow-sm">
      <div class="p-6 bg-surface-container-low border-b border-outline-variant flex flex-wrap items-center justify-between gap-4">
        <h3 class="text-title-lg font-title-lg text-primary">Daftar Wilayah Pastoral &amp; Kontak Lingkungan</h3>
        <span class="text-label-sm font-label-sm text-on-surface-variant italic">Untuk pembaruan data Kartu Keluarga Gereja (KKG), hubungi Ketua Lingkungan setempat.</span>
      </div>
      <div class="divide-y divide-outline-variant/60">
        <!-- Wilayah 1 -->
        <div class="p-6 hover:bg-surface-container-lowest/80 transition-colors">
          <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div class="space-y-1">
              <div class="flex items-center space-x-3">
                <span class="px-2 py-0.5 rounded bg-primary text-on-primary text-label-sm font-bold">Wilayah I</span>
                <h4 class="text-title-md font-title-md text-on-surface">Santo Fransiskus Xaverius (Candi Indah &amp; Kaliwiru)</h4>
              </div>
              <p class="text-body-sm text-on-surface-variant">
                Terdiri dari 4 Lingkungan: St. Fransiskus Xaverius 1, FX 2, FX 3, dan St. Vincentius Kaliwiru.
              </p>
            </div>
            <div class="text-left md:text-right shrink-0">
              <span class="text-label-sm font-label-sm text-on-surface-variant block">Koordinator Wilayah:</span>
              <span class="text-body-sm font-semibold text-primary">Bpk. Aloysius Joko S.</span>
              <span class="text-label-sm text-secondary block">Sekretariat Wilayah: 0812-2891-xxxx</span>
            </div>
          </div>
        </div>
        <!-- Wilayah 2 -->
        <div class="p-6 hover:bg-surface-container-lowest/80 transition-colors">
          <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div class="space-y-1">
              <div class="flex items-center space-x-3">
                <span class="px-2 py-0.5 rounded bg-primary text-on-primary text-label-sm font-bold">Wilayah II</span>
                <h4 class="text-title-md font-title-md text-on-surface">Santo Petrus Canisius (Jatingaleh &amp; Ksatrian)</h4>
              </div>
              <p class="text-body-sm text-on-surface-variant">
                Terdiri dari 5 Lingkungan: St. Petrus Canisius 1, St. Paulus Jatingaleh, St. Thomas Aquinas, St. Antonius, St. Matius.
              </p>
            </div>
            <div class="text-left md:text-right shrink-0">
              <span class="text-label-sm font-label-sm text-on-surface-variant block">Koordinator Wilayah:</span>
              <span class="text-body-sm font-semibold text-primary">Ibu Elizabeth Maria T.</span>
              <span class="text-label-sm text-secondary block">Sekretariat Wilayah: 0813-9022-xxxx</span>
            </div>
          </div>
        </div>
        <!-- Wilayah 3 -->
        <div class="p-6 hover:bg-surface-container-lowest/80 transition-colors">
          <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div class="space-y-1">
              <div class="flex items-center space-x-3">
                <span class="px-2 py-0.5 rounded bg-primary text-on-primary text-label-sm font-bold">Wilayah III</span>
                <h4 class="text-title-md font-title-md text-on-surface">Santa Theresia Kanak-Kanak Yesus (Jangli &amp; Graha Wahid)</h4>
              </div>
              <p class="text-body-sm text-on-surface-variant">
                Terdiri dari 4 Lingkungan: St. Theresia Jangli Atas, St. Theresia 2, St. Bernadette Graha Wahid, St. Monika.
              </p>
            </div>
            <div class="text-left md:text-right shrink-0">
              <span class="text-label-sm font-label-sm text-on-surface-variant block">Koordinator Wilayah:</span>
              <span class="text-body-sm font-semibold text-primary">Bpk. Bernardus Budi Santoso</span>
              <span class="text-label-sm text-secondary block">Sekretariat Wilayah: 0811-2740-xxxx</span>
            </div>
          </div>
        </div>
        <!-- Wilayah 4 -->
        <div class="p-6 hover:bg-surface-container-lowest/80 transition-colors">
          <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div class="space-y-1">
              <div class="flex items-center space-x-3">
                <span class="px-2 py-0.5 rounded bg-primary text-on-primary text-label-sm font-bold">Wilayah IV</span>
                <h4 class="text-title-md font-title-md text-on-surface">Santa Maria Magdalena (Karangrejo &amp; Dr. Wahidin)</h4>
              </div>
              <p class="text-body-sm text-on-surface-variant">
                Terdiri dari 4 Lingkungan: Maria Fatima Karangrejo, St. Anna, St. Joachim, St. Elizabeth Wahidin.
              </p>
            </div>
            <div class="text-left md:text-right shrink-0">
              <span class="text-label-sm font-label-sm text-on-surface-variant block">Koordinator Wilayah:</span>
              <span class="text-body-sm font-semibold text-primary">Bpk. Stefanus Gunawan</span>
              <span class="text-label-sm text-secondary block">Sekretariat Wilayah: 0815-6671-xxxx</span>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 bg-surface-container-lowest border-t border-outline-variant text-center">
        <button class="inline-flex items-center space-x-1.5 text-primary hover:text-secondary font-label-md transition-colors">
          <span>Lihat Rincian Seluruh 14 Wilayah Pastoral (Wilayah V - XIV)</span>
          <span class="material-symbols-outlined text-[18px]">expand_more</span>
        </button>
      </div>
    </div>
  </section>

  <!-- SEKSI 5: GALERI ARSITEKTUR GEREJA & GUA MARIA KARANGPANAS -->
  <section class="space-y-8 scroll-mt-24" id="galeri">
    <div class="text-center max-w-2xl mx-auto space-y-2">
      <span class="text-label-sm font-label-sm text-secondary tracking-widest uppercase font-semibold">Keheningan &amp; Keindahan Sakral</span>
      <h2 class="text-headline-lg font-headline-lg text-primary">Arsitektur Gereja &amp; Gua Maria Karangpanas</h2>
      <p class="text-body-sm font-body-sm text-on-surface-variant">Ruang kontemplasi batin, peziarahan hening, dan perjumpaan personal dengan Bunda Maria di bukit Semarang.</p>
      <div class="w-16 h-0.5 bg-secondary-fixed mx-auto"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
      <!-- Foto Utama Gua Maria (7 Cols) -->
      <div class="md:col-span-7 group relative rounded-xl overflow-hidden shadow-md border border-outline-variant bg-surface-dim min-h-[380px] flex items-end">
        <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Pemandangan khidmat Gua Maria Karangpanas Semarang" src="https://lh3.googleusercontent.com/aida-public/AB6AXuALcwHLCKnq_YTJ5KPxA0Bkjlvyu37U85pJPJIPc0VgyT14oFGXtTYqqDiFBP_XQDJ8FfSPX3XMvN4EnMspOuz7gDXbeBovtDOdqgiFliduKX5q2RtDZ9mvaaPk2oMjWpm3WaGOTYqSFlvHswKBpgc28PGIq9ljiwqS33PdNs5qsRFKg5HJ3wNTw4GwjkShryHjGcWX3m04GWu7Yc3IE9UURMp9NE7dXxf_S-3hafE"/>
        <div class="absolute inset-0 bg-gradient-to-t from-primary/95 via-primary/40 to-transparent"></div>
        <div class="relative p-6 text-white space-y-2">
          <span class="px-2.5 py-1 rounded bg-secondary-fixed text-primary text-label-sm font-semibold">Tempat Peziarahan Umat</span>
          <h3 class="text-headline-md font-headline-md text-white">Gua Maria Sendang Semadi Karangpanas</h3>
          <p class="text-body-sm text-primary-fixed max-w-xl">
            Diresmikan sebagai oase hening bagi peziarah dari berbagai penjuru untuk menyalakan lilin ujud doa novena, menimba ketenangan batin, dan memohon syafaat Bunda Maria.
          </p>
        </div>
      </div>
      <!-- Foto Altar Utama (5 Cols) -->
      <div class="md:col-span-5 group relative rounded-xl overflow-hidden shadow-md border border-outline-variant bg-surface-dim min-h-[380px] flex items-end">
        <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Interior sakral panti imam altar Gereja Katolik Paroki Karangpanas Semarang" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3cpGN-yJJfNgd217u-8dn2VUJ_dKCUCuX5PsoHUSY31BQO2Ha0NdEn2FYuCov5wJ97zn0px8vdKDTekzpq9eyBLRVbaK2M4pF-0-DRZPjYb_yxxxA80Cz3StYDf2mhRUY55neaa7F71XEeVMEND5g6bQ0mSzCljVtrIt69sg9rdvjYxzGbpQAli1X0Q9FoRIFenxHBvUpOMC4AGbBFlcfoMPMPvRaJcw0e9PW89w"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent"></div>
        <div class="relative p-6 text-white space-y-2">
          <span class="px-2.5 py-1 rounded bg-white/20 text-secondary-fixed text-label-sm font-semibold backdrop-blur-sm">Panti Imam &amp; Tabernakel</span>
          <h3 class="text-title-lg font-title-lg text-white">Panti Altar Santo Athanasius</h3>
          <p class="text-body-sm text-surface-variant">
            Desain ruang perayaan yang menonjolkan ketinggian atap arsitektur tropis modern, menghadirkan akustik khidmat untuk paduan suara liturgis dan perayaan Ekaristi harian.
          </p>
        </div>
      </div>
      <!-- Galeri Tambahan 3 Kolom -->
      <div class="md:col-span-4 rounded-xl overflow-hidden border border-outline-variant bg-surface-container-lowest p-4 shadow-sm space-y-3">
        <div class="h-44 rounded-lg overflow-hidden bg-surface-dim">
          <img class="w-full h-full object-cover" data-alt="Kaca patri seni jendela gereja Santo Athanasius Karangpanas" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_f_6bautsN-IYSBZhAkoEIo7gE8QDBfVCVypGDMjFfp2ugipTM_IxIToT6HNCqt8uxamveu1_O_exqOkvwwkgNO1rEEBQwPf2Kj7qFzJi5RrRm4XfcSM2UJXOOyOlvCuYcSKDYpLcK24AUadY5cFBHLp_Jjl52wUH_VGFHWtAOz66_8NNhlAjp007T3Srql6YExnKAin03nI4QqGg8M-rIQJr6bLUuaN0shw9UM8"/>
        </div>
        <div>
          <h4 class="text-title-md font-title-md text-primary">Kaca Patri Liturgis</h4>
          <p class="text-body-sm text-on-surface-variant">Mengisahkan perikop keselamatan dan teladan Santo Athanasius Agung dalam membela iman ortodoks Konsili Nicea.</p>
        </div>
      </div>
      <div class="md:col-span-4 rounded-xl border border-outline-variant bg-surface-container-lowest p-4 shadow-sm space-y-3">
        <div class="h-44 rounded-lg overflow-hidden bg-surface-dim">
          <img class="w-full h-full object-cover" data-alt="Taman doa Jalan Salib luar ruangan di halaman bukit Gereja Katolik Karangpanas Semarang" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBS6txzCGNJnIZ0UyE8Bi6nFXAk0VLkUZSc7TGR9NMjdLgpCZVAHxIBDeBd6jq1yhE1cvNYQaJhdoCzDNxwPszaFCp_nxdIBeEep0XeFCsPCFSnmHTdJ6s0uvkCHYBOpHbjo78RzIZi5NICjYJ_1JkEEo4LcZ1riP1W5dYmHiJbunTAypx9CdRml2BVKdH7mwhBEIJ5otDnOV3iCHNzSLX106Caelcgu_DxIPyjEI8"/>
        </div>
        <div>
          <h4 class="text-title-md font-title-md text-primary">Jalan Salib Terbuka</h4>
          <p class="text-body-sm text-on-surface-variant">Rute 14 stasi perhentian sengsara Yesus Kristus di lereng hijau asri lingkungan kompleks gereja untuk devosi masa prapaskah.</p>
        </div>
      </div>
      <div class="md:col-span-4 rounded-xl border border-outline-variant bg-surface-container-lowest p-4 shadow-sm space-y-3">
        <div class="h-44 rounded-lg overflow-hidden bg-surface-dim">
          <img class="w-full h-full object-cover" data-alt="Gedung pertemuan pastoral Graha Athanasius Karangpanas" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBf6scd7fIUNWYjzeZHuPoa1ZUc3FegE642JUCXCYTHqWL6KD0JAjaPvLMjtnGhAfTHZjtz_81e_911qZFEDAuB_z4RFBD5U2-WQH-fPRTpApJpzNdEpf2MauXuGe3bK0jEHkSzRkRC9h8mEe-LHnOQxc2ufuTrdrnc3Kv4VRF665Vqg3oth84xhF9Dpq_Orx3yUhFjb5DLlfaMMpWHAy0xnDt433JktMfAN0qBLfg"/>
        </div>
        <div>
          <h4 class="text-title-md font-title-md text-primary">Graha Pastoral Athanasius</h4>
          <p class="text-body-sm text-on-surface-variant">Pusat katekese, ruang pertemuan Dewan Pengurus Paroki, latihan koor, dan sekretariat pelayanan umat yang ramah difabel.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CALL TO ACTION: INTENSI MISA & HUBUNGI SEKRETARIAT -->
  <section class="bg-surface-container-lowest rounded-xl border-2 border-secondary-fixed/40 p-8 lg:p-12 shadow-sm">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
      <div class="lg:col-span-8 space-y-3">
        <div class="inline-flex items-center space-x-2 text-primary font-semibold text-label-md">
          <span class="material-symbols-outlined">diversity_1</span>
          <span>Keterbukaan Pelayanan Komunitas Umat</span>
        </div>
        <h3 class="text-headline-md font-headline-md text-primary">Memerlukan Layanan Pastoral atau Mendaftarkan Ujud Misa?</h3>
        <p class="text-body-md text-on-surface-variant max-w-2xl">
          Sekretariat Paroki Santo Athanasius Agung Karangpanas siap mendampingi Anda setiap hari kerja untuk pendaftaran intensi misa syukur/arwah, pencatatan sakramen baptis &amp; pernikahan, serta pengurusan surat pengantar gereja.
        </p>
      </div>
      <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-3 justify-end">
        <a class="inline-flex items-center justify-center space-x-2 px-6 py-3 bg-primary-container text-on-primary rounded-lg font-semibold hover:bg-primary transition-colors shadow" href="#">
          <span class="material-symbols-outlined text-[20px]">edit_calendar</span>
          <span>Daftar Intensi Misa Online</span>
        </a>
        <a class="inline-flex items-center justify-center space-x-2 px-6 py-3 border border-primary text-primary rounded-lg font-semibold hover:bg-secondary-fixed/20 transition-colors" href="#">
          <span class="material-symbols-outlined text-[20px]">phone_in_talk</span>
          <span>Kontak Sekretariat Paroki</span>
        </a>
      </div>
    </div>
  </section>
</div>

</div>
@endsection
