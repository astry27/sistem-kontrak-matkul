<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login_mahasiswa extends Model
{
    use HasFactory;

    protected $key_login_mahasiswa = ['id_login_mahasiswa'];

    public function mahasiswa(){
        return $this->hasOne(Mahasiswa::class);
    }
}
