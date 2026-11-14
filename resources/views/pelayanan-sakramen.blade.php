@extends('layouts.app')

@section('title', 'Pelayanan Sakramen - Paroki Karangpanas Semarang')
@section('nav-active', 'sakramen')

{{-- ============================================================
     DATA: ubah bagian ini saja bila ada perubahan ketentuan/kontak.
     Seluruh isi masih CONTOH dari desain, cocokkan dengan ketentuan asli paroki.
     ============================================================ --}}
@php
  $tel         = '(024) 8312633';
  $telHref     = 'tel:0248312633';
  $hotline     = '0812-2500-1925';
  $hotlineHref = 'tel:081225001925';
  $wa          = 'https://wa.me/6281225001925';
  $maps        = 'https://www.google.com/maps/search/?api=1&query=Gereja+Santo+Athanasius+Agung+Karangpanas+Semarang';

  // Sakramen kartu standar: [label, judul, subjudul, ikon, [[heading, isi(teks) atau isi(array)]], teks tombol]
  $sakramen = [
    ['Inisiasi Kristen', 'Sakramen Baptis', 'Bayi, Anak & Dewasa (Katekumen)', 'water_drop', [
      ['Jadwal Rutin', 'Setiap Minggu ke-2 dalam bulan, pukul 10.00 WIB di Gereja Utama. Pembekalan orang tua dan wali baptis dilakukan Sabtu sebelumnya.'],
      ['Syarat Berkas', ['Surat pengantar Ketua Lingkungan', 'Fotokopi akta kelahiran anak', 'Surat nikah Gereja Katolik orang tua', 'Surat Krisma wali baptis']],
    ], 'Daftar via Sekretariat'],
    ['Inisiasi Kristen', 'Sakramen Ekaristi', 'Penerimaan Komuni Pertama', 'local_cafe', [
      ['Persyaratan Calon', 'Minimal kelas 4 SD (atau usia 10 tahun) dan telah menerima Sakramen Baptis yang sah secara Katolik.'],
      ['Rangkaian Pembinaan', ['Katekese selama 6 bulan bersama Tim Katekis', 'Rekoleksi calon komuni dan orang tua', 'Sakramen Tobat pertama', 'Gladi bersih dan penerimaan pada Hari Raya Tubuh & Darah Kristus']],
    ], null],
    ['Inisiasi Kristen', 'Sakramen Krisma', 'Penguatan Roh Kudus', 'local_fire_department', [
      ['Ketentuan Peserta', 'Usia minimal SMP kelas 3 (14 tahun ke atas), telah menerima Baptis dan Komuni Pertama. Diselenggarakan berkala setiap 2 tahun.'],
      ['Agenda Utama', ['Pembinaan bersama Tim Inisiasi Paroki', 'Karya pastoral belas kasih dan bakti sosial', 'Pengurapan oleh Bapak Uskup KAS atau Vikep']],
    ], null],
    ['Penyembuhan', 'Sakramen Rekonsiliasi', 'Pengakuan Dosa & Kerahiman Ilahi', 'volunteer_activism', [
      ['Jadwal Rutin', 'Setiap Sabtu pukul 16.30 WIB, sebelum Misa Sabtu Sore (17.30), atau melalui perjanjian dengan Romo.'],
      ['Ibadat Tobat Bersama', 'Digelar menjelang Natal (Masa Adven) dan Paskah (Masa Prapaskah) bersama para imam se-Dekanat Semarang Timur.'],
    ], null],
  ];

  $formulir = [
    ['Formulir Pendaftaran Baptis Bayi', '#'],
    ['Blangko Permohonan Penyelidikan Kanonik', '#'],
    ['Surat Pengantar Ketua Lingkungan', '#'],
    ['Formulir Pendaftaran Komuni Pertama', '#'],
    ['Permohonan Legalisir Duplikat Akta Baptis', '#'],
    ['Panduan Doa & Pemeriksaan Batin Tobat', '#'],
  ];
@endphp

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
        Liturgi &amp; Pelayanan Pastoral
      </span>
      <h1 class="font-headline-lg text-2xl sm:text-headline-lg text-surface-container-lowest leading-tight">Pelayanan Sakramen &amp; Pastoral Paroki</h1>
      <p class="font-body-lg text-sm sm:text-body-lg text-primary-fixed">Paroki Santo Athanasius Agung Karangpanas setia mendampingi peziarahan iman umat, sejak awal kehidupan hingga kepulangan kudus kepada Bapa, melalui perayaan sakramen-sakramen keselamatan.</p>
      <div class="flex flex-wrap gap-4 font-label-sm text-label-sm text-secondary-fixed">
        <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-base">verified</span> Keuskupan Agung Semarang</span>
        <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-base">schedule</span> Sekretariat: Senin–Jumat 08.00–15.30, Sabtu 08.00–13.00 WIB</span>
      </div>
    </div>
  </div>
