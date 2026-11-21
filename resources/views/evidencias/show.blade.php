@props(['id'=>null,'evidencias'])
<x-layout :titulo='"Vista Detalle evidencias {$id}"'>
    @isset($evidencias[$id])
    <ul>
        <x-tarjeta-proyecto :evidencias="$evidencias" :id="$id" />
    </ul>
    @else
        <p class="text-red-700">No se encontró la evidencia con ID {{ $id }}.</p>
    @endisset

</x-layout>