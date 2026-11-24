<?php

namespace App\Enums;

enum EstadoValidado: string
{
    case VALIDADA = 'validada';
    case PENDIENTE = 'pendiente';
    case RECHAZADA = 'rechazada';
    case ASIGNADA = 'asignada';
}
