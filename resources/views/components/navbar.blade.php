<nav class="flex items-center gap-8 text-sm">
    <div class="mx-auto flex max-w-5xl items-center gap-6 px-6 py-3">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo-eportfolio.svg') }}" alt="eportfolio" class="h-12">
        </a>
        <a href="{{ route('evidencias.index') }}" @class([
            'font-semibold',
            'text-blue-700' => request()->routeIs('evidencias.*'),
            'text-gray-600 hover:text-gray-900' => ! request()->routeIs('evidencias.*'),
        ])>Evidencias</a>
        <a href="{{ route('perfil') }}" @class([
            'font-semibold',
            'text-blue-700' => request()->routeIs('perfil'),
            'text-gray-600 hover:text-gray-900' => ! request()->routeIs('perfil'),
        ])>Mi perfil</a>
        <a href="{{ route('ciclos-formativos.index') }}" @class([
            'font-semibold',
            'text-blue-700' => request()->routeIs('ciclos-formativos.*'),
            'text-gray-600 hover:text-gray-900' => ! request()->routeIs('ciclos-formativos.*'),
        ])>Ciclos formativos</a>
        <a class="flex items-center bg-gray-300 gap-2 p-2 px-6 text-black rounded-full hover:text-white hover:bg-gray-600"
                        href="signin.html">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Sign in</span>
        </a>
    </div>
</nav>