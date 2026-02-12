<?php

namespace Database\Factories;

use App\Models\Evidencia;
use App\Models\User;
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
            'evidencia_id' => Evidencia::factory(),
            'revisor_id' => User::factory(),
            'asignado_por_id' => User::factory(),
            'fecha_limite' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'estado' => $this->faker->randomElement(['pendiente', 'en_proceso', 'completada']),
        ];
    }
}
