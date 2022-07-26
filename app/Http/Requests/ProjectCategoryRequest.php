<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectCategoryRequest extends FormRequest
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

        $rules = [];

        $rules['status_id'] = 'required|numeric';
        $rules['title'] = 'required|array|min:3';
        $rules['title.*'] = 'required|string|min:3';

        return $rules;

    }
}
