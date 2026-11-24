@props(['evidencias'])
<x-layout :titulo="'Listado de evidencias'">
    <ul>
        @forelse ($evidencias as $id => $evidencia)
            <x-tarjeta-evidencia :evidencias="$evidencias" :id="$id" />
        @empty
            <li>No hay evidencias disponibles.</li>
        @endforelse
    </ul>
</x-layout>
