<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matricula;
use App\Models\User;
use App\Models\ModuloFormativo;

class MatriculaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matricula::factory()->count(100)->create([
            'estudiante_id' => User::factory(),
            'modulo_formativo_id' => ModuloFormativo::factory(),
        ]);
    }
}

