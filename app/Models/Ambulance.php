<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{
    protected $fillable = [
        'faskes_id',
        'nama_mobil',
        'nomor_polisi',
        'status',
    ];
}
