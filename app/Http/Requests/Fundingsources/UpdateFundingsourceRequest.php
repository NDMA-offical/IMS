<?php

namespace App\Http\Requests\Fundingsources;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFundingsourceRequest extends FormRequest
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
            'source_name' => 'required|string|min:1|max:25',
			'source_desp' => 'nullable|string|min:1|max:250',
			'source_status' => 'required|boolean',
        ];
    }
}
