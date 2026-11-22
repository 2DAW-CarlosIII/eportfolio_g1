@props(['etiqueta', 'titulo'])

<div {{ $attributes->merge(['class' => 'flex flex-col gap-2']) }}>
    <small class="border-l-2 pl-2 text-xs">{{ $etiqueta }}</small>
    <h2 class="playfair font-bold text-xl">{{ $titulo }}</h2>
    <p class="text-sm text-gray-500">
        {{ $slot }}
    </p>

    @isset($enlace)
        {{ $enlace }}
    @endisset
</div>