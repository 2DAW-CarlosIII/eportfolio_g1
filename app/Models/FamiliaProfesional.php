<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FamiliaProfesional extends Model
{
     use HasFactory;
     protected $table = 'familias_profesionales';
     protected $fillable = [
          'nombre',
          'codigo',
          'descripcion',
     ];

     public function ciclos_formativos(): HasMany
     {
          return $this->hasMany(CicloFormativo::class);
     }

    
}
