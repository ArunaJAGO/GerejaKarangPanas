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
.liquid-glass-pill{position:absolute;border-radius:.75rem;pointer-events:none;background:linear-gradient(135deg,rgba(255,255,255,.96) 0%,rgba(255,255,255,.72) 100%);backdrop-filter:blur(16px) saturate(190%);-webkit-backdrop-filter:blur(16px) saturate(190%);border:1px solid #fff;box-shadow:0 4px 14px -1px rgba(122,21,38,.12),0 2px 6px -1px rgba(0,0,0,.04),inset 0 1px 2px #fff,inset 0 -1px 2px rgba(122,21,38,.05);transition:left .38s cubic-bezier(.22,1,.36,1),top .38s cubic-bezier(.22,1,.36,1),width .38s cubic-bezier(.22,1,.36,1),height .38s cubic-bezier(.22,1,.36,1),transform .22s ease,opacity .25s ease;z-index:1}
.liquid-glass-pill::before{content:'';position:absolute;inset:1px;border-radius:.75rem;background:linear-gradient(180deg,rgba(255,255,255,.85) 0%,rgba(255,255,255,.12) 60%);pointer-events:none}
.liquid-glass-pill.is-morphing{transform:scaleX(1.05) scaleY(.95)}

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
  transition: left 0.35s cubic-bezier(.22, 1, .36, 1), top 0.35s cubic-bezier(.22, 1, .36, 1), width 0.35s cubic-bezier(.22, 1, .36, 1), height 0.35s cubic-bezier(.22, 1, .36, 1), transform 0.22s ease, opacity 0.25s ease;
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
.mobile-liquid-glass-pill.is-morphing {
  transform: scaleX(1.08) scaleY(0.92);
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
  transition: transform 0.26s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.24s ease;
  will-change: transform, opacity;
}

.slide-out-left {
  transform: translateX(-36px);
  opacity: 0;
}

.slide-out-right {
  transform: translateX(36px);
  opacity: 0;
}

.slide-in-left {
  transform: translateX(-36px);
  opacity: 0;
}

.slide-in-right {
  transform: translateX(36px);
  opacity: 0;
}

.slide-active {
  transform: translateX(0);
  opacity: 1;
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

<script>
document.addEventListener('DOMContentLoaded', function () {
  // ==============================================================
  // 1. DESKTOP LIQUID GLASS NAVIGATION (>= 1280px / xl)
  // ==============================================================
  const nav = document.getElementById('main-nav');
  const pill = document.getElementById('liquid-glass-pill');
  let moveToLink = null;

  if (nav && pill) {
    const links = Array.from(nav.querySelectorAll('.nav-glass-link'));
    let activeLink = links.find(l => l.dataset.section === nav.dataset.active) || null;
    let morphTimeout = null;

    moveToLink = function (target) {
      if (!target) return;
      pill.classList.add('is-morphing');
      clearTimeout(morphTimeout);
      morphTimeout = setTimeout(() => pill.classList.remove('is-morphing'), 220);

      const navRect = nav.getBoundingClientRect();
      const r = target.getBoundingClientRect();
      pill.style.opacity = '1';
      pill.style.left = (r.left - navRect.left) + 'px';
      pill.style.top = (r.top - navRect.top) + 'px';
      pill.style.width = r.width + 'px';
      pill.style.height = r.height + 'px';

      links.forEach(l => {
        const on = l === target;
        l.classList.toggle('text-primary', on);
        l.classList.toggle('font-semibold', on);
        l.classList.toggle('text-on-surface-variant', !on);
        l.classList.toggle('font-medium', !on);
      });
    };

    setTimeout(() => moveToLink(activeLink), 80);
    window.addEventListener('resize', () => {
      activeLink = links.find(l => l.dataset.section === nav.dataset.active) || null;
      moveToLink(activeLink);
    });
    links.forEach(l => l.addEventListener('mouseenter', () => moveToLink(l)));
    nav.addEventListener('mouseleave', () => {
      activeLink = links.find(l => l.dataset.section === nav.dataset.active) || null;
      if (activeLink) { moveToLink(activeLink); return; }
      pill.style.opacity = '0';
      links.forEach(l => { l.classList.remove('text-primary', 'font-semibold'); l.classList.add('text-on-surface-variant', 'font-medium'); });
    });
  }

  // ==============================================================
  // 2. MOBILE FLOATING LIQUID GLASS NAVIGATION & SLIDING PILL (< xl)
  // ==============================================================
  const mobileNav = document.getElementById('mobile-nav');
  const mobileLiquidPill = document.getElementById('mobile-liquid-pill');
  let activeMobileLink = null;
  let moveMobilePill = null;

  if (mobileNav && mobileLiquidPill) {
    const mobileLinks = Array.from(mobileNav.querySelectorAll('.mobile-glass-link'));
    const isLainnya = ['omk', 'donasi', 'lainnya'].includes(mobileNav.dataset.active);
    const targetSection = isLainnya ? 'lainnya' : mobileNav.dataset.active;
    activeMobileLink = mobileLinks.find(l => l.dataset.section === targetSection) || mobileLinks[0];
    let mobileMorphTimeout = null;

    moveMobilePill = function (target) {
      if (!target) return;
      mobileLiquidPill.classList.add('is-morphing');
      clearTimeout(mobileMorphTimeout);
      mobileMorphTimeout = setTimeout(() => mobileLiquidPill.classList.remove('is-morphing'), 220);

      const navRect = mobileNav.getBoundingClientRect();
      const r = target.getBoundingClientRect();
      mobileLiquidPill.style.opacity = '1';
      mobileLiquidPill.style.left = (r.left - navRect.left) + 'px';
      mobileLiquidPill.style.top = (r.top - navRect.top) + 'px';
      mobileLiquidPill.style.width = r.width + 'px';
      mobileLiquidPill.style.height = r.height + 'px';

      mobileLinks.forEach(l => {
        const on = l === target;
        l.classList.toggle('text-primary', on);
        l.classList.toggle('font-bold', on);
        l.classList.toggle('text-on-surface-variant', !on);
        l.classList.toggle('font-medium', !on);
        const icon = l.querySelector('.material-symbols-outlined');
        if (icon) {
          icon.classList.toggle('scale-110', on);
          icon.classList.toggle('text-primary', on);
        }
      });
    };

    setTimeout(() => moveMobilePill(activeMobileLink), 100);
    window.addEventListener('resize', () => moveMobilePill(activeMobileLink));
  }

  // ==============================================================
  // 3. BOTTOM SHEET "LAINNYA" (POP UP KE ATAS)
  // ==============================================================
  const mobileSheetOpenBtn = document.getElementById('mobile-sheet-open-btn');
  const mobileBottomSheet = document.getElementById('mobile-bottom-sheet');
  const mobileSheetBackdrop = document.getElementById('mobile-sheet-backdrop');
  const mobileSheetCloseBtn = document.getElementById('mobile-sheet-close-btn');

  function openBottomSheet() {
    if (!mobileBottomSheet || !mobileSheetBackdrop) return;
    if (typeof moveMobilePill === 'function' && mobileSheetOpenBtn) {
      moveMobilePill(mobileSheetOpenBtn);
    }
    mobileBottomSheet.classList.remove('translate-y-full', 'opacity-0');
    mobileBottomSheet.classList.add('translate-y-0', 'opacity-100');
    mobileSheetBackdrop.classList.remove('opacity-0', 'pointer-events-none');
    mobileSheetBackdrop.classList.add('opacity-100', 'pointer-events-auto');
    document.body.classList.add('overflow-hidden');
  }

  function closeBottomSheet() {
    if (!mobileBottomSheet || !mobileSheetBackdrop) return;
    mobileBottomSheet.classList.add('translate-y-full', 'opacity-0');
    mobileBottomSheet.classList.remove('translate-y-0', 'opacity-100');
    mobileSheetBackdrop.classList.remove('opacity-100', 'pointer-events-auto');
    mobileSheetBackdrop.classList.add('opacity-0', 'pointer-events-none');
    document.body.classList.remove('overflow-hidden');

    // Kembalikan posisi pill ke menu aktif halaman saat ini
    if (activeMobileLink && typeof moveMobilePill === 'function') {
      const isLainnya = ['omk', 'donasi', 'lainnya'].includes(mobileNav ? mobileNav.dataset.active : '');
      if (!isLainnya) {
        setTimeout(() => moveMobilePill(activeMobileLink), 150);
      }
    }
  }

  if (mobileSheetOpenBtn) {
    mobileSheetOpenBtn.addEventListener('click', function (e) {
      e.stopPropagation();
      openBottomSheet();
    });
  }
  if (mobileSheetCloseBtn) mobileSheetCloseBtn.addEventListener('click', closeBottomSheet);
  if (mobileSheetBackdrop) mobileSheetBackdrop.addEventListener('click', closeBottomSheet);

  // Tutup sheet jika link di dalamnya diklik
  const sheetLinks = document.querySelectorAll('.sheet-link');
  sheetLinks.forEach(link => {
    link.addEventListener('click', function () {
      closeBottomSheet();
    });
  });

  // ==============================================================
  // 4. SIDEBAR KHUSUS PORTAL UMAT (SLIDE DARI KANAN)
  // ==============================================================
  const portalSidebar = document.getElementById('portal-umat-sidebar');
  const portalBackdrop = document.getElementById('portal-umat-backdrop');
  const portalCloseBtn = document.getElementById('portal-sidebar-close');
  const openPortalSidebarBtn = document.getElementById('open-portal-sidebar-btn');
  const openPortalAvatarBtn = document.getElementById('open-portal-avatar-btn');
  const sheetOpenPortalBtn = document.getElementById('sheet-open-portal-btn');
  const openPortalTriggers = document.querySelectorAll('.open-portal-trigger');

  function openPortalSidebar() {
    if (!portalSidebar || !portalBackdrop) return;
    closeBottomSheet();
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

  if (openPortalSidebarBtn) openPortalSidebarBtn.addEventListener('click', openPortalSidebar);
  if (openPortalAvatarBtn) openPortalAvatarBtn.addEventListener('click', function (e) {
    e.preventDefault();
    openPortalSidebar();
  });
  if (sheetOpenPortalBtn) sheetOpenPortalBtn.addEventListener('click', openPortalSidebar);
  openPortalTriggers.forEach(btn => btn.addEventListener('click', openPortalSidebar));

  if (portalCloseBtn) portalCloseBtn.addEventListener('click', closePortalSidebar);
  if (portalBackdrop) portalBackdrop.addEventListener('click', closePortalSidebar);

  // ==============================================================
  // 5. ANIMASI GESER PERPINDAHAN HALAMAN (PAGE SLIDE TRANSITIONS)
  //    — Robust rapid-navigation: AbortController + navId guard
  // ==============================================================
  const PAGE_ORDER = {
    '/': 1,
    '/jadwal-misa': 2,
    '/warta-paroki': 3,
    '/pelayanan-sakramen': 4,
    '/profil-omk': 5,
    '/persembahan-donasi': 6,
    '/portal-umat/login': 7,
    '/portal-umat/daftar': 8
  };

  const progressBar = document.getElementById('page-progress-bar');
  const pageWrapper = document.getElementById('page-wrapper');

  // Incremented on every navigation; lets stale responses self-discard
  let navCounter = 0;
  // The AbortController for the in-flight fetch (if any)
  let currentFetchCtrl = null;
  // URL queued while a transition is active; we navigate there when done
  let pendingNavUrl = null;
  // True while content-swap + CSS animation is running
  let isTransitioning = false;

  function setProgress(percent, show = true) {
    if (!progressBar) return;
    if (show) progressBar.style.opacity = '1';
    progressBar.style.width = percent + '%';
    if (percent >= 100) {
      setTimeout(() => {
        progressBar.style.opacity = '0';
        setTimeout(() => { progressBar.style.width = '0%'; }, 260);
      }, 160);
    }
  }

  // Reset wrapper to neutral visible state immediately (sync, no animation)
  function resetWrapper() {
    if (!pageWrapper) return;
    pageWrapper.style.transition = 'none';
    pageWrapper.classList.remove('slide-out-left', 'slide-out-right', 'slide-in-left', 'slide-in-right');
    pageWrapper.classList.add('slide-active');
    void pageWrapper.offsetWidth; // flush
    pageWrapper.style.transition = '';
  }

  async function navigateTo(targetUrlString, pushState = true) {
    const targetUrl = new URL(targetUrlString, window.location.origin);

    // Same page (no hash) → scroll to top
    if (
      targetUrl.pathname === window.location.pathname &&
      targetUrl.search === window.location.search &&
      !targetUrl.hash
    ) {
      window.scrollTo({ top: 0, behavior: 'smooth' });
      return;
    }

    // If a transition is already running, cancel the in-flight fetch and
    // remember this URL as the next destination. The running transition's
    // finally-block will pick it up.
    if (isTransitioning) {
      pendingNavUrl = targetUrlString;
      if (currentFetchCtrl) {
        currentFetchCtrl.abort();
        currentFetchCtrl = null;
      }
      return;
    }

    isTransitioning = true;
    pendingNavUrl = null;
    const myNavId = ++navCounter;

    setProgress(30);

    const currPath = window.location.pathname.replace(/\/+$/, '') || '/';
    const targetPath = targetUrl.pathname.replace(/\/+$/, '') || '/';
    const isForward = (PAGE_ORDER[targetPath] || 0) >= (PAGE_ORDER[currPath] || 0);

    // Close any open overlays
    closeBottomSheet();
    closePortalSidebar();

    // --- Slide out current page ---
    if (pageWrapper) {
      pageWrapper.classList.remove('slide-active', 'slide-in-left', 'slide-in-right');
      pageWrapper.classList.add(isForward ? 'slide-out-left' : 'slide-out-right');
    }

    try {
      setProgress(60);
      currentFetchCtrl = new AbortController();
      const res = await fetch(targetUrl.href, {
        signal: currentFetchCtrl.signal,
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
      });
      currentFetchCtrl = null;

      // A newer navigation cancelled us → bail out cleanly
      if (myNavId !== navCounter) {
        resetWrapper();
        return;
      }

      if (!res.ok) {
        window.location.href = targetUrl.href;
        return;
      }

      const html = await res.text();

      // Check again after the (potentially slow) text() read
      if (myNavId !== navCounter) {
        resetWrapper();
        return;
      }

      const parser = new DOMParser();
      const newDoc = parser.parseFromString(html, 'text/html');
      const newWrapper = newDoc.getElementById('page-wrapper');

      if (!newWrapper) {
        window.location.href = targetUrl.href;
        return;
      }

      setProgress(85);

      // Brief pause so the slide-out is visible (shortened to 80 ms)
      await new Promise(r => setTimeout(r, 80));

      // Final staleness check
      if (myNavId !== navCounter) {
        resetWrapper();
        return;
      }

      // Update title & history
      document.title = newDoc.title;
      if (pushState) {
        history.pushState({ path: targetUrl.href }, '', targetUrl.href);
      }

      window.scrollTo(0, 0);

      // Sync nav active state
      const newActive =
        newDoc.getElementById('main-nav')?.dataset.active ||
        newDoc.getElementById('mobile-nav')?.dataset.active ||
        'beranda';

      if (nav) nav.dataset.active = newActive;
      if (mobileNav) mobileNav.dataset.active = newActive;

      // Move desktop liquid-glass pill
      if (typeof moveToLink === 'function' && nav) {
        const dl = Array.from(nav.querySelectorAll('.nav-glass-link'));
        moveToLink(dl.find(l => l.dataset.section === newActive));
      }

      // Move mobile liquid-glass pill
      if (typeof moveMobilePill === 'function' && mobileNav) {
        const ml = Array.from(mobileNav.querySelectorAll('.mobile-glass-link'));
        const isLainnya = ['omk', 'donasi', 'lainnya'].includes(newActive);
        const sec = isLainnya ? 'lainnya' : newActive;
        activeMobileLink = ml.find(l => l.dataset.section === sec) || ml[0];
        moveMobilePill(activeMobileLink);
      }

      // Swap content
      pageWrapper.innerHTML = newWrapper.innerHTML;

      // --- Slide in new page ---
      pageWrapper.classList.remove('slide-out-left', 'slide-out-right');
      pageWrapper.classList.add(isForward ? 'slide-in-right' : 'slide-in-left');
      void pageWrapper.offsetWidth; // flush reflow
      pageWrapper.classList.remove('slide-in-left', 'slide-in-right');
      pageWrapper.classList.add('slide-active');

      // Re-run page-specific scripts
      newDoc.querySelectorAll('body script:not([src*="cdn.tailwindcss.com"])').forEach(s => {
        const text = s.textContent || '';
        if (text.includes('PAGE_ORDER') || text.includes('liquid-glass-pill')) return;
        const sc = document.createElement('script');
        sc.textContent = text;
        document.body.appendChild(sc);
        setTimeout(() => sc.remove(), 150);
      });

      document.dispatchEvent(new Event('DOMContentLoaded'));
      window.dispatchEvent(new CustomEvent('page:swapped', { detail: { path: targetPath } }));

      if (targetUrl.hash) {
        setTimeout(() => {
          const el = document.querySelector(targetUrl.hash);
          if (el) el.scrollIntoView({ behavior: 'smooth' });
        }, 260);
      }

      setProgress(100);
    } catch (err) {
      currentFetchCtrl = null;
      // AbortError means a newer click cancelled us — restore state quietly
      if (err.name === 'AbortError') {
        resetWrapper();
        return;
      }
      console.error('Page transition error:', err);
      window.location.href = targetUrl.href;
    } finally {
      isTransitioning = false;
      // If a click arrived while we were busy, honour it now
      const next = pendingNavUrl;
      pendingNavUrl = null;
      if (next) {
        // small tick so the browser can paint the new content first
        requestAnimationFrame(() => navigateTo(next, true));
      }
    }
  }

  // Intercept all internal link clicks
  document.addEventListener('click', function (e) {
    const link = e.target.closest('a');
    if (!link) return;

    const href = link.getAttribute('href');
    if (!href || href.startsWith('#')) return;
    if (link.target === '_blank' || link.hasAttribute('download')) return;
    if (href.startsWith('tel:') || href.startsWith('mailto:') || href.startsWith('javascript:')) return;
    if (e.ctrlKey || e.metaKey || e.shiftKey || e.altKey || e.button !== 0) return;

    try {
      const url = new URL(link.href, window.location.origin);
      if (url.origin !== window.location.origin) return;
      if (url.pathname === window.location.pathname && url.hash) return;
      e.preventDefault();
      navigateTo(link.href, true);
    } catch (_) {}
  });

  // Browser Back / Forward buttons
  window.addEventListener('popstate', function () {
    // Cancel any in-flight fetch so it doesn't overwrite the popstate target
    if (currentFetchCtrl) {
      currentFetchCtrl.abort();
      currentFetchCtrl = null;
    }
    isTransitioning = false;
    pendingNavUrl = null;
    navCounter++;
    navigateTo(window.location.href, false);
  });

  // ESC closes overlays
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeBottomSheet();
      closePortalSidebar();
    }
  });
});
</script>
@stack('scripts')
</body>
</html>