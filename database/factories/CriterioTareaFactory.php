<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CriterioTarea;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CriterioTarea>
 */

class CriterioTareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'criterio_evaluacion_id' => random_int(1, 88),
            'tarea_id' => random_int(1,10)
        ];
    }
}