@props(['titulo' => null])

<x-daiva.layout :titulo="$titulo">
    @session('mensaje')
        <div role="status" class="mb-12 flex flex-col gap-3">
            <small class="border-l-2 pl-2 text-xs">Mensaje</small>
            <div class="rounded-full bg-gray-100 p-4 px-8">
                <p class="playfair font-bold">{{ $value }}</p>
            </div>
        </div>
    @endsession
    <div class="w-full max-w-5xl mx-auto flex flex-col gap-4 mb-8">
        <div class="flex flex-col gap-4">
            <h1 class="playfair font-bold text-2xl">{{ $titulo }}</h1>
            <hr class="border-gray-300 border-t-2">
        </div>
    </div>
    {{ $slot }}
</x-daiva.layout>