<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\RestoranController;
use App\Http\Controllers\ResepController;


Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::post('/logout', function () {
    session()->forget('user');
    return redirect('/login')->with('success', 'Berhasil logout.');
})->name('logout');

Route::get('/lokasi', function () {
    return view('LokasiIndonesiaMapPage'); // <- Tambahan ini penting
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


Route::get('/signup', [AuthController::class, 'create'])->name('signup.form');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.store');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/makanan', [MakananController::class, 'makananJogjaManual']);

Route::get('/restoran/{id}', [RestoranController::class, 'show']);


Route::get('/resep', [ResepController::class, 'index']);
Route::get('/resep/{id}', [ResepController::class, 'show']);

