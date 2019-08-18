<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:50',
            'body' => 'required',
            'categories' => 'array|nullable',
            'categories.*' => 'exists:categories,id'
        ];
    }
}
