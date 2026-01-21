<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'estudiante_id',
        'tarea_id',
        'descripcion',
        'url',
        'estado_validacion',
    ];
    const ESTADOS_VALIDACION = [
        'pendiente',
        'validada',
        'rechazada'
    ];
}
