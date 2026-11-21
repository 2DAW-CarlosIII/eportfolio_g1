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
            'url' => 'https://ocw.uc3m.es/pluginfile.php/2633/mod_page/content/18/arquitectura_redes.pdf',
            'fecha_entrega' => '2023-03-10',
            'estado' => 'Aprobada',
            'descripcion' => 'Evidencia sobre la arquitectura de red y servidores',
            'calificacion' => 8,
        ],
        [
            'proyecto_id' => 1, // Tecnologías de la Información
            'docente_id' => 1,
            'titulo' => 'Despliegue en la Nube',
            'tipo' => 'Repositorio Git',
            'url' => 'https://docs.github.com/es/enterprise-cloud@latest/actions/get-started/continuous-deployment',
            'fecha_entrega' => '2023-05-20',
            'estado' => 'Aprobada',
            'descripcion' => 'Evidencia sobre el despliegue en la nube',
            'calificacion' => 9,
        ],
        [
            'proyecto_id' => 2, // Diseño Gráfico
            'docente_id' => 1,
            'titulo' => 'Manual de Identidad Corporativa',
            'tipo' => 'Imagen / Mockup',
            'url' => 'https://media.licdn.com/dms/image/v2/D4E12AQElqIisM2EYxw/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1723051413328?e=2147483647&v=beta&t=dA99-YZHG-pyW4RiIdrPKMDzCr-ioPkeoub7O2-BVbQ',
            'fecha_entrega' => '2023-06-15',
            'estado' => 'Rechazada',
            'descripcion' => 'Evidencia sobre el manual de identidad corporativa',
            'calificacion' => 4,
        ],
        [
            'proyecto_id' => 3, // Electrónica
            'docente_id' => 2,
            'titulo' => 'Esquema de Circuito Impreso (PCB)',
            'tipo' => 'Documento PDF',
            'url' => 'https://riubu.ubu.es/bitstream/handle/10259/3923/Guia_de_fabricaci%F3n_de_PCB_con_ProtomatS63.pdf;jsessionid=F3DFF9C97324683AAC3CDA5FB381BBEC?sequence=1',
            'fecha_entrega' => '2023-05-12',
            'estado' => 'Aprobada',
            'descripcion' => 'Evidencia sobre el esquema de circuito impreso',
            'calificacion' => 7,
        ],
        [
            'proyecto_id' => 3, // Electrónica
            'docente_id' => 2,
            'titulo' => 'Vídeo de Prueba de Prototipo',
            'tipo' => 'Vídeo',
            'url' => 'https://www.youtube.com/watch?v=vUCIEXIXgAU',
            'fecha_entrega' => '2023-07-10',
            'estado' => 'Aprobada',
            'descripcion' => 'Evidencia sobre la prueba de prototipo',
            'calificacion' => 8,
        ],
    ],

];
