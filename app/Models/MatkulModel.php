<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatkulModel extends Model
{
    protected $table = "matkuls";

    protected  $fillable = [
        'id_matkul',
        'id',
        'nama_matkul',
        'nama_dosen',
        'semester',
    ];
}
