<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateClienteRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombres' =>'required',
            'apellidoPaterno' =>'required',
            'apellidoMaterno' =>'required',
            'email' =>'required|email',
            'telefono1' =>'required',
            'usuario' =>'required',
            'contrasenia' =>'required|min:8',
            'confirmarContrasenia' =>'required|min:8'
        ];
    }
}
