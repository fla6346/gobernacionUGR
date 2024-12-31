<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alerta extends Model
{
    use HasFactory;
    protected $table='alerta';
    public $timestamps = false; // Desactiva los timestamps
    protected $primaryKey = 'idAlerta';
    protected $fillable=[
        'mensaje',
        'nivel',
        'fecha' ,
    ];
//evento adverso tiene muchas alertas
    public function alerta():BelongsTo
    {
    return $this->belongsTo(EventoAdverso::class);
    }

}
/*public function commets():HasMany
{
    return $this->hasMany(Comentario::class);
}*/
