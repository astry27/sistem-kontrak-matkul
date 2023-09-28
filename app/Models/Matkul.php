<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;

    protected $key_matkul = ['id_matkul'];

    public function dosen(){
        return $this->belongsToMany(Dosen::class);
    }
    public function mahasiswa(){
        return $this->belongsToMany(Mahasiswa::class);
    }
}
