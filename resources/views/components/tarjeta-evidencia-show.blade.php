@props(['evidencia', 'id'])
<li class="rounded-lg bg-white p-4 shadow">
    <h2 class="text-sm text-gray-500">Estudiante: {{ $evidencia['estudiante_id'] }}</h2>
    <h2 class="text-sm text-gray-500">Tarea: {{ $evidencia['tarea_id'] }}</h2>
    <p class="text-sm text-gray-500">{{ $evidencia['descripcion'] }}</p>

    <p @class([
        'mt-2 font-bold',
        'text-green-700' => $evidencia['estado_validacion'] === App\Enums\EstadoValidado::VALIDADA,
        'text-orange-700' => $evidencia['estado_validacion'] === App\Enums\EstadoValidado::ASIGNADA,
        'text-yellow-700' => $evidencia['estado_validacion'] === App\Enums\EstadoValidado::PENDIENTE,
        'text-red-700' => $evidencia['estado_validacion'] === App\Enums\EstadoValidado::RECHAZADA,
    ])>{{ $evidencia['estado_validacion'] }}</p>

    <a href="{{ $evidencia['url'] }}" class="rounded-md  text-sm text-black font-medium">Ver Enlace
    </a>
    <div class="mt-auto flex flex-wrap items-center gap-3 pt-5">
        @if (!request()->routeIs('evidencias.edit'))
            <a href="{{ route('evidencias.edit', $id) }}" class="rounded-md bg-yellow-700 px-3 py-2 text-sm font-medium text-white hover:bg-yellow-800">
            Editar
            </a>
        @endif
        @if (!request()->routeIs('evidencias.index'))
            <a href="{{ route('evidencias.index', $id) }}" class="rounded-md bg-gray-700 px-3 py-2 text-sm font-medium text-white hover:bg-gray-800">
                Volver al listado
            </a>
        @endif
    </div>
</li>