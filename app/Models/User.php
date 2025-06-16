<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'Id_User';
    public $timestamps = true;

    protected $fillable = ['Nama_User', 'Email', 'Password'];
    protected $hidden = ['Password'];
}
