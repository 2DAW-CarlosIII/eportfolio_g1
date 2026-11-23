<x-layout titulo="Listado evidencias">
    <h1>Listado de evidencias</h1>
    <ul class="grid gap-4 sm:grid-cols-2">
    @forelse ($evidencias as $id => $evidencia)
    <x-tarjeta-evidencia :evidencia="$evidencia" :id="$id" />
    @empty
        <li>Todavía no hay evidencias.</li>
    @endforelse
    </ul>
</x-layout>