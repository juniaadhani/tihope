<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function index(Request $request)
    {
        $isLogin = $request->session()->get("isLogin");
        $npm = $request->session()->get("npm_mhs");
        $user = null;
        if (!is_null($npm)) {
            $user = DB::table("mahasiswas")->where("npm_mhs", $npm)->first();
        }
        if ($isLogin == "true") {
            return redirect('/home');
        }
        return view('app/login/login', compact('user', 'isLogin'));
    }


    public function login(Request $request) {
        $username = $request->username;
        $sandi = $request->sandi;
        $user = DB::table("mahasiswas")->where("npm_mhs", $username)
            ->where("password", $sandi)->first();
        if (is_null($user)) {
            return redirect('/login');
        }
        $request->session()->put("isLogin", "true");
        $request->session()->put("npm_mhs", $username);
        return redirect('/home');
    }

    public function logout(Request $request) {
        $request->session()->forget("isLogin");
        $request->session()->forget("npm_mhs");
        return redirect("/home");
    }
}
