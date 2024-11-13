<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="item-code">{{ __('Item Code') }}</label>
            <input type="text" name="item_code" id="item-code" class="form-control @error('item_code') is-invalid @enderror" value="{{ isset($item) ? $item->item_code : old('item_code') }}" placeholder="{{ __('Item Code') }}" required />
            @error('item_code')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="item-name">{{ __('Item Name') }}</label>
            <input type="text" name="item_name" id="item-name" class="form-control @error('item_name') is-invalid @enderror" value="{{ isset($item) ? $item->item_name : old('item_name') }}" placeholder="{{ __('Item Name') }}" required />
            @error('item_name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="item-model-no">{{ __('Item Model No') }}</label>
            <input type="text" name="item_model_no" id="item-model-no" class="form-control @error('item_model_no') is-invalid @enderror" value="{{ isset($item) ? $item->item_model_no : old('item_model_no') }}" placeholder="{{ __('Item Model No') }}" required />
            @error('item_model_no')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="item-desp">{{ __('Item Description') }}</label>
            <input type="text" name="item_desp" id="item-desp" class="form-control @error('item_desp') is-invalid @enderror" value="{{ isset($item) ? $item->item_desp : old('item_desp') }}" placeholder="{{ __('Item Description') }}" required />
            @error('item_desp')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="received-date">{{ __('GRN Date') }}</label>
            <input type="date" name="received_date" id="received-date" class="form-control @error('received_date') is-invalid @enderror" value="{{ isset($item) && $item?->received_date ? $item?->received_date?->format('Y-m-d') : old('received_date') }}" placeholder="{{ __('Issue Date') }}" required />
            @error('received_date')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="grn-id">{{ __('GRN ID') }}</label>
            <input type="text" name="grn_id" id="grn_id" class="form-control @error('grn_id') is-invalid @enderror" value="{{ isset($item) ? $item->grn_id : old('grn_id') }}" placeholder="{{ __('GRN ID') }}" required />
            @error('grn_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="quantity">{{ __('Quantity') }}</label>
            <input type="text" name="quantity" id="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ isset($item) ? $item->quantity : old('quantity') }}" placeholder="{{ __('Quantity') }}" required />
            @error('quantity')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="brand-id">{{ __('Brand') }}</label>
            <select class="form-select form-control @error('brand_id') is-invalid @enderror" name="brand_id" id="brand-id" data-live-search="true"  required>
                <option value="" selected disabled>-- {{ __('Select brand') }} --</option>
                
                        @foreach ($brands as $brand)
                            <option value="{{ $brand?->id }}" {{ isset($item) && $item?->brand_id == $brand?->id ? 'selected' : (old('brand_id') == $brand?->id ? 'selected' : '') }}>
                                {{ $brand?->brand_name }}
                            </option>
                        @endforeach
            </select>
            @error('brand_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="category-id">{{ __('Category') }}</label>
            <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" id="category-id" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select category') }} --</option>
                
                        @foreach ($categories as $category)
                            <option value="{{ $category?->id }}" {{ isset($item) && $item?->category_id == $category?->id ? 'selected' : (old('category_id') == $category?->id ? 'selected' : '') }}>
                                {{ $category?->category_name }}
                            </option>
                        @endforeach
            </select>
            @error('category_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="project-id">{{ __('Project') }}</label>
            <select class="form-select @error('project_id') is-invalid @enderror" name="project_id" id="project-id" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select project') }} --</option>
                
                        @foreach ($projects as $project)
                            <option value="{{ $project?->id }}" {{ isset($item) && $item?->project_id == $project?->id ? 'selected' : (old('project_id') == $project?->id ? 'selected' : '') }}>
                                {{ $project?->project_name }}
                            </option>
                        @endforeach
            </select>
            @error('project_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="fundingsource-id">{{ __('Fundingsource') }}</label>
            <select class="form-select @error('fundingsource_id') is-invalid @enderror" name="fundingsource_id" id="fundingsource-id" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select fundingsource') }} --</option>
                
                        @foreach ($fundingsources as $fundingsource)
                            <option value="{{ $fundingsource?->id }}" {{ isset($item) && $item?->fundingsource_id == $fundingsource?->id ? 'selected' : (old('fundingsource_id') == $fundingsource?->id ? 'selected' : '') }}>
                                {{ $fundingsource?->source_name }}
                            </option>
                        @endforeach
            </select>
            @error('fundingsource_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="itemclass-id">{{ __('Class') }}</label>
            <select class="form-select @error('itemclass_id') is-invalid @enderror" name="itemclass_id" id="fundingsource-id" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select Class') }} --</option>
                
                        @foreach ($itemclasses as $itemclass)
                            <option value="{{ $itemclass?->id }}" {{ isset($item) && $item?->itemclass_id == $itemclass?->id ? 'selected' : (old('itemclass_id') == $itemclass?->id ? 'selected' : '') }}>
                                {{ $itemclass?->class_name }}
                            </option>
                        @endforeach
            </select>
            @error('itemclass_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="type-id">{{ __('Type') }}</label>
            <select class="form-select @error('type_id') is-invalid @enderror" name="type_id" id="type-id" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select Item Type') }} --</option>
                
                        @foreach ($itemtypes as $itemtype)
                            <option value="{{ $itemtype?->id }}" {{ isset($item) && $item?->type_id == $itemtype?->id ? 'selected' : (old('type_id') == $itemtype?->id ? 'selected' : '') }}>
                                {{ $itemtype?->type_name }}
                            </option>
                        @endforeach
            </select>
            @error('type_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="vendor-id">{{ __('Vendor') }}</label>
            <select class="form-select @error('vendor_id') is-invalid @enderror" name="vendor_id" id="vendor-id" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select Vendor') }} --</option>
                
                        @foreach ($vendors as $vendor)
                            <option value="{{ $vendor?->id }}" {{ isset($item) && $item?->vendor_id == $vendor?->id ? 'selected' : (old('vendor_id') == $vendor?->id ? 'selected' : '') }}>
                                {{ $vendor?->vendor_name }}
                            </option>
                        @endforeach
            </select>
            @error('vendor_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="condition-id">{{ __('Condition') }}</label>
            <select class="form-select @error('condition_id') is-invalid @enderror" name="condition_id" id="condition-id" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select Condition') }} --</option>
                
                        @foreach ($conditions as $condition)
                            <option value="{{ $condition?->id }}" {{ isset($item) && $item?->condition_id == $condition?->id ? 'selected' : (old('condition_id') == $condition?->id ? 'selected' : '') }}>
                                {{ $condition?->condition_name }}
                            </option>
                        @endforeach
            </select>
            @error('condition_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="warranty-start">{{ __('Warranty Start') }}</label>
            <input type="date" name="warranty_start" id="warranty_start" class="form-control @error('warranty_start') is-invalid @enderror" value="{{ isset($item) ? $item->warranty_start : old('warranty_start') }}" placeholder="{{ __('Warrenty Start') }}" />
            @error('warranty_start')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="warranty-start">{{ __('Warranty End') }}</label>
            <input type="date" name="warranty_end" id="warranty_end" class="form-control @error('warranty_end') is-invalid @enderror" value="{{ isset($item) ? $item->warranty_end : old('warranty_end') }}" placeholder="{{ __('Warrenty End') }}" />
            @error('warranty_start')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="terms">{{ __('Warranty Terms') }}</label>
            <input type="text" name="warranty_terms" id="warranty_terms" class="form-control @error('warranty_terms') is-invalid @enderror" value="{{ isset($item) ? $item->warranty_terms : old('warranty_terms') }}" placeholder="{{ __('warranty terms') }}" />
            @error('warranty_terms')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>