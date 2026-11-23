<x-layout :titulo="'Perfil'">
    <p class="text-lg text-gray-600">Perfil del usuario
        @isset($id) 
            {{ $id }}
        @else
            propio 
        @endisset
    </p>
</x-layout>
