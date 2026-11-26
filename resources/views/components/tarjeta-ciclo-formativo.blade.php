@props(['ciclo', 'id'])

<li @class([
    'flex h-full flex-col rounded-xl border-l-8 p-5 shadow-sm transition-shadow hover:shadow-md',
    'border-green-500 bg-green-50' => $ciclo['grado'] === 'basico',
    'border-blue-500 bg-blue-50' => $ciclo['grado'] === 'medio',
    'border-purple-500 bg-purple-50' => $ciclo['grado'] === 'superior',
])>
    <div>
        <h2 class="text-lg font-semibold text-gray-900">
            {{ $ciclo['nombre'] }}
        </h2>

        <p class="mt-1 text-sm font-medium text-gray-600">
            {{ $ciclo['codigo'] }}
        </p>

        <p class="mt-2 inline-block rounded-full bg-white/70 px-3 py-1 text-xs font-semibold uppercase text-gray-700">
            {{ $ciclo['grado'] }}
        </p>

        @if (!request()->routeIs('ciclos-formativos.index'))
            <dl class="mt-4 space-y-3">
                <div>
                    <dt class="text-xs font-semibold uppercase text-gray-500">Familia profesional</dt>
                    <dd class="text-sm text-gray-700">{{ $ciclo['codigo_familia'] }}</dd>
                </div>

                <div>
                    <dt class="text-xs font-semibold uppercase text-gray-500">Descripción</dt>
                    <dd class="text-sm leading-relaxed text-gray-700">{{ $ciclo['descripcion'] }}</dd>
                </div>
            </dl>
        @endif
    </div>

    <div class="mt-auto flex flex-wrap items-center gap-3 pt-5">
        @if (!request()->routeIs('ciclos-formativos.show'))
            <a href="{{ route('ciclos-formativos.show', $id) }}"
                class="rounded-md bg-blue-700 px-3 py-2 text-sm font-medium text-white hover:bg-blue-800">
                Más información
            </a>
        @endif

        @if (!request()->routeIs('ciclos-formativos.edit'))
            <a href="{{ route('ciclos-formativos.edit', $id) }}"
                class="rounded-md border border-yellow-700 px-3 py-2 text-sm font-medium text-yellow-800 hover:bg-yellow-50">
                Editar
            </a>
        @endif

        @if (!request()->routeIs('ciclos-formativos.index'))
            <a href="{{ route('ciclos-formativos.index') }}"
                class="rounded-md border border-gray-400 px-3 py-2 text-sm font-medium text-gray-700 hover:bg-white">
                Volver al listado
            </a>
        @endif
    </div>
</li>