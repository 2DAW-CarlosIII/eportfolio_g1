@props(['titulo' => null])

<x-daiva.layout :titulo="$titulo">
    {{ $slot }}
</x-daiva.layout>