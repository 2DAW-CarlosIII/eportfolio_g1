<x-layout :id="$id">
    <h1>Mi perfil</h1>
    <p>Perfil del usuario
        @isset($id)
            {{ $id }}
        @else
            propio
        @endisset
    </p>
</x-layout>