<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FamiliaProfesional;

class FamiliaProfesionalFactory extends Factory
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
        ];
    }
}