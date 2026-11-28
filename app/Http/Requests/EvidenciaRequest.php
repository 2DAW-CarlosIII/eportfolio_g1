<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class EvidenciaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
         return [
            'estudiante_id' => ['required', 'integer', 'min:1'],
            'tarea_id' => ['required', 'integer', 'min:1'],
            'url' => ['required', 'url', 'max:2048'],
            'descripcion' => ['required', 'string'],
            'estado_validacion' => ['required', 'in:pendiente,validada,rechazada,asignada'],
        ];
    }
     public function messages(): array
    {
        return [
            'estudiante_id.required'     => 'El estudiante es obligatorio.',
            'estudiante_id.integer'      => 'El estudiante debe ser un número entero.',
            'estudiante_id.min'          => 'El estudiante debe ser mayor o igual que 1.',

            'tarea_id.required'          => 'La tarea es obligatoria.',
            'tarea_id.integer'           => 'La tarea debe ser un número entero.',
            'tarea_id.min'               => 'La tarea debe ser mayor o igual que 1.',

            'url.required'               => 'La dirección de la evidencia es obligatoria.',
            'url.url'                    => 'La dirección de la evidencia no es una URL válida.',
            'url.max'                    => 'La dirección de la evidencia no puede superar los 2048 caracteres.',

            'descripcion.required'       => 'La descripción es obligatoria.',
            'descripcion.string'         => 'La descripción debe ser un texto.',

            'estado_validacion.required' => 'El estado de validaciSSón es obligatorio.',
            'estado_validacion.in'       => 'El estado debe ser pendiente, validada, rechazada o asignada.',
        ];
    }
}

