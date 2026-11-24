@props(['id'=>null,'evidencia'])
<x-layout :titulo='"Evidencia {$id}"'>
    @isset($evidencia)
    <ul>
        <x-tarjeta-evidencia-show :evidencia="$evidencia" :id="$id" />
    </ul>
    @else
        <p class="text-red-700">No se encontró la evidencia con ID {{ $id }}.</p>
    @endisset

</x-layout>