<x-layout :titulo='"Editar Evidencia {$id}"'>
    @isset($evidencias[$id])
        <form action="#" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="titulo" class="block font-semibold">Título:</label>
                <input type="text" name="titulo" id="titulo" value="{{ $evidencias[$id]['titulo'] }}" class="w-full rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="tipo" class="block font-semibold">Tipo:</label>
                <input type="text" name="tipo" id="tipo" value="{{ $evidencias[$id]['tipo'] }}" class="w-full rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="url" class="block font-semibold">URL:</label>
                <input type="url" name="url" id="url" value="{{ $evidencias[$id]['url'] }}" class="w-full rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="fecha_entrega" class="block font-semibold">Fecha de Entrega:</label>
                <input type="date" name="fecha_entrega" id="fecha_entrega" value="{{ $evidencias[$id]['fecha_entrega'] }}" class="w-full rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="estado" class="block font-semibold">Estado:</label>
                <select name="estado" id="estado" class="w-full rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <option value="pendiente" @selected($evidencias[$id]['estado'] === 'pendiente')>Pendiente</option>
                    <option value="en_revision" @selected($evidencias[$id]['estado'] === 'en_revision')>En Revisión</option>
                    <option value="aprobado" @selected($evidencias[$id]['estado'] === 'aprobado')>Aprobado</option>
                    <option value="rechazado" @selected($evidencias[$id]['estado'] === 'rechazado')>Rechazado</option>
                </select>
            </div>
            <div>
                <label for="descripcion" class="block font-semibold">Descripción:</label>
                <textarea name="descripcion" id="descripcion" rows="4" class="w-full rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">{{ $evidencias[$id]['descripcion'] }}</textarea>
            </div>

            <div>
                <label for="calificacion" class="block font-semibold">Calificación:</label>
                <input type="number" name="calificacion" id="calificacion" value="{{ $evidencias[$id]['calificacion'] }}" min="0" max="10" step="0.1" class="w-full rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            
            
            
            <button type="submit" class="rounded bg-green-700 px-4 py-2 font-semibold text-white hover:bg-green-800">Actualizar Evidencia</button>
        </form>
    @else
        <p class="text-red-700">No se encontró la evidencia con ID {{ $id }}.</p>
    @endisset
</x-layout>