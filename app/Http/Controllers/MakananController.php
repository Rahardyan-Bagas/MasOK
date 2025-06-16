<?php

namespace App\Http\Controllers;

use App\Models\Makanan;

class MakananController extends Controller
{
    public function makananJogjaManual()
    {
        $gudeg = Makanan::where('Nama_Makanan', 'Gudeg')->with('lokasi')->first();
        $bakpia = Makanan::where('Nama_Makanan', 'Bakpia')->with('lokasi')->first();
        $sate = Makanan::where('Nama_Makanan', 'Sate Klathak')->with('lokasi')->first();

        return view('makananYogya', compact('gudeg', 'bakpia', 'sate'));
    }
}
