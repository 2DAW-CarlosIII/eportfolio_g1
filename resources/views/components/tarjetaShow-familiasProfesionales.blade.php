@props(['familiaProfesional', 'id'])
<li class="rounded-lg bg-white p-4 shadow">
    <h2 class="text-lg font-semibold">{{ $familiaProfesional['nombre'] }}</h2>
    <p class="text-sm text-gray-500">
        {{ $familiaProfesional['codigo'] }}
    </p>
    <p class="text-sm text-gray-500">{{ $familiaProfesional['descripcion'] }}</p>

    
    <div class="mt-3 flex gap-4">
        
        @if (!request()->routeIs('familias-profesionales.edit'))
            <a href="{{ route('familias-profesionales.edit', $id) }}" class="mt-3 inline-block text-yellow-700 hover:underline">
            Editar
            </a>
        @endif
        @if (!request()->routeIs('familias-profesionales.index'))
            <a href="{{ route('familias-profesionales.index', $id) }}" class="mt-3 inline-block text-gray-700 hover:underline">
                Volver al listado
            </a>
        @endif
    </div>
</li>