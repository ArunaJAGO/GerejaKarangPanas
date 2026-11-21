<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\MemberRegistration;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class PortalAdminController extends Controller
{
    public function index(): View
    {
        return view('portal.admin', [
            'contents' => Content::query()->latest()->get(),
            'registrations' => MemberRegistration::query()->where('status', 'pending')->count(),
            'users' => Auth::user()->role === User::ROLE_SUPERADMIN
                ? User::query()->latest()->get()
                : collect(),
            'isSuperadmin' => Auth::user()->role === User::ROLE_SUPERADMIN,
        ]);
    }

    public function storeContent(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'slug' => ['required', 'string', 'max:255', 'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/', 'unique:contents,slug'],
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
            'status' => ['required', Rule::in(['draft', 'published'])],
        ]);

        Content::create($validated + ['created_by' => $request->user()->id]);

        return back()->with('status', 'Konten berhasil ditambahkan.');
    }

    public function updateContent(Request $request, Content $content): RedirectResponse
    {
        $validated = $request->validate([
            'slug' => ['required', 'string', 'max:255', 'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/', Rule::unique('contents', 'slug')->ignore($content)],
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
            'status' => ['required', Rule::in(['draft', 'published'])],
        ]);

        $content->update($validated);

        return back()->with('status', 'Konten berhasil diperbarui.');
    }

    public function destroyContent(Content $content): RedirectResponse
    {
        $content->delete();

        return back()->with('status', 'Konten berhasil dihapus.');
    }

    public function storeAccount(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:12', 'confirmed'],
            'role' => ['required', Rule::in([User::ROLE_ADMIN, User::ROLE_SUPERADMIN])],
        ]);

        User::create($validated);

        return back()->with('status', 'Akun pengelola berhasil dibuat.');
    }
}
