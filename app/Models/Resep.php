<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
protected $table = 'resep';
    protected $primaryKey = 'Id_Resep';

    public function makanan()
    {
        return $this->belongsTo(Makanan::class, 'Id_Makanan');
    }
}
