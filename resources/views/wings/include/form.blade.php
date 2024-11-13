<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="wing-name">{{ __('Wing Name') }}</label>
            <input type="text" name="wing_name" id="wing-name" class="form-control @error('wing_name') is-invalid @enderror" value="{{ isset($wing) ? $wing->wing_name : old('wing_name') }}" placeholder="{{ __('Wing Name') }}" required />
            @error('wing_name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <!-- <div class="col-md-6">
        <div class="form-group">
            <label for="wing-short-name">{{ __('Wing Short Name') }}</label>
            <input type="text" name="wing_short_name" id="wing-short-name" class="form-control @error('wing_short_name') is-invalid @enderror" value="{{ isset($wing) ? $wing->wing_short_name : old('wing_short_name') }}" placeholder="{{ __('Wing Short Name') }}" required />
            @error('wing_short_name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div> -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="wing-desp">{{ __('Wing Description') }}</label>
            <input type="text" name="wing_desp" id="wing-desp" class="form-control @error('wing_desp') is-invalid @enderror" value="{{ isset($wing) ? $wing->wing_desp : old('wing_desp') }}" placeholder="{{ __('Wing Description') }}" />
            @error('wing_desp')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="wing-status">{{ __('Wing Status') }}</label>
            <select class="form-select @error('wing_status') is-invalid @enderror" name="wing_status" id="wing-status" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select wing status') }} --</option>
                <option value="0" {{ isset($wing) && $wing?->wing_status == '0' ? 'selected' : (old('wing_status') == '0' ? 'selected' : '') }}>{{ __('Inactive') }}</option>
				<option value="1" {{ isset($wing) && $wing?->wing_status == '1' ? 'selected' : (old('wing_status') == '1' ? 'selected' : '') }}>{{ __('Active') }}</option>
            </select>
            @error('wing_status')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>