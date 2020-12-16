<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        $isLogin = $request->session()->get("isLogin");
        $npm = $request->session()->get("npm_mhs");
        $user = null;
        if (!is_null($npm)) {
            $user = DB::table("mahasiswas")->where("npm_mhs", $npm)->first();
        }
    	return view('app/contact/contact', compact('isLogin', 'user'));
    }
}
