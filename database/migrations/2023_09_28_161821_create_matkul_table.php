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
        Schema::create('matkuls', function (Blueprint $table) {
            $table->id('id_matkul');
            $table->foreignId('id_dosen');
            $table->foreignId('id_mahasiswa');
            $table->char('kode_matkul', 7)->unique();
            $table->string('nama_matkul', 50);
            $table->integer('jumlah_sks');
            $table->string('jadwal_matkul', 25);
            $table->integer('kapasitas_matkul');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matkul');
    }
};
