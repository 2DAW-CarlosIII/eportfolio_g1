<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CriteriosEvaluacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            1 => [ // RA 1
                ['codigo' => 'a', 'descripcion' => 'Se han caracterizado y diferenciado los modelos de ejecución de código en el servidor y en el cliente web.'],
                ['codigo' => 'b', 'descripcion' => 'Se han reconocido las ventajas que proporciona la generación dinámica de páginas.'],
                ['codigo' => 'c', 'descripcion' => 'Se han identificado los mecanismos de ejecución de código en los servidores web.'],
                ['codigo' => 'd', 'descripcion' => 'Se han reconocido las funcionalidades que aportan los servidores de aplicaciones y su integración con los servidores web.'],
                ['codigo' => 'e', 'descripcion' => 'Se han identificado y caracterizado los principales lenguajes y tecnologías relacionados con la programación web en entorno servidor.'],
                ['codigo' => 'f', 'descripcion' => 'Se han verificado los mecanismos de integración de los lenguajes de marcas con los lenguajes de programación en entorno servidor.'],
                ['codigo' => 'g', 'descripcion' => 'Se han reconocido y evaluado las herramientas y frameworks de programación en entorno servidor.'],
            ],
            2 => [ // RA 2
                ['codigo' => 'a', 'descripcion' => 'Se han reconocido los mecanismos de generación de páginas web a partir de lenguajes de marcas con código embebido.'],
                ['codigo' => 'b', 'descripcion' => 'Se han identificado las principales tecnologías asociadas.'],
                ['codigo' => 'c', 'descripcion' => 'Se han utilizado etiquetas para la inclusión de código en el lenguaje de marcas.'],
                ['codigo' => 'd', 'descripcion' => 'Se ha reconocido la sintaxis del lenguaje de programación que se ha de utilizar.'],
                ['codigo' => 'e', 'descripcion' => 'Se han escrito sentencias simples y se han comprobado sus efectos en el documento resultante.'],
                ['codigo' => 'f', 'descripcion' => 'Se han utilizado directivas para modificar el comportamiento predeterminado.'],
                ['codigo' => 'g', 'descripcion' => 'Se han utilizado los distintos tipos de variables y operadores disponibles en el lenguaje.'],
                ['codigo' => 'h', 'descripcion' => 'Se han identificado los ámbitos de utilización de las variables.'],
            ],
            3 => [ // RA 3
                ['codigo' => 'a', 'descripcion' => 'Se han utilizado mecanismos de decisión en la creación de bloques de sentencias.'],
                ['codigo' => 'b', 'descripcion' => 'Se han utilizado bucles y se ha verificado su funcionamiento.'],
                ['codigo' => 'c', 'descripcion' => 'Se han utilizado matrices (arrays) para almacenar y recuperar conjuntos de datos.'],
                ['codigo' => 'd', 'descripcion' => 'Se han creado y utilizado funciones.'],
                ['codigo' => 'e', 'descripcion' => 'Se han utilizado formularios web para interactuar con el usuario del navegador web.'],
                ['codigo' => 'f', 'descripcion' => 'Se han empleado métodos para recuperar la información introducida en el formulario.'],
                ['codigo' => 'g', 'descripcion' => 'Se han añadido comentarios al código.'],
            ],
        ];

        foreach ($data as $raId => $criterios) {
            foreach ($criterios as $index => $criterio) {
                \App\Models\CriterioEvaluacion::create([
                    'resultado_aprendizaje_id' => $raId,
                    'codigo' => $criterio['codigo'],
                    'descripcion' => $criterio['descripcion'],
                    'peso_porcentaje' => 0,
                    'orden' => $index + 1,
                ]);
            }
        }
    }
}
