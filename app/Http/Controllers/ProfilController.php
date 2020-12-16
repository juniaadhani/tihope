<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfilController extends Controller
{
    public function index($npm_mhs, Request $request)
    {
        $isLogin = $request->session()->get("isLogin");
        $npm = $request->session()->get("npm_mhs");
        $user = null;
        if (!is_null($npm)) {
            $user = DB::table("mahasiswas")->where("npm_mhs", $npm)->first();
        }
        $mahasiswa = DB::table("mahasiswas")->where("npm_mhs", $npm_mhs)->first();
    	return view('app/profil/profil', compact('mahasiswa', 'user', 'isLogin'));
    }
}
