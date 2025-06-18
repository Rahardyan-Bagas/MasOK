<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;
use App\Models\Resep;

class ResepController extends Controller
{
    // Tampilkan semua resep di halaman utama
    public function index()
    {
        $makananList = Makanan::with('resep')->get();
        return view('resep', compact('makananList'));
    }

    // Tampilkan detail resep berdasarkan nama makanan
    public function show($id)
{
    $makanan = Makanan::with('resep')->findOrFail($id);
    $resep = $makanan->resep;
    return view('resepDetail', compact('makanan', 'resep'));
}

}
