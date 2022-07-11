<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'required|string|max:50',
            'descripcion'=>'nullable|string|max:250',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Este campo es requerido ',
            'name.string'=> 'El valor no es correcto ',
            'name.max'=>'solo se permite 50 caracteres ',

            'descripcion.string'=> 'El valor no es correcto ',
            'descripcion.max'=>'solo se permite 250 caracteres ',            
        ];
    }
}
