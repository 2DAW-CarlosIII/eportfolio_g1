@props(['evidencias', 'id'])
<li class="rounded-lg bg-white p-4 shadow">
    <h2 class="text-lg font-semibold">{{ $evidencias[$id]['titulo'] }}</h2>
    <p class="text-sm text-gray-500">
        {{ $evidencias[$id]['fecha_entrega'] }}
    </p>
    @if (!request()->routeIs('evidencias.index'))
        <p class="text-sm text-gray-500">{{ $evidencias[$id]['tipo'] }}</p>
        <p class="text-sm text-gray-500">{{ $evidencias[$id]['estado'] }}</p>
        <p class="text-sm text-gray-500">{{ $evidencias[$id]['descripcion'] }}</p>
        <p class="text-sm text-gray-500">
            <a href="{{ $evidencias[$id]['url'] }}" class="text-blue-700 hover:underline" target="_blank" rel="noopener noreferrer">
                {{ $evidencias[$id]['url'] }}
            </a>
        </p>
    @endif
    <p @class([
        'mt-2 font-bold',
        'text-green-700' => $evidencias[$id]['calificacion'] >= 5,
        'text-red-700' => $evidencias[$id]['calificacion'] < 5,
    ])>{{ $evidencias[$id]['calificacion'] }}</p>
    <div class="mt-3 flex gap-4">
        @if (!request()->routeIs('evidencias.show'))
            <a href="{{ route('evidencias.show', $id) }}" class="mt-3 inline-block text-blue-700 hover:underline">
            Más información
            </a>
        @endif
        
        @if (!request()->routeIs('evidencias.edit'))
            <a href="{{ route('evidencias.edit', $id) }}" class="mt-3 inline-block text-yellow-700 hover:underline">
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