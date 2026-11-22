@props(['titulo', 'descripcion', 'icono' => 'bi-body-text'])

<div class="bg-gray-100 rounded-full flex items-center gap-4 p-4 px-12">
    <div class="flex bg-white p-4 rounded-full w-12 h-12 items-center">
        <i class="bi {{ $icono }} font-bold text-xl h-[25px]"></i>
    </div>

    <div>
        <h4 class="playfair font-bold">{{ $titulo }}</h4>
        <small class="text-gray-500">{{ $descripcion }}</small>
    </div>
</div>