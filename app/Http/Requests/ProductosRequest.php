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
          'agrocosur'=>'required|min:0|max:99999999999|numeric',
          'centralpecuaria'=>'required|min:0|max:99999999999|numeric',
          'disprovet'=>'required|min:0|max:99999999999|numeric',
          'erma'=>'required|min:0|max:99999999999|numeric',

        ];
    }

    public function messages(){

      return[
        'nombre_producto.required'=>'El nombre del producto es obligatorio.',
        'nombre_producto.max'=>'El nombre del producto debe tener máximo 100 caracteres.',
        'agrocosur.required'=>'El precio de Agrocosur es obligatorio.',
        'agrocosur.min'=>'El precio de Agrocosur es incorrecto.',
        'agrocosur.max'=>'El precio de Agrocosur es muy grande.',
        'agrocosur.numeric'=>'El precio de Agrocosur debe ser numérico.',
        'centralpecuaria.required'=>'El precio de Centralpecuaria es obligatorio.',
        'centralpecuaria.min'=>'El precio de Centralpecuaria es incorrecto.',
        'centralpecuaria.max'=>'El precio de Centralpecuaria es muy grande.',
        'centralpecuaria.numeric'=>'El precio de Centralpecuaria debe ser numérico.',
        'disprovet.required'=>'El precio de Disprovet es obligatorio.',
        'disprovet.min'=>'El precio de Disprovet es incorrecto.',
        'disprovet.max'=>'El precio de Disprovet es muy grande.',
        'disprovet.numeric'=>'El precio de Disprovet debe ser numérico.',
        'erma.required'=>'El precio de ERMA es obligatorio.',
        'erma.min'=>'El precio de ERMA es incorrecto.',
        'erma.max'=>'El precio de ERMA es muy grande.',
        'erma.numeric'=>'El precio de ERMA debe ser numérico.',

      ];
    }
}
