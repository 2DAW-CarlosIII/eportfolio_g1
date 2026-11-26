@props(['ciclo', 'id'])

<li class="rounded-lg bg-white p-4 shadow">
        <h2 class="text-lg font-semibold">
            {{ $ciclo['nombre'] }}
        </h2>

        <p class="text-sm text-gray-500">
            {{ $ciclo['codigo'] }}
        </p>

        @if (!request()->routeIs('ciclos-formativos.index'))
        <p class="text-sm text-gray-500">Grado: {{ $ciclo['grado'] }}</p>          
        <p class="text-sm text-gray-500">Codigo familia: {{ $ciclo['codigo_familia'] }}</p>
        <p class="text-sm text-gray-500">{{ $ciclo['descripcion'] }}</p>
        @endif

    <div class="mt-auto flex flex-wrap items-center gap-3 pt-5">
        @if (!request()->routeIs('ciclos-formativos.show'))
            <a href="{{ route('ciclos-formativos.show', $id) }}"
                class="rounded-md bg-blue-700 px-3 py-2 text-sm font-medium text-white hover:bg-blue-800">
                Más información
            </a>
        @endif

        @if (!request()->routeIs('ciclos-formativos.edit'))
            <a href="{{ route('ciclos-formativos.edit', $id) }}"
                 class="rounded-md bg-yellow-700 px-3 py-2 text-sm font-medium text-white hover:bg-yellow-800">
                Editar
            </a>
        @endif

        @if (!request()->routeIs('ciclos-formativos.index'))
            <a href="{{ route('ciclos-formativos.index') }}"
                class="rounded-md bg-gray-700 px-3 py-2 text-sm font-medium text-white hover:bg-gray-800">
                Volver al listado
            </a>
        @endif
    </div>
</li>