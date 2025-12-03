<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CicloFormativo extends Model
{
    protected $table = 'ciclos_formativos';
    const GRADOS = [
        'BÁSICA',
        'G.M.',
        'G.S.',
        'C.E. (G.M.)',
        'C.E. (G.S.)',
    ];
}
