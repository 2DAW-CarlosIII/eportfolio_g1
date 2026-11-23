<x-layout :titulo="'Evidencia ' . $id">
    @isset($evidencia)
        <ul class="grid gap-4 sm:grid-cols-2">
        <x-tarjeta-evidencia :evidencia="$evidencia" :id="$id" />
        </ul>
    @endisset
</x-layout>