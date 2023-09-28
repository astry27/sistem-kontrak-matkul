<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $key_dosen = ['id_dosen'];

    public function fakultas(){
        return $this->hasOne(Fakultas::class);
    }
    public function prodi(){
        return $this->hasOne(Prodi::class);
    }
}
