<?php

namespace App\Http\Controllers;

use App\Models\Makanan;

class MakananController extends Controller
{
    public function makananJogjaManual()
    {
        // Ambil data berdasarkan ID, asumsi:
        // Id_Makanan 1 = Gudeg
        // Id_Makanan 2 = Bakpia
        // Id_Makanan 3 = Sate Klathak
        $gudeg = Makanan::with('lokasi')->find(1);
        $bakpia = Makanan::with('lokasi')->find(2);
        $sate = Makanan::with('lokasi')->find(3);

        // Cek jika salah satu tidak ditemukan
        if (!$gudeg || !$bakpia || !$sate) {
            abort(404, "Salah satu data makanan tidak ditemukan.");
        }

        return view('makananYogya', compact('gudeg', 'bakpia', 'sate'));
    }
}
