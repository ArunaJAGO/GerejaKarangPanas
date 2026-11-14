@extends('layouts.app')

@section('title', 'Masuk Portal Umat - Paroki Karangpanas Semarang')
@section('nav-active', 'none')

@php
  $wa = 'https://wa.me/6281225001925'; // ganti dengan WhatsApp sekretariat asli
  $tipe = old('login_type', 'kkg');
@endphp

@section('content')
<section class="relative w-full bg-primary overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-primary via-tertiary to-primary-container opacity-95"></div>
  <div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-secondary/15 blur-3xl pointer-events-none"></div>
  <div class="absolute -left-20 bottom-0 w-80 h-80 rounded-full bg-tertiary-container/30 blur-2xl pointer-events-none"></div>

  <div class="relative max-w-[1240px] mx-auto px-4 sm:px-6 py-6 sm:py-space-xl flex justify-center">
    <div class="w-full max-w-md bg-surface-container-lowest rounded-3xl shadow-2xl overflow-hidden">
      <div class="h-2 bg-gradient-to-r from-primary via-secondary to-primary-container"></div>

      <div class="p-5 sm:p-8 space-y-6">
        <div class="text-center space-y-2">
          <div class="w-14 h-14 rounded-[999px] bg-surface-container text-primary-container mx-auto flex items-center justify-center">
            <span class="material-symbols-outlined text-2xl">church</span>
          </div>
          <h1 class="font-headline-sm text-headline-sm text-primary">Portal Umat</h1>
          <p class="font-body-sm text-body-sm text-on-surface-variant">Masuk ke sistem administrasi Paroki Karangpanas</p>
        </div>

        @if (session('info'))
          <div class="p-3.5 rounded-2xl bg-secondary-container/40 text-on-secondary-container font-body-sm text-body-sm flex items-start gap-2">
            <span class="material-symbols-outlined text-lg shrink-0">info</span><span>{{ session('info') }}</span>
          </div>
        @endif
        @if ($errors->any())
          <div class="p-3.5 rounded-2xl bg-error-container text-on-error-container font-body-sm text-body-sm flex items-start gap-2">
            <span class="material-symbols-outlined text-lg shrink-0">error</span><span>{{ $errors->first() }}</span>
          </div>
        @endif

        <!-- Pilihan metode -->
        <div class="grid grid-cols-2 p-1 bg-surface-container rounded-[999px] gap-1" role="tablist">
          <button type="button" id="tab-kkg" data-method="kkg" role="tab" class="login-tab py-2.5 px-2 sm:px-3 font-label-md text-xs sm:text-label-md rounded-[999px] flex items-center justify-center gap-1 transition-all"><span class="material-symbols-outlined text-base">family_restroom</span> Nomor KKG</button>
          <button type="button" id="tab-email" data-method="email" role="tab" class="login-tab py-2.5 px-2 sm:px-3 font-label-md text-xs sm:text-label-md rounded-[999px] flex items-center justify-center gap-1 transition-all"><span class="material-symbols-outlined text-base">alternate_email</span> Email/WA</button>
        </div>

        <form method="POST" action="{{ route('portal.login.submit') }}" class="space-y-4" novalidate>
          @csrf
          <input type="hidden" name="login_type" id="login_type" value="{{ $tipe }}">

          <div class="space-y-1.5">
            <div class="flex items-center justify-between">
              <label class="font-label-sm text-label-sm text-primary font-medium" for="identifier" id="identifier-label">Nomor Kartu Keluarga Gereja (KKG)</label>
              <a class="font-label-sm text-label-sm text-secondary hover:text-primary transition-colors" href="{{ $wa }}" target="_blank" rel="noopener">Lupa nomor?</a>
            </div>
            <div class="relative">
              <span class="material-symbols-outlined text-lg absolute inset-y-0 left-3 flex items-center text-outline pointer-events-none" id="identifier-icon">credit_card</span>
              <input id="identifier" name="identifier" type="text" required autocomplete="username" value="{{ old('identifier') }}"
                class="block w-full pl-10 pr-3 py-3 rounded-2xl border-outline-variant bg-surface-container-lowest font-body-sm text-body-sm placeholder:text-outline focus:border-primary-container focus:ring-2 focus:ring-secondary-fixed"/>
            </div>
            <p class="font-label-sm text-label-sm text-on-surface-variant" id="identifier-hint"></p>
          </div>

          <div class="space-y-1.5">
            <div class="flex items-center justify-between">
              <label class="font-label-sm text-label-sm text-primary font-medium" for="password">Kata Sandi</label>
              <a class="font-label-sm text-label-sm text-secondary hover:text-primary transition-colors" href="{{ $wa }}" target="_blank" rel="noopener">Lupa kata sandi?</a>
            </div>
            <div class="relative">
              <span class="material-symbols-outlined text-lg absolute inset-y-0 left-3 flex items-center text-outline pointer-events-none">lock</span>
              <input id="password" name="password" type="password" required autocomplete="current-password" placeholder="Masukkan kata sandi"
                class="block w-full pl-10 pr-10 py-3 rounded-2xl border-outline-variant bg-surface-container-lowest font-body-sm text-body-sm placeholder:text-outline focus:border-primary-container focus:ring-2 focus:ring-secondary-fixed"/>
              <button type="button" id="toggle-pw" aria-label="Tampilkan atau sembunyikan kata sandi" class="absolute inset-y-0 right-0 pr-3 flex items-center text-outline hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-lg" id="eye-icon">visibility</span>
              </button>
            </div>
          </div>

          <label class="flex items-center gap-2 cursor-pointer">
            <input type="checkbox" name="remember" class="w-4 h-4 rounded-md border-outline-variant text-primary focus:ring-secondary-fixed">
            <span class="font-body-sm text-body-sm text-on-surface">Ingat saya di perangkat ini</span>
          </label>

          <button type="submit" class="w-full inline-flex items-center justify-center gap-2 bg-primary-container hover:bg-primary text-on-primary font-label-lg text-label-lg px-space-lg py-3.5 rounded-[999px] shadow-lg transition-all">
            <span>Masuk ke Portal Umat</span><span class="material-symbols-outlined text-lg">arrow_forward</span>
          </button>
        </form>

        <div class="relative flex items-center justify-center">
          <div class="border-t border-outline-variant w-full"></div>
          <span class="bg-surface-container-lowest px-3 font-label-sm text-label-sm text-outline uppercase tracking-wider absolute">atau</span>
        </div>

        <div class="space-y-3 text-center font-body-sm text-body-sm">
          <div>
            <span class="text-on-surface-variant">Belum terdaftar?</span>
            <a class="font-semibold text-primary hover:underline inline-flex items-center gap-0.5" href="{{ route('portal.daftar') }}">Daftar KKG Baru <span class="material-symbols-outlined text-sm">chevron_right</span></a>
          </div>
          <a class="font-label-sm text-label-sm text-secondary hover:text-primary hover:underline inline-flex items-center gap-1" href="{{ $wa }}" target="_blank" rel="noopener">
            <span class="material-symbols-outlined text-sm">support_agent</span> Bantuan Sekretariat Paroki
          </a>
        </div>

        <p class="pt-3 border-t border-outline-variant/60 flex items-center justify-center gap-1.5 font-label-sm text-label-sm text-on-surface-variant">
          <span class="material-symbols-outlined text-sm text-secondary">lock</span> Jangan bagikan kata sandi Anda kepada siapa pun.
        </p>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
  const cfg = {
    kkg:   { label: 'Nomor Kartu Keluarga Gereja (KKG)', ph: 'Contoh: KAS-KRP-2023-XXXX', icon: 'credit_card',   hint: 'Tertera pada lembar Kartu Keluarga Gereja Paroki Karangpanas.' },
    email: { label: 'Email Terdaftar atau Nomor WhatsApp', ph: 'nama@email.com atau 0812xxxxxxx', icon: 'alternate_email', hint: 'Gunakan email atau nomor yang didaftarkan saat pendaftaran KKG.' }
  };
  const tabs = document.querySelectorAll('.login-tab');
  const on  = ['bg-surface-container-lowest','text-primary','shadow-sm','font-semibold'];
  const off = ['text-on-surface-variant','hover:text-primary','font-medium'];

  function setMethod(m) {
    document.getElementById('login_type').value = m;
    document.getElementById('identifier-label').textContent = cfg[m].label;
    document.getElementById('identifier').placeholder = cfg[m].ph;
    document.getElementById('identifier-icon').textContent = cfg[m].icon;
    document.getElementById('identifier-hint').textContent = cfg[m].hint;
    tabs.forEach(t => {
      const active = t.dataset.method === m;
      on.forEach(c => t.classList.toggle(c, active));
      off.forEach(c => t.classList.toggle(c, !active));
      t.setAttribute('aria-selected', active);
    });
  }
  tabs.forEach(t => t.addEventListener('click', () => setMethod(t.dataset.method)));
  setMethod(document.getElementById('login_type').value || 'kkg');

  document.getElementById('toggle-pw').addEventListener('click', function () {
    const pw = document.getElementById('password'), ic = document.getElementById('eye-icon');
    const show = pw.type === 'password';
    pw.type = show ? 'text' : 'password';
    ic.textContent = show ? 'visibility_off' : 'visibility';
  });
});
</script>
@endpush