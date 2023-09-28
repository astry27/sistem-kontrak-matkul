<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matkul;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matkul::create([
            'id_dosen' => '1',
            'id_mahasiswa' => '1',
            'nama_matkul' => 'WEB PROGRAMMING',
            'kode_matkul' => '1234567',
            'jumlah_sks' => '4',
            'jadwal_matkul' => 'Kamis (06.00 - 09.20)',
            'kapasitas_matkul' => '20'
        ]);
    }
}
