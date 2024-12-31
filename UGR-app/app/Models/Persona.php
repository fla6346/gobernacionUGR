<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Persona extends Model
{
    protected $fillable=['nombre','apellidoPaterno','apellidoMaterno','fecha'];
    use HasFactory;

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
