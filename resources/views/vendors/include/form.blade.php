<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="vendor-name">{{ __('Vendor Name') }}</label>
            <input type="text" name="vendor_name" id="vendor-name" class="form-control @error('vendor_name') is-invalid @enderror" value="{{ isset($vendor) ? $vendor->vendor_name : old('vendor_name') }}" placeholder="{{ __('Vendor Name') }}" required />
            @error('vendor_name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="vendor-desp">{{ __('Vendor Description') }}</label>
            <input type="text" name="vendor_desp" id="vendor-desp" class="form-control @error('vendor_desp') is-invalid @enderror" value="{{ isset($vendor) ? $vendor->vendor_desp : old('vendor_desp') }}" placeholder="{{ __('Vendor Description') }}"  />
            @error('vendor_desp')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="vendor-status">{{ __('Vendor Status') }}</label>
            <select class="form-select @error('vendor_status') is-invalid @enderror" name="vendor_status" id="vendor-status" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select vendor status') }} --</option>
                <option value="0" {{ isset($vendor) && $vendor?->vendor_status == '0' ? 'selected' : (old('vendor_status') == '0' ? 'selected' : '') }}>{{ __('Active') }}</option>
				<option value="1" {{ isset($vendor) && $vendor?->vendor_status == '1' ? 'selected' : (old('vendor_status') == '1' ? 'selected' : '') }}>{{ __('Inactive') }}</option>
            </select>
            @error('vendor_status')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>