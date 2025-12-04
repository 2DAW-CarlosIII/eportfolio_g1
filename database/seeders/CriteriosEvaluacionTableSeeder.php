<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriosEvaluacionTableSeeder extends Seeder
{
    public function run(): void
    {
        $criterios = [
            // RA 1
            ['resultado_aprendizaje_id' => 1, 'codigo' => 'a', 'orden' => 1, 'peso_porcentaje' => 0, 'descripcion' => 'Se han caracterizado y diferenciado los modelos de ejecución de código en el servidor y en el cliente web.'],
            ['resultado_aprendizaje_id' => 1, 'codigo' => 'b', 'orden' => 2, 'peso_porcentaje' => 0, 'descripcion' => 'Se han reconocido las ventajas que proporciona la generación dinámica de páginas.'],
            ['resultado_aprendizaje_id' => 1, 'codigo' => 'c', 'orden' => 3, 'peso_porcentaje' => 0, 'descripcion' => 'Se han identificado los mecanismos de ejecución de código en los servidores web.'],
            ['resultado_aprendizaje_id' => 1, 'codigo' => 'd', 'orden' => 4, 'peso_porcentaje' => 0, 'descripcion' => 'Se han reconocido las funcionalidades que aportan los servidores de aplicaciones y su integración con los servidores web.'],
            ['resultado_aprendizaje_id' => 1, 'codigo' => 'e', 'orden' => 5, 'peso_porcentaje' => 0, 'descripcion' => 'Se han identificado y caracterizado los principales lenguajes y tecnologías relacionados con la programación web en entorno servidor.'],
            ['resultado_aprendizaje_id' => 1, 'codigo' => 'f', 'orden' => 6, 'peso_porcentaje' => 0, 'descripcion' => 'Se han verificado los mecanismos de integración de los lenguajes de marcas con los lenguajes de programación en entorno servidor.'],
            ['resultado_aprendizaje_id' => 1, 'codigo' => 'g', 'orden' => 7, 'peso_porcentaje' => 0, 'descripcion' => 'Se han reconocido y evaluado las herramientas y frameworks de programación en entorno servidor.'],

            // RA 2
            ['resultado_aprendizaje_id' => 2, 'codigo' => 'a', 'orden' => 1, 'peso_porcentaje' => 0, 'descripcion' => 'Se han reconocido los mecanismos de generación de páginas web a partir de lenguajes de marcas con código embebido.'],
            ['resultado_aprendizaje_id' => 2, 'codigo' => 'b', 'orden' => 2, 'peso_porcentaje' => 0, 'descripcion' => 'Se han identificado las principales tecnologías asociadas.'],
            ['resultado_aprendizaje_id' => 2, 'codigo' => 'c', 'orden' => 3, 'peso_porcentaje' => 0, 'descripcion' => 'Se han utilizado etiquetas para la inclusión de código en el lenguaje de marcas.'],
            ['resultado_aprendizaje_id' => 2, 'codigo' => 'd', 'orden' => 4, 'peso_porcentaje' => 0, 'descripcion' => 'Se ha reconocido la sintaxis del lenguaje de programación que se ha de utilizar.'],
            ['resultado_aprendizaje_id' => 2, 'codigo' => 'e', 'orden' => 5, 'peso_porcentaje' => 0, 'descripcion' => 'Se han escrito sentencias simples y se han comprobado sus efectos en el documento resultante.'],
            ['resultado_aprendizaje_id' => 2, 'codigo' => 'f', 'orden' => 6, 'peso_porcentaje' => 0, 'descripcion' => 'Se han utilizado directivas para modificar el comportamiento predeterminado.'],
            ['resultado_aprendizaje_id' => 2, 'codigo' => 'g', 'orden' => 7, 'peso_porcentaje' => 0, 'descripcion' => 'Se han utilizado los distintos tipos de variables y operadores disponibles en el lenguaje.'],
            ['resultado_aprendizaje_id' => 2, 'codigo' => 'h', 'orden' => 8, 'peso_porcentaje' => 0, 'descripcion' => 'Se han identificado los ámbitos de utilización de las variables.'],

            // RA 3
            ['resultado_aprendizaje_id' => 3, 'codigo' => 'a', 'orden' => 1, 'peso_porcentaje' => 0, 'descripcion' => 'Se han utilizado mecanismos de decisión en la creación de bloques de sentencias.'],
            ['resultado_aprendizaje_id' => 3, 'codigo' => 'b', 'orden' => 2, 'peso_porcentaje' => 0, 'descripcion' => 'Se han utilizado bucles y se ha verificado su funcionamiento.'],
            ['resultado_aprendizaje_id' => 3, 'codigo' => 'c', 'orden' => 3, 'peso_porcentaje' => 0, 'descripcion' => 'Se han utilizado matrices (arrays) para almacenar y recuperar conjuntos de datos.'],
            ['resultado_aprendizaje_id' => 3, 'codigo' => 'd', 'orden' => 4, 'peso_porcentaje' => 0, 'descripcion' => 'Se han creado y utilizado funciones.'],
            ['resultado_aprendizaje_id' => 3, 'codigo' => 'e', 'orden' => 5, 'peso_porcentaje' => 0, 'descripcion' => 'Se han utilizado formularios web para interactuar con el usuario del navegador web.'],
            ['resultado_aprendizaje_id' => 3, 'codigo' => 'f', 'orden' => 6, 'peso_porcentaje' => 0, 'descripcion' => 'Se han empleado métodos para recuperar la información introducida en el formulario.'],
            ['resultado_aprendizaje_id' => 3, 'codigo' => 'g', 'orden' => 7, 'peso_porcentaje' => 0, 'descripcion' => 'Se han añadido comentarios al código.'],
        ];

        DB::table('criterios_evaluacion')->insert($criterios);
    }
}
