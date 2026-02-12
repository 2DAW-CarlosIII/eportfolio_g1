<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Evidencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'estudiante_id',
        'tarea_id',
        'url',
        'descripcion',
        'estado_validacion',
    ];
    const ESTADOS_VALIDACION = [
        'pendiente',
        'validada',
        'rechazada'
    ];

    public function tarea()
    {
        return $this->belongsTo(Tarea::class);
    }

    public function estudiante()
    {
        return $this->belongsTo(User::class);
    }

    public function asignaciones_revision()
    {
        return $this->hasMany(AsignacionRevision::class);
    }
}
