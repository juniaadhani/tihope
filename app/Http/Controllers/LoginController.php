<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function index(Request $request)
    {
        $isLogin = $this->getCookie($request, "isLogin");
        if ($isLogin == "true") {
            return view('app/home/home');
        }
    	return view('app/login/login');
    }

    public function setCookie(Request $request, $key, $value){
        $minutes = 360;
        $response = new Response('Set Cookie');
        $response->withCookie(cookie($key, $value, $minutes));
        return $response;
    }

    public function getCookie(Request $request, $key){
        return $request->cookie($key);
    }
}
