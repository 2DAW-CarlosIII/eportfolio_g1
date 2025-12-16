<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Evidencia;

class EvidenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('evidencias')->truncate();
        $evidencias = array(
            array('url' => 'https://eportfolio.test', 'descripcion' => 'Evidencia 1', 'estado_validacion' => 'pendiente'),
            array('url' => 'https://eportfolio.test', 'descripcion' => 'Evidencia 2', 'estado_validacion' => 'validada'),
            array('url' => 'https://eportfolio.test', 'descripcion' => 'Evidencia 3', 'estado_validacion' => 'rechazada'),
        );
        foreach ($evidencias as $evidencia) {
            DB::table('evidencias')->insert($evidencia);
        }
        $this->command->info('¡Tabla evidencias inicializada con datos!');
    }
}
