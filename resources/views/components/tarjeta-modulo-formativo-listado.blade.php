@props(['moduloFormativo', 'id'])

    <li class="rounded-lg bg-white p-4 shadow">
        <div class="space-y-3 sm:col-span-2">
            <h2 class="text-2xl font-semibold">{{ $moduloFormativo['nombre'] }}</h2>
            <p><strong>Ciclo formativo</strong> {{ $moduloFormativo['codigo_ciclo'] }}</p>

            <div class="gap-3 pt-2 ">
                <boton>
                    <a decoration="underline" href="{{ route('modulos-formativos.show', $id) }}">Ver detalles del módulo formativo con código {{ $moduloFormativo['codigo'] }}</a>
                </boton>
            </div>
        </div>
    </li>