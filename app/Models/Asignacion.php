<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = 'asignaciones';

    protected $fillable = [
        'evidencia_id',
        'revisor_id',
        'asignado_por_id',
        'fecha_limite',
        'estado',
    ];
}
