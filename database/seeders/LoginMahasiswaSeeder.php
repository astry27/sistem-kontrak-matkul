<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Login_mahasiswa;

class LoginMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Login_mahasiswa::create([
            'nim_mahasiswa' => '0123456789',
            'password_mahasiswa' => '123456abcd',
            'id_mahasiswa' => '1'
        ]);
    }
}
