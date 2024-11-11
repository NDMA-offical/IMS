<?php

namespace App\Http\Requests\Designations;

use Illuminate\Foundation\Http\FormRequest;

class StoreDesignationRequest extends FormRequest
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
            'designation_name' => 'required|string|min:1|max:25',
			'designation_name_short' => 'required|string|min:1|max:25',
			'designation_status' => 'required|boolean',
        ];
    }
}
