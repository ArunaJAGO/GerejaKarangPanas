<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContentController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => Content::query()->where('status', 'published')->latest()->paginate(20),
        ]);
    }

    public function show(string $slug): JsonResponse
    {
        $content = Content::query()
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return response()->json(['data' => $content]);
    }

    public function store(Request $request): JsonResponse
    {
        $content = Content::create($this->validatedContent($request) + [
            'created_by' => $request->user()->id,
        ]);

        return response()->json(['data' => $content], 201);
    }

    public function update(Request $request, Content $content): JsonResponse
    {
        $content->update($this->validatedContent($request, $content));

        return response()->json(['data' => $content->refresh()]);
    }

    public function destroy(Content $content): JsonResponse
    {
        $content->delete();

        return response()->json(status: 204);
    }

    private function validatedContent(Request $request, ?Content $content = null): array
    {
        return $request->validate([
            'slug' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/',
                Rule::unique('contents', 'slug')->ignore($content),
            ],
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
            'status' => ['required', Rule::in(['draft', 'published'])],
        ]);
    }
}
