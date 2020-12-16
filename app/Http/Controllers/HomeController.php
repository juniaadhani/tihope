<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        $isLogin = $request->session()->get("isLogin");
        $npm = $request->session()->get("npm_mhs");
        if (!is_null($npm)) {
            $user = DB::table("mahasiswas")->where("npm_mhs", $npm)->first();
        }
    	return view('app/home/home', compact('user', 'isLogin'));
    }

    public function materi()
    {
    	return view('app/home/materi');
    }

    public function download()
    {
    	return view('app/home/download');
    }
}
