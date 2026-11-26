@props(['moduloFormativo', 'id'])

    <li class="rounded-lg bg-white p-4 shadow">
            <h2 class="text-lg font-semibold">
                <a href="{{ route('modulos-formativos.show', $id) }}"> {{ $moduloFormativo['nombre'] }}</a>
            </h2>
            <p class="text-sm text-gray-500">Código: {{ $moduloFormativo['codigo'] }}</p>
            <p class="text-sm text-gray-500">Código Ciclo Formativo: {{ $moduloFormativo['codigo_ciclo'] }}</p>
            <p class="text-sm text-gray-500">Horas Totales: {{ $moduloFormativo['horas_totales'] }}</p>
            <p class="text-sm text-gray-500">Curso Escolar: {{ $moduloFormativo['curso_escolar'] }}</p>
            <p class="text-sm text-gray-500">Centro: {{ $moduloFormativo['centro'] }}</p>
            <p class="text-sm text-gray-500"> {{ $moduloFormativo['descripcion'] }}</p>

            <div class="mt-auto flex flex-wrap items-center gap-3 pt-5">
        
            @if (!request()->routeIs('modulos-formativos.edit'))
                <a href="{{ route('modulos-formativos.edit', $id) }}" class="rounded-md bg-blue-700 px-3 py-2 text-sm font-medium text-white hover:bg-blue-800">
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