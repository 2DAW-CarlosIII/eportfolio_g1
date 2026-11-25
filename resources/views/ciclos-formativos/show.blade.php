<x-layout :titulo="'Vista detalle ciclo formativo ' . $id">
    <ul>
        <x-tarjeta-ciclo-formativo :ciclo="$ciclo" :id="$id" />
    </ul>
</x-layout>