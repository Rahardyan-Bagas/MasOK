<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaerahSeeder extends Seeder
{
    public function run()
    {
        DB::table('daerah')->insert([
            ['Nama_Daerah' => 'Yogyakarta', 'Provinsi' => 'DI Yogyakarta'],
            ['Nama_Daerah' => 'Surabaya', 'Provinsi' => 'Jawa Timur'],
        ]);
    }
}
