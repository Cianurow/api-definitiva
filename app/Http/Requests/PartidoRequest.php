<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartidoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Se deja en true para autorizar la validación
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fecha' => ['required', 'date_format:Y-m-d H:i:s'],
            'lugar' => ['required', 'string', 'max:255'],            
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'fecha.required' => 'La fecha del partido es requerida.',
            'fecha.date_format' => 'La fecha debe estar en formato YYYY-MM-DD HH:mm:ss.',
            'lugar.required' => 'El lugar del partido es requerido.',
            'lugar.string' => 'El lugar del partido debe ser un texto.',
            'lugar.max' => 'El lugar del partido no puede exceder los :max caracteres.',
            'equipo_local.required' => 'Seleccione un equipo local válido.',
            'equipo_local.exists' => 'El equipo local seleccionado no es válido.',
            'equipo_visitante.required' => 'Seleccione un equipo visitante válido.',
            'equipo_visitante.exists' => 'El equipo visitante seleccionado no es válido.',
            'equipo_visitante.different' => 'El equipo visitante debe ser diferente al equipo local.',
            'campeonato.required' => 'Seleccione un campeonato válido.',
            'campeonato.exists' => 'El campeonato seleccionado no es válido.',
        ];
    }
}