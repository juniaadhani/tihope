<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function index(Request $request)
    {
        $isLogin = $request->session()->get("isLogin");
        if ($isLogin == "true") {
            return redirect('/home');
        }
        return redirect('/login');
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
        return redirect('/home');
    }

    public function logout(Request $request) {
        $request->session()->forget("isLogin");
        return redirect("/home");
    }
}
