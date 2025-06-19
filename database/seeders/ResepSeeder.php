<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Contoh data: pastikan makanan dengan ID ini sudah ada di tabel 'makanan'
        DB::table('resep')->insert([
            [
                'Id_Makanan' => 1,
                'Bahan' => '1,5 kg nangka muda, potong ukuran 3 cm x 5 cm
                            250 gram daging tetelan
                            1 liter santan dari 2 butir kelapa
                            4 lembar daun salam
                            1 iris lengkuas
                            1 sdm angkak
                            100 gram gula merah3 sdm bawah merah iris
                            2 sdm bawang putih iris
                            10 buah kemiri
                            1 sdm ketumbar
                            1 sdt garam',
                'Cara_Memasak' => 'Siram nangka dengan air mendidih supaya getahnya terlepas, kemudian tiriskan.
                                    Masukkan nangka ke dalam panci presto beserta daging, bumbu, dan santan. Tutup presto dan kunci.
                                    Masak dalam panci presto selama 45 menit.
                                    Angkat. Buka katup pengatur suhunya, biarkan uap keluar semua.
                                    Setelah itu buka panci dan angkat.
                                    Hidangkan gudeg nangka khas Yogyakarta selagi hangat bersama nasi merah atau putih.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Id_Makanan' => 2,
                'Bahan' => '1 kg daging sapi (bagian paha atau sengkel), potong kotak besar         1,5 liter santan kental dari 2 butir kelapa tua
                            10 siung bawang merah
                            5 siung bawang putih
                            5 buah cabai merah besar
                            10 buah cabai merah keriting (sesuai selera)
                            2 cm jahe
                            2 cm lengkuas
                            2 cm kunyit (bakar sebentar)1 sdt ketumbar sangrai
                            1 sdt jintan sangrai
                            ½ sdt pala bubuk
                            2 batang serai, memarkan
                            5 lembar daun jeruk
                            2 lembar daun kunyit, simpulkan
                            2 lembar daun salam
                            Garam dan gula merah secukupnya',
                'Cara_Memasak' => 'Tumis bumbu halus hingga harum.
                                    Masukkan daging sapi, aduk rata hingga berubah warna.
                                    Tuang santan secara perlahan sambil diaduk rata agar tidak pecah.
                                    Masukkan daun salam, daun jeruk, daun kunyit, dan serai.
                                    Masak dengan api kecil selama 3–4 jam sambil sesekali diaduk hingga santan mengental dan berubah menjadi minyak.
                                    Masak terus hingga daging empuk, kering, dan bumbu meresap sempurna.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Id_Makanan' => 3,
                'Bahan' => 'Siapkan daging ayam fillet
                            5 sdm kecap manis
                            1 sdm minyak goreng
                            tusuk sate
                            4 buah lontong
                            2 sdm kecap manis
                            3 buah jeruk limau
                            2 sdm bawang merah goreng untuk taburan
                            200 gram kacang tanah kulit,
                            disangrai, dihaluskan
                            3 buah cabai merah keriting, digoreng
                            4 butir kemiri, digoreng
                            2 buah cabai merah besar, digoreng
                            3 sendok makan gula merah sisir
                            1 sendok teh garam 500 ml air panas
                            15 buah cabai rawit merah, direbus
                            4 buah cabai merah keriting, direbus
                            1/4 sendok teh garam',
                'Cara_Memasak' => 'Bikin sambal kacang dahulu. Haluskan kacang tanah, cabai merah keriting, kemiri, cabai merah besar, gula merah, dan garam.
                                    Tuang air. Masak sampai matang dan kental.
                                    Ambil 150 gram sambal kacang, kecap manis, dan minyak goreng. Aduk rata.
                                    Celup ayam di dalamnya. Lumuri sampai rata.
                                    Tusukkan ayam di tusuk sate.
                                    Bakar sampai setengah matang.
                                    Lumuri lagi dengan campuran kacang. Bakar lagi sampai matang.
                                    Lanjutkan membuat sambal, blender cabai. Tambahkan garam. Aduk rata.
                                    Sajikan sate bersama sambal kacang, pelengkap, dan sambalnya.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
