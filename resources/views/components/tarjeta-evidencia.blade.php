@props(['evidencias', 'id'])
<li class="rounded-lg bg-white p-4 shadow">
    <h2 class="text-lg font-semibold">{{ $evidencias[$id]['descripcion'] }}</h2>

    @if (!request()->routeIs('evidencias.index'))
        <p class="text-sm text-gray-500">{{ $evidencias[$id]['estado_validacion'] }}</p>
    @endif
    <p @class([
        'text-sm',
        'text-green-700' => $evidencias[$id]['estado_validacion'] === App\Enums\EstadoValidado::VALIDADA,
        'text-orange-700' => $evidencias[$id]['estado_validacion'] === App\Enums\EstadoValidado::ASIGNADA,
        'text-yellow-700' => $evidencias[$id]['estado_validacion'] === App\Enums\EstadoValidado::PENDIENTE,
        'text-red-700' => $evidencias[$id]['estado_validacion'] === App\Enums\EstadoValidado::RECHAZADA,
    ])>{{ $evidencias[$id]['estado_validacion'] }}</p>
    <div class="mt-auto flex flex-wrap items-center gap-3 pt-5">
      
        <a href="{{ route('evidencias.show', $id) }}" class="rounded-md bg-blue-700 px-3 py-2 text-sm font-medium text-white hover:bg-blue-800">
        Más información
        </a>
        @if (!request()->routeIs('evidencias.edit'))
            <a href="{{ route('evidencias.edit', $id) }}" class="rounded-md bg-yellow-700 px-3 py-2 text-sm font-medium text-white hover:bg-yellow-800">
            Editar
            </a>
        @endif
        @if (!request()->routeIs('evidencias.index'))
            <a href="{{ route('evidencias.index') }}" class="rounded-md bg-blue-700 px-3 py-2 text-sm font-medium text-white hover:bg-blue-800">
                Volver al listado
            </a>
        @endif
    </div>
</li>