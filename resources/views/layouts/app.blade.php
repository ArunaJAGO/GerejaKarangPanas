<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0"/>
<meta name="theme-color" content="#580014"/>
<meta name="mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
<meta name="apple-mobile-web-app-title" content="Karangpanas"/>
<title>@yield('title', 'Gereja Santo Athanasius Agung Karangpanas')</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Merriweather:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<style>
  html, body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    -webkit-tap-highlight-color: transparent;
  }
  html { scroll-behavior: smooth; }
  ::-webkit-scrollbar { width: 6px; height: 6px; }
  ::-webkit-scrollbar-thumb { background: rgba(88,0,20,0.2); border-radius: 999px; }
  ::-webkit-scrollbar-track { background: transparent; }
  @supports (padding-bottom: env(safe-area-inset-bottom)) {
    .safe-bottom {
      padding-bottom: calc(0.375rem + env(safe-area-inset-bottom));
    }
  }
</style>
<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
<script id="tailwind-config">
tailwind.config = {
  darkMode: "class",
  theme: { extend: {
    colors: {
      "outline-variant":"#ddbfc0","surface-bright":"#f9f9ff","on-background":"#111c2d","primary":"#580014","primary-fixed-dim":"#ffb3b5","primary-container":"#7a1526","inverse-surface":"#263143","on-secondary-fixed-variant":"#574500","on-primary-fixed-variant":"#861f2e","surface-container-low":"#f0f3ff","secondary-fixed-dim":"#e9c349","tertiary-fixed-dim":"#ffb2b6","on-secondary-fixed":"#241a00","on-secondary-container":"#745c00","tertiary":"#540a18","tertiary-container":"#71222c","secondary":"#735c00","on-primary-fixed":"#40000c","primary-fixed":"#ffdada","error":"#ba1a1a","secondary-container":"#fed65b","surface-container-lowest":"#ffffff","inverse-on-surface":"#ecf1ff","surface-variant":"#d8e3fb","on-error":"#ffffff","surface":"#f9f9ff","on-surface":"#111c2d","on-primary":"#ffffff","secondary-fixed":"#ffe088","surface-container-highest":"#d8e3fb","inverse-primary":"#ffb3b5","surface-tint":"#a63744","on-surface-variant":"#574142","surface-container-high":"#dee8ff","surface-dim":"#cfdaf2","error-container":"#ffdad6","tertiary-fixed":"#ffdadb","on-secondary":"#ffffff","on-error-container":"#93000a","background":"#f9f9ff","surface-container":"#e7eeff","on-tertiary-fixed-variant":"#7c2a34","on-tertiary":"#ffffff","on-primary-container":"#ff848d","outline":"#8a7171","on-tertiary-container":"#f68a92","on-tertiary-fixed":"#40000d"
    },
    borderRadius: {"DEFAULT":"0.125rem","lg":"0.25rem","xl":"0.5rem","full":"0.75rem"},
    spacing: {"space-xs":"0.25rem","gutter":"1.5rem","space-xl":"2.5rem","space-md":"1rem","space-lg":"1.5rem","space-sm":"0.5rem","margin":"2rem"},
    fontFamily: {
      "label-md":["Inter"],"body-md":["Inter"],"title-lg":["Merriweather"],"headline-lg":["Merriweather"],"label-lg":["Inter"],"title-md":["Inter"],"headline-sm":["Merriweather"],"headline-md":["Merriweather"],"body-sm":["Inter"],"label-sm":["Inter"],"body-lg":["Inter"],"display-lg-mobile":["Merriweather"],"display-lg":["Merriweather"],"headline-lg-mobile":["Merriweather"]
    },
    fontSize: {
      "label-md":["12px",{lineHeight:"16px",letterSpacing:"0.04em",fontWeight:"600"}],
      "body-md":["16px",{lineHeight:"26px",fontWeight:"400"}],
      "title-lg":["18px",{lineHeight:"26px",fontWeight:"700"}],
      "headline-lg":["32px",{lineHeight:"42px",letterSpacing:"-0.01em",fontWeight:"700"}],
      "label-lg":["14px",{lineHeight:"20px",letterSpacing:"0.02em",fontWeight:"600"}],
      "title-md":["16px",{lineHeight:"24px",fontWeight:"600"}],
      "headline-sm":["20px",{lineHeight:"28px",fontWeight:"700"}],
      "headline-md":["24px",{lineHeight:"32px",fontWeight:"700"}],
      "body-sm":["14px",{lineHeight:"22px",fontWeight:"400"}],
      "label-sm":["11px",{lineHeight:"14px",letterSpacing:"0.05em",fontWeight:"500"}],
      "body-lg":["18px",{lineHeight:"28px",fontWeight:"400"}],
      "display-lg-mobile":["32px",{lineHeight:"40px",letterSpacing:"-0.01em",fontWeight:"700"}],
      "display-lg":["48px",{lineHeight:"60px",letterSpacing:"-0.02em",fontWeight:"700"}],
      "headline-lg-mobile":["26px",{lineHeight:"34px",fontWeight:"700"}]
    }
  } }
}
</script>
<style>
/* 1. Desktop Liquid Glass */
.liquid-nav-container{position:relative;background:rgba(246,242,240,.65);border:1px solid rgba(220,212,210,.85);box-shadow:inset 0 1px 2px rgba(0,0,0,.04),0 2px 8px rgba(88,0,20,.03)}
.liquid-glass-pill{position:absolute;border-radius:.75rem;pointer-events:none;background:linear-gradient(135deg,rgba(255,255,255,.96) 0%,rgba(255,255,255,.72) 100%);backdrop-filter:blur(16px) saturate(190%);-webkit-backdrop-filter:blur(16px) saturate(190%);border:1px solid #fff;box-shadow:0 4px 14px -1px rgba(122,21,38,.12),0 2px 6px -1px rgba(0,0,0,.04),inset 0 1px 2px #fff,inset 0 -1px 2px rgba(122,21,38,.05);transition:left .38s cubic-bezier(.22,1,.36,1),top .38s cubic-bezier(.22,1,.36,1),width .38s cubic-bezier(.22,1,.36,1),height .38s cubic-bezier(.22,1,.36,1),opacity .25s ease;z-index:1}
.liquid-glass-pill::before{content:'';position:absolute;inset:1px;border-radius:.75rem;background:linear-gradient(180deg,rgba(255,255,255,.85) 0%,rgba(255,255,255,.12) 60%);pointer-events:none}

/* 2. Mobile Floating Liquid Glass Bar */
.mobile-liquid-nav-container {
  position: relative;
  background: rgba(255, 255, 255, 0.78);
  backdrop-filter: blur(20px) saturate(190%);
  -webkit-backdrop-filter: blur(20px) saturate(190%);
  border: 1px solid rgba(255, 255, 255, 0.85);
  box-shadow: 0 10px 30px -5px rgba(88, 0, 20, 0.14), 0 4px 12px rgba(0, 0, 0, 0.05), inset 0 1px 2px rgba(255, 255, 255, 0.9);
}
.mobile-liquid-glass-pill {
  position: absolute;
  border-radius: 0.85rem;
  pointer-events: none;
  background: linear-gradient(135deg, rgba(255, 255, 255, 0.98) 0%, rgba(255, 255, 255, 0.82) 100%);
  backdrop-filter: blur(16px) saturate(200%);
  -webkit-backdrop-filter: blur(16px) saturate(200%);
  border: 1px solid #ffffff;
  box-shadow: 0 4px 14px -1px rgba(88, 0, 20, 0.16), 0 2px 6px -1px rgba(0, 0, 0, 0.04), inset 0 1px 2px #fff, inset 0 -1px 2px rgba(88, 0, 20, 0.06);
  transition: left 0.35s cubic-bezier(.22, 1, .36, 1), top 0.35s cubic-bezier(.22, 1, .36, 1), width 0.35s cubic-bezier(.22, 1, .36, 1), height 0.35s cubic-bezier(.22, 1, .36, 1), opacity 0.25s ease;
  z-index: 1;
}
.mobile-liquid-glass-pill::before {
  content: '';
  position: absolute;
  inset: 1px;
  border-radius: 0.85rem;
  background: linear-gradient(180deg, rgba(255, 255, 255, 0.95) 0%, rgba(255, 255, 255, 0.2) 60%);
  pointer-events: none;
}

/* 3. Bottom Sheet Pop Up Animation */
#mobile-bottom-sheet {
  transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.25s ease;
}

/* 4. Page Slide Transitions & Top Progress Bar */
#page-progress-bar {
  position: fixed;
  top: 0;
  left: 0;
  height: 3px;
  width: 0%;
  background: linear-gradient(90deg, #580014 0%, #e9c349 50%, #7a1526 100%);
  z-index: 9999;
  transition: width 0.22s cubic-bezier(0.2, 0.8, 0.4, 1), opacity 0.25s ease;
  opacity: 0;
  pointer-events: none;
  box-shadow: 0 0 10px rgba(233, 195, 73, 0.7);
}

#page-wrapper {
  transition: transform 0.32s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.28s ease;
}
/* will-change hanya saat animasi, supaya tidak membuat layer permanen */
#page-wrapper.is-animating { will-change: transform, opacity; }

/* Keluar: cepat. Masuk (.slide-active): lebih lambat dan lembut */
.slide-out-left,
.slide-out-right { transition-duration: 0.18s, 0.18s; opacity: 0; }
.slide-out-left  { transform: translate3d(-24px, 0, 0); }
.slide-out-right { transform: translate3d(24px, 0, 0); }

.slide-in-left  { transform: translate3d(-24px, 0, 0); opacity: 0; }
.slide-in-right { transform: translate3d(24px, 0, 0);  opacity: 0; }

/* none (bukan translateX(0)) supaya elemen fixed/sticky di dalam halaman tidak terpengaruh */
.slide-active { transform: none; opacity: 1; }

@media (prefers-reduced-motion: reduce) {
  #page-wrapper, .liquid-glass-pill, .mobile-liquid-glass-pill { transition: none !important; }
  .slide-out-left, .slide-out-right, .slide-in-left, .slide-in-right { transform: none; }
}
</style>
@stack('head')
</head>
<body class="bg-surface font-body-md text-body-md text-on-surface antialiased selection:bg-secondary-fixed selection:text-primary">

<!-- TOP PROGRESS BAR SAAT PERPINDAHAN HALAMAN -->
<div id="page-progress-bar" aria-hidden="true"></div>

<!-- HEADER UTAMA -->
<header class="fixed top-0 w-full z-50 bg-surface/95 backdrop-blur-md shadow-[0_2px_12px_rgba(88,0,20,0.06)] border-b border-outline-variant/30">
  <div class="h-16 sm:h-20 max-w-[1240px] mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between gap-2 sm:gap-4">
    <!-- Brand Logo & Nama Gereja -->
    <a href="{{ url('/') }}" class="flex items-center gap-2.5 sm:gap-3.5 min-w-0 group">
      <img alt="Logo Paroki Karangpanas" class="h-10 sm:h-12 w-auto object-contain shrink-0 transition-transform group-hover:scale-105" src="{{ asset('logogereja.png') }}" onerror="this.onerror=null; this.src='/logogereja.png';"/>
      <div class="flex flex-col min-w-0">
        <span class="text-sm sm:text-base lg:text-title-lg font-bold text-primary leading-tight truncate">Gereja Santo Athanasius Agung</span>
        <span class="text-[10px] sm:text-label-sm text-on-surface-variant truncate tracking-wide uppercase">Karangpanas • Keuskupan Agung Semarang</span>
      </div>
    </a>

    {{-- DESKTOP NAVBAR: Liquid Glass Navigation (aktif pada layar desktop xl / >= 1280px) --}}
    <nav id="main-nav" data-active="@yield('nav-active', 'beranda')" class="hidden xl:flex items-center gap-1 relative p-1.5 rounded-2xl liquid-nav-container backdrop-blur-md">
      <div id="liquid-glass-pill" class="liquid-glass-pill opacity-0" aria-hidden="true"></div>

      <a href="{{ url('/') }}" class="nav-glass-link inline-flex items-center justify-center text-center relative z-10 w-24 h-11 rounded-xl text-[13px] leading-tight font-medium transition-colors duration-200 text-on-surface-variant hover:text-primary" data-section="beranda">Beranda</a>
      <a href="{{ url('/jadwal-misa') }}" class="nav-glass-link inline-flex items-center justify-center text-center relative z-10 w-24 h-11 rounded-xl text-[13px] leading-tight font-medium transition-colors duration-200 text-on-surface-variant hover:text-primary" data-section="jadwal-misa">Jadwal<br>Misa</a>
      <a href="{{ url('/warta-paroki') }}" class="nav-glass-link inline-flex items-center justify-center text-center relative z-10 w-24 h-11 rounded-xl text-[13px] leading-tight font-medium transition-colors duration-200 text-on-surface-variant hover:text-primary" data-section="warta-terkini">Warta<br>Paroki</a>
      <a href="{{ url('/pelayanan-sakramen') }}" class="nav-glass-link inline-flex items-center justify-center text-center relative z-10 w-28 h-11 rounded-xl text-[13px] leading-tight font-medium transition-colors duration-200 text-on-surface-variant hover:text-primary" data-section="sakramen">Pelayanan<br>Sakramen</a>
      <a href="{{ url('/profil-omk') }}" class="nav-glass-link inline-flex items-center justify-center text-center relative z-10 w-24 h-11 rounded-xl text-[13px] leading-tight font-medium transition-colors duration-200 text-on-surface-variant hover:text-primary" data-section="omk">Profil<br>OMK</a>
      <a href="{{ url('/persembahan-donasi') }}" class="nav-glass-link inline-flex items-center justify-center text-center relative z-10 w-32 h-11 rounded-xl text-[13px] leading-tight font-medium transition-colors duration-200 text-on-surface-variant hover:text-primary" data-section="donasi">Persembahan<br>&amp; Donasi</a>
    </nav>

    <!-- Tombol Aksi Kanan: Buka Sidebar Portal Umat -->
    <div class="flex items-center gap-2 sm:gap-3 shrink-0">
      <button type="button" id="open-portal-sidebar-btn" class="inline-flex items-center gap-1.5 bg-primary-container hover:bg-primary text-on-primary font-label-md text-label-md px-3 sm:px-3.5 py-1.5 sm:py-2 rounded-xl shadow-sm transition-all focus:outline-none focus:ring-2 focus:ring-secondary-fixed cursor-pointer">
        <span class="material-symbols-outlined text-[18px] text-secondary-fixed">lock</span>
        <span class="text-xs sm:text-sm font-semibold">Portal Umat</span>
        <span class="inline-block w-2 h-2 rounded-full bg-secondary-fixed ml-0.5"></span>
      </button>

      <button type="button" id="open-portal-avatar-btn" aria-label="Buka Sidebar Portal Umat" class="w-9 h-9 sm:w-8 sm:h-8 rounded-full bg-primary hover:bg-tertiary transition-colors flex items-center justify-center shrink-0 text-on-primary shadow-sm cursor-pointer" title="Portal Umat">
        <span class="material-symbols-outlined text-[18px]">person</span>
      </button>
    </div>
  </div>
