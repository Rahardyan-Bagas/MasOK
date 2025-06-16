<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// routes/web.php
##Route::get('/', function () {
    #return view('LokasiIndonesiaMapPage'); // tanpa .blade.php dan tanpa folder 'views'
#});

Route::get('/', function () {
    return view('homepage'); 
});

#Route::get('/home', function () {
  #  return view('homepage');
#})->name('home');

Route::post('/logout', function () {
    session()->forget('user');
    return redirect('/login')->with('success', 'Berhasil logout.');
})->name('logout');

#Route::get('/login', function () {
    #return view('LoginPage'); // <- Tambahan ini penting
#});

#Route::get('/signup', function () {
    #return view('SignUpPage');
#});

Route::get('/lokasi', function () {
    return view('LokasiIndonesiaMapPage'); // <- Tambahan ini penting
});

Route::get('/makanan', function () {
    return view('MakananYogya');
});

Route::get('/resep', function () {
    return view('resep'); // <- Tambahan ini penting
});

Route::get('/restoran', function () {
    return view('restoran');
});

Route::get('/tentang', function () {
    return view('TentangKamiPage');
});

Route::get('/resepgudeg', function () {
    return view('resepGudeg'); // <- Tambahan ini penting
});

Route::get('/reseprendang', function () {
    return view('resepRendang');
});

Route::get('/resepsate', function () {
    return view('resepSate');
});

Route::get('/', function () {
    return view('homepage'); // misalnya file: resources/views/landing.blade.php
})->name('homepage');


Route::get('/signup', [AuthController::class, 'create'])->name('signup.form');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.store');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');