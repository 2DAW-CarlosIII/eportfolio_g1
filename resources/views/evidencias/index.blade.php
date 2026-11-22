<x-layout titulo="Listado evidencias">
    <ul class="grid gap-4 sm:grid-cols-2">
    @forelse ($evidencias as $id => $evidencia)
    <x-tarjeta-evidencia :evidencia="$evidencia" :id="$id" />
    @empty
        <li>Todavía no hay evidencias.</li>
    @endforelse
    </ul>
</x-layout>