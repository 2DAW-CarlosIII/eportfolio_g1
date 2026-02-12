<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarea extends Model
{

    /** @use HasFactory<\Database\Factories\TareaFactory> */
    use HasFactory;

    protected $table = 'tareas';
    protected $fillable = [
        'fecha_apertura',
        'fecha_cierre',
        'activo',
        'observaciones'
    ];
    public function criterioEvaluacion()
    {
        return $this->belongsToMany(CriterioEvaluacion::class, 'criterios_tareas', 'tarea_id', 'criterio_evaluacion_id');
    }
}
