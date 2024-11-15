<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="item-id">{{ __('Item') }}</label>
            <select class="form-select @error('item_id') is-invalid @enderror" name="item_id" id="item_id" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select Item') }} --</option>
                
                        @foreach ($items as $item)
                            <option value="{{ $item?->id }}" {{ isset($repair) && $repair?->item_id == $item?->id ? 'selected' : (old('item_id') == $item?->id ? 'selected' : '') }}>
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
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="request-by">{{ __('Request By') }}</label>
            <select class="form-select @error('request_by') is-invalid @enderror" name="request_by" id="request_by" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select Employee') }} --</option>
                
                        @foreach ($employees as $employee)
                            <option value="{{ $employee?->id }}" {{ isset($repair) && $repair?->request_by == $employee?->id ? 'selected' : (old('request_by') == $employee?->id ? 'selected' : '') }}>
                                {{ $employee?->employee_name }}
                            </option>
                        @endforeach
            </select>
            @error('request_by')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="request-date">{{ __('Request Date') }}</label>
            <input type="date" name="repair_init_date" id="repair_init_date" class="form-control @error('request_date') is-invalid @enderror" value="{{ isset($repair) && $repair?->request_date ? $repair?->request_date?->format('Y-m-d') : old('request_date') }}" placeholder="{{ __('Request Date') }}" required />
            @error('request_date')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="repair-date">{{ __('Repair Date') }}</label>
            <input type="date" name="expected_return_date" id="expected_return_date" class="form-control @error('repair_date') is-invalid @enderror" value="{{ isset($repair) && $repair?->repair_date ? $repair?->repair_date?->format('Y-m-d') : old('repair_date') }}" placeholder="{{ __('Repair Date') }}" required />
            @error('repair_date')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="request-sheet-id">{{ __('Request Sheet Id') }}</label>
            <input type="text" name="request_sheet_id" id="request-sheet-id" class="form-control @error('request_sheet_id') is-invalid @enderror" value="{{ isset($repair) ? $repair->request_sheet_id : old('request_sheet_id') }}" placeholder="{{ __('Request Sheet Id') }}" required />
            @error('request_sheet_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="repair-cost">{{ __('Repair Cost') }}</label>
            <input type="text" name="repair_cost" id="repair-cost" class="form-control @error('repair_cost') is-invalid @enderror" value="{{ isset($repair) ? $repair->repair_cost : old('repair_cost') }}" placeholder="{{ __('Repair Cost') }}" required />
            @error('repair_cost')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="vendor-id">{{ __('Vendor') }}</label>
            <select class="form-select @error('vendor_id') is-invalid @enderror" name="vendor_id" id="vendor_id" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select Employee') }} --</option>
                
                        @foreach ($vendors as $vendor)
                            <option value="{{ $vendor?->id }}" {{ isset($repair) && $repair?->vendor_id == $vendor?->id ? 'selected' : (old('vendor_id') == $vendor?->id ? 'selected' : '') }}>
                                {{ $vendor?->vendor_name }}
                            </option>
                        @endforeach
            </select>
            @error('request_by')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="repair-status">{{ __('Repair Status') }}</label>
            <select class="form-select @error('repair_status') is-invalid @enderror" name="repair_status" id="repair_status" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select repair status') }} --</option>
                <option value="In Progress" {{ isset($repair) && $repair->repair_status == 'In Progress' ? 'selected' : (old('repair_status') == 'In Progress' ? 'selected' : '') }}>In Progress</option>
		        <option value="Completed" {{ isset($repair) && $repair->repair_status == 'Completed' ? 'selected' : (old('repair_status') == 'Completed' ? 'selected' : '') }}>Completed</option>			
                <option value="Awaiting Parts" {{ isset($repair) && $repair->repair_status == 'Awaiting Parts' ? 'selected' : (old('repair_status') == 'Awaiting Parts' ? 'selected' : '') }}>Awaiting Parts</option>
            </select>
            @error('repair_status')
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
                            <option value="{{ $fundingsource?->id }}" {{ isset($repair) && $repair?->fundingsource_id == $fundingsource?->id ? 'selected' : (old('fundingsource_id') == $fundingsource?->id ? 'selected' : '') }}>
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
</div>