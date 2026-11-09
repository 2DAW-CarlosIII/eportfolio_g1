<?php

return [

    // Nombre del centro que se muestra en la aplicación.
    /**
     * En esta variable se guarda el nombre del centro. La informacion se extrae desde el archivo .env , que este no se comparte ni se sube 
     * a github , se queda en el ordenador local. En caso de que en el archivo .env no exista ninguna variable con ese nombre en concreto
     *  o no tiene valor o tiene un valor null o una cadena vacia se le otorga 
     * un valor por defecto que en este caso es el segundo parametro('CIFP Carlos III').
     */
    'centro' => env('NOMBRE_CENTRO', 'CIFP Carlos III'),

];