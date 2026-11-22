<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\View\View;

class PublicContentController extends Controller
{
    public function index(): View
    {
        return view('portal.public-contents', [
            'contents' => Content::query()->where('status', 'published')->latest()->paginate(10),
        ]);
    }

    public function show(string $slug): View
    {
        $content = Content::query()
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('portal.public-content', ['content' => $content]);
    }
}
