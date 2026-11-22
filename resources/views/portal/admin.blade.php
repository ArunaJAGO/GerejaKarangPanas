@extends('layouts.app')

@section('title', 'Panel Administrasi - Paroki Karangpanas')
@section('nav-active', 'none')

@section('content')
<main class="max-w-6xl mx-auto px-4 sm:px-6 py-10 space-y-8">
  <header class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <div>
      <p class="font-label-sm text-label-sm uppercase tracking-wide text-secondary">Panel {{ $isSuperadmin ? 'Superadmin' : 'Admin' }}</p>
      <h1 class="font-headline-lg text-headline-md text-primary">Administrasi Website</h1>
      <p class="font-body-sm text-body-sm text-on-surface-variant">{{ auth()->user()->name }} · {{ auth()->user()->email }}</p>
    </div>
    <form method="POST" action="{{ route('portal.logout') }}">@csrf
      <button class="px-5 py-2.5 rounded-full bg-primary text-on-primary font-label-lg text-label-lg" type="submit">Keluar</button>
    </form>
  </header>

  @if (session('status'))
    <div class="p-4 rounded-xl bg-secondary-container/40 text-on-secondary-container">{{ session('status') }}</div>
  @endif
  @if ($errors->any())
    <div class="p-4 rounded-xl bg-error-container text-on-error-container">{{ $errors->first() }}</div>
  @endif

  <section class="grid sm:grid-cols-2 gap-4">
    <div class="p-5 rounded-2xl bg-surface-container-low">
      <p class="font-body-sm text-body-sm text-on-surface-variant">Pengajuan KKG menunggu verifikasi</p>
      <strong class="font-headline-md text-primary">{{ $registrations }}</strong>
      <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Tinjau dan verifikasi melalui API <code>/api/v1/member-registrations</code>.</p>
    </div>
    <div class="p-5 rounded-2xl bg-surface-container-low">
      <p class="font-body-sm text-body-sm text-on-surface-variant">Konten website</p>
      <strong class="font-headline-md text-primary">{{ $contents->count() }}</strong>
      <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Konten publik tersedia di <a href="{{ route('public.contents.index') }}" class="text-primary underline">halaman publikasi</a> dan API <code>/api/v1/contents</code>.</p>
    </div>
  </section>

  <section class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm space-y-5">
    <div>
      <h2 class="font-headline-sm text-primary">Tambah Konten</h2>
      <p class="font-body-sm text-body-sm text-on-surface-variant">Konten berstatus draft tidak ditampilkan pada API publik.</p>
    </div>
    <form method="POST" action="{{ route('admin.contents.store') }}" class="grid gap-3">
      @csrf
      <input name="title" value="{{ old('title') }}" required maxlength="255" placeholder="Judul" class="rounded-lg border-outline-variant">
      <input name="slug" value="{{ old('slug') }}" required maxlength="255" pattern="[a-z0-9]+(?:-[a-z0-9]+)*" placeholder="slug-konten" class="rounded-lg border-outline-variant">
      <textarea name="body" required rows="5" placeholder="Isi konten" class="rounded-lg border-outline-variant">{{ old('body') }}</textarea>
      <div class="flex flex-wrap gap-3 items-center">
        <select name="status" required class="rounded-lg border-outline-variant">
          <option value="draft">Draft</option><option value="published">Terbitkan</option>
        </select>
        <button class="px-5 py-2.5 rounded-full bg-primary text-on-primary font-label-lg text-label-lg">Simpan Konten</button>
      </div>
    </form>
  </section>

  <section class="space-y-4">
    <h2 class="font-headline-sm text-primary">Kelola Konten</h2>
    @forelse ($contents as $content)
      <article class="p-5 rounded-2xl bg-surface-container-lowest shadow-sm space-y-3">
        <form method="POST" action="{{ route('admin.contents.update', $content) }}" class="grid gap-3">
          @csrf @method('PUT')
          <input name="title" value="{{ $content->title }}" required maxlength="255" class="rounded-lg border-outline-variant">
          <input name="slug" value="{{ $content->slug }}" required maxlength="255" pattern="[a-z0-9]+(?:-[a-z0-9]+)*" class="rounded-lg border-outline-variant">
          <textarea name="body" required rows="5" class="rounded-lg border-outline-variant">{{ $content->body }}</textarea>
          <div class="flex flex-wrap gap-3 items-center">
            <select name="status" required class="rounded-lg border-outline-variant">
              <option value="draft" @selected($content->status === 'draft')>Draft</option>
              <option value="published" @selected($content->status === 'published')>Terbitkan</option>
            </select>
            <button class="px-5 py-2.5 rounded-full bg-primary text-on-primary font-label-lg text-label-lg">Perbarui</button>
          </div>
        </form>
        <form method="POST" action="{{ route('admin.contents.destroy', $content) }}" onsubmit="return confirm('Hapus konten ini?')">
          @csrf @method('DELETE')
          <button class="px-5 py-2 rounded-full bg-error-container text-on-error-container font-label-lg text-label-lg">Hapus</button>
        </form>
      </article>
    @empty
      <p class="p-5 rounded-2xl bg-surface-container-low text-on-surface-variant">Belum ada konten.</p>
    @endforelse
  </section>

  @if ($isSuperadmin)
    <section class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm space-y-5">
      <div>
        <h2 class="font-headline-sm text-primary">Tambah Akun Pengelola</h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Superadmin dapat membuat akun admin atau superadmin.</p>
      </div>
      <form method="POST" action="{{ route('admin.accounts.store') }}" class="grid md:grid-cols-2 gap-3">
        @csrf
        <input name="name" value="{{ old('name') }}" required maxlength="255" placeholder="Nama" class="rounded-lg border-outline-variant">
        <input name="email" type="email" value="{{ old('email') }}" required placeholder="Email" class="rounded-lg border-outline-variant">
        <input name="password" type="password" required minlength="12" placeholder="Kata sandi (minimal 12 karakter)" class="rounded-lg border-outline-variant">
        <input name="password_confirmation" type="password" required minlength="12" placeholder="Ulangi kata sandi" class="rounded-lg border-outline-variant">
        <select name="role" required class="rounded-lg border-outline-variant">
          <option value="admin">Admin</option><option value="superadmin">Superadmin</option>
        </select>
        <button class="px-5 py-2.5 rounded-full bg-primary text-on-primary font-label-lg text-label-lg">Buat Akun</button>
      </form>
      <div class="overflow-x-auto">
        <table class="w-full text-left font-body-sm text-body-sm">
          <thead><tr class="border-b border-outline-variant"><th class="p-2">Nama</th><th class="p-2">Email</th><th class="p-2">Peran</th><th class="p-2">Status</th></tr></thead>
          <tbody>
            @foreach ($users as $user)
              <tr class="border-b border-outline-variant/50"><td class="p-2">{{ $user->name }}</td><td class="p-2">{{ $user->email }}</td><td class="p-2">{{ $user->role }}</td><td class="p-2">{{ $user->is_active ? 'Aktif' : 'Nonaktif' }}</td></tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </section>
  @endif
</main>
@endsection
