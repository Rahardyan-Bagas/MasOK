<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;

class RestoranController extends Controller
{
    public function index()
    {
        $restorans = Makanan::with('lokasi')->whereIn('id', [1, 2, 3])->get();

        return view('MakananYogya', compact('restorans'));
    }
    public function show($id)
    {
        $data = collect([
            1 => [
                'Nama_Restoran' => 'Iga Bajog',
                'Gambar' => 'img_image_21.png',
                'Rating' => 4,0,
                'Deskripsi' => 'Iga Bajog adalah tempat makan terkenal di Yogyakarta dengan olahan iga sapi yang lezat dan empuk, disiram dengan sambal kecap. Iga Bajog juga dikenal karena buka 24 jam non-stop, sehingga menjadi tempat makan yang nyaman untuk dinikmati kapan saja.',
                'rekomendasi' => ['Iga Bakar Jogja', 'Sate Koyor', 'Sop Iga'],
            ],
            2 => [
                'Nama_Restoran' => 'Bakpia Pathok 25',
                'Gambar' => 'image2.png',
                'Rating' => 5.0,
                'Deskripsi' => 'Bakpia Pathok 25 adalah ikon oleh-oleh khas Yogyakarta yang sudah melegenda. Teksturnya lembut dengan isian kacang hijau yang manis, cocok untuk dijadikan buah tangan.',
                'rekomendasi' => ['Bakpia Kacang Hijau', 'Bakpia Coklat', 'Bakpia Keju'],
            ],
            3 => [
                'Nama_Restoran' => 'Sate Klathak Pak Pong',
                'Gambar' => 'image.png',
                'Rating' => 5.0,
                'Deskripsi' => 'Sate Klathak Pak Pong terkenal dengan satenya yang dibakar menggunakan jeruji besi sepeda. Rasanya otentik, dagingnya empuk dan disajikan dengan kuah gulai.',
                'rekomendasi' => ['Sate Klathak', 'Tengkleng', 'Gule Kambing'],
            ],
        ]);

        $restoran = (object) ($data[$id] ?? abort(404));

        return view('restoran', compact('restoran'));
    }
}
