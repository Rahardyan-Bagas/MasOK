<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $table = 'makanan';
    protected $primaryKey = 'Id_Makanan';
    public $timestamps = false;

    public function resep()
    {
        return $this->hasOne(Resep::class, 'Id_Makanan');
    }

    public function daerah()
    {
        return $this->belongsTo(Daerah::class, 'Id_Daerah');
    }

    public function lokasi()
    {
        return $this->belongsToMany(Lokasi::class, 'makanan_lokasi', 'Id_Makanan', 'Id_Lokasi');
    }
}

