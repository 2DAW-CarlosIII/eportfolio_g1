<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AsignacionRevision>
 */
class AsignacionRevisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'evidencia_id' => $this->faker->numberBetween(1, 100),
            'revisor_id' => $this->faker->numberBetween(1, 100),
            'asignado_por_id' => $this->faker->numberBetween(1, 100),
            'fecha_limite' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'estado' => $this->faker->randomElement(['pendiente', 'en_proceso', 'completado']),
        ];
    }
}
