@props(['evidencias'])
<x-layout :title="'Listado Evidencias'">
    <ul>
        @forelse ($evidencias as $id => $evidencia)
            <x-tarjeta-proyecto :evidencia="$evidencias" :id="$id" />
        @empty
            <li>No hay evidencias disponibles.</li>
        @endforelse
    </ul>
</x-layout>
