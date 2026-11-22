<nav class="flex items-center gap-8 text-sm">
    <a href="{{ url('/') }}" class="hover:underline">Inicio</a>
    <a href="{{ route('evidencias.index') }}" class="hover:underline">Evidencias</a>
    <a href="{{ route('evidencias.create') }}" class="hover:underline">Añadir evidencia</a>
    <x-daiva.boton alt href="{{ route('perfil') }}" class="flex items-center gap-2">
        <i class="bi bi-person"></i>
        <span>Perfil</span>
    </x-daiva.boton>
</nav>