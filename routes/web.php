<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app/home/home');
});

Route::get('/home','HomeController@index');
Route::get('/home/materi','HomeController@materi');
Route::get('/home/materi/download','HomeController@download');
Route::get('/about','AboutController@index');
Route::get('/contact','ContactUsController@index');
Route::get('/profil/{npm_mhs}', function ($npm_mhs, \Illuminate\Http\Request $request) {
    return (new \App\Http\Controllers\ProfilController())->index($request, $npm_mhs);
});
Route::get('/login', 'LoginController@index');
Route::get('/logout', 'LoginController@logout');
Route::post('/login/login', 'LoginController@login');
