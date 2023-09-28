<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $key_fakultas = ['id_fakultas'];

    public function prodi(){
        return $this->hasMany(Prodi::class);
    }
}
