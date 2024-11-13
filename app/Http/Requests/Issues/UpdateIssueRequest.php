<?php

namespace App\Http\Requests\Issues;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIssueRequest extends FormRequest
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
            'item_id' => 'required|exists:App\Models\Item,id',
			'issue_to' => 'required|string|min:1|max:25',
			'issue_by' => 'required|string|min:1|max:25',
			'issue_date' => 'required|date',
			'voucher_no' => 'required|string|min:1|max:25',
            'quantity_issued' => 'required|int|min:1|max:25',
			'remarks' => 'nullable|string|min:1|max:25',
          

			// 'issue_status' => 'required|in:one,two',
        ];
    }
}