</header>

<!-- BACKDROP PORTAL UMAT SIDEBAR -->
<div id="portal-umat-backdrop" class="fixed inset-0 bg-inverse-surface/60 backdrop-blur-sm z-50 opacity-0 pointer-events-none transition-opacity duration-300"></div>

<!-- SIDEBAR PORTAL UMAT (SLIDE-OVER DARI KANAN) -->
<aside id="portal-umat-sidebar" class="fixed top-0 right-0 bottom-0 w-[88%] sm:w-96 max-w-md bg-surface-container-lowest z-50 translate-x-full transition-transform duration-300 ease-in-out shadow-2xl flex flex-col" aria-label="Portal Umat Paroki Karangpanas">
  <!-- Header Sidebar -->
  <div class="p-4 sm:p-5 border-b border-outline-variant/30 flex items-center justify-between bg-surface-container-low">
    <div class="flex items-center gap-3 min-w-0">
      <div class="w-10 h-10 rounded-xl bg-primary-container text-on-primary flex items-center justify-center shadow-sm shrink-0">
        <span class="material-symbols-outlined text-xl text-secondary-fixed">shield_person</span>
      </div>
      <div class="min-w-0">
        <h3 class="font-title-md text-title-md text-primary font-bold leading-tight truncate">Portal Umat</h3>
        <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider text-[10px] truncate">Paroki Karangpanas Semarang</p>
      </div>
    </div>
    <button id="portal-sidebar-close" type="button" aria-label="Tutup Portal Umat" class="w-9 h-9 rounded-xl bg-surface hover:bg-surface-container text-on-surface-variant flex items-center justify-center transition-colors shrink-0">
      <span class="material-symbols-outlined text-xl">close</span>
    </button>
  </div>

  <!-- Liturgical & Status Banner -->
  <div class="px-5 py-2.5 bg-primary/5 border-b border-outline-variant/20 flex items-center justify-between text-[11px] text-on-surface-variant">
    <span class="inline-flex items-center gap-1.5 font-semibold text-primary">
      <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Sistem Informasi Umat
    </span>
    <span class="italic text-[10px]">Keuskupan Agung Semarang</span>
  </div>

  <!-- Content Sidebar: Card Masuk & Daftar -->
  <div class="flex-1 overflow-y-auto p-5 space-y-4">
    <!-- Card Masuk Portal Umat -->
    <div class="p-4 rounded-2xl bg-surface-container-low border border-primary/20 shadow-sm space-y-3">
      <div class="flex items-center gap-2.5">
        <div class="w-8 h-8 rounded-lg bg-primary-container text-on-primary flex items-center justify-center">
          <span class="material-symbols-outlined text-base text-secondary-fixed">login</span>
        </div>
        <div>
          <h4 class="font-title-md text-sm font-bold text-primary">Masuk ke Akun Umat</h4>
          <p class="text-[11px] text-on-surface-variant">Nomor KKG atau Email / WhatsApp</p>
        </div>
      </div>
      <p class="text-xs text-on-surface-variant leading-relaxed">
        Kelola data Kartu Keluarga Gereja (KKG), pendaftaran intensi misa, riwayat sakramen, dan warta lingkungan.
      </p>
      <a href="{{ route('portal.login') }}" class="w-full inline-flex items-center justify-center gap-2 bg-primary-container hover:bg-primary text-on-primary py-2.5 px-4 rounded-xl text-xs font-semibold shadow-sm transition-all">
        <span class="material-symbols-outlined text-base text-secondary-fixed">lock_open</span>
        <span>Masuk Portal Sekarang</span>
      </a>
    </div>

    <!-- Card Pendaftaran KKG Baru -->
    <div class="p-4 rounded-2xl bg-surface-container-low border border-secondary/30 shadow-sm space-y-3">
      <div class="flex items-center gap-2.5">
        <div class="w-8 h-8 rounded-lg bg-secondary-container text-on-secondary-container flex items-center justify-center">
          <span class="material-symbols-outlined text-base">how_to_reg</span>
        </div>
        <div>
          <h4 class="font-title-md text-sm font-bold text-primary">Pendaftaran KKG Baru</h4>
          <p class="text-[11px] text-on-surface-variant">Registrasi Umat Baru Paroki</p>
        </div>
      </div>
      <p class="text-xs text-on-surface-variant leading-relaxed">
        Bagi keluarga Katolik baru yang pindah domisili atau baru membentuk keluarga di wilayah Paroki Karangpanas.
      </p>
      <a href="{{ route('portal.daftar') }}" class="w-full inline-flex items-center justify-center gap-2 bg-secondary-container hover:bg-secondary-fixed text-on-secondary-container py-2.5 px-4 rounded-xl text-xs font-semibold shadow-sm transition-all">
        <span class="material-symbols-outlined text-base">person_add</span>
        <span>Formulir Pendaftaran KKG</span>
      </a>
    </div>

    <!-- Layanan Terkait -->
    <div class="space-y-2 pt-2">
      <span class="text-[11px] font-semibold text-on-surface-variant uppercase tracking-wider block">Layanan Terpadu Umat</span>

      <a href="{{ url('/pelayanan-sakramen') }}" class="flex items-center justify-between p-3 rounded-xl bg-surface hover:bg-surface-container transition-colors border border-outline-variant/20">
        <div class="flex items-center gap-2.5">
          <span class="material-symbols-outlined text-primary text-lg">fact_check</span>
          <span class="text-xs font-medium text-on-surface">Syarat &amp; Blangko Sakramen</span>
        </div>
        <span class="material-symbols-outlined text-sm text-outline">arrow_forward</span>
      </a>

      <a href="{{ url('/persembahan-donasi') }}" class="flex items-center justify-between p-3 rounded-xl bg-surface hover:bg-surface-container transition-colors border border-outline-variant/20">
        <div class="flex items-center gap-2.5">
          <span class="material-symbols-outlined text-secondary text-lg">qr_code_2</span>
          <span class="text-xs font-medium text-on-surface">Kolekte &amp; Persembahan Kasih</span>
        </div>
        <span class="material-symbols-outlined text-sm text-outline">arrow_forward</span>
      </a>
    </div>
  </div>

  <!-- Footer Sidebar: Bantuan Akun -->
  <div class="p-4 border-t border-outline-variant/30 bg-surface-container-low space-y-2">
    <div class="flex items-start gap-2.5 text-xs text-on-surface-variant">
      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">help</span>
      <div>
        <p class="font-semibold text-primary">Lupa Nomor KKG atau Butuh Verifikasi?</p>
        <p class="text-[11px]">Hubungi Sekretariat Paroki setiap hari kerja.</p>
      </div>
    </div>
    <div class="grid grid-cols-2 gap-2 pt-1">
      <a href="tel:0248312633" class="inline-flex items-center justify-center gap-1.5 py-2 px-3 rounded-lg border border-primary text-primary text-xs font-semibold hover:bg-primary/5 transition-colors">
        <span class="material-symbols-outlined text-sm">call</span>
        <span>Telepon</span>
      </a>
      <a href="https://wa.me/6281225001925?text=Halo%20Sekretariat%20Paroki%20Karangpanas,%20saya%20butuh%20bantuan%20terkait%20Portal%20Umat%20KKG" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-1.5 py-2 px-3 rounded-lg bg-green-700 text-white text-xs font-semibold hover:bg-green-800 transition-colors shadow-sm">
        <span class="material-symbols-outlined text-sm">chat</span>
        <span>WhatsApp</span>
      </a>
    </div>
  </div>
</aside>

<!-- BACKDROP BOTTOM SHEET (MENU LAINNYA) -->
<div id="mobile-sheet-backdrop" class="fixed inset-0 bg-inverse-surface/60 backdrop-blur-sm z-50 opacity-0 pointer-events-none transition-opacity duration-300 xl:hidden"></div>

<!-- BOTTOM SHEET: POP UP KE ATAS UNTUK MENU LAINNYA (HP / TABLET) -->
<div id="mobile-bottom-sheet" class="fixed inset-x-0 bottom-0 z-50 translate-y-full opacity-0 xl:hidden flex flex-col justify-end pointer-events-none" aria-label="Menu Layanan Tambahan">
  <div class="bg-surface-container-lowest rounded-t-3xl max-w-lg mx-auto w-full shadow-2xl border-t border-outline-variant/30 max-h-[85vh] flex flex-col overflow-hidden pointer-events-auto">
    <!-- Handle Bar Drag -->
    <div class="pt-3 pb-1 flex justify-center cursor-pointer" id="sheet-handle">
      <div class="w-12 h-1.5 bg-outline-variant/70 rounded-full"></div>
    </div>

    <!-- Sheet Header -->
    <div class="px-5 py-3 border-b border-outline-variant/20 flex items-center justify-between">
      <div class="flex items-center gap-2.5">
        <div class="w-9 h-9 rounded-xl bg-primary-container text-on-primary flex items-center justify-center shadow-sm">
          <span class="material-symbols-outlined text-lg text-secondary-fixed">widgets</span>
        </div>
        <div>
          <h3 class="font-title-md text-title-md text-primary font-bold leading-tight">Menu &amp; Pelayanan Paroki</h3>
          <p class="text-[11px] text-on-surface-variant">Santo Athanasius Agung Karangpanas</p>
        </div>
      </div>
      <button id="mobile-sheet-close-btn" type="button" aria-label="Tutup menu" class="w-8 h-8 rounded-lg bg-surface hover:bg-surface-container text-on-surface-variant flex items-center justify-center transition-colors">
        <span class="material-symbols-outlined text-lg">close</span>
      </button>
    </div>

    <!-- Sheet Content -->
    <div class="p-5 overflow-y-auto space-y-4">
      <!-- Grid Card: OMK & Donasi -->
      <div class="grid grid-cols-2 gap-3">
        <a href="{{ url('/profil-omk') }}" class="sheet-link p-3.5 rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col gap-1.5 border border-outline-variant/20 group">
          <div class="w-10 h-10 rounded-xl bg-primary text-on-primary flex items-center justify-center shadow-sm group-hover:scale-105 transition-transform">
            <span class="material-symbols-outlined text-xl">group</span>
          </div>
          <span class="font-title-sm text-sm font-bold text-primary mt-1">Profil OMK</span>
          <span class="text-[11px] text-on-surface-variant leading-snug">Komunitas Orang Muda Katolik</span>
        </a>

        <a href="{{ url('/persembahan-donasi') }}" class="sheet-link p-3.5 rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col gap-1.5 border border-outline-variant/20 group">
          <div class="w-10 h-10 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center shadow-sm group-hover:scale-105 transition-transform">
            <span class="material-symbols-outlined text-xl">volunteer_activism</span>
          </div>
          <span class="font-title-sm text-sm font-bold text-primary mt-1">Donasi &amp; QRIS</span>
          <span class="text-[11px] text-on-surface-variant leading-snug">Kolekte &amp; rekening resmi paroki</span>
        </a>
      </div>

      <!-- Profil & Sejarah Paroki Link -->
      <a href="{{ url('/#profil') }}" class="sheet-link p-3.5 rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex items-center justify-between border border-outline-variant/20 group">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-surface-container-high text-primary flex items-center justify-center shadow-sm">
            <span class="material-symbols-outlined text-xl">auto_stories</span>
          </div>
          <div class="flex flex-col">
            <span class="font-title-sm text-sm font-bold text-primary">Profil &amp; Sejarah Paroki</span>
            <span class="text-[11px] text-on-surface-variant">Sejak 1968, Romo Gembala, Wilayah &amp; Lingkungan</span>
          </div>
        </div>
        <span class="material-symbols-outlined text-on-surface-variant group-hover:text-primary transition-colors">chevron_right</span>
      </a>

      <!-- Banner Shortcut ke Portal Umat Sidebar -->
      <div class="p-3.5 rounded-2xl bg-gradient-to-r from-primary-container via-primary to-tertiary text-on-primary flex items-center justify-between shadow-md">
        <div class="flex items-center gap-2.5">
          <span class="material-symbols-outlined text-secondary-fixed text-2xl">shield_person</span>
          <div>
            <div class="text-xs font-bold leading-tight">Portal Umat Karangpanas</div>
            <div class="text-[10px] text-primary-fixed">Akses KKG &amp; layanan administrasi</div>
          </div>
        </div>
        <button type="button" id="sheet-open-portal-btn" class="px-3 py-1.5 bg-secondary-container text-on-secondary-container rounded-lg text-xs font-semibold shadow hover:bg-secondary-fixed transition-colors">
          Buka
        </button>
      </div>

      <!-- Hubungi Kontak Paroki -->
      <div class="pt-2 border-t border-outline-variant/20">
        <p class="text-[11px] font-semibold text-on-surface-variant uppercase tracking-wider mb-2">Bantuan &amp; Kontak Paroki</p>
        <div class="grid grid-cols-2 gap-2">
          <a href="tel:0248312633" class="inline-flex items-center justify-center gap-1.5 py-2 px-3 rounded-xl border border-primary text-primary text-xs font-semibold hover:bg-primary/5 transition-colors">
            <span class="material-symbols-outlined text-base">call</span>
            <span>(024) 8312633</span>
          </a>
          <a href="https://wa.me/6281225001925" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-1.5 py-2 px-3 rounded-xl bg-green-700 text-white text-xs font-semibold hover:bg-green-800 transition-colors shadow-sm">
            <span class="material-symbols-outlined text-base">chat</span>
            <span>WhatsApp</span>
          </a>
        </div>
        <p class="text-[11px] text-center text-on-surface-variant pt-2 italic">
          Pelayanan Darurat Minyak Suci 24 Jam
        </p>
      </div>
    </div>
  </div>
</div>

<!-- FLOATING LIQUID GLASS BOTTOM NAVIGATION BAR (KHUSUS HP / TABLET < xl) -->
<div class="fixed bottom-3 inset-x-3 sm:inset-x-auto sm:left-1/2 sm:-translate-x-1/2 sm:w-[440px] z-40 xl:hidden safe-bottom">
  <nav id="mobile-nav" data-active="@yield('nav-active', 'beranda')" class="relative flex items-center justify-between p-1.5 rounded-2xl mobile-liquid-nav-container">
    {{-- Sliding Liquid Glass Pill untuk HP --}}
    <div id="mobile-liquid-pill" class="mobile-liquid-glass-pill opacity-0" aria-hidden="true"></div>

    {{-- 5 Tab Menu Mobile --}}
    <a href="{{ url('/') }}" class="mobile-glass-link inline-flex flex-col items-center justify-center relative z-10 flex-1 py-1 px-0.5 rounded-xl text-center transition-colors duration-200 text-on-surface-variant hover:text-primary cursor-pointer" data-section="beranda">
      <span class="material-symbols-outlined text-[20px] transition-transform duration-200">home</span>
      <span class="text-[10px] font-medium leading-tight mt-0.5">Beranda</span>
    </a>

    <a href="{{ url('/jadwal-misa') }}" class="mobile-glass-link inline-flex flex-col items-center justify-center relative z-10 flex-1 py-1 px-0.5 rounded-xl text-center transition-colors duration-200 text-on-surface-variant hover:text-primary cursor-pointer" data-section="jadwal-misa">
      <span class="material-symbols-outlined text-[20px] transition-transform duration-200">calendar_month</span>
      <span class="text-[10px] font-medium leading-tight mt-0.5">Misa</span>
    </a>

    <a href="{{ url('/warta-paroki') }}" class="mobile-glass-link inline-flex flex-col items-center justify-center relative z-10 flex-1 py-1 px-0.5 rounded-xl text-center transition-colors duration-200 text-on-surface-variant hover:text-primary cursor-pointer" data-section="warta-terkini">
      <span class="material-symbols-outlined text-[20px] transition-transform duration-200">newspaper</span>
      <span class="text-[10px] font-medium leading-tight mt-0.5">Warta</span>
    </a>

    <a href="{{ url('/pelayanan-sakramen') }}" class="mobile-glass-link inline-flex flex-col items-center justify-center relative z-10 flex-1 py-1 px-0.5 rounded-xl text-center transition-colors duration-200 text-on-surface-variant hover:text-primary cursor-pointer" data-section="sakramen">
      <span class="material-symbols-outlined text-[20px] transition-transform duration-200">church</span>
      <span class="text-[10px] font-medium leading-tight mt-0.5">Sakramen</span>
    </a>

    <button type="button" id="mobile-sheet-open-btn" class="mobile-glass-link inline-flex flex-col items-center justify-center relative z-10 flex-1 py-1 px-0.5 rounded-xl text-center transition-colors duration-200 text-on-surface-variant hover:text-primary cursor-pointer" data-section="lainnya">
      <span class="material-symbols-outlined text-[20px] transition-transform duration-200">widgets</span>
      <span class="text-[10px] font-medium leading-tight mt-0.5">Lainnya</span>
    </button>
  </nav>
</div>

<!-- KONTEN HALAMAN DENGAN ANIMASI GESER -->
<main class="w-full pt-16 sm:pt-20 pb-24 xl:pb-0 bg-surface min-h-screen overflow-x-hidden">
  <div id="page-wrapper" class="w-full slide-active">
    @yield('content')
  </div>
</main>

