<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfilController extends Controller
{
    public function index(Request $request, $npm_mhs)
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

    public function saveData(Request $request) {
        $nama = $request->nama;
        $npm = $request->npm;
        $email = $request->email;
        $no_hp = $request->no_hp;
        $pswd = $request->password;
        $id = $request->id;
        $user = DB::table("mahasiswas")->where("id", $id)->first();
        if (!is_null($user)) {
            $user->nama_mhs = $nama;
            $user->email_mhs = $email;
            $user->no_hp_mhs = $no_hp;
            $user->password = $pswd;
            DB::table("mahasiswas")->update(array(
                "id" => $user->id,
                "npm_mhs" => $user->npm_mhs,
                "nama_mhs" => $user->nama_mhs,
                "jk_mhs" => $user->jk_mhs,
                "tempat_lhr_mhs" => $user->tempat_lhr_mhs,
                "tgl_lhr_mhs" => $user->tgl_lhr_mhs,
                "no_hp_mhs" => $user->no_hp_mhs,
                "email_mhs" => $user->email_mhs,
                "password" => $user->password
            ));
            return redirect("/profil/" .$user->npm_mhs);
        }
        return redirect("/home");
    }
}
