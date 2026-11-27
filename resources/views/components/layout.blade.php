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
    {{ $slot }}
</x-daiva.layout>