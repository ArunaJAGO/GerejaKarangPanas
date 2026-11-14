@extends('layouts.app')

@section('title', 'Profil OMK - Paroki Karangpanas Semarang')
@section('nav-active', 'omk')

{{-- ============================================================
     DATA: ubah bagian ini saja. Semua isi masih CONTOH dari desain.
     ============================================================ --}}
@php
  $wa        = 'https://wa.me/6281234567890?text=' . rawurlencode('Halo OMK Karangpanas! Mau kenalan dan tanya kegiatan dong');
  $igUser    = 'omk_karangpanas';
  $igUrl     = 'https://instagram.com/' . $igUser;
  $moderator = 'RD. Ign. Triatmoko, Pr (Romo Moderator)';

  // [ikon, badge, judul, deskripsi, gaya] gaya: 'dark' (marun), 'gold' (emas), 'soft' (biru muda)
  $kegiatan = [
    ['church', 'Sebulan Sekali', 'Misa Kaum Muda (MKM)', 'Perayaan Ekaristi khas anak muda dengan homili tematik yang nyambung, iringan musik akustik, dan diakhiri nongkrong santai di pelataran gereja.', 'dark'],
    ['favorite', 'Suasana Akrab', 'Kumpul Rutin & Sharing', 'Ngobrol santai seputar kehidupan kampus, dunia kerja, dan pendalaman iman ringan. Sesekali ada doa Taize lilin hening di Gua Maria.', 'gold'],
    ['volunteer_activism', 'Aksi Nyata', 'Baksos & Peduli Sesama', 'Terjun langsung menyalurkan bantuan bagi lansia dan warga sekitar, aksi lingkungan, serta kunjungan ke panti asuhan.', 'soft'],
    ['sports_soccer', 'Rutin', 'Olahraga & Fun Games', 'Badminton dan futsal bareng, jalan santai keliling perbukitan Semarang, dan kompetisi mini antar-teman muda.', 'soft'],
    ['camping', 'Momen Berkesan', 'Karangpanas Youth Camp', 'Kemah keakraban dan live-in di desa lereng gunung. Ada api unggun, game kekompakan, dan pertemanan yang bertahan lama.', 'gold'],
    ['theater_comedy', 'Kreativitas', 'Tablo & Seni Kreatif', 'Pementasan Tablo Kisah Sengsara di Jumat Agung, produksi video pendek, desain konten medsos, dan panggung musik rohani.', 'dark'],
  ];

  $galeri = [
    ['Doa & Taize Lilin Senja', 'Momen hening dan teduh menimba kekuatan batin bersama di Gua Maria Karangpanas.',
     'https://lh3.googleusercontent.com/aida-public/AB6AXuALcwHLCKnq_YTJ5KPxA0Bkjlvyu37U85pJPJIPc0VgyT14oFGXtTYqqDiFBP_XQDJ8FfSPX3XMvN4EnMspOuz7gDXbeBovtDOdqgiFliduKX5q2RtDZ9mvaaPk2oMjWpm3WaGOTYqSFlvHswKBpgc28PGIq9ljiwqS33PdNs5qsRFKg5HJ3wNTw4GwjkShryHjGcWX3m04GWu7Yc3IE9UURMp9NE7dXxf_S-3hafE'],
    ['Misa Kaum Muda yang Hidup', 'Pelayanan liturgis, paduan suara enerjik, dan suasana altar penuh sukacita.',
     'https://lh3.googleusercontent.com/aida-public/AB6AXuD3cpGN-yJJfNgd217u-8dn2VUJ_dKCUCuX5PsoHUSY31BQO2Ha0NdEn2FYuCov5wJ97zn0px8vdKDTekzpq9eyBLRVbaK2M4pF-0-DRZPjYb_yxxxA80Cz3StYDf2mhRUY55neaa7F71XEeVMEND5g6bQ0mSzCljVtrIt69sg9rdvjYxzGbpQAli1X0Q9FoRIFenxHBvUpOMC4AGbBFlcfoMPMPvRaJcw0e9PW89w'],
    ['Nongkrong & Latihan Band', 'Pelataran Graha Athanasius jadi tempat nongkrong asyik sehabis tugas atau kuliah.',
     'https://lh3.googleusercontent.com/aida-public/AB6AXuBf6scd7fIUNWYjzeZHuPoa1ZUc3FegE642JUCXCYTHqWL6KD0JAjaPvLMjtnGhAfTHZjtz_81e_911qZFEDAuB_z4RFBD5U2-WQH-fPRTpApJpzNdEpf2MauXuGe3bK0jEHkSzRkRC9h8mEe-LHnOQxc2ufuTrdrnc3Kv4VRF665Vqg3oth84xhF9Dpq_Orx3yUhFjb5DLlfaMMpWHAy0xnDt433JktMfAN0qBLfg'],
  ];

  $gaya = [
    'dark' => ['bg-primary-container text-on-primary', 'bg-primary-container text-on-primary'],
    'gold' => ['bg-secondary-container text-on-secondary-container', 'bg-secondary-container text-on-secondary-container'],
    'soft' => ['bg-surface-container-high text-primary', 'bg-surface-container-high text-primary'],
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
        Kerasulan Kaum Muda • OMK Karangpanas
      </span>
      <h1 class="font-headline-lg text-2xl sm:text-headline-lg text-surface-container-lowest leading-tight">Hai, Kami Orang Muda Katolik Karangpanas!</h1>
      <p class="font-body-lg text-sm sm:text-body-lg text-primary-fixed">Wadah kumpul, saling menguatkan dalam iman, dan seru-seruan bareng teman-teman muda Katolik di Semarang. Nggak perlu canggung, siapa pun kamu, kamu diterima di sini!</p>
      <div class="flex flex-wrap items-center gap-space-md pt-space-xs">
        <a class="inline-flex items-center gap-space-xs bg-secondary-container hover:bg-secondary-fixed text-on-secondary-container font-label-lg text-label-lg px-space-lg py-space-sm rounded-lg shadow-md transition-all" href="#kegiatan">
          <span class="material-symbols-outlined text-[20px]">explore</span><span>Cek Kegiatan Kita</span>
        </a>
        <a class="inline-flex items-center gap-space-xs bg-surface-container-lowest text-primary hover:bg-surface-container-low font-label-lg text-label-lg px-space-lg py-space-sm rounded-lg shadow-sm transition-all" href="#kontak">
          <span class="material-symbols-outlined text-[20px]">chat</span><span>Yuk Kenalan &amp; Ngobrol</span>
        </a>
        <a class="inline-flex items-center gap-space-xs text-surface-container-lowest hover:text-secondary-fixed font-label-lg text-label-lg px-space-md py-space-sm transition-colors" href="{{ $igUrl }}" target="_blank" rel="noopener">
          <span class="material-symbols-outlined text-[20px]">photo_camera</span><span>&#64;{{ $igUser }}</span>
        </a>
      </div>
      <div class="mt-space-sm bg-surface-container-lowest/10 backdrop-blur-md rounded-xl p-space-md max-w-2xl shadow-sm flex items-start gap-space-sm">
        <span class="material-symbols-outlined text-secondary-fixed text-2xl shrink-0">format_quote</span>
        <div>
          <p class="font-title-md text-title-md italic font-light text-surface-container-lowest leading-snug">“Jadilah teladan dalam perkataan, tingkah laku, dan kasih.”</p>
          <span class="font-label-sm text-label-sm text-secondary-fixed mt-1 block font-semibold tracking-wide">— 1 Timotius 4:12</span>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="max-w-[1240px] mx-auto px-gutter py-space-xl space-y-16">

  <!-- INTRO -->
  <section class="max-w-3xl mx-auto text-center space-y-4">
    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
      <span class="material-symbols-outlined text-[16px]">waving_hand</span> Rumah Kedua Anak Muda Karangpanas
    </span>
    <h2 class="font-headline-lg text-headline-lg text-primary">Tempat Bertumbuh yang Hangat &amp; Menyenangkan</h2>
    <p class="font-body-md text-body-md text-on-surface-variant">
      Baik kamu yang baru lulus SMP/SMA, mahasiswa perantauan, maupun pekerja muda di sekitar Karangpanas, kamu selalu punya kawan untuk berbagi cerita dan melayani bersama. Didampingi penuh kasih oleh <strong>{{ $moderator }}</strong> dan tim pengurus yang santai dan terbuka.
    </p>
  </section>

  <!-- KEGIATAN -->
  <section class="space-y-8 scroll-mt-24" id="kegiatan">
    <div class="text-center max-w-2xl mx-auto space-y-2">
      <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase font-semibold">Dinamika &amp; Keseharian</span>
      <h2 class="font-headline-lg text-headline-lg text-primary">Kegiatan Kita Apa Aja?</h2>
      <p class="font-body-sm text-body-sm text-on-surface-variant">Nggak melulu formal. Kegiatan kita dirancang seru, bermakna, dan fleksibel buat semua kalangan.</p>
      <div class="w-16 h-0.5 bg-secondary-fixed-dim mx-auto"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ($kegiatan as $k)
      <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm hover:shadow-md transition-all space-y-3">
        <div class="w-12 h-12 rounded-xl {{ $gaya[$k[4]][0] }} flex items-center justify-center"><span class="material-symbols-outlined text-2xl">{{ $k[0] }}</span></div>
        <span class="inline-block px-2.5 py-0.5 rounded {{ $gaya[$k[4]][1] }} font-label-sm text-label-sm font-semibold">{{ $k[1] }}</span>
        <h3 class="font-title-lg text-title-lg text-primary">{{ $k[2] }}</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant">{{ $k[3] }}</p>
      </div>
      @endforeach
    </div>
  </section>

  <!-- GALERI -->
  <section class="space-y-8">
    <div class="text-center max-w-2xl mx-auto space-y-2">
      <span class="font-label-sm text-label-sm text-secondary tracking-widest uppercase font-semibold">Momen Kebersamaan</span>
      <h2 class="font-headline-lg text-headline-lg text-primary">Keseruan Bareng OMK</h2>
      <p class="font-body-sm text-body-sm text-on-surface-variant">Intip sekilas hangatnya perjumpaan dan tawa teman-teman OMK Karangpanas.</p>
      <div class="w-16 h-0.5 bg-secondary-fixed-dim mx-auto"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      @foreach ($galeri as $g)
      <div class="rounded-xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-md transition-all group">
        <div class="h-56 overflow-hidden bg-surface-dim">
          <img alt="{{ $g[0] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="{{ $g[2] }}" loading="lazy"/>
        </div>
        <div class="p-4">
          <h3 class="font-title-md text-title-md text-primary">{{ $g[0] }}</h3>
          <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">{{ $g[1] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  <!-- KONTAK -->
  <section id="kontak" class="scroll-mt-24 rounded-2xl bg-gradient-to-r from-primary-container via-primary to-tertiary text-on-primary p-8 lg:p-12 shadow-xl text-center space-y-6">
    <div class="w-14 h-14 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center mx-auto shadow">
      <span class="material-symbols-outlined text-3xl">sentiment_satisfied</span>
    </div>
    <div class="space-y-3 max-w-2xl mx-auto">
      <h2 class="font-headline-lg text-headline-lg text-surface-container-lowest">Mau Gabung atau Sekadar Main Bareng?</h2>
      <p class="font-body-lg text-body-lg text-primary-fixed">Pintu OMK Karangpanas selalu terbuka buat kamu! Mau tanya info kegiatan, cari teman sesama Katolik di Semarang, atau langsung ikut kumpul, sapa kami aja ya. Nggak ada syarat ribet!</p>
    </div>
    <div class="flex flex-wrap items-center justify-center gap-4">
      <a class="inline-flex items-center gap-2 bg-secondary-container hover:bg-secondary-fixed text-on-secondary-container font-label-lg text-label-lg px-space-lg py-space-sm rounded-lg shadow-md transition-all" href="{{ $wa }}" target="_blank" rel="noopener">
        <span class="material-symbols-outlined text-[20px]">chat</span> Chat WhatsApp PIC OMK
      </a>
      <a class="inline-flex items-center gap-2 bg-surface-container-lowest text-primary hover:bg-surface-container-low font-label-lg text-label-lg px-space-lg py-space-sm rounded-lg shadow-sm transition-all" href="{{ $igUrl }}" target="_blank" rel="noopener">
        <span class="material-symbols-outlined text-[20px]">photo_camera</span> DM Instagram &#64;{{ $igUser }}
      </a>
    </div>
    <p class="font-label-sm text-label-sm text-primary-fixed">Paroki Santo Athanasius Agung • Jl. Dr. Wahidin No. 110, Candisari, Semarang</p>
  </section>
</div>
@endsection