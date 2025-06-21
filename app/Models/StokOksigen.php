<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StokOksigen extends Model
{
    public function jenisOksigen()
    {
        return $this->belongsTo(JenisOksigen::class);
    }
}
