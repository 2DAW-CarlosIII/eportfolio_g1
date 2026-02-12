<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    protected $casts = [
        'fecha_apertura' => 'datetime',
        'fecha_cierre' => 'datetime',
    ];

    public function criteriosEvaluacion()
    {
        return $this->belongsToMany(CriterioEvaluacion::class, 'criterios_tareas', 'tarea_id', 'criterio_evaluacion_id');
    }

    public function evidencias(){
        return $this->hasMany(Evidencia::class);
    }

    public function asignacionAleatoria($num = 3){
        
    }
}