</section>

<div class="max-w-[1240px] mx-auto px-gutter py-space-xl space-y-16">

  <!-- INFO STRIP -->
  <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex items-start gap-4">
      <div class="p-3 rounded-lg bg-surface-container text-primary"><span class="material-symbols-outlined text-2xl">schedule</span></div>
      <div>
        <h2 class="font-title-md text-title-md text-primary">Jam Layanan Sekretariat</h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Senin–Jumat 08.00–15.30 WIB, Sabtu 08.00–13.00 WIB. Minggu dan libur nasional tutup.</p>
      </div>
    </div>
    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex items-start gap-4">
      <div class="p-3 rounded-lg bg-surface-container text-secondary"><span class="material-symbols-outlined text-2xl">perm_phone_msg</span></div>
      <div>
        <h2 class="font-title-md text-title-md text-primary">Hotline Pelayanan Umat</h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">{{ $tel }} / {{ $hotline }} (konsultasi pastoral &amp; minyak suci darurat).</p>
      </div>
    </div>
    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex items-start gap-4">
      <div class="p-3 rounded-lg bg-surface-container text-primary"><span class="material-symbols-outlined text-2xl">diversity_3</span></div>
      <div>
        <h2 class="font-title-md text-title-md text-primary">Wilayah &amp; Lingkungan</h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Surat pengantar Ketua Lingkungan wajib disertakan pada seluruh berkas sakramen formal.</p>
      </div>
    </div>
  </section>

  <!-- TUJUH SAKRAMEN -->
  <section>
    <div class="text-center max-w-2xl mx-auto mb-12">
      <h2 class="font-headline-md text-headline-md text-primary mb-2">Tujuh Sakramen Gereja Katolik</h2>
      <p class="font-body-md text-body-md text-on-surface-variant">Tanda kelihatan yang mengalirkan rahmat tak kelihatan dari Kristus sendiri untuk keselamatan dan pengudusan umat.</p>
      <div class="w-16 h-0.5 bg-secondary-fixed-dim mx-auto mt-4"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      {{-- Kartu standar: Baptis, Ekaristi, Krisma, Rekonsiliasi --}}
      @foreach ($sakramen as $s)
      <article class="bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden flex flex-col justify-between">
        <div>
          <div class="p-6 bg-surface-container-low flex justify-between items-start">
            <div>
              <span class="px-2.5 py-0.5 rounded font-label-sm text-label-sm bg-secondary-container text-on-secondary-container uppercase tracking-wider">{{ $s[0] }}</span>
              <h3 class="font-headline-sm text-headline-sm text-primary mt-2">{{ $s[1] }}</h3>
              <p class="font-label-md text-label-md text-on-surface-variant">{{ $s[2] }}</p>
            </div>
            <div class="w-12 h-12 rounded-lg bg-surface-container-lowest flex items-center justify-center text-primary shadow-sm shrink-0"><span class="material-symbols-outlined text-2xl">{{ $s[3] }}</span></div>
          </div>
          <div class="p-6 space-y-4">
            @foreach ($s[4] as $blok)
            <div class="font-body-sm text-body-sm text-on-surface-variant">
              <strong class="text-on-surface block mb-1">{{ $blok[0] }}</strong>
              @if (is_array($blok[1]))
                <ul class="list-disc list-inside space-y-1">
                  @foreach ($blok[1] as $li)<li>{{ $li }}</li>@endforeach
                </ul>
              @else
                {{ $blok[1] }}
              @endif
            </div>
            @endforeach
          </div>
        </div>
        @if ($s[5])
        <div class="p-6 pt-0">
          <a href="#kontak" class="block text-center bg-primary-container hover:bg-primary text-on-primary font-label-md text-label-md py-2.5 rounded-lg shadow-sm transition-all">{{ $s[5] }}</a>
        </div>
        @endif
      </article>
      @endforeach

      {{-- Perkawinan --}}
      <article class="bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden flex flex-col justify-between lg:col-span-2">
        <div>
          <div class="p-6 bg-surface-container-low flex justify-between items-start">
            <div>
              <span class="px-2.5 py-0.5 rounded font-label-sm text-label-sm bg-secondary-container text-on-secondary-container uppercase tracking-wider">Pelayanan Persekutuan</span>
              <h3 class="font-headline-sm text-headline-sm text-primary mt-2">Sakramen Perkawinan</h3>
              <p class="font-label-md text-label-md text-on-surface-variant">Pemberkatan pernikahan kudus yang satu dan tak terceraikan</p>
            </div>
            <div class="w-12 h-12 rounded-lg bg-surface-container-lowest flex items-center justify-center text-primary shadow-sm shrink-0"><span class="material-symbols-outlined text-2xl">favorite</span></div>
          </div>
          <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-3">
              <h4 class="font-title-md text-title-md text-primary flex items-center gap-1.5"><span class="material-symbols-outlined text-lg">verified_user</span> Prosedur Kanonik</h4>
              <p class="font-body-sm text-body-sm text-on-surface-variant">Pendaftaran ke Sekretariat Paroki paling lambat <strong>3 bulan</strong> sebelum rencana pernikahan, untuk penyelidikan kanonik, pengumuman, dan bimbingan rohani pasangan.</p>
              <div class="p-3 rounded-lg bg-surface-container-low font-body-sm text-body-sm">
                <strong class="text-primary block">Warta Perkawinan</strong>
                Diumumkan di <a class="underline text-primary hover:text-secondary" href="{{ url('/warta-paroki') }}">Warta Paroki</a> selama <strong>3 minggu berturut-turut</strong> sebelum perayaan.
              </div>
            </div>
            <div class="space-y-3">
              <h4 class="font-title-md text-title-md text-primary flex items-center gap-1.5"><span class="material-symbols-outlined text-lg">folder_shared</span> Berkas Kelengkapan</h4>
              <ul class="font-body-sm text-body-sm text-on-surface-variant space-y-1.5 list-disc list-inside">
                <li>Surat Baptis asli terbaru (berlaku maks. 6 bulan)</li>
                <li>Sertifikat Kursus Persiapan Perkawinan (KPP)</li>
                <li>Surat pengantar Ketua Lingkungan calon mempelai</li>
                <li>Fotokopi KTP, KK, akta kelahiran, dan surat sipil</li>
                <li>Penyelidikan kanonik bersama Romo Paroki</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="p-6 pt-0 flex flex-wrap gap-3">
          <a href="#kontak" class="inline-flex items-center gap-2 bg-primary-container hover:bg-primary text-on-primary font-label-md text-label-md px-space-lg py-2.5 rounded-lg shadow-sm transition-all">
            <span class="material-symbols-outlined text-base text-secondary-fixed">fact_check</span> Ajukan Penyelidikan Kanonik
          </a>
        </div>
      </article>

      {{-- Pengurapan Orang Sakit --}}
      <article class="bg-surface-container-lowest rounded-xl shadow-xl overflow-hidden flex flex-col justify-between">
        <div>
          <div class="p-6 bg-gradient-to-r from-primary-container to-primary text-on-primary flex justify-between items-start">
            <div>
              <span class="px-2.5 py-0.5 rounded font-label-sm text-label-sm bg-secondary-container text-on-secondary-container uppercase tracking-wider">Darurat &amp; Penyembuhan</span>
              <h3 class="font-headline-sm text-headline-sm text-surface-container-lowest mt-2">Pengurapan Orang Sakit</h3>
              <p class="font-label-md text-label-md text-primary-fixed">Pelayanan minyak suci</p>
            </div>
            <div class="w-12 h-12 rounded-lg bg-surface-container-lowest/15 flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-2xl text-secondary-fixed">emergency</span></div>
          </div>
          <div class="p-6 space-y-4">
            <div class="p-3 bg-tertiary-fixed text-on-tertiary-fixed rounded-lg font-body-sm text-body-sm flex items-center gap-2">
              <span class="material-symbols-outlined text-lg">phone_in_talk</span>
              <strong>Hotline Pastor 24 Jam: {{ $hotline }}</strong>
            </div>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Untuk umat yang sakit berat, lanjut usia dengan kondisi lemah, akan menjalani operasi besar, atau dalam keadaan kritis, baik di rumah maupun di rumah sakit.</p>
          </div>
        </div>
        <div class="p-6 pt-0">
          <a href="{{ $hotlineHref }}" class="block text-center bg-primary hover:bg-tertiary text-on-primary font-label-md text-label-md py-2.5 rounded-lg shadow-sm transition-colors">Hubungi Romo Paroki Sekarang</a>
        </div>
      </article>

      {{-- Imamat --}}
      <article class="bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden lg:col-span-2">
        <div class="p-6 bg-surface-container-low flex justify-between items-start">
          <div>
            <span class="px-2.5 py-0.5 rounded font-label-sm text-label-sm bg-secondary-container text-on-secondary-container uppercase tracking-wider">Pelayanan Persekutuan</span>
            <h3 class="font-headline-sm text-headline-sm text-primary mt-2">Sakramen Imamat</h3>
            <p class="font-label-md text-label-md text-on-surface-variant">Tahbisan suci imam, diakon, dan panggilan religius</p>
          </div>
          <div class="w-12 h-12 rounded-lg bg-surface-container-lowest flex items-center justify-center text-primary shadow-sm shrink-0"><span class="material-symbols-outlined text-2xl">person_celebrate</span></div>
        </div>
        <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
          <div class="space-y-3">
            <p class="font-body-sm text-body-sm text-on-surface-variant">Paroki Karangpanas mendorong kaum muda menanggapi panggilan khusus Tuhan sebagai imam projo KAS maupun biarawan/biarawati.</p>
            <div class="p-3 bg-surface-container-low rounded-lg font-body-sm text-body-sm text-on-surface-variant">
              <span class="font-bold text-primary block mb-1">Komisi Panggilan KAS</span>
              Konsultasi dan pendampingan rohani bagi calon seminaris melalui Sekretariat Paroki.
            </div>
          </div>
          <div class="bg-surface-container p-4 rounded-xl">
            <h5 class="font-title-md text-title-md text-primary mb-2 flex items-center gap-1.5"><span class="material-symbols-outlined text-base">favorite_border</span> Doa Panggilan</h5>
            <blockquote class="italic font-body-sm text-body-sm text-on-surface-variant">“Tuhan Yesus, Gembala yang Baik, utuslah lebih banyak pekerja ke dalam kebun anggur-Mu. Berikanlah kemurahan hati dan keberanian bagi para pemuda untuk menyerahkan hidup bagi imamat suci.”</blockquote>
          </div>
        </div>
      </article>
    </div>
  </section>

  <!-- FORMULIR -->
  <section class="bg-surface-container-lowest rounded-xl shadow-xl overflow-hidden">
    <div class="p-space-xl bg-gradient-to-r from-primary-container via-primary to-tertiary text-on-primary">
      <h2 class="font-headline-lg text-headline-lg text-surface-container-lowest">Berkas &amp; Formulir Resmi</h2>
      <p class="font-body-lg text-body-lg text-primary-fixed mt-space-xs max-w-3xl">Unduh dokumen cetak bagi umat yang memerlukan verifikasi manual dan tanda tangan basah.</p>
    </div>
    <div class="p-space-xl bg-surface-container-low grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      @foreach ($formulir as $f)
      <a href="{{ $f[1] }}" class="p-4 rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex items-center justify-between gap-3">
        <div class="flex items-center gap-3">
          <span class="material-symbols-outlined text-primary text-3xl">description</span>
          <div>
            <p class="font-title-md text-title-md text-on-surface">{{ $f[0] }}</p>
            <span class="font-label-sm text-label-sm text-on-surface-variant">PDF</span>
          </div>
        </div>
        <span class="material-symbols-outlined text-primary">download</span>
      </a>
      @endforeach
    </div>
  </section>

  <!-- KONTAK -->
  <section id="kontak" class="rounded-2xl bg-gradient-to-r from-primary-container via-primary to-tertiary text-on-primary p-8 lg:p-10 flex flex-col lg:flex-row items-center justify-between gap-8 shadow-xl">
    <div class="space-y-2 max-w-2xl text-center lg:text-left">
      <h3 class="font-headline-md text-headline-md text-surface-container-lowest">Memerlukan Konsultasi Sakramen?</h3>
      <p class="font-body-md text-body-md text-primary-fixed">Sekretariat siap membantu konsultasi kanonik perkawinan campur, baptis dewasa, validasi surat permandian dari luar paroki, dan intensi Ekaristi.</p>
      <p class="font-label-md text-label-md text-secondary-fixed pt-1">Jl. Dr. Wahidin No. 110, Karangpanas, Candisari, Kota Semarang 50254</p>
    </div>
    <div class="flex flex-col sm:flex-row gap-3 w-full lg:w-auto">
      <a href="{{ $wa }}" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 bg-secondary-container hover:bg-secondary-fixed text-on-secondary-container font-label-lg text-label-lg px-space-lg py-space-sm rounded-lg shadow-md transition-all">
        <span class="material-symbols-outlined text-[20px]">chat</span> WhatsApp Sekretariat
      </a>
      <a href="{{ $maps }}" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 bg-surface-container-lowest text-primary hover:bg-surface-container-low font-label-lg text-label-lg px-space-lg py-space-sm rounded-lg shadow-sm transition-all">
        <span class="material-symbols-outlined text-[20px]">location_on</span> Peta Lokasi
      </a>
    </div>
  </section>
</div>
@endsection