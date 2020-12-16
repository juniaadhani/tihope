<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;


class ProfilController extends Controller
{
    public function index($npm_mhs)
    {
        $mahasiswa = DB::table("mahasiswas")->where("npm_mhs", $npm_mhs)->first();
    	return view('app/profil/profil', $mahasiswa);
    }
}
