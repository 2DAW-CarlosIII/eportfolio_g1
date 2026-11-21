@props(['evidencias'])
<x-layout :titulo="'Listado Evidencias'">
    <ul>
        @forelse ($evidencias as $id => $evidencia)
            <x-tarjeta-proyecto :evidencias="$evidencias" :id="$id" />
        @empty
            <li>No hay evidencias disponibles.</li>
        @endforelse
    </ul>
</x-layout>
