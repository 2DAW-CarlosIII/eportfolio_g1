<x-layout titulo="Ciclos formativos">
    <ul>
        @forelse ($ciclosFormativos as $id => $ciclo)
            <x-tarjeta-ciclo-formativo :ciclo="$ciclo" :id="$id" />
        @empty
            <li>No hay ciclos formativos disponibles.</li>
        @endforelse
    </ul>
</x-layout>