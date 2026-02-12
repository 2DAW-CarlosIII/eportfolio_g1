<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CicloFormativo extends Model
{
    use HasFactory;
    protected $table = 'ciclos_formativos';
    protected $fillable = [
        'familia_profesional_id',
        'nombre',
        'codigo',
        'grado',
        'descripcion',
    ];
    const GRADOS = [
        'basico',
        'medio',
        'superior'
    ];
}
