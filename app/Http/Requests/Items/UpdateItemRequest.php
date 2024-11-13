<?php

namespace App\Http\Requests\Items;

use Illuminate\Foundation\Http\FormRequest;

class UpdateItemRequest extends FormRequest
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
            'item_code' => 'required|string|min:1|max:25',
			'item_name' => 'required|string|min:1|max:25',
			'item_model_no' => 'required|string|min:1|max:25',
			'item_desp' => 'required|string|min:1|max:250',
			'brand_id' => 'required|exists:App\Models\Brand,id',
			'category_id' => 'required|exists:App\Models\Category,id',
			'project_id' => 'required|exists:App\Models\Project,id',
			'fundingsource_id' => 'required|exists:App\Models\Fundingsource,id',
			'itemclass_id' => 'required|exists:App\Models\Itemclass,id',
            'vendor_id' => 'required|exists:App\Models\Vendor,id',
            'type_id' => 'required|exists:App\Models\Itemtype,id',
			'item_status' => 'required|string|min:1|max:25',
            'received_date' => 'required|date',
            'grn_id' => 'required|string',
            'quantity' => 'required|string',
            'condition_id' => 'required|string',
            'warranty_start' => 'nullable|date',
            'warranty_end' => 'nullable|date',
            'warranty_terms' => 'nullable|string',
        ];
    }
}
