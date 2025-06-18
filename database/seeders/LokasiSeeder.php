<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lokasi;

class LokasiSeeder extends Seeder
{
    public function run()
    {
        Lokasi::create([
            'Nama_Tempat' => 'Gudeg Yu Djum',
            'Kota' => 'Yogyakarta',
            'Provinsi' => 'DI Yogyakarta',
            'Alamat' => 'Jl. Wijilan No.167'
        ]);

        Lokasi::create([
            'Nama_Tempat' => 'Sate Klathak Pak Pong',
            'Kota' => 'Bantul',
            'Provinsi' => 'DI Yogyakarta',
            'Alamat' => 'Jl. Imogiri Timur'
        ]);

        Lokasi::create([
            'Nama_Tempat' => 'Bakpia Pathok 25',
            'Kota' => 'Yogyakarta',
            'Provinsi' => 'DI Yogyakarta',
            'Alamat' => 'Jl. AIP II KS Tubun'
        ]);

        Lokasi::create([
           'Nama_Tempat' => 'Mangut Lele Mbah Marto',
            'Kota' => 'Bantul',
            'Provinsi' => 'DI Yogyakarta',
            'Alamat' => 'Dusun Nengahan, Sewon'
        ]);

        Lokasi::create([
            'Nama_Tempat' => 'House of Raminten',
           'Kota' => 'Yogyakarta',
           'Provinsi' => 'DI Yogyakarta',
            'Alamat' => 'Jl. Faridan M Noto No.7'
        ]);

        Lokasi::create([
            'Nama_Tempat' => 'Angkringan Lik Man',
            'Kota' => 'Yogyakarta',
            'Provinsi' => 'DI Yogyakarta',
            'Alamat' => 'Stasiun Tugu, Jl. Wongsodirjan'
        ]);
    }
}
