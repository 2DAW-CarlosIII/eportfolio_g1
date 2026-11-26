@props(['moduloFormativo', 'id'])

    <li class="rounded-lg bg-white p-4 shadow">
            <h2 class="text-lg font-semibold">{{ $moduloFormativo['nombre'] }}</h2>
            <p class="text-sm text-gray-500">{{ $moduloFormativo['codigo_ciclo'] }}</p>
            <div class="mt-auto flex flex-wrap items-center gap-3 pt-5">
            @if (!request()->routeIs('modulos-formativos.show'))
                <a href="{{ route('modulos-formativos.show', $id) }}" class="rounded-md bg-blue-700 px-3 py-2 text-sm font-medium text-white hover:bg-blue-800">
                Más información
                </a>
            @endif
            
            @if (!request()->routeIs('modulos-formativos.edit'))
                <a href="{{ route('modulos-formativos.edit', $id) }}" class="rounded-md bg-yellow-700 px-3 py-2 text-sm font-medium text-white hover:bg-yellow-800">
                Editar
                </a>
            @endif
            @if (!request()->routeIs('modulos-formativos.index'))
                <a href="{{ route('modulos-formativos.index', $id) }}" class="rounded-md bg-gray-700 px-3 py-2 text-sm font-medium text-white hover:bg-gray-800">
                    Volver al listado
                </a>
            @endif
            </div>
    </li>