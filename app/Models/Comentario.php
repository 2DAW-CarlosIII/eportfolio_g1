<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'evidencia_id',
        'user_id',
        'contenido',
        'tipo',
        'observaciones',
    ];
}
