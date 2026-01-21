<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comentario;
use App\Models\Evidencia;

class ComentariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comentario::truncate();

        $array = [
            [
                'evidencia_id' => random_int(1, 10),
                'user_id' => random_int(1, 10),
                'contenido' => fake()->text(),
                'tipo' => random_int(1, 2) == 1 ? 'publico' : 'privado',
            ],
            [
                'evidencia_id' => random_int(1, 10),
                'user_id' => random_int(1, 10),
                'contenido' => fake()->text(),
                'tipo' => random_int(1, 2) == 1 ? 'publico' : 'privado',
            ],
            [
                'evidencia_id' => random_int(1, 10),
                'user_id' => random_int(1, 10),
                'contenido' => fake()->text(),
                'tipo' => random_int(1, 2) == 1 ? 'publico' : 'privado',
            ],
            [
                'evidencia_id' => random_int(1, 10),
                'user_id' => random_int(1, 10),
                'contenido' => fake()->text(),
                'tipo' => random_int(1, 2) == 1 ? 'publico' : 'privado',
            ],
            [
                'evidencia_id' => random_int(1, 10),
                'user_id' => random_int(1, 10),
                'contenido' => fake()->text(),
                'tipo' => random_int(1, 2) == 1 ? 'publico' : 'privado',
            ],
            [
                'evidencia_id' => random_int(1, 10),
                'user_id' => random_int(1, 10),
                'contenido' => fake()->text(),
                'tipo' => random_int(1, 2) == 1 ? 'publico' : 'privado',
            ],
            [
                'evidencia_id' => random_int(1, 10),
                'user_id' => random_int(1, 10),
                'contenido' => fake()->text(),
                'tipo' => random_int(1, 2) == 1 ? 'publico' : 'privado',
            ],
        ];

        foreach ($array as $item) {
            Comentario::create($item);
        }
    }
}