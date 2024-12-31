<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventoAdverso extends Model
{
    protected $table='evento_adverso';
    public $timestamps = false; // Desactiva los timestamps
    protected $primaryKey = 'idEvento';
    use HasFactory;
    protected $fillable=[
        'tipo',
        'provincia',
        'municipio',
        'fecha_inicio',
        'fecha_finalizacion',
        'hora',
        'descripcion',
        'area',
    ];

    // muchas alertas un solo evento
    public function alerta():HasMany
    {
        return $this->hasMany(Alerta::class);
    }
    //muchos eventos a muchos responsables
    public function eventoResponsable():BelongsToMany
    {
        return $this->belongToMany(Responsable::class);
    }
//muchos eventos a muchas regiones
    public function eventoRegion():BelongsToMany
    {
        return $this->belongToMany(Region::class);
    }
    //muchos eventos a muchos usuarios
    public function eventoUsuario():BelongsToMany
    {
        return $this->belongToMany(User::class);
    }


}
