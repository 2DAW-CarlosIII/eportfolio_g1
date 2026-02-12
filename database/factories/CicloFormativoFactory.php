<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CicloFormativo;

class CicloFormativoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'codigo' => fake()->randomNumber(5),
            'descripcion' => fake()->text(),
            'grado' => CicloFormativo::GRADOS[fake()->numberBetween(0, count(CicloFormativo::GRADOS) - 1)],
        ];
    }
}