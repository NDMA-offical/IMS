<?php

namespace App\Http\Requests\ReturnRepairs;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReturnRepairRequest extends FormRequest
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
            'request_by' => 'required|string|min:1|max:25',
			'request_date' => 'required|date',
			'request_sheet_id' => 'required|string|min:1|max:25',
			'repair_cost' => 'required|string|min:1|max:25',
			'repair_date' => 'required|date',
			'repair_status' => 'required|in:opt1,opt2',
			'fundingsource_id' => 'required|exists:App\Models\Fundingsource,id',
        ];
    }
}
