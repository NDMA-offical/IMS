<?php

namespace App\Http\Requests\Employees;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'employee_name' => 'required|string|min:1|max:25',
			'employee_cnic' => 'required|string|min:1|max:25',
			'employee_email' => 'required|string|min:1|max:40',
			'employee_contact' => 'required|string|min:1|max:40',
			'wing_id' => 'required|exists:App\Models\Wing,id',
			'designation_id' => 'required|exists:App\Models\Designation,id',
			'user_status' => 'required|in:Active,Inactive',
        ];
    }
}
