<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Добавляем роль пользователю.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Роль пользователя.
            // По умолчанию новый пользователь будет обычным пользователем.
            $table->string('role')->default('user')->after('email');
        });
    }

    /**
     * Удаляем роль при откате migration.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};