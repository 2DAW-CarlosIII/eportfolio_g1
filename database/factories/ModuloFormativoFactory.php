<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ModuloFormativo;
use App\Models\User;
use App\Models\CicloFormativo;

class ModuloFormativoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),
            'codigo' => fake()->word(),
            'horas_totales' => fake()->numberBetween(1, 100),
            'curso_escolar' => fake()->word(),
            'centro' => fake()->word(),
            'descripcion' => fake()->text(),
            'docente_id' => User::factory(),
        ];
    }
}
