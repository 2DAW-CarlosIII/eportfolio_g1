@props(['action', 'metodo' => 'POST', 'evidencia' => null, 'boton'])

@php
    $estados = [
        'pendiente' => 'Pendiente',
        'validada'  => 'Validada',
        'rechazada' => 'Rechazada',
        'asignada'  => 'Asignada',
    ];
    $estadoActual = old('estado_validacion', $evidencia['estado_validacion']->value ?? '');

    $campo = 'mt-1 block w-full rounded-md border px-3 py-2 text-sm shadow-sm focus:outline-none focus:ring-2';
@endphp

<form action="{{ $action }}" method="POST" class="mx-auto max-w-2xl space-y-5 rounded-lg bg-white p-6 shadow">
    @csrf
    @if ($metodo === 'PUT')
        @method('PUT')
    @endif

    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
        <div>
            <label for="estudiante_id" class="block text-sm font-medium text-gray-700">Estudiante</label>
            <input type="number" id="estudiante_id" name="estudiante_id" min="1"
                   value="{{ old('estudiante_id', $evidencia['estudiante_id'] ?? '') }}"
                   @class([$campo,
                       'border-red-500 focus:ring-red-300' => $errors->has('estudiante_id'),
                       'border-gray-300 focus:border-blue-700 focus:ring-blue-200' => ! $errors->has('estudiante_id'),
                   ])>
            @error('estudiante_id')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="tarea_id" class="block text-sm font-medium text-gray-700">Tarea</label>
            <input type="number" id="tarea_id" name="tarea_id" min="1"
                   value="{{ old('tarea_id', $evidencia['tarea_id'] ?? '') }}"
                   @class([$campo,
                       'border-red-500 focus:ring-red-300' => $errors->has('tarea_id'),
                       'border-gray-300 focus:border-blue-700 focus:ring-blue-200' => ! $errors->has('tarea_id'),
                   ])>
            @error('tarea_id')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div>
        <label for="url" class="block text-sm font-medium text-gray-700">Dirección</label>
        <input type="url" id="url" name="url" placeholder="https://"
               value="{{ old('url', $evidencia['url'] ?? '') }}"
               @class([$campo,
                   'border-red-500 focus:ring-red-300' => $errors->has('url'),
                   'border-gray-300 focus:border-blue-700 focus:ring-blue-200' => ! $errors->has('url'),
               ])>
        @error('url')
            <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
        <textarea id="descripcion" name="descripcion" rows="4"
                  @class([$campo,
                      'border-red-500 focus:ring-red-300' => $errors->has('descripcion'),
                      'border-gray-300 focus:border-blue-700 focus:ring-blue-200' => ! $errors->has('descripcion'),
                  ])>{{ old('descripcion', $evidencia['descripcion'] ?? '') }}</textarea>
        @error('descripcion')
            <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="estado_validacion" class="block text-sm font-medium text-gray-700">Estado de validación</label>
        <select id="estado_validacion" name="estado_validacion"
                @class([$campo, 'bg-white',
                    'border-red-500 focus:ring-red-300' => $errors->has('estado_validacion'),
                    'border-gray-300 focus:border-blue-700 focus:ring-blue-200' => ! $errors->has('estado_validacion'),
                ])>
            <option value="">-- Selecciona un estado --</option>
            @foreach ($estados as $valor => $texto)
                <option value="{{ $valor }}" @selected($estadoActual === $valor)>{{ $texto }}</option>
            @endforeach
        </select>
        @error('estado_validacion')
            <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-wrap items-center gap-3 border-t border-gray-200 pt-5">
        <button type="submit" class="rounded-md bg-blue-700 px-3 py-2 text-sm font-medium text-white hover:bg-blue-800">
            {{ $boton }}
        </button>
        <a href="{{ route('evidencias.index') }}" class="rounded-md bg-gray-200 px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-300">
            Cancelar
        </a>
    </div>
</form>