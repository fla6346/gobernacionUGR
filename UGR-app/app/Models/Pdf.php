<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pdf extends Model
{
    use HasFactory;
    use Notifiable;
    public $table='biblioteca';
    protected $fillable = ['file'];
}
