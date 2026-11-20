@props(['evidencia', 'id'])

<li class="rounded-lg bg-white p-4 shadow">
    <h2 class="text-lg font-semibold">{{ $evidencia[$id]['titulo'] }}</h2>
    <p class="text-sm text-gray-500">
        {{ $evidencia[$id]['fecha_entrega'] }}
    </p>
    <p @class([
        'mt-2 font-bold',
        'text-green-700' => $evidencia[$id]['calificacion'] >= 5,
        'text-red-700' => $evidencia[$id]['calificacion'] < 5,
    ])>{{ $evidencia[$id]['calificacion'] }}</p>
    <a href="{{ route('evidencias.show', $id) }}" class="mt-3 inline-block text-blue-700 hover:underline">
        Más información
    </a>
</li>