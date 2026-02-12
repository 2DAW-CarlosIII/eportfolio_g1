<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CicloFormativo extends Model
{
    use HasFactory;
    protected $table = 'ciclos_formativos';
    protected $fillable = [
        'familia_profesional_id',
        'nombre',
        'codigo',
        'grado',
        'descripcion'
    ];
    const GRADOS = [
        'basico', 'medio', 'superior'
    ];
      public function familia_profesional(): BelongsTo
    {
        return $this->belongsTo(FamiliaProfesional::class, 'familia_profesional_id');
    }


}
