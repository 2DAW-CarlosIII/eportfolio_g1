<x-layout :titulo="'Vista detalle Módulo Formativo ' . $id">
    @isset($moduloFormativo)
        <ul>
        <x-tarjeta-modulo-formativo-detalle :moduloFormativo="$moduloFormativo" :id="$id" />
        </ul>
    @endisset
</x-layout>
