<?php

namespace Database\Seeders;

use App\Models\ResultadoAprendizaje;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultadosAprendizajeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ResultadoAprendizaje::truncate();

        foreach (self::$resultados_aprendizaje as $resultado_aprendizaje) {
            ResultadoAprendizaje::insert([
                'modulo_formativo_id' => $resultado_aprendizaje['modulo_formativo_id'],
                'codigo' => $resultado_aprendizaje['codigo'],
                'descripcion' => $resultado_aprendizaje['descripcion'],
                'peso_porcentaje' => $resultado_aprendizaje['peso_porcentaje'],
                'orden' => $resultado_aprendizaje['orden']
            ]);
        }

        $this->command->info('Tabla resultados_aprendizaje inicializada con datos!');


    }


    public static $resultados_aprendizaje = array(
        array(
            'modulo_formativo_id' => 1,
            'codigo' => 'MOD001',
            'descripcion' => 'Selecciona las arquitecturas y tecnologías de programación web en entorno servidor, analizando sus capacidades y características propias.',
            'peso_porcentaje' => 30.0,
            'orden' => 1
        ),
        array(
            'modulo_formativo_id' => 2,
            'codigo' => 'MOD002',
            'descripcion' => 'Escribe sentencias ejecutables por un servidor web reconociendo y aplicando procedimientos de integración del código en lenguajes de marcas.',
            'peso_porcentaje' => 40.0,
            'orden' => 2
        ),
        array(
            'modulo_formativo_id' => 3,
            'codigo' => 'MOD003',
            'descripcion' => 'Escribe bloques de sentencias embebidos en lenguajes de marcas, seleccionando y utilizando las estructuras de programación.',
            'peso_porcentaje' => 30.0,
            'orden' => 3
        )
    );
}
