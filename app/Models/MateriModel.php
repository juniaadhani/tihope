<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriModel extends Model
{
    protected $table = "list_materis";

    protected  $fillable = [
        'id_materi',
        'id_matkul',
        'judul_materi',
    ];
}