<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Profile_Task extends FormRequest
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
            'title_en' => 'string',
            'description' => 'min:3',
            'worker' => 'string|min:3',
            'order' => 'numeric',
            'hours' => 'numeric',
            'project_id' => 'required',

        ];
    }
}
