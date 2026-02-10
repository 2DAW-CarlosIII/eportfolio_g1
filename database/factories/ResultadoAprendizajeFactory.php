<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ResultadoAprendizaje;

class ResultadoAprendizajeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => fake()->word(),
            'descripcion' => fake()->text(),
            'peso_porcentaje' => fake()->numberBetween(0, 100),
            'orden' => fake()->numberBetween(1, 10),
        ];
    }
}