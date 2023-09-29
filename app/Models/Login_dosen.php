<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Login_dosen extends Model
{
    use HasFactory;

    protected $key_login_dosen = ['id_login_dosen'];

    public function dosen(){
        return $this->hasOne(Dosen::class);
    }
}
