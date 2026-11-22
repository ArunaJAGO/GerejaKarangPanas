<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'user_id',
    'registration_type',
    'baptismal_name',
    'nik',
    'birth_place',
    'birth_date',
    'gender',
    'blood_type',
    'address',
    'pastoral_region',
    'neighborhood',
    'reported_to_neighborhood',
    'origin_parish',
    'origin_diocese',
    'transfer_letter_number',
    'family_document_path',
    'sacrament_document_path',
    'status',
    'review_notes',
    'reviewed_by',
    'reviewed_at',
])]
#[Hidden(['nik', 'family_document_path', 'sacrament_document_path'])]
class MemberRegistration extends Model
{
    protected function casts(): array
    {
        return [
            'nik' => 'encrypted',
            'birth_date' => 'date',
            'reviewed_at' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function reviewer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reviewed_by');
    }
}
