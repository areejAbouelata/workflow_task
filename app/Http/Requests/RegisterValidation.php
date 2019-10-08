<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterValidation extends FormRequest
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
            'name' => 'required' ,
            'email' => 'required|email|unique:clients,email' ,
            'password' =>'required|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'your name is required'   ,
            'email.required' => 'email is required' ,
            'email.email' => 'it should be email' ,
            'email.unique' => 'email is unique' ,
            'password.required' => 'password is required',
            'password.confirmed' => 'password confirmation is required',

        ];
    }
}
