<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StokDarah extends Model
{
    public function jenisDarah()
    {
        return $this->belongsTo(JenisDarah::class);
    }
}
