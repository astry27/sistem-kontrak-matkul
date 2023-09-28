<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Login_mahasiswa;
use Illuminate\Database\Seeder;
use App\Models\Dosen;
use App\Models\Fakultas;
use App\Models\Login_dosen;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use App\Models\Prodi;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(DosenSeeder::class);
        $this->call(MahasiswaSeeder::class);
        $this->call(ProdiSeeder::class);
        $this->call(FakultasSeeder::class);
        $this->call(MatkulSeeder::class);
        $this->call(LoginMahasiswaSeeder::class);
        $this->call(LoginDosenSeeder::class);
    }
}
