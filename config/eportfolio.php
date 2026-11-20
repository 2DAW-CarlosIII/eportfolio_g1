<?php

return [

    // Esto sirve por si no encuentra un valor en .env . En ese caso cogerá este valor
    'centro' => env('NOMBRE_CENTRO', 'CIFP Carlos III'),
    'evidencias' => [
        [
            'proyecto_id' => 1, // Tecnologías de la Información
            'docente_id' => 1,
            'titulo' => 'Arquitectura de Red y Servidores',
            'tipo' => 'Documento PDF',
            'url' => 'https://ejemplo.com',
            'fecha_entrega' => '2023-03-10',
            'estado' => 'Aprobada',
            'calificacion' => 8,
        ],
        [
            'proyecto_id' => 1, // Tecnologías de la Información
            'docente_id' => 1,
            'titulo' => 'Despliegue en la Nube',
            'tipo' => 'Repositorio Git',
            'url' => 'https://github.com',
            'fecha_entrega' => '2023-05-20',
            'estado' => 'Aprobada',
            'calificacion' => 9,
        ],
        [
            'proyecto_id' => 2, // Diseño Gráfico
            'docente_id' => 1,
            'titulo' => 'Manual de Identidad Corporativa',
            'tipo' => 'Imagen / Mockup',
            'url' => 'https://ejemplo.com',
            'fecha_entrega' => '2023-06-15',
            'estado' => 'Rechazada',
            'calificacion' => 4,
        ],
        [
            'proyecto_id' => 3, // Electrónica
            'docente_id' => 2,
            'titulo' => 'Esquema de Circuito Impreso (PCB)',
            'tipo' => 'Archivo Gerber',
            'url' => 'https://ejemplo.com',
            'fecha_entrega' => '2023-05-12',
            'estado' => 'Aprobada',
            'calificacion' => 7,
        ],
        [
            'proyecto_id' => 3, // Electrónica
            'docente_id' => 2,
            'titulo' => 'Vídeo de Prueba de Prototipo',
            'tipo' => 'Vídeo',
            'url' => 'https://ejemplo.com',
            'fecha_entrega' => '2023-07-10',
            'estado' => 'Aprobada',
            'calificacion' => 8,
        ],
    ],

];
