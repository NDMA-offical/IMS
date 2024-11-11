<?php

namespace App\Http\Requests\Sections;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSectionRequest extends FormRequest
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
            'section_name' => 'required|string|min:1|max:25',
			'wing_id' => 'required|exists:App\Models\Wing,id',
			'section_status' => 'required|boolean',
        ];
    }
}
