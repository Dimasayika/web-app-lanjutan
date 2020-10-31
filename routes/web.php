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

Route::get('/testing-view', function () {
    return view('view-1');
});

#1
Route::get('/about-me', function () {
    return ('Nama saya <b>Dimas ayika<b/>');
});

#2
Route::get('/belajar', function () {
    return ('sedang belajar <b>coding<b/>');
});

#3
Route::get('/home', function () {
    return ('Selamat datang di <b>web kami<b/>');
});

#4
Route::get('/tentang', function () {
    return ('terima kasih sudah berkunjung di <b>belajar coding<b/>');
});

#5
Route::get('/komentar', function () {
    return ('silahkan tinggalkan komentar <b>anda<b/>');
});

use App\Http\Controllers\UtamaController;
Route::get("/utama/test", [UtamaController::class,"test"]);

use App\Http\Controllers\Satucontroller;
Route::get("/utama/dimas 1", [SatuController::class,"satu"]);
Route::get("/utama/dimas 2", [SatuController::class,"dua"]);
Route::get("/utama/dimas 3", [SatuController::class,"tiga"]);

use App\Http\Controllers\Duacontroller;
Route::get("/utama/dimas 4", [DuaController::class,"empat"]);
Route::get("/utama/dimas 5", [DuaController::class,"lima"]);
Route::get("/utama/dimas 6", [DuaController::class,"enam"]);