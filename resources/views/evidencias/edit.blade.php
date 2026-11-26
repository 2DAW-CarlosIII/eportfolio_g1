<x-layout :titulo='"Modificar evidencia {$id}"'>
    @isset($evidencia)
        <p>Editar</p>
    @else
        <p class="text-red-700">No se encontró la evidencia con ID {{ $id }}.</p>
    @endisset
</x-layout>