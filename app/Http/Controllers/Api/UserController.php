<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => User::query()->latest()->paginate(20)->through(fn (User $user) => $this->userData($user)),
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:12'],
            'role' => ['required', Rule::in([User::ROLE_ADMIN, User::ROLE_SUPERADMIN])],
            'phone' => ['nullable', 'string', 'max:32', 'unique:users,phone'],
            'church_family_number' => ['nullable', 'string', 'max:255', 'unique:users,church_family_number'],
        ]);

        $user = User::create($validated);

        return response()->json(['data' => $this->userData($user)], 201);
    }

    public function update(Request $request, User $user): JsonResponse
    {
        $validated = $request->validate([
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'email' => ['sometimes', 'required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user)],
            'password' => ['sometimes', 'required', 'string', 'min:12'],
            'role' => ['sometimes', 'required', Rule::in([User::ROLE_UMAT, User::ROLE_ADMIN, User::ROLE_SUPERADMIN])],
            'phone' => ['sometimes', 'nullable', 'string', 'max:32', Rule::unique('users', 'phone')->ignore($user)],
            'church_family_number' => ['sometimes', 'nullable', 'string', 'max:255', Rule::unique('users', 'church_family_number')->ignore($user)],
            'is_active' => ['sometimes', 'required', 'boolean'],
        ]);
        $isBeingDeactivated = array_key_exists('is_active', $validated) && ! $request->boolean('is_active');

        if ($user->is($request->user()) && $isBeingDeactivated) {
            return response()->json(['message' => 'Anda tidak dapat menonaktifkan akun sendiri.'], 422);
        }

        if ($user->role === User::ROLE_SUPERADMIN
            && (($validated['role'] ?? User::ROLE_SUPERADMIN) !== User::ROLE_SUPERADMIN
                || $isBeingDeactivated)
            && User::query()->where('role', User::ROLE_SUPERADMIN)->count() <= 1) {
            return response()->json(['message' => 'Aplikasi harus memiliki setidaknya satu superadmin.'], 422);
        }

        $user->update($validated);

        return response()->json(['data' => $this->userData($user->refresh())]);
    }

    public function destroy(Request $request, User $user): JsonResponse
    {
        if ($user->is($request->user())) {
            return response()->json(['message' => 'Anda tidak dapat menghapus akun sendiri.'], 422);
        }

        if ($user->role === User::ROLE_SUPERADMIN
            && User::query()->where('role', User::ROLE_SUPERADMIN)->count() <= 1) {
            return response()->json(['message' => 'Aplikasi harus memiliki setidaknya satu superadmin.'], 422);
        }

        $user->delete();

        return response()->json(status: 204);
    }

    private function userData(User $user): array
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role,
            'phone' => $user->phone,
            'church_family_number' => $user->church_family_number,
            'is_active' => $user->is_active,
            'created_at' => $user->created_at,
        ];
    }
}
