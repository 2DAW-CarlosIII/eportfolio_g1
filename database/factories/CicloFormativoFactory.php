<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CicloFormativo;
use App\Models\FamiliaProfesional;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CicloFormativo>
 */
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
            'familia_profesional_id' => FamiliaProfesional::factory()->create()->id,
            'nombre' => $this->faker->word,
            'codigo' => $this->faker->unique()->word,
            'grado' => $this->faker->randomElement(CicloFormativo::GRADOS),
            'descripcion' => $this->faker->sentence,
        ];
    }
}
