<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="type-name">{{ __('Type Name') }}</label>
            <input type="text" name="type_name" id="type-name" class="form-control @error('type_name') is-invalid @enderror" value="{{ isset($itemtype) ? $itemtype->type_name : old('type_name') }}" placeholder="{{ __('Type Name') }}" required />
            @error('type_name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="type-desp">{{ __('Type Desp') }}</label>
            <input type="text" name="type_desp" id="type-desp" class="form-control @error('type_desp') is-invalid @enderror" value="{{ isset($itemtype) ? $itemtype->type_desp : old('type_desp') }}" placeholder="{{ __('Type Desp') }}" required />
            @error('type_desp')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="type-status">{{ __('Type Status') }}</label>
            <select class="form-select @error('type_status') is-invalid @enderror" name="type_status" id="type-status" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select type status') }} --</option>
                <option value="0" {{ isset($itemtype) && $itemtype?->type_status == '0' ? 'selected' : (old('type_status') == '0' ? 'selected' : '') }}>{{ __('True') }}</option>
				<option value="1" {{ isset($itemtype) && $itemtype?->type_status == '1' ? 'selected' : (old('type_status') == '1' ? 'selected' : '') }}>{{ __('False') }}</option>
            </select>
            @error('type_status')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>