<x-layout titulo="Ciclos formativos">
    <a href="{{ route('ciclos-formativos.create') }}"
        class="mb-4 inline-block rounded-md bg-green-700 px-3 py-2 text-sm font-medium text-white hover:bg-green-800">
        Añadir ciclo formativo
    </a>

    <ul class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
        @forelse ($ciclosFormativos as $id => $ciclo)
            <x-tarjeta-ciclo-formativo :ciclo="$ciclo" :id="$id" />
        @empty
            <li class="col-span-full text-gray-500">No hay ciclos formativos disponibles.</li>
        @endforelse
    </ul>
</x-layout>