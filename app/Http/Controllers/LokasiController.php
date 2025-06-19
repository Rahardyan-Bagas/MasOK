<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;
use App\Models\Makanan;

class LokasiController extends Controller
{
    // Tampilkan daftar restoran di Yogyakarta
    public function index()
{
    $restorans = \App\Models\Makanan::with('lokasi')->whereIn('Id_Makanan', [1, 2, 3])->get();
    return view('makananYogya', compact('restorans'));
}

    // Tampilkan detail restoran tertentu berdasarkan ID
    public function show($id)
    {
        $restoran = Makanan::with('lokasi')->findOrFail($id);
        return view('restoran', compact('restoran'));
    }
}
