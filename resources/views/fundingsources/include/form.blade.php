<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="source-name">{{ __('Source Name') }}</label>
            <input type="text" name="source_name" id="source-name" class="form-control @error('source_name') is-invalid @enderror" value="{{ isset($fundingsource) ? $fundingsource->source_name : old('source_name') }}" placeholder="{{ __('Source Name') }}" required />
            @error('source_name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="source-desp">{{ __('Source Description') }}</label>
            <input type="text" name="source_desp" id="source-desp" class="form-control @error('source_desp') is-invalid @enderror" value="{{ isset($fundingsource) ? $fundingsource->source_desp : old('source_desp') }}" placeholder="{{ __('Source Description') }}" />
            @error('source_desp')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="source-status">{{ __('Source Status') }}</label>
            <select class="form-select @error('source_status') is-invalid @enderror" name="source_status" id="source-status" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select source status') }} --</option>
                <option value="0" {{ isset($fundingsource) && $fundingsource?->source_status == '0' ? 'selected' : (old('source_status') == '0' ? 'selected' : '') }}>{{ __('Active') }}</option>
				<option value="1" {{ isset($fundingsource) && $fundingsource?->source_status == '1' ? 'selected' : (old('source_status') == '1' ? 'selected' : '') }}>{{ __('Inactive') }}</option>
            </select>
            @error('source_status')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>