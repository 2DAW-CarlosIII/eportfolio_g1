@props(['evidencias'])
<x-layout :titulo="'Listado de evidencias'">
    <ul class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
        @forelse ($evidencias as $id => $evidencia)
            <x-tarjeta-evidencia :evidencias="$evidencias" :id="$id" />
        @empty
            <li class="col-span-full text-gray-500">No hay evidencias disponibles.</li>
        @endforelse
    </ul>
</x-layout>
