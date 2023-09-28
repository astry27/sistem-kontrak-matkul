<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::create([
            'nip_dosen' => '123456789876543245',
            'nama_dosen' => 'Noval Hidayat',
            'email_dosen' => 'noval11@gmail.com',
            'id_fakultas' => '1',
            'id_prodi' => '2'
        ]);

        Dosen::create([
            'nip_dosen' => '123456789200543245',
            'nama_dosen' => 'Basalamah Alam',
            'email_dosen' => 'alam10@gmail.com',
            'id_fakultas' => '2',
            'id_prodi' => '2'
        ]);

        Dosen::create([
            'nip_dosen' => '123006789876543245',
            'nama_dosen' => 'Astry Turnip',
            'email_dosen' => 'astry05@gmail.com',
            'id_fakultas' => '1',
            'id_prodi' => '1'
        ]);
    }
}
