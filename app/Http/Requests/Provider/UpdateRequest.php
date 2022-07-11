<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'required|string|max:255',
            'email'=>'required|email|string|max:200|unique:proveedor.email,'. $this->route('proveedor')->id.'|max:255',
            'ruc_number'=>'required|string|min:11|unique:proveedor.ruc_number,'. $this->route('proveedor')->id.'|max:11',
            'address'=>'nullable|string|max:255',
            'phone'=>'required|string|min:6|unique:proveedor.phone,'. $this->route('proveedor')->id.'|max:12',
        ];
    }
    public function messages()
    {
        return [

            'name.required'=>'Este campo es requerido ',
            'name.string'=> 'El valor no es correcto ',
            'name.max'=>'solo se permite 255 caracteres ',

            'email.required'=>'Este campo es requerido ',
            'email.email'=>'No es un correo electronico ',
            'email.string'=>'El valor no es correcto ',
            'email.max'=>'solo se permite 255 caracteres ',
            'email.unique'=>'Ya se encuentra registrado ',

            'ruc_number.required'=>'Este campo es requerido ',            
            'ruc_number.string'=> 'El valor no es correcto ',
            'ruc_number.max'=>'solo se permite 11 caracteres ',
            'ruc_number.min'=>'No es un mayor a 11 caracteres ',
            'ruc_number.unique'=>'Ya se encuentra registrado ',

            'address.string'=> 'El valor no es correcto ',
            'address.max'=>'solo se permite 255 caracteres ',

            'phone.required'=>'Este campo es requerido ',
            'phone.string'=>'El valor no es correcto ',
            'phone.max'=>'solo se permite 12 caracteres ',
            'phone.min'=>'introduzca al menos 6 caracteres ',
            'phone.unique'=>'Ya se encuentra registrado ',

        ];
    }
}
