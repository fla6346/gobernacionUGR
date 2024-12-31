<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comunidad extends Model
{
    use HasFactory;

    public function municipio():BelongsTo
    {
        return $this->belongsTo(Municipio::class);
    }
}
