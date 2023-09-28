<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Login_dosen;

class LoginDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Login_dosen::create([
            'nip_dosen' => '123456789876543245',
            'password_dosen' => '123456abcd',
            'id_dosen' => '1',
        ]);
    }
}
