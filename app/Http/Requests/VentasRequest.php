<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VentasRequest extends FormRequest
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
            'cliente_id'=>'required',
            'proveedor_id'=>'required',
            'cantidad'=>'required|numeric|min:1|max:999',
            'valor_venta'=>'required',
            'fecha_venta'=>'date_format:Y-m-d|before_or_equal:today',

        ];
    }

    public function messages(){

      return[
        'cliente_id.required'=>'El Cliente es obligatorio.',
        'proveedor_id.required'=>'El Proveedor es obligatorio.',
        'cantidad.required'=>'La Cantidad es obligatorio.',
        'cantidad.numeric'=>'La Cantidad debe ser numérica.',
        'cantidad.between'=>'La Cantidad no debe ser mennor a 1 o mayor a 999.',
        'valor_venta.required'=>'El Valor Total es obligatorio.',
        'fecha_venta.date_format'=>'Formato de la fecha: Año-mes-día.',
        'fecha_venta.before_or_equal'=>'La fecha no puede ser mayor al día de hoy.',


      ];
    }
}