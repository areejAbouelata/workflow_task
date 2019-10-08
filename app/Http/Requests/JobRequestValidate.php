<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequestValidate extends FormRequest
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
            'specialization' => 'required|string' ,
            'address' => 'required|string' ,
            'start' => 'required|date' ,
            'experience_years' => 'required|numeric' ,
            'desired_salary' => 'required|numeric' ,
            'qualifications' => 'required|string' ,
            'note' => 'nullable|string' ,
            
        ];
    }
}
