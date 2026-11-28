<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class FamiliaProfesionalRequest extends FormRequest
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
            'codigo' => ['required', 'string', 'max:50','regex:/^[A-Z0-9_-]+$/i',],
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion' => ['nullable', 'string'],
        ];
    }
    public function messages(): array
    {
        return [
            'codigo.required' => 'El código de la familia profesional es obligatorio.',
            'codigo.string' => 'El campo código debe ser una cadena de texto.',
            'codigo.max' => 'El campo código no debe superar los 50 caracteres.',
            'codigo.regex' => 'El campo código solo puede contener letras, números, guiones y guiones bajos.',
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.string' => 'El campo nombre debe ser una cadena de texto.',
            'nombre.max' => 'El campo nombre no debe superar los 255 caracteres.',
            'descripcion.string' => 'El campo descripción debe ser una cadena de texto.',
        ];
    }
    public function attributes(): array
    {
        return [
            'codigo' => 'código',
            'nombre' => 'nombre',
            'descripcion' => 'descripción',
        ];
    } 
}
