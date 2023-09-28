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
        Schema::create('login_dosens', function (Blueprint $table) {
            $table->id('id_login_dosen');
            $table->char('nip_dosen', 18)->unique();
            $table->string('password_dosen', 15);
            $table->foreignId('id_dosen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login_dosen');
    }
};
