<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('umat')->index();
            $table->string('phone')->nullable()->unique();
            $table->string('church_family_number')->nullable()->unique();
            $table->boolean('is_active')->default(true);
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['phone']);
            $table->dropUnique(['church_family_number']);
            $table->dropIndex(['role']);
            $table->dropColumn(['role', 'phone', 'church_family_number', 'is_active']);
        });
    }
};
