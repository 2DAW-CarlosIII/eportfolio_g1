<x-layout :titulo="'Modificar ciclo formativo ' . $id">
    <form action="#" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="codigo_familia" class="block font-semibold">
                Código de la familia profesional:
            </label>
            <input
                type="text"
                name="codigo_familia"
                id="codigo_familia"
                value="{{ $ciclo['codigo_familia'] }}"
                class="w-full rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
            >
        </div>

        <div>
            <label for="grado" class="block font-semibold">
                Grado:
            </label>
            <select
                name="grado"
                id="grado"
                class="w-full rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
            >
                <option value="basico" @selected($ciclo['grado'] === 'basico')>Básico</option>
                <option value="medio" @selected($ciclo['grado'] === 'medio')>Medio</option>
                <option value="superior" @selected($ciclo['grado'] === 'superior')>Superior</option>
            </select>
        </div>

        <div>
            <label for="codigo" class="block font-semibold">
                Código:
            </label>
            <input
                type="text"
                name="codigo"
                id="codigo"
                value="{{ $ciclo['codigo'] }}"
                class="w-full rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
            >
        </div>

        <div>
            <label for="nombre" class="block font-semibold">
                Nombre:
            </label>
            <input
                type="text"
                name="nombre"
                id="nombre"
                value="{{ $ciclo['nombre'] }}"
                class="w-full rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
            >
        </div>

        <div>
            <label for="descripcion" class="block font-semibold">
                Descripción:
            </label>
            <textarea
                name="descripcion"
                id="descripcion"
                rows="4"
                class="w-full rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
            >{{ $ciclo['descripcion'] }}</textarea>
        </div>

        <button
            type="submit"
            class="rounded bg-green-700 px-4 py-2 font-semibold text-white hover:bg-green-800"
        >
            Actualizar ciclo formativo
        </button>
    </form>
</x-layout>