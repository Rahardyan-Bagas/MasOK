<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakananLokasiSeeder extends Seeder
{
    public function run()
    {
        // Nonaktifkan foreign key constraints (hanya jika perlu truncate)
        DB::statement('PRAGMA foreign_keys = OFF;');
        DB::table('makanan_lokasi')->truncate(); // Kosongkan tabel
        DB::statement('PRAGMA foreign_keys = ON;');

        // Data yang akan dimasukkan
        $data = [
            ['Id_Makanan' => 1, 'Id_Lokasi' => 1],
            ['Id_Makanan' => 2, 'Id_Lokasi' => 2],
            ['Id_Makanan' => 3, 'Id_Lokasi' => 3],
        ];

        // Insert data dengan aman (idempotent)
        foreach ($data as $row) {
            DB::table('makanan_lokasi')->updateOrInsert(
                [
                    'Id_Makanan' => $row['Id_Makanan'],
                    'Id_Lokasi' => $row['Id_Lokasi'],
                ],
                [] // Tidak ada kolom tambahan untuk di-update
            );
        }
    }
}