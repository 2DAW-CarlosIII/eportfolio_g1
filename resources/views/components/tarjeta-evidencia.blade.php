@props(['evidencias', 'id'])
<li class="rounded-lg bg-white p-4 shadow">
    <h2 class="text-lg font-semibold">{{ $evidencias[$id]['descripcion'] }}</h2>

    @if (!request()->routeIs('evidencias.index'))
        <p class="text-sm text-gray-500">{{ $evidencias[$id]['estado_validacion'] }}</p>
    @endif
    <p @class([
        'mt-2 font-bold',
        'text-green-700' => $evidencias[$id]['estado_validacion'] === App\Enums\EstadoValidado::VALIDADA,
        'text-orange-700' => $evidencias[$id]['estado_validacion'] === App\Enums\EstadoValidado::ASIGNADA,
        'text-yellow-700' => $evidencias[$id]['estado_validacion'] === App\Enums\EstadoValidado::PENDIENTE,
        'text-red-700' => $evidencias[$id]['estado_validacion'] === App\Enums\EstadoValidado::RECHAZADA,
    ])>{{ $evidencias[$id]['estado_validacion'] }}</p>
    <div class="mt-3 flex gap-4">
      
        <a href="{{ route('evidencias.show', $id) }}" class="mt-3 inline-block text-blue-700 hover:underline">
        Más información
        </a>
    
    
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