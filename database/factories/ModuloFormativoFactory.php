<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'ciclo_formativo_id' => CicloFormativo::factory()->create()->id,
            'nombre' => fake()->word(),
            'codigo' => fake()->word(),
            'horas_totales' => fake()->numberBetween(1, 100),
            'curso_escolar' => fake()->word(),
            'centro' => fake()->word(),
            'docente_id' => User::factory()->create()->id,
            'descripcion' => fake()->text(),
        ];
    }
}
