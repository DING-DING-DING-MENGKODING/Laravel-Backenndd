<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiStok extends Model
{
    protected $fillable = [
        'user_id',
        'faskes_id',
        'admin_id',
        'status',
        'jumlah',
    ];
}
