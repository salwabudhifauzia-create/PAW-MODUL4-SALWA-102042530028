<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Mengubah kolom role agar mendukung 'admin' dan 'mahasiswa'
            $table->enum('role', ['admin', 'mahasiswa'])->default('mahasiswa')->change();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['admin'])->default('admin')->change();
        });
    }
};