@extends('layouts.app')

@section('title', $content->title.' - Paroki Karangpanas')
@section('nav-active', 'none')

@section('content')
<main class="max-w-4xl mx-auto px-4 sm:px-6 py-10">
  <a href="{{ route('public.contents.index') }}" class="font-label-lg text-label-lg text-primary hover:underline">← Semua publikasi</a>
  <article class="mt-6 p-6 sm:p-8 rounded-2xl bg-surface-container-lowest shadow-sm">
    <p class="font-label-sm text-label-sm uppercase tracking-wide text-secondary">{{ $content->created_at->format('d M Y') }}</p>
    <h1 class="font-headline-lg text-headline-md text-primary mt-2">{{ $content->title }}</h1>
    <div class="font-body-md text-body-md text-on-surface mt-6 whitespace-pre-line">{{ $content->body }}</div>
  </article>
</main>
@endsection
