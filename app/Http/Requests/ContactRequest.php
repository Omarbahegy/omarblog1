<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'      =>  'required|min:10|max:250',
            'email'     =>  'required|email|min:10|max:250',
            'phone'     =>  'required|numeric',
            'subject'   =>  'required|min:10|max:250',
            'message'   =>  'required|min:50|max:250',
        ];
    }
}
