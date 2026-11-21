<x-layout :titulo="'Crear Evidencia'">
    <form action="#" method="POST" class="mt-4 space-y-4">
        @csrf
        <div>
            <label for="proyecto_id" class="block text-sm font-medium text-gray-700">proyecto_id</label>
            <input type="number" name="proyecto_id" id="proyecto_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>
        <div>
            <label for="docente_id" class="block text-sm font-medium text-gray-700">Docente ID</label>
            <input type="number" name="docente_id" id="docente_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>
        
        <div>
            <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
            <input type="text" name="titulo" id="titulo" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>
        <div>
            <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo</label>
            <input type="text" name="tipo" id="tipo" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>
        <div>
            <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
            <input type="url" name="url" id="url" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>
        <div>
            <label for="fecha_entrega" class="block text-sm font-medium text-gray-700">Fecha de Entrega</label>
            <input type="date" name="fecha_entrega" id="fecha_entrega" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>
        <div>
            <label for="estado" class="block text-sm font-medium text-gray-700">Estado</label>
            <select name="estado" id="estado" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                <option value="pendiente">Pendiente</option>
                <option value="aprobado">Aprobado</option>
                <option value="rechazado">Rechazado</option>
                <option value="en_revision">En Revisión</option>
            </select>
        </div>
        <div>
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
        </div>
        <div>
            <label for="calificacion" class="block text-sm font-medium text-gray-700">Calificación</label>
            <input type="number" name="calificacion" id="calificacion" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>
        <div>
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-700 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                Crear Evidencia
            </button>
        </div>
    </form>
</x-layout>