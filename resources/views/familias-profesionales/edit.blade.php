<x-layout :titulo='"Modificar familia profesional {$id}"'>
    @isset($familiaProfesional)
        <form action="{{ route('familias-profesionales.update', ['id' => $id]) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="codigo" class="block text-sm font-medium text-gray-700">Código</label>
                <input type="text" name="codigo" id="codigo" value="{{ old('codigo', $familiaProfesional['codigo']) }}"  @class(['mt-1 block w-full rounded-md focus:border-indigo-500 shadow-sm sm:text-sm', 'border-red-500' => $errors->has('codigo'), 'border-gray-300 focus:border-indigo-500' => !$errors->has('codigo')])>
                @error('codigo')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $familiaProfesional['nombre']) }}"  @class(['mt-1 block w-full rounded-md focus:border-indigo-500 shadow-sm sm:text-sm', 'border-red-500' => $errors->has('nombre'), 'border-gray-300 focus:border-indigo-500' => !$errors->has('nombre')])>
                @error('nombre')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea name="descripcion" id="descripcion"  @class(['mt-1 block w-full rounded-md shadow-sm sm:text-sm focus:border-indigo-500', 'border-red-500' => $errors->has('descripcion'), 'border-gray-300 focus:border-indigo-500' => !$errors->has('descripcion')])>{{ old('descripcion', $familiaProfesional['descripcion']) }}</textarea>
                @error('descripcion')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-2">
                <a href="{{ route('familias-profesionales.show', ['id' => $id]) }}" class="rounded-md bg-gray-700 px-5 py-2 text-sm font-medium text-white hover:bg-gray-800 mr-2">
                    Cancelar
                </a>
                <button type="submit" class="rounded-md bg-blue-700 px-5 py-2 text-sm font-medium text-white hover:bg-blue-800">
                    Modificar familia profesional
                </button>
            </div>
        </form>
    @else
        <p class="text-red-700">No se encontró la familia profesional con ID {{ $id }}.</p>
    @endisset
</x-layout>