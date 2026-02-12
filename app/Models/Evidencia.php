<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

     public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
