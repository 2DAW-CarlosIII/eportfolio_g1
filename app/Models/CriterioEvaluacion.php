<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
}
