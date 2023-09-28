<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('login_mahasiswas', function (Blueprint $table) {
            $table->id('id_login_mahasiswa');
            $table->char('nim_mahasiswa', 10)->unique();
            $table->string('password_mahasiswa', 15);
            $table->foreignId('id_mahasiswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login_mahasiswa');
    }
};
