<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $key_mahasiswa = ['id_mahasiswa'];

    public function fakultas(){
        return $this->hasOne(Fakultas::class);
    }
    public function prodi(){
        return $this->hasOne(Prodi::class);
    }
}
