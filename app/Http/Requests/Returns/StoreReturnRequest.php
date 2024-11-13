<?php

namespace App\Http\Requests\Returns;

use Illuminate\Foundation\Http\FormRequest;

class StoreReturnRequest extends FormRequest
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
			'returned_by' => 'required|numeric',
			'received_by' => 'required|numeric',
			'condition_id' => 'required|exists:App\Models\Condition,id',
			'quantity_returned' => 'required|string',
        ];
    }
}
