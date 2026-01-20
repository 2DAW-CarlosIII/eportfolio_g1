<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Matricula;
use App\Models\User;
use App\Models\ModuloFormativo;

class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estudiante_id' => User::factory(),
            'modulo_formativo_id' => ModuloFormativo::factory(),
        ];
    }
}