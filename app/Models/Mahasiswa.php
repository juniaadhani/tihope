<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswas";

    protected  $fillable = [
        'nama_mhs',
        'npm_mhs',
        'jk_mhs',
        'email_mhs',
        'no_hp_mhs',
        'password',
    ];
}
