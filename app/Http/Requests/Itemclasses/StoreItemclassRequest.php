<?php

namespace App\Http\Requests\Itemclasses;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemclassRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'class_name' => 'required|string|min:1|max:25',
			'class_status' => 'required|boolean',
        ];
    }
}
