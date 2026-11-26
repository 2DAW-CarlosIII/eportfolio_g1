@props(['evidencia', 'id'])
<li class="rounded-lg bg-white p-4 shadow">
    <h2 class="text-lg font-semibold">Estudiante: {{ $evidencia['estudiante_id'] }}</h2>
    <h2 class="text-lg font-semibold">Tarea: {{ $evidencia['tarea_id'] }}</h2>
    <p class="text-gray-700">{{ $evidencia['descripcion'] }}</p>

    <p @class([
        'mt-2 font-bold',
        'text-green-700' => $evidencia['estado_validacion'] === App\Enums\EstadoValidado::VALIDADA,
        'text-orange-700' => $evidencia['estado_validacion'] === App\Enums\EstadoValidado::ASIGNADA,
        'text-yellow-700' => $evidencia['estado_validacion'] === App\Enums\EstadoValidado::PENDIENTE,
        'text-red-700' => $evidencia['estado_validacion'] === App\Enums\EstadoValidado::RECHAZADA,
    ])>{{ $evidencia['estado_validacion'] }}</p>

        <a href="{{ $evidencia['url'] }}" class="mt-3 inline-block text-blue-700 hover:underline" target="_blank" rel="noopener noreferrer">
        Ver Enlace
    </a>
    <div class="mt-3 flex gap-4">
      
    
        @if (!request()->routeIs('evidencias.edit'))
            <a href="{{ route('evidencias.edit', $id) }}" class="mt-3 inline-block text-blue-700 hover:underline">
            Editar
            </a>
        @endif
        @if (!request()->routeIs('evidencias.index'))
            <a href="{{ route('evidencias.index', $id) }}" class="mt-3 inline-block text-gray-700 hover:underline">
                Volver al listado
            </a>
        @endif
    </div>
</li>