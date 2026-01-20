<?php

namespace Database\Seeders;

use App\Models\ModuloFormativo;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\CicloFormativo;

class ModuloFormativoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModuloFormativo::factory()->count(80)->create([
            'nombre' => fake()->word(),
            'codigo' => fake()->word(),
            'horas_totales' => fake()->numberBetween(1, 100),
            'curso_escolar' => fake()->word(),
            'centro' => fake()->word(),
            'descripcion' => fake()->text(),
            'docente_id' => User::factory(),
        ]);
    }
}

