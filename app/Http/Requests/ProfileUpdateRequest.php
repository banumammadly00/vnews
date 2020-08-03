<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'mobile' =>  "min:10|max:55",
            'about'  =>  "max:255",
            'email'  =>  "min:5|max:100",
            'image'  =>  "max:1024|mimes:jpeg,png,jpg,svg"
        ];
    }

    public  function  messages()
    {
        return [
          //  'mobile.min'  =>  'Num'
        ];
    }

    
}
