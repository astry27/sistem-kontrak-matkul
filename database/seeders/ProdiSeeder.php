<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prodi;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prodi::create([
            'kode_prodi' => '23457',
            'nama_prodi' => 'Teknik Informatika',
            'id_fakultas' => '1'
        ]);

        Prodi::create([
            'kode_prodi' => '76543',
            'nama_prodi' => 'Teknik Komputer',
            'id_fakultas' => '1'
        ]);

        Prodi::create([
            'kode_prodi' => '12436',
            'nama_prodi' => 'Biologi',
            'id_fakultas' => '2'
        ]);

        Prodi::create([
            'kode_prodi' => '76524',
            'nama_prodi' => 'Ilmu Komputer',
            'id_fakultas' => '2'
        ]);
    }
}
