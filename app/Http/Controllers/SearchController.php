<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = strtolower($request->query('q'));

        if (!$query) {
            return response()->json([]);
        }

        // Data restoran lokal (dari RestoranController)
        $restoranData = collect([
            1 => [
                'Nama_Restoran' => 'Iga Bajog',
                'Gambar' => 'img_image_16.png',
                'Rating' => 4.0,
                'Deskripsi' => 'Iga Bajog adalah tempat makan terkenal di Yogyakarta...',
                'rekomendasi' => ['Iga Bakar Jogja', 'Sate Koyor', 'Sop Iga'],
            ],
            2 => [
                'Nama_Restoran' => 'Bakpia Pathok 25',
                'Gambar' => 'image2.png',
                'Rating' => 5.0,
                'Deskripsi' => 'Bakpia Pathok 25 adalah ikon oleh-oleh khas Yogyakarta...',
                'rekomendasi' => ['Bakpia Kacang Hijau', 'Bakpia Coklat', 'Bakpia Keju'],
            ],
            3 => [
                'Nama_Restoran' => 'Sate Klathak Pak Pong',
                'Gambar' => 'image.png',
                'Rating' => 5.0,
                'Deskripsi' => 'Sate Klathak Pak Pong terkenal dengan satenya...',
                'rekomendasi' => ['Sate Klathak', 'Tengkleng', 'Gule Kambing'],
            ],
        ]);

        // Filter data restoran
        $restoranResults = $restoranData->filter(function ($item) use ($query) {
            return str_contains(strtolower($item['Nama_Restoran']), $query);
        })->map(function ($item, $key) {
            return [
                'id' => $key,
                'nama' => $item['Nama_Restoran'],
                'type' => 'restoran',
            ];
        });

        // Data resep dari database
        $resepResults = Resep::where('Nama_Makanan', 'like', '%' . $query . '%')
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'nama' => $item->Nama_Makanan,
                    'type' => 'resep',
                ];
            });

        // Gabungkan semua hasil
        $results = $restoranResults->concat($resepResults)->values();

        return response()->json($results);
    }
}