<!-- FOOTER HALAMAN -->
<footer class="w-full bg-surface-container-low text-on-surface mt-space-xl mb-20 xl:mb-0">
  <div class="h-1 bg-gradient-to-r from-primary via-secondary to-primary-container"></div>
  <div class="max-w-[1240px] mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-space-xl">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter mb-space-xl">
      <div class="flex flex-col gap-space-sm">
        <div class="flex items-center gap-space-sm mb-space-xs">
          <span class="material-symbols-outlined text-primary text-2xl">church</span>
          <h3 class="font-headline-sm text-headline-sm text-primary">Paroki Karangpanas</h3>
        </div>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Gereja Katolik Santo Athanasius Agung Karangpanas, melayani umat beriman dalam persekutuan kasih dan Roh Kudus di Keuskupan Agung Semarang.</p>
        <div class="flex items-center gap-space-sm text-label-sm text-secondary">
          <span class="material-symbols-outlined text-[18px]">verified</span>
          <span>Dekanat Semarang Timur</span>
        </div>
      </div>
      <div class="flex flex-col gap-space-sm">
        <h4 class="font-title-md text-title-md text-primary mb-space-xs flex items-center gap-space-xs"><span class="material-symbols-outlined text-[20px]">location_on</span>Sekretariat Paroki</h4>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Jl. Dr. Wahidin No. 110, Karangpanas, Candisari, Kota Semarang, Jawa Tengah 50254</p>
        <div class="flex items-center gap-space-xs font-body-sm text-body-sm text-on-surface"><span class="material-symbols-outlined text-[18px] text-primary">call</span><span>Telp: (024) 8312633</span></div>
        <div class="flex items-center gap-space-xs font-body-sm text-body-sm text-on-surface"><span class="material-symbols-outlined text-[18px] text-primary">mail</span><span>sekretariat@karangpanas.org</span></div>
      </div>
      <div class="flex flex-col gap-space-sm">
        <h4 class="font-title-md text-title-md text-primary mb-space-xs flex items-center gap-space-xs"><span class="material-symbols-outlined text-[20px]">schedule</span>Jam Pelayanan Kantor</h4>
        <div class="font-body-sm text-body-sm text-on-surface-variant flex flex-col gap-1">
          <div class="flex justify-between"><span>Senin - Jumat:</span><span class="font-semibold text-on-surface">08.00 - 15.30 WIB</span></div>
          <div class="flex justify-between"><span>Sabtu:</span><span class="font-semibold text-on-surface">08.00 - 13.00 WIB</span></div>
          <div class="flex justify-between"><span>Minggu &amp; Libur Nasional:</span><span class="font-semibold text-error">Tutup</span></div>
        </div>
        <p class="font-label-sm text-label-sm text-on-surface-variant italic mt-space-xs">Pelayanan sakramen darurat / minyak suci dapat dihubungi melalui pastor paroki 24 jam.</p>
      </div>
      <div class="flex flex-col gap-space-sm">
        <h4 class="font-title-md text-title-md text-primary mb-space-xs flex items-center gap-space-xs"><span class="material-symbols-outlined text-[20px]">link</span>Tautan Terkait</h4>
        <ul class="font-body-sm text-body-sm space-y-space-xs">
          <li class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[16px]">chevron_right</span><a class="text-on-surface-variant hover:text-primary transition-colors" href="https://kas.or.id" rel="noopener" target="_blank">Keuskupan Agung Semarang (KAS)</a></li>
          <li class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[16px]">chevron_right</span><a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ url('/jadwal-misa') }}">Jadwal Misa Lengkap</a></li>
          <li class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[16px]">chevron_right</span><a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ url('/warta-paroki') }}">Warta Paroki &amp; Agenda</a></li>
          <li class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[16px]">chevron_right</span><a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ url('/pelayanan-sakramen') }}">Pendaftaran Sakramen Baptis &amp; Nikah</a></li>
          <li class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[16px]">chevron_right</span><a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ url('/persembahan-donasi') }}">QRIS Rekening Kolekte Paroki</a></li>
        </ul>
      </div>
    </div>
    <div class="pt-space-lg flex flex-col md:flex-row items-center justify-between gap-space-md text-on-surface-variant font-label-sm text-label-sm border-t border-outline-variant/30">
      <p>© {{ date('Y') }} Gereja Katolik Santo Athanasius Agung Karangpanas Semarang. Hak cipta dilindungi.</p>
      <div class="flex items-center gap-space-lg">
        <a class="hover:text-primary transition-colors" href="{{ url('/#profil') }}">Profil Wilayah &amp; Lingkungan</a>
        <span class="text-outline-variant">•</span>
        <button type="button" class="hover:text-primary transition-colors open-portal-trigger cursor-pointer">Sistem Informasi Umat Paroki</button>
      </div>
    </div>
  </div>
</footer>

