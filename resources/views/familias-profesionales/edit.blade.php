<x-layout :titulo='"Modificar familia profesional {$id}"'>
    @isset($familiaProfesional)
        <form action="#" method="POST" class="space-y-4">
            Modificar familia profesional {{ $id }}
        </form>
    @else
        <p class="text-red-700">No se encontró la familia profesional con ID {{ $id }}.</p>
    @endisset
</x-layout>