<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="request-by">{{ __('Request By') }}</label>
            <input type="text" name="request_by" id="request-by" class="form-control @error('request_by') is-invalid @enderror" value="{{ isset($repair) ? $repair->request_by : old('request_by') }}" placeholder="{{ __('Request By') }}" required />
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
            <input type="date" name="request_date" id="request-date" class="form-control @error('request_date') is-invalid @enderror" value="{{ isset($repair) && $repair?->request_date ? $repair?->request_date?->format('Y-m-d') : old('request_date') }}" placeholder="{{ __('Request Date') }}" required />
            @error('request_date')
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
            <label for="repair-date">{{ __('Repair Date') }}</label>
            <input type="date" name="repair_date" id="repair-date" class="form-control @error('repair_date') is-invalid @enderror" value="{{ isset($repair) && $repair?->repair_date ? $repair?->repair_date?->format('Y-m-d') : old('repair_date') }}" placeholder="{{ __('Repair Date') }}" required />
            @error('repair_date')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="repair-status">{{ __('Repair Status') }}</label>
            <select class="form-select @error('repair_status') is-invalid @enderror" name="repair_status" id="repair-status" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select repair status') }} --</option>
                <option value="opt1" {{ isset($repair) && $repair->repair_status == 'opt1' ? 'selected' : (old('repair_status') == 'opt1' ? 'selected' : '') }}>opt1</option>
		<option value="opt2" {{ isset($repair) && $repair->repair_status == 'opt2' ? 'selected' : (old('repair_status') == 'opt2' ? 'selected' : '') }}>opt2</option>			
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