<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriterioEvaluacion extends Model
{
    use HasFactory;
        protected $table = 'criterios_evaluacion';
        protected $fillable = [
                'resultado_aprendizaje_id',
                'codigo',
                'descripcion',
                'peso_porcentaje',
                'orden'
        ];

        public function resultadoAprendizaje()
        {
            return $this->belongsTo(ResultadoAprendizaje::class);
        }

        public function tareas()
        {
            return $this->belongsToMany(Tarea::class, 'criterios_tareas', 'criterio_evaluacion_id', 'tarea_id');
        }
}
