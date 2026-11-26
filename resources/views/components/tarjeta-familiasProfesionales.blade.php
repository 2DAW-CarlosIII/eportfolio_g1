@props(['familiasProfesionales', 'id'])
<li class="rounded-lg bg-white p-4 shadow">
    <h2 class="text-lg font-semibold">{{ $familiasProfesionales[$id]['nombre'] }}</h2>
    <p class="text-sm text-gray-500">
        {{ $familiasProfesionales[$id]['codigo'] }}
    </p>
    @if (!request()->routeIs('familias-profesionales.index'))
        <p class="text-sm text-gray-500">{{ $familiasProfesionales[$id]['descripcion'] }}</p>
    @endif
    
    <div class="mt-auto flex flex-wrap items-center gap-3 pt-5">
        @if (!request()->routeIs('familias-profesionales.show'))
            <a href="{{ route('familias-profesionales.show', $id) }}" class="rounded-md bg-blue-700 px-3 py-2 text-sm font-medium text-white hover:bg-blue-800">
            Más información
            </a>
        @endif
        
        @if (!request()->routeIs('familias-profesionales.edit'))
            <a href="{{ route('familias-profesionales.edit', $id) }}" class="rounded-md bg-yellow-700 px-3 py-2 text-sm font-medium text-white hover:bg-yellow-800">
            Editar
            </a>
        @endif
        @if (!request()->routeIs('familias-profesionales.index'))
            <a href="{{ route('familias-profesionales.index', $id) }}" class="rounded-md bg-gray-700 px-3 py-2 text-sm font-medium text-white hover:bg-gray-800">
                Volver al listado
            </a>
        @endif
    </div>
</li>