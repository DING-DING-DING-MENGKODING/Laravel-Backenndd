<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faskes extends Model
{
    protected $fillable = [
        'nama',
        'jenis_layanan',
        'alamat',
        'about',
        'latitude',
        'longitude',
    ];
}
