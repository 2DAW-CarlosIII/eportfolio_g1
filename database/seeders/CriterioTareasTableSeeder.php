<?php

namespace Database\Seeders;

use App\Models\CriterioTarea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CriterioTareasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CriterioTarea::truncate();
        CriterioTarea::factory()->count(50)->create();
        CriterioTarea::create([
            'criterio_evaluacion_id' => 1,
            'tarea_id' => 10,
        ]);
        CriterioTarea::create([
            'criterio_evaluacion_id' => 1,
            'tarea_id' => 11,
        ]);

    }
}
