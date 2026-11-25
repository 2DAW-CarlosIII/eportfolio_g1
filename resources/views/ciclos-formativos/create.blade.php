<x-layout titulo="Nuevo ciclo formativo">
    <form action="#" method="POST" class="mt-4 space-y-4">
        @csrf

        <div>
            <label for="codigo_familia" class="block text-sm font-medium text-gray-700">
                Código de la familia profesional
            </label>
            <input
                type="text"
                name="codigo_familia"
                id="codigo_familia"
                required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
            >
        </div>

        <div>
            <label for="grado" class="block text-sm font-medium text-gray-700">
                Grado
            </label>
            <select
                name="grado"
                id="grado"
                required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
            >
                <option value="basico">Básico</option>
                <option value="medio">Medio</option>
                <option value="superior">Superior</option>
            </select>
        </div>

        <div>
            <label for="codigo" class="block text-sm font-medium text-gray-700">
                Código
            </label>
            <input
                type="text"
                name="codigo"
                id="codigo"
                required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
            >
        </div>

        <div>
            <label for="nombre" class="block text-sm font-medium text-gray-700">
                Nombre
            </label>
            <input
                type="text"
                name="nombre"
                id="nombre"
                required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
            >
        </div>

        <div>
            <label for="descripcion" class="block text-sm font-medium text-gray-700">
                Descripción
            </label>
            <textarea
                name="descripcion"
                id="descripcion"
                rows="4"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
            ></textarea>
        </div>

        <div>
            <button
                type="submit"
                class="inline-flex items-center rounded-md border border-transparent bg-green-700 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
            >
                Crear ciclo formativo
            </button>
        </div>
    </form>
</x-layout>