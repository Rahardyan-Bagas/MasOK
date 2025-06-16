<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daerah extends Model
{
    protected $table = 'daerah';
    protected $primaryKey = 'Id_Daerah';
    public $timestamps = false;

    public function lokasi()
    {
        return $this->hasMany(Lokasi::class, 'Id_Daerah');
    }

    public function makanan()
    {
        return $this->hasMany(Makanan::class, 'Id_Daerah');
    }
}

