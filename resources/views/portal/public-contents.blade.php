@extends('layouts.app')

@section('title', 'Publikasi Paroki Karangpanas')
@section('nav-active', 'none')

@section('content')
<main class="max-w-5xl mx-auto px-4 sm:px-6 py-10 space-y-6">
  <header>
    <p class="font-label-sm text-label-sm uppercase tracking-wide text-secondary">Paroki Karangpanas</p>
    <h1 class="font-headline-lg text-headline-md text-primary">Publikasi</h1>
    <p class="font-body-sm text-body-sm text-on-surface-variant">Berita dan informasi terbaru dari paroki.</p>
  </header>
  <section class="space-y-4">
    @forelse ($contents as $content)
      <article class="p-5 rounded-2xl bg-surface-container-lowest shadow-sm">
        <h2 class="font-headline-sm text-primary">
          <a href="{{ route('public.contents.show', $content->slug) }}" class="hover:underline">{{ $content->title }}</a>
        </h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">{{ $content->created_at->format('d M Y') }}</p>
        <p class="font-body-md text-body-md text-on-surface mt-3">{{ \Illuminate\Support\Str::limit(strip_tags($content->body), 240) }}</p>
      </article>
    @empty
      <p class="p-5 rounded-2xl bg-surface-container-low text-on-surface-variant">Belum ada publikasi.</p>
    @endforelse
  </section>
  {{ $contents->links() }}
</main>
@endsection
