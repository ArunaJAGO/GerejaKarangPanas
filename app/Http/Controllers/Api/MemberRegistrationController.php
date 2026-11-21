<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MemberRegistration;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\StreamedResponse;

class MemberRegistrationController extends Controller
{
    public function index(): JsonResponse
    {
        $registrations = MemberRegistration::query()
            ->with('user:id,name,email,phone')
            ->latest()
            ->paginate(20)
            ->through(fn (MemberRegistration $registration) => $this->registrationData($registration));

        return response()->json(['data' => $registrations]);
    }

    public function update(Request $request, MemberRegistration $memberRegistration): JsonResponse
    {
        $validated = $request->validate([
            'status' => ['required', Rule::in(['pending', 'verified', 'rejected'])],
            'review_notes' => ['nullable', 'string', 'max:5000'],
            'church_family_number' => [
                Rule::requiredIf($request->input('status') === 'verified'),
                'nullable',
                'string',
                'max:255',
                Rule::unique('users', 'church_family_number')->ignore($memberRegistration->user_id),
            ],
        ]);

        $memberRegistration->update([
            'status' => $validated['status'],
            'review_notes' => $validated['review_notes'] ?? null,
            'reviewed_by' => $request->user()->id,
            'reviewed_at' => now(),
        ]);

        if ($validated['status'] === 'verified') {
            $memberRegistration->user()->update(['church_family_number' => $validated['church_family_number']]);
        }

        return response()->json(['data' => $this->registrationData($memberRegistration->load('user:id,name,email,phone'))]);
    }

    public function document(MemberRegistration $memberRegistration, string $document): StreamedResponse
    {
        $path = match ($document) {
            'family' => $memberRegistration->family_document_path,
            'sacrament' => $memberRegistration->sacrament_document_path,
            default => abort(404),
        };

        abort_unless(Storage::disk('local')->exists($path), 404);

        return Storage::disk('local')->download($path);
    }

    private function registrationData(MemberRegistration $registration): array
    {
        return [
            'id' => $registration->id,
            'user' => $registration->user,
            'registration_type' => $registration->registration_type,
            'baptismal_name' => $registration->baptismal_name,
            'birth_place' => $registration->birth_place,
            'birth_date' => $registration->birth_date->toDateString(),
            'gender' => $registration->gender,
            'blood_type' => $registration->blood_type,
            'address' => $registration->address,
            'pastoral_region' => $registration->pastoral_region,
            'neighborhood' => $registration->neighborhood,
            'reported_to_neighborhood' => $registration->reported_to_neighborhood,
            'origin_parish' => $registration->origin_parish,
            'origin_diocese' => $registration->origin_diocese,
            'transfer_letter_number' => $registration->transfer_letter_number,
            'documents' => [
                'family' => route('api.v1.member-registrations.documents.show', [$registration, 'family']),
                'sacrament' => route('api.v1.member-registrations.documents.show', [$registration, 'sacrament']),
            ],
            'status' => $registration->status,
            'review_notes' => $registration->review_notes,
            'created_at' => $registration->created_at,
            'reviewed_at' => $registration->reviewed_at,
        ];
    }
}
