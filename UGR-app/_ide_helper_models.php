<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $idAlerta
 * @property int|null $idEvento
 * @property string $mensaje
 * @property string $nivel
 * @property string $fecha
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\EventoAdverso|null $alerta
 * @method static \Illuminate\Database\Eloquent\Builder|Alerta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Alerta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Alerta query()
 * @method static \Illuminate\Database\Eloquent\Builder|Alerta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alerta whereFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alerta whereIdAlerta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alerta whereIdEvento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alerta whereMensaje($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alerta whereNivel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alerta whereUpdatedAt($value)
 */
	class Alerta extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $idbiblioteca
 * @property string $fileName
 * @method static \Illuminate\Database\Eloquent\Builder|Biblioteca newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Biblioteca newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Biblioteca query()
 * @method static \Illuminate\Database\Eloquent\Builder|Biblioteca whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biblioteca whereIdbiblioteca($value)
 */
	class Biblioteca extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $idCarrusel
 * @property string $nombre
 * @property string $description
 * @property string $url
 * @property string $linkk
 * @property string $orden
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Carrusel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carrusel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carrusel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Carrusel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrusel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrusel whereIdCarrusel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrusel whereLinkk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrusel whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrusel whereOrden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrusel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrusel whereUrl($value)
 */
	class Carrusel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Municipio|null $municipio
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidad newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidad newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidad query()
 */
	class Comunidad extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $idEvento
 * @property int $idAlerta
 * @property int $idRegion
 * @property string $tipo
 * @property string $provincia
 * @property string $municipio
 * @property string $fecha_inicio
 * @property string $fecha_finalizacion
 * @property string $hora
 * @property string $descripcion
 * @property string $area
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Alerta> $alerta
 * @property-read int|null $alerta_count
 * @method static \Illuminate\Database\Eloquent\Builder|EventoAdverso newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventoAdverso newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventoAdverso query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventoAdverso whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventoAdverso whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventoAdverso whereFechaFinalizacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventoAdverso whereFechaInicio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventoAdverso whereHora($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventoAdverso whereIdAlerta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventoAdverso whereIdEvento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventoAdverso whereIdRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventoAdverso whereMunicipio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventoAdverso whereProvincia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventoAdverso whereTipo($value)
 */
	class EventoAdverso extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|EventoRegion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventoRegion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventoRegion query()
 */
	class EventoRegion extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|EventoResponsable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventoResponsable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventoResponsable query()
 */
	class EventoResponsable extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUpdatedAt($value)
 */
	class Image extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Comunidad> $comunidad
 * @property-read int|null $comunidad_count
 * @method static \Illuminate\Database\Eloquent\Builder|Municipio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Municipio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Municipio query()
 */
	class Municipio extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $idbiblioteca
 * @property string $fileName
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Pdf newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pdf newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pdf query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pdf whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pdf whereIdbiblioteca($value)
 */
	class Pdf extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Persona newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Persona newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Persona query()
 */
	class Persona extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Municipio> $municipio
 * @property-read int|null $municipio_count
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia query()
 */
	class Provincia extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $idRegion
 * @property string $nombreRegion
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Provincia> $provincia
 * @property-read int|null $provincia_count
 * @method static \Illuminate\Database\Eloquent\Builder|Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereIdRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereNombreRegion($value)
 */
	class Region extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable query()
 */
	class Responsable extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\EventoAdverso> $evento
 * @property-read int|null $evento_count
 * @method static \Illuminate\Database\Eloquent\Builder|TipoEvento newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TipoEvento newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TipoEvento query()
 */
	class TipoEvento extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $name
 * @property string $email
 * @property mixed $password
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $habilitado
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Persona|null $persona
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereHabilitado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Tymon\JWTAuth\Contracts\JWTSubject {}
}

