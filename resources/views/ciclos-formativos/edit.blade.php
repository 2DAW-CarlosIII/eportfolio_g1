<x-layout :titulo="'Modificar ciclo formativo ' . $id">
    <form action="{{ route('ciclos-formativos.update', $id) }}" method="POST" class="mt-4 space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="codigo_familia" class="block text-sm font-medium text-gray-700">Familia profesional</label>
            <input type="text" name="codigo_familia" id="codigo_familia" value="{{ old('codigo_familia', $ciclo['codigo_familia']) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('codigo_familia')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="grado" class="block text-sm font-medium text-gray-700">Grado</label>
            <select name="grado" id="grado" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                <option value="basico" @selected(old('grado', $ciclo['grado']) === 'basico')>Básico</option>
                <option value="medio" @selected(old('grado', $ciclo['grado']) === 'medio')>Medio</option>
                <option value="superior" @selected(old('grado', $ciclo['grado']) === 'superior')>Superior</option>
            </select>
            @error('grado')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="codigo" class="block text-sm font-medium text-gray-700">Código</label>
            <input type="text" name="codigo" id="codigo" value="{{ old('codigo', $ciclo['codigo']) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('codigo')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $ciclo['nombre']) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            @error('nombre')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="4"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('descripcion', $ciclo['descripcion']) }}</textarea>
            @error('descripcion')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit"
                class="inline-flex items-center rounded-md bg-green-700 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-800">
                Modificar ciclo formativo
            </button>
        </div>
    </form>
</x-layout>
