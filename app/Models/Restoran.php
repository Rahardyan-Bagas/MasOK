<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restoran extends Model
{
    use HasFactory;

    protected $table = 'restoran'; // pastikan ini sesuai nama tabel di database
    protected $primaryKey = 'id';  // default 'id', ubah jika berbeda
    public $timestamps = false;    // ubah ke true jika tabel menggunakan timestamps

    protected $fillable = [
        'Nama_Restoran',
        'Gambar',
        'Rating',
        'Deskripsi',
        'makanan_id', // foreign key ke tabel makanan
    ];

    /**
     * Relasi ke model Makanan
     */
    public function makanan()
    {
        return $this->belongsTo(Makanan::class, 'makanan_id');
    }
}
