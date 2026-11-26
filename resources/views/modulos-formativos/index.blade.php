<x-layout titulo="Módulos formativos">
    <ul class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
    @forelse ($modulosFormativos as $id => $moduloFormativo)
    <x-tarjeta-modulo-formativo-listado :moduloFormativo="$moduloFormativo" :id="$id" />
    @empty
        <li class="col-span-full text-gray-500">Todavía no hay Módulos formativos.</li>
    @endforelse
    </ul>
</x-layout>