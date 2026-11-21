<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('member_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
            $table->string('registration_type');
            $table->string('baptismal_name');
            $table->text('nik');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->char('gender', 1);
            $table->string('blood_type')->nullable();
            $table->text('address');
            $table->string('pastoral_region');
            $table->string('neighborhood');
            $table->string('reported_to_neighborhood')->default('belum');
            $table->string('origin_parish')->nullable();
            $table->string('origin_diocese')->nullable();
            $table->string('transfer_letter_number')->nullable();
            $table->string('family_document_path');
            $table->string('sacrament_document_path');
            $table->string('status')->default('pending')->index();
            $table->text('review_notes')->nullable();
            $table->foreignId('reviewed_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('reviewed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('member_registrations');
    }
};
