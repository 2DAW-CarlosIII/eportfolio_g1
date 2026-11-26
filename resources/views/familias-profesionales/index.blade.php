@props(['familiasProfesionales'])
<x-layout :titulo="'Familias profesionales'">
    <ul class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
        @forelse ($familiasProfesionales as $id => $familiaProfesional)
            <x-tarjeta-familiasProfesionales :familiasProfesionales="$familiasProfesionales" :id="$id" />
        @empty
            <li class="col-span-full text-gray-500">No hay familias profesionales disponibles.</li>
        @endforelse
    </ul>
</x-layout>