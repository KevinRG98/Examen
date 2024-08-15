<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'nombres' => 'required|string|max:50',
            'email' => 'required|string|max:50',
            'direccion' => 'required|string|max:30',
            'fono' => 'required|string|max:20',
            // Añade las reglas de validación necesarias
        ];
    }

    public function messages()
    {
        return [
            'nombres.required' => 'El nombre es requerido',
            'email.required' => 'El email es requerido',
            'direccion.required' => 'La direccion es requerida',
            'fono.required' => 'El celular es requerido',
            ];
    }
}
