<x-layout titulo="Ciclos formativos">
    <ul class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
        @forelse ($ciclosFormativos as $id => $ciclo)
            <x-tarjeta-ciclo-formativo :ciclo="$ciclo" :id="$id" />
        @empty
            <li class="col-span-full text-gray-500">No hay ciclos formativos disponibles.</li>
        @endforelse
    </ul>
</x-layout>