<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Makanan;

class MakananSeeder extends Seeder
{
        public function run()
        {
        Makanan::create([
        'Nama_Makanan' => 'Gudeg',
        'Deskripsi' => 'Gudeg khas Jogja',
        'Id_Daerah' => 1
    ]);

    Makanan::create([
        'Nama_Makanan' => 'Bakpia',
        'Deskripsi' => 'Bakpia khas Pathok',
        'Id_Daerah' => 1
    ]);

    Makanan::create([
        'Nama_Makanan' => 'Sate Klathak',
        'Deskripsi' => 'Sate khas Bantul',
        'Id_Daerah' => 1
    ]);

    }
}
