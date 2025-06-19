<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lokasi;

class LokasiSeeder extends Seeder
{
    public function run()
    {
        Lokasi::create([
            'Nama_Tempat' => 'Iga Bajog',
            'Kota' => 'Yogyakarta',
            'GambarResto'=> 'img_image_21.png',
            'Provinsi' => 'DI Yogyakarta',
            'Alamat' => ' Jl. Wijaya Kusuma, Dero, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281'
        ]);

        Lokasi::create([
            'Nama_Tempat' => 'Sate Klathak Pak Pong',
            'Kota' => 'Bantul',
            'GambarResto'=> 'image.png',
            'Provinsi' => 'DI Yogyakarta',
            'Alamat' => 'Jl. Sultan Agung No.18, Jejeran II, Wonokromo, Kec. Pleret, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55791'
        ]);

        Lokasi::create([
            'Nama_Tempat' => 'Bakpia Pathok 25',
            'Kota' => 'Yogyakarta',
            'GambarResto'=> 'image2.png',
            'Provinsi' => 'DI Yogyakarta',
            'Alamat' => 'Sanggrahan Pathuk, Jl. Karel Sasuit Tubun NG/I No.504, Ngampilan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55261'
        ]);

        
    }
}