<script data-layout>
(function () {
  'use strict';

  var $ = function (id) { return document.getElementById(id); };
  var norm = function (p) { return p.replace(/\/+$/, '') || '/'; };
  var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Satu-satunya tempat yang tahu "halaman mana yang sedang tampil".
  // (location.pathname tidak bisa dipakai: saat tombol Back ditekan, URL sudah berubah
  //  sebelum isi halaman diganti.)
  var currentPath = norm(location.pathname);
  var navBusy = false;

  // ==============================================================
  // 1. DESKTOP LIQUID GLASS (>= xl)
  // ==============================================================
  var nav = $('main-nav');
  var pill = $('liquid-glass-pill');
  var navLinks = nav ? Array.prototype.slice.call(nav.querySelectorAll('.nav-glass-link')) : [];

  function paintDesktop(target) {
    navLinks.forEach(function (l) {
      var on = l === target;
      l.classList.toggle('text-primary', on);
      l.classList.toggle('font-semibold', on);
      l.classList.toggle('text-on-surface-variant', !on);
      l.classList.toggle('font-medium', !on);
    });
  }
  function movePill(target) {
    if (!nav || !pill || !target || nav.offsetParent === null) return;
    var n = nav.getBoundingClientRect(), r = target.getBoundingClientRect();
    pill.style.opacity = '1';
    pill.style.left = (r.left - n.left) + 'px';
    pill.style.top = (r.top - n.top) + 'px';
    pill.style.width = r.width + 'px';
    pill.style.height = r.height + 'px';
    paintDesktop(target);
  }
  // Pill selalu kembali ke menu halaman aktif (dibaca saat dipanggil, bukan disimpan)
  function syncDesktopPill() {
    if (!nav || !pill) return;
    var a = navLinks.find(function (l) { return l.dataset.section === nav.dataset.active; });
    if (a) { movePill(a); }
    else { pill.style.opacity = '0'; paintDesktop(null); }
  }
  if (nav && pill) {
    navLinks.forEach(function (l) { l.addEventListener('mouseenter', function () { movePill(l); }); });
    nav.addEventListener('mouseleave', syncDesktopPill);
    window.addEventListener('resize', syncDesktopPill);
    window.addEventListener('load', syncDesktopPill);   // setelah font selesai dimuat
    setTimeout(syncDesktopPill, 80);
  }

  // ==============================================================
  // 2. MOBILE LIQUID GLASS (< xl)
  // ==============================================================
  var mNav = $('mobile-nav');
  var mPill = $('mobile-liquid-pill');
  var mLinks = mNav ? Array.prototype.slice.call(mNav.querySelectorAll('.mobile-glass-link')) : [];

  function mobileTargetFor(section) {
    if (!section || section === 'none') return null;
    var sec = ['omk', 'donasi', 'lainnya'].indexOf(section) > -1 ? 'lainnya' : section;
    return mLinks.find(function (l) { return l.dataset.section === sec; }) || null;
  }
  function paintMobile(target) {
    mLinks.forEach(function (l) {
      var on = l === target;
      l.classList.toggle('text-primary', on);
      l.classList.toggle('font-bold', on);
      l.classList.toggle('text-on-surface-variant', !on);
      l.classList.toggle('font-medium', !on);
      var icon = l.querySelector('.material-symbols-outlined');
      if (icon) { icon.classList.toggle('scale-110', on); icon.classList.toggle('text-primary', on); }
    });
  }
  function moveMobile(target) {
    if (!mNav || !mPill || !target || mNav.offsetParent === null) return;
    var n = mNav.getBoundingClientRect(), r = target.getBoundingClientRect();
    mPill.style.opacity = '1';
    mPill.style.left = (r.left - n.left) + 'px';
    mPill.style.top = (r.top - n.top) + 'px';
    mPill.style.width = r.width + 'px';
    mPill.style.height = r.height + 'px';
    paintMobile(target);
  }
  function syncMobilePill() {
    if (!mNav || !mPill) return;
    var t = mobileTargetFor(mNav.dataset.active);
    if (t) { moveMobile(t); }
    else { mPill.style.opacity = '0'; paintMobile(null); }
  }
  if (mNav && mPill) {
    window.addEventListener('resize', syncMobilePill);
    window.addEventListener('load', syncMobilePill);
    setTimeout(syncMobilePill, 100);
  }

  // ==============================================================
  // 3. BOTTOM SHEET "LAINNYA"
  // ==============================================================
  var sheet = $('mobile-bottom-sheet');
  var sheetBackdrop = $('mobile-sheet-backdrop');
  var sheetOpenBtn = $('mobile-sheet-open-btn');
  var sheetCloseBtn = $('mobile-sheet-close-btn');

  function sheetIsOpen() { return !!sheet && sheet.classList.contains('translate-y-0'); }

  function openBottomSheet() {
    if (!sheet || !sheetBackdrop) return;
    if (sheetOpenBtn) moveMobile(sheetOpenBtn);
    sheet.classList.remove('translate-y-full', 'opacity-0');
    sheet.classList.add('translate-y-0', 'opacity-100');
    sheetBackdrop.classList.remove('opacity-0', 'pointer-events-none');
    sheetBackdrop.classList.add('opacity-100', 'pointer-events-auto');
    document.body.classList.add('overflow-hidden');
  }
  // syncPill=false dipakai saat pindah halaman: pill akan dipindah sekali oleh navigasi.
  function closeBottomSheet(syncPill) {
    if (!sheet || !sheetBackdrop) return;
    sheet.classList.add('translate-y-full', 'opacity-0');
    sheet.classList.remove('translate-y-0', 'opacity-100');
    sheetBackdrop.classList.remove('opacity-100', 'pointer-events-auto');
    sheetBackdrop.classList.add('opacity-0', 'pointer-events-none');
    document.body.classList.remove('overflow-hidden');
    if (syncPill !== false) {
      setTimeout(function () { if (!sheetIsOpen() && !navBusy) syncMobilePill(); }, 150);
    }
  }
  if (sheetOpenBtn) sheetOpenBtn.addEventListener('click', function (e) { e.stopPropagation(); openBottomSheet(); });
  if (sheetCloseBtn) sheetCloseBtn.addEventListener('click', function () { closeBottomSheet(); });
  if (sheetBackdrop) sheetBackdrop.addEventListener('click', function () { closeBottomSheet(); });
  document.querySelectorAll('.sheet-link').forEach(function (a) {
    a.addEventListener('click', function () { closeBottomSheet(); });
  });

  // ==============================================================
  // 4. SIDEBAR PORTAL UMAT
  // ==============================================================
  var portalSidebar = $('portal-umat-sidebar');
  var portalBackdrop = $('portal-umat-backdrop');

  function openPortalSidebar() {
    if (!portalSidebar || !portalBackdrop) return;
    closeBottomSheet(false);
    portalSidebar.classList.remove('translate-x-full');
    portalBackdrop.classList.remove('opacity-0', 'pointer-events-none');
    portalBackdrop.classList.add('opacity-100', 'pointer-events-auto');
    document.body.classList.add('overflow-hidden');
  }
  function closePortalSidebar() {
    if (!portalSidebar || !portalBackdrop) return;
    portalSidebar.classList.add('translate-x-full');
    portalBackdrop.classList.remove('opacity-100', 'pointer-events-auto');
    portalBackdrop.classList.add('opacity-0', 'pointer-events-none');
    document.body.classList.remove('overflow-hidden');
  }
  ['open-portal-sidebar-btn', 'sheet-open-portal-btn'].forEach(function (id) {
    var b = $(id); if (b) b.addEventListener('click', openPortalSidebar);
  });
  var avatar = $('open-portal-avatar-btn');
  if (avatar) avatar.addEventListener('click', function (e) { e.preventDefault(); openPortalSidebar(); });
  document.querySelectorAll('.open-portal-trigger').forEach(function (b) { b.addEventListener('click', openPortalSidebar); });
  var portalClose = $('portal-sidebar-close');
  if (portalClose) portalClose.addEventListener('click', closePortalSidebar);
  if (portalBackdrop) portalBackdrop.addEventListener('click', closePortalSidebar);

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') { closeBottomSheet(); closePortalSidebar(); }
  });

  // ==============================================================
  // 5. TRANSISI HALAMAN (geser + progress bar)
  //    Satu-satunya pemasangan listener klik. Tidak ada re-dispatch DOMContentLoaded.
  // ==============================================================
  var PAGE_ORDER = {
    '/': 1, '/jadwal-misa': 2, '/warta-paroki': 3, '/pelayanan-sakramen': 4,
    '/profil-omk': 5, '/persembahan-donasi': 6, '/portal-umat/login': 7, '/portal-umat/daftar': 8
  };
  var OUT_MS = 180;

  var bar = $('page-progress-bar');
  var wrapper = $('page-wrapper');
  var navCounter = 0;      // naik tiap navigasi; respons lama otomatis dibuang
  var ctrl = null;         // fetch yang sedang berjalan
  var animTimer = null;

  function setProgress(pct) {
    if (!bar) return;
    bar.style.opacity = '1';
    bar.style.width = pct + '%';
    if (pct >= 100) {
      setTimeout(function () {
        bar.style.opacity = '0';
        setTimeout(function () { bar.style.width = '0%'; }, 260);
      }, 160);
    }
  }

  function startOut(forward) {
    clearTimeout(animTimer);
    wrapper.classList.add('is-animating');
    wrapper.classList.remove('slide-active', 'slide-in-left', 'slide-in-right', 'slide-out-left', 'slide-out-right');
    wrapper.classList.add(forward ? 'slide-out-left' : 'slide-out-right');
  }

  // Posisi awal "masuk" dipasang TANPA transisi, baru dianimasikan ke posisi normal.
  // (Kalau transisi aktif saat memasang posisi awal, halaman baru muncul dari sisi yang salah
  //  lalu memantul balik. Itu penyebab utama efek "kepental".)
  function playEnter(forward) {
    wrapper.style.transition = 'none';
    wrapper.classList.remove('slide-out-left', 'slide-out-right', 'slide-active');
    wrapper.classList.add(forward ? 'slide-in-right' : 'slide-in-left');
    void wrapper.offsetWidth;
    wrapper.style.transition = '';
    wrapper.classList.remove('slide-in-left', 'slide-in-right');
    wrapper.classList.add('slide-active');
    clearTimeout(animTimer);
    animTimer = setTimeout(function () { wrapper.classList.remove('is-animating'); }, 450);
  }

  function cancelInflight() {
    navCounter++;
    if (ctrl) { ctrl.abort(); ctrl = null; }
    navBusy = false;
    wrapper.classList.remove('slide-out-left', 'slide-out-right');
    wrapper.classList.add('slide-active');
    clearTimeout(animTimer);
    animTimer = setTimeout(function () { wrapper.classList.remove('is-animating'); }, 450);
    setProgress(100);
  }

  // Menjalankan script khusus halaman (@push('scripts')) setelah isi diganti.
  // Script halaman memakai DOMContentLoaded, yang tidak akan terjadi lagi, jadi handler
  // dijalankan langsung selama script itu dieksekusi.
  function runPageScript(text) {
    var orig = document.addEventListener;
    document.addEventListener = function (type, fn, opts) {
      if (type === 'DOMContentLoaded') {
        try { fn.call(document, new Event('DOMContentLoaded')); } catch (e) { console.error(e); }
        return;
      }
      return orig.call(document, type, fn, opts);
    };
    try {
      var sc = document.createElement('script');
      sc.textContent = text;
      document.body.appendChild(sc);
      sc.remove();
    } catch (e) {
      console.error(e);
    } finally {
      delete document.addEventListener;
    }
  }

  async function navigateTo(href, pushState) {
    var url = new URL(href, location.origin);
    var tgt = norm(url.pathname);

    // Halaman yang sama (tanpa hash): batalkan navigasi yang sedang jalan, lalu gulir ke atas
    if (tgt === currentPath && url.search === location.search && !url.hash) {
      if (navBusy) cancelInflight();
      window.scrollTo({ top: 0, behavior: 'smooth' });
      return;
    }
    if (!wrapper) { window.location.href = url.href; return; }

    var id = ++navCounter;
    if (ctrl) ctrl.abort();
    var myCtrl = ctrl = new AbortController();
    navBusy = true;

    var forward = (PAGE_ORDER[tgt] || 0) >= (PAGE_ORDER[currentPath] || 0);

    setProgress(30);
    closeBottomSheet(false);
    closePortalSidebar();
    startOut(forward);

    try {
      setProgress(60);
      var fetched = fetch(url.href, { signal: myCtrl.signal, headers: { 'X-Requested-With': 'XMLHttpRequest' } })
        .then(function (res) { if (!res.ok) throw new Error('HTTP ' + res.status); return res.text(); });
      // Isi baru baru dipasang setelah animasi keluar selesai (tidak lagi di tengah-tengah)
      var waited = new Promise(function (r) { setTimeout(r, reduceMotion ? 0 : OUT_MS); });
      var results = await Promise.all([fetched, waited]);
      if (id !== navCounter) return;           // ada klik yang lebih baru, biarkan dia yang lanjut

      var doc = new DOMParser().parseFromString(results[0], 'text/html');
      var newWrapper = doc.getElementById('page-wrapper');
      if (!newWrapper) { window.location.href = url.href; return; }
      setProgress(85);

      document.title = doc.title;
      if (pushState) history.pushState({ path: url.href }, '', url.href);
      currentPath = tgt;

      // 'instant' mengalahkan scroll-behavior: smooth di CSS (kalau tidak, halaman baru
      // ikut "menggulung" dari posisi lama saat masuk)
      window.scrollTo({ top: 0, left: 0, behavior: 'instant' });

      var active =
        (doc.getElementById('main-nav') && doc.getElementById('main-nav').dataset.active) ||
        (doc.getElementById('mobile-nav') && doc.getElementById('mobile-nav').dataset.active) ||
        'beranda';
      if (nav) nav.dataset.active = active;
      if (mNav) mNav.dataset.active = active;

      wrapper.innerHTML = newWrapper.innerHTML;
      playEnter(forward);
      syncDesktopPill();
      syncMobilePill();

      doc.querySelectorAll('body script').forEach(function (s) {
        if (s.src || s.hasAttribute('data-layout')) return;
        var text = s.textContent || '';
        if (text.trim()) runPageScript(text);
      });
      window.dispatchEvent(new CustomEvent('page:swapped', { detail: { path: tgt } }));

      if (url.hash) {
        setTimeout(function () {
          var el = document.querySelector(url.hash);
          if (el) el.scrollIntoView({ behavior: 'smooth' });
        }, 120);
      }
      setProgress(100);
    } catch (err) {
      if (err && err.name === 'AbortError') return;   // digantikan navigasi yang lebih baru
      console.error('Page transition error:', err);
      window.location.href = url.href;                 // jalan terakhir: muat penuh
    } finally {
      if (id === navCounter) { navBusy = false; ctrl = null; }
    }
  }

  document.addEventListener('click', function (e) {
    var link = e.target.closest && e.target.closest('a');
    if (!link) return;
    var href = link.getAttribute('href');
    if (!href || href.charAt(0) === '#') return;
    if (link.target === '_blank' || link.hasAttribute('download') || link.hasAttribute('data-no-ajax')) return;
    if (/^(tel:|mailto:|javascript:)/.test(href)) return;
    if (e.ctrlKey || e.metaKey || e.shiftKey || e.altKey || e.button !== 0) return;
    var url;
    try { url = new URL(link.href, location.origin); } catch (_) { return; }
    if (url.origin !== location.origin) return;
    // Hash di halaman yang sedang tampil: biarkan browser menggulung sendiri
    if (norm(url.pathname) === currentPath && url.hash) return;
    e.preventDefault();
    navigateTo(link.href, true);
  });

  window.addEventListener('popstate', function () {
    navigateTo(location.href, false);
  });
})();
</script>
@stack('scripts')
</body>
</html>
