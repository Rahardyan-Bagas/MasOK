<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
##Route::get('/', function () {
    #return view('LokasiIndonesiaMapPage'); // tanpa .blade.php dan tanpa folder 'views'
#});

Route::get('/', function () {
    return view('SignUpPage'); // tanpa .blade.php dan tanpa folder 'views'
});