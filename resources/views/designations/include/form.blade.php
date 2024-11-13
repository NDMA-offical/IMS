<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="designation-name">{{ __('Designation Name') }}</label>
            <input type="text" name="designation_name" id="designation-name" class="form-control @error('designation_name') is-invalid @enderror" value="{{ isset($designation) ? $designation->designation_name : old('designation_name') }}" placeholder="{{ __('Designation Name') }}" required />
            @error('designation_name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="designation-name-short">{{ __('Designation Name Short') }}</label>
            <input type="text" name="designation_name_short" id="designation-name-short" class="form-control @error('designation_name_short') is-invalid @enderror" value="{{ isset($designation) ? $designation->designation_name_short : old('designation_name_short') }}" placeholder="{{ __('Designation Name Short') }}" required />
            @error('designation_name_short')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="designation-status">{{ __('Designation Status') }}</label>
            <select class="form-select @error('designation_status') is-invalid @enderror" name="designation_status" id="designation-status" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select designation status') }} --</option>
                <option value="0" {{ isset($designation) && $designation?->designation_status == '0' ? 'selected' : (old('designation_status') == '0' ? 'selected' : '') }}>{{ __('Active') }}</option>
				<option value="1" {{ isset($designation) && $designation?->designation_status == '1' ? 'selected' : (old('designation_status') == '1' ? 'selected' : '') }}>{{ __('Inactive') }}</option>
            </select>
            @error('designation_status')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>