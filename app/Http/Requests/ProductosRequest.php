<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductosRequest extends FormRequest
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
          'nombre_producto'=>'required|max:100',
          'agrocosur'=>'required|max:11|numeric',
          'centralpecuaria'=>'required|max:11|numeric',
          'disprovet'=>'required|max:11|numeric',
          'erma'=>'required|max:11|numeric',

        ];
    }

    public function messages(){

      return[
        'nombre_producto.required'=>'El nombre del producto es obligatorio.',
        'nombre_producto.max'=>'El nombre del producto debe tener máximo 100 caracteres.',
        'agrocosur.required'=>'El precio de Agrocosur es obligatorio.',
        'agrocosur.max'=>'El precio de Agrocosur no debe exceder los 11 caracteres.',
        'agrocosur.numeric'=>'El precio de Agrocosur debe ser numérico.'
        'centralpecuaria.required'=>'El precio de Centralpecuaria es obligatorio.',
        'centralpecuaria.max'=>'El precio de Centralpecuaria no debe exceder los 11 caracteres.',
        'centralpecuaria.numeric'=>'El precio de Centralpecuaria debe ser numérico.'
        'disprovet.required'=>'El precio de Disprovet es obligatorio.',
        'disprovet.max'=>'El precio de Disprovet no debe exceder los 11 caracteres.',
        'disprovet.numeric'=>'El precio de Disprovet debe ser numérico.'
        'erma.required'=>'El precio de ERMA es obligatorio.',
        'erma.max'=>'El precio de ERMA no debe exceder los 11 caracteres.',
        'erma.numeric'=>'El precio de ERMA debe ser numérico.',

      ];
    }
}
