<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

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
            'name'=>'string|required|max:255',
            'ci'=>'string|required|unique:clients,ci,'.$this->route('client')->id.'|min:7|max:10',
            'phone'=>'string|required|unique:clients,phone,'.$this->route('client')->id.'|min:8|max:12',
            'email'=>'string|nullable|unique:clients,email,'.$this->route('client')->id.'|max:255|email:ric,dns',
            'address'=>'string|nullable|max:255',
        ];
    }
    public function messages(){
        return[
            'name.string'=>'El valor no es correcto.',
            'name.required'=>'El campo es requerido.',
            'name.max'=>'Solo se permite 255 caracteres.',

            'ci.string'=>'El valor no es correcto.',
            'ci.required'=>'El campo es requerido.',
            'ci.unique'=>'Este ci ya se encuentra registrado.',
            'ci.min'=>'Se requiere 7 caracteres como minimo',
            'ci.max'=>'Se requiere 10 caracteres como maximo',

            'phone.string'=>'El valor no es correcto.',
            'phone.required'=>'El campo es requerido.',
            'phone.unique'=>'Este numero ya se encuentra registrado.',
            'phone.min'=>'Se requiere 8 caracteres como minimo',
            'phone.max'=>'Se requiere 12 caracteres como maximo',

            'email.string'=>'El valor no es correcto.',
            'email.unique'=>'Este email ya se encuentra registrado.',
            'email.max'=>'Solo se permite 255 caracteres',
            'email.email'=>'No es un correo electronico',

            'address.string'=>'El valor no es correcto',
            'address.max'=>'Solo se permite 255 caracteres',           
            
        ];
    }
}
