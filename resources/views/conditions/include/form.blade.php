<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="condition-name">{{ __('Condition Name') }}</label>
            <input type="text" name="condition_name" id="condition-name" class="form-control @error('condition_name') is-invalid @enderror" value="{{ isset($condition) ? $condition->condition_name : old('condition_name') }}" placeholder="{{ __('Condition Name') }}" required />
            @error('condition_name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="condition-status">{{ __('Condition Status') }}</label>
            <select class="form-select @error('condition_status') is-invalid @enderror" name="condition_status" id="condition-status" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select condition status') }} --</option>
                <option value="0" {{ isset($condition) && $condition?->condition_status == '0' ? 'selected' : (old('condition_status') == '0' ? 'selected' : '') }}>{{ __('True') }}</option>
				<option value="1" {{ isset($condition) && $condition?->condition_status == '1' ? 'selected' : (old('condition_status') == '1' ? 'selected' : '') }}>{{ __('False') }}</option>
            </select>
            @error('condition_status')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>