<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRequest extends FormRequest
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
            'cedula'=>'required|alpha_dash|max:20',
            'nombre_cliente'=>'required|max:80|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/u',
            'telefono'=>'max:20|nullable',
            'direccion'=>'max:80|nullable',
            'municipio'=>'max:50|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/u|nullable',
        ];
    }

    public function messages(){

      return[
        'cedula.required'=>'El código es obligatorio',
        'cedula.alpha_dash'=>'El código solo debe tener caracteres alfanuméricos, guiones y guiones bajos',
        'cedula.max'=>'El código debe tener máximo 20 caracteres',
        'nombre_cliente.required'=>'El nombre del cliente es obligatorio',
        'nombre_cliente.regex'=>'El nombre del cliente solo debe tener letras',
        'nombre_cliente.max'=>'El nombre del cliente no puede pasar de los 80 caracteres',
        'telefono.max'=>'El telefono no debe tener mas de 20 caracteres',
        'direccion.max'=>'La direccion no debe tener mas de 80 caracteres',
        'municipio.max'=>'El municipio no debe tener mas de 50 caracteres',
        'municipio.regex'=>'El municipio solo debe tener letras',

      ];
    }
}
