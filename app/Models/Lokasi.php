<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $table = 'lokasi';
    protected $primaryKey = 'Id_Lokasi';
    public $timestamps = false;

    public function makanan()
    {
        return $this->belongsToMany(Makanan::class, 'makanan_lokasi', 'Id_Lokasi', 'Id_Makanan');
    }
}

