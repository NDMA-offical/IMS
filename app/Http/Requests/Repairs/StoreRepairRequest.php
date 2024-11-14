<?php

namespace App\Http\Requests\Repairs;

use Illuminate\Foundation\Http\FormRequest;

class StoreRepairRequest extends FormRequest
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
			'repair_init_date' => 'required|date',
			'request_sheet_id' => 'required|string|min:1|max:25',
			'repair_cost' => 'required|string|min:1|max:25',
			'expected_return_date' => 'required|date',
			'repair_status' => 'required',
			'fundingsource_id' => 'required|exists:App\Models\Fundingsource,id',
			'vendor_id' => 'required|exists:App\Models\Vendor,id',
        ];
    }
}
