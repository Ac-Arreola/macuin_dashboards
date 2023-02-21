<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorUsuarios extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'txtNombre'=> 'required', 
            'txtApe_pat'=>'required',
            'txtApe_mat'=> 'required', 
            'txtUsername'=> 'required',
            'txtEmail'=> 'required',
            'txtPassword'=> 'required',
            'txtConPassword'=>'required|same:txtPassword',
            'txtDepartamento'=> 'required',
            'txtRol'=> 'required', 
        ];
    }
}
