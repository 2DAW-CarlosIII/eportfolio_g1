@props(['id'=>null,'evidencia'])
<x-layout :title='"Vista Detalle evidencias {$id}"'>
    @isset($evidencia)
    <ul>
        <x-tarjeta-proyecto :evidencia="$evidencia" :id="$id" />
    </ul>
    @endisset

</x-layout>