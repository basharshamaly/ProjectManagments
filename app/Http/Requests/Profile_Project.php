<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Profile_Project extends FormRequest
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
            'code' => 'required',
            'title_en' => 'string|min:3',
            'methodology' => 'string|min:3',

        ];
    }
}
