<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CicloFormativoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'codigo_familia' => ['required', 'string', 'max:50', 'regex:/^[A-Z0-9_-]+$/i'],
            'grado'          => ['required', 'in:basico,medio,superior'],
            'codigo'         => ['required', 'string', 'max:50', 'regex:/^[A-Z0-9_-]+$/i'],
            'nombre'         => ['required', 'string', 'max:255'],
            'descripcion'    => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'codigo_familia.required' => 'El código de la familia profesional es obligatorio.',
            'codigo_familia.max'      => 'El código de la familia profesional no puede superar los 50 caracteres.',
            'codigo_familia.regex'    => 'El código de la familia solo puede tener letras, números, guiones y guiones bajos.',
            'grado.required'          => 'El grado es obligatorio.',
            'grado.in'                => 'El grado debe ser básico, medio o superior.',
            'codigo.required'         => 'El código del ciclo formativo es obligatorio.',
            'codigo.max'              => 'El código del ciclo formativo no puede superar los 50 caracteres.',
            'codigo.regex'            => 'El código solo puede tener letras, números, guiones y guiones bajos.',
            'nombre.required'         => 'El nombre del ciclo formativo es obligatorio.',
            'nombre.max'              => 'El nombre no puede superar los 255 caracteres.',
        ];
    }
}
