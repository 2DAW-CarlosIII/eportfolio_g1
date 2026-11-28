<x-layout :titulo='"Modificar evidencia {$id}"'>
    <x-formulario-evidencia
        :action="route('evidencias.update', $id)"
        metodo="PUT"
        :evidencia="$evidencia"
        boton="Modificar evidencia" />
</x-layout>