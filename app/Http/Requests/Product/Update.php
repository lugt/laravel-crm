<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest 
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
			'pname' => 'required|max:15',
			'qoh' => 'required|numeric',
			'qoh_threshold' => 'nullable|numeric',
			'original_price' => 'nullable|numeric',
			'discnt_rate' => 'nullable|numeric',
			'sid' => 'nullable|exists:suppliers,sid|max:2',
        ];
    }

    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
     
        ];
    }

}
