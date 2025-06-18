<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Makanan;

class MakananSeeder extends Seeder
{
        public function run()
        {
        Makanan::create([
        'Nama_Makanan' => 'Gudeg ',
        'Gambar' => 'img_image.png',
        'Deskripsi' => 'Gudeg adalah makanan khas Yogyakarta yang terbuat dari nangka muda yang dimasak dengan santan dan bumbu-bumbu hingga berwarna cokelat dan beraroma khas. Rasanya manis dan gurih, biasanya disajikan dengan nasi, ayam opor, telur, tahu/tempe bacem, dan sambal krecek.',
        
    ]);

    Makanan::create([
        'Nama_Makanan' => 'Rendang',
        'Gambar' => 'img_image_2.png',
        'Deskripsi' => 'Rendang adalah masakan khas Minangkabau yang terbuat dari daging sapi yang dimasak lama dengan santan dan rempah-rempah. Rasanya kaya, gurih, dan pedas, dengan tekstur daging yang empuk dan bumbu meresap. Rendang dikenal sebagai salah satu makanan terenak di dunia.   ',
    ]);

    Makanan::create([
        'Nama_Makanan' => 'Sate',
        'Gambar' => 'img_image_1.png',
        'Deskripsi' => 'Sate adalah makanan khas Indonesia berupa potongan daging yang ditusuk, dibakar, dan disajikan dengan bumbu kacang atau kecap. Daging yang digunakan bisa ayam, kambing, sapi, atau lainnya. Rasanya gurih, manis, dan sedikit smokey.',
    ]);

    }
}
