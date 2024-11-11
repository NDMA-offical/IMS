<?php

namespace App\Http\Requests\Itemtypes;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemtypeRequest extends FormRequest
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
            'type_name' => 'required|string|min:1|max:50',
			'type_desp' => 'required|string|min:1|max:250',
			'type_status' => 'required|boolean',
        ];
    }
}
