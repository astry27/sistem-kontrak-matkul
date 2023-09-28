<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //id prodi dalam fakultas dihapus di prodi tambah Id_fakultas..........
        Fakultas::create([
            'kode_fakultas' => '12345',
            'nama_fakultas' => 'Fakultas Teknik'
        ]);

        Fakultas::create([
            'kode_fakultas' => '54321',
            'nama_fakultas' => 'Fakultas Matematika dan Ilmu Pengetahuan Alam'
        ]);
    }
}
