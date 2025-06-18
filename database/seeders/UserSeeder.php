<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('user')->insert([
            'Nama_User' => 'Admin',
            'Email' => 'admin@example.com',
            'Password' => Hash::make('password'),
        ]);
    }
}