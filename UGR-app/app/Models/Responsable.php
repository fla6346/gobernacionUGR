<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Responsable extends Model
{
    use HasFactory;


public function evento():BelongsToMany
    {
    return $this->belongToMany(EventoAdverso::class);
    }
}
