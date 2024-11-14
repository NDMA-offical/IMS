<div class="row mb-2">
<div class="col-md-6">
    <div class="form-group">
        <label for="item-id">{{ __('Item') }}</label>
        <select class="form-select @error('item_id') is-invalid @enderror" name="item_id" id="item-id" class="form-control" required>
            <option value="" selected disabled>-- {{ __('Select item') }} --</option>
            
            @foreach ($items as $item)
                <option value="{{ $item?->id }}" {{ isset($itemreturn) && $itemreturn?->item_id == $item?->id ? 'selected' : (old('item_id') == $item?->id ? 'selected' : '') }}>
                    {{ $item?->item_code }}
                </option>
            @endforeach
        </select>
        @error('item_id')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>

    <!-- Placeholders for showing issue details -->
    
</div>

<div id="issue-details" style="display: none;">
        <p><strong>Issue To:</strong> <span id="issue-to"></span></p>
        <input type="hidden" name="returned_by" id="returned-by"  value=""   />
        <p><strong>Issue Date:</strong> <span id="issue-date"></span></p>
    </div>


  
    
    

    <div class="col-md-6">
        <div class="form-group">
            <label for="item-id">{{ __('Received By') }}</label>
            <select class="form-select @error('employee_id') is-invalid @enderror" name="received_by" id="received_by" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select Employee') }} --</option>
                
                        @foreach ($employees as $employee)
                            <option value="{{ $employee?->id }}" {{ isset($itemreturn) && $itemreturn?->employee_id == $employee?->id ? 'selected' : (old('employee_id') == $employee?->id ? 'selected' : '') }}>
                                {{ $employee?->employee_name }}
                            </option>
                        @endforeach
            </select>
            @error('employee_id')
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
                <option value="" selected disabled>-- {{ __('Select condition') }} --</option>
                
                        @foreach ($conditions as $condition)
                            <option value="{{ $condition?->id }}" {{ isset($itemreturn) && $itemreturn?->condition_id == $condition?->id ? 'selected' : (old('condition_id') == $condition?->id ? 'selected' : '') }}>
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
            <label for="quantity-returned">{{ __('Quantity Returned') }}</label>
            <input type="number" name="quantity_returned" id="quantity-returned" class="form-control @error('quantity_returned') is-invalid @enderror" value="{{ isset($itemreturn) ? $itemreturn->quantity_returned : old('quantity_returned') }}" placeholder="{{ __('Quantity Returned') }}" required />
            @error('quantity_returned')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>





