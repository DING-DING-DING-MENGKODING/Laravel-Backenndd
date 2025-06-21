<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StokDarah extends Model
{
    protected $fillable = [
        'faskes_id',
        'jenis_darah_id',
        'jumlah',
    ];
    
    public function jenisDarah()
    {
        return $this->belongsTo(JenisDarah::class);
    }
}
