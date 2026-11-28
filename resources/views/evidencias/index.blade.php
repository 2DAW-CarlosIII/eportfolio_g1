@props(['evidencias'])
<x-layout :titulo="'Listado de evidencias'">
    <div class="mb-4 flex justify-end">
        <a href="{{ route('evidencias.create') }}" class="rounded-md bg-blue-700 px-3 py-2 text-sm font-medium text-white hover:bg-blue-800">
            Añadir evidencia
        </a>
    </div>
    <ul class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
        @forelse ($evidencias as $id => $evidencia)
            <x-tarjeta-evidencia :evidencias="$evidencias" :id="$id" />
        @empty
            <li class="col-span-full text-gray-500">No hay evidencias disponibles.</li>
        @endforelse
    </ul>
</x-layout>
