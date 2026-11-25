@props(['id'=>null,'familiaProfesional'])
<x-layout :titulo='"Familia profesional {$id}"'>
    @isset($familiaProfesional)
    <ul>
        <x-tarjetaShow-familiasProfesionales :familiaProfesional="$familiaProfesional" :id="$id" />
    </ul>
    @else
        <p class="text-red-700">No se encontró la familia profesional con ID {{ $id }}.</p>
    @endisset

</x-layout>