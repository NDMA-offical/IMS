<?php

namespace App\Http\Requests\Wings;

use Illuminate\Foundation\Http\FormRequest;

class StoreWingRequest extends FormRequest
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
            'wing_name' => 'required|string|min:1|max:25',
			// 'wing_short_name' => 'required|string|min:1|max:25',
			'wing_desp' => 'nullable|string|min:1|max:250',
			'wing_status' => 'required|boolean',
        ];
    }
}
