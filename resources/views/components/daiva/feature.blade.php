
@props(['id', 'etiquetaSmall', 'titulo', 'descripcion'])

@if ($id==0)
    <div class="flex flex-col gap-2 mb-8"> 
@else
    <div class="flex flex-col gap-2">
@endif
        <small class="border-l-2 pl-2 text-xs">{{$etiquetaSmall}}</small>
        <h2 class="playfair font-bold text-xl">{{$titulo}}</h2>
        <p class="text-sm text-gray-500">
            {{ $descripcion }}
        </p>
        {{ $enlace }}
    </div>