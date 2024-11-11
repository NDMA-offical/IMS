<?php

namespace App\Http\Requests\Brands;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
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
            'brand_name' => 'required|string|min:1|max:25',
			'brand_desp' => 'nullable|string|min:1|max:250',
			'brand_status' => 'required|boolean',
        ];
    }
}
