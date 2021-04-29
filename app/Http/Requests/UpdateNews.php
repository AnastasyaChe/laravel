<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNews extends FormRequest
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
            'category_id' => ['requested', 'numeric'],
            'title' =>  ['requested', 'string', 'min:2'],
            'text' =>  ['sometimes'],
            'image' => ['sometimes', 'image:jpg,jpeg,png']
        ];
    }
}
