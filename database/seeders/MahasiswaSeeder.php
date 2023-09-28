<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'nim_mahasiswa' => '0123456789',
            'nama_mahasiswa' => 'Noval Hidayat',
            'email_mahasiswa' => 'noval11@gmail.com',
            'id_fakultas' => '1',
            'id_prodi' => '2'
        ]);

        Mahasiswa::create([
            'nim_mahasiswa' => '0987654321',
            'nama_mahasiswa' => 'Basalamah Alam',
            'email_mahasiswa' => 'alam10@gmail.com',
            'id_fakultas' => '2',
            'id_prodi' => '2'
        ]);

        Mahasiswa::create([
            'nim_mahasiswa' => '0123459876',
            'nama_mahasiswa' => 'Astry Turnip',
            'email_mahasiswa' => 'astry05@gmail.com',
            'id_fakultas' => '1',
            'id_prodi' => '1'
        ]);
    }
}
