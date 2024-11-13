<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="brand-name">{{ __('Brand Name') }}</label>
            <input type="text" name="brand_name" id="brand-name" class="form-control @error('brand_name') is-invalid @enderror" value="{{ isset($brand) ? $brand->brand_name : old('brand_name') }}" placeholder="{{ __('Brand Name') }}" required />
            @error('brand_name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="brand-desp">{{ __('Brand Description') }}</label>
            <input type="text" name="brand_desp" id="brand-desp" class="form-control @error('brand_desp') is-invalid @enderror" value="{{ isset($brand) ? $brand->brand_desp : old('brand_desp') }}" placeholder="{{ __('Brand Description') }}" />
            @error('brand_desp')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="brand-status">{{ __('Brand Status') }}</label>
            <select class="form-select @error('brand_status') is-invalid @enderror" name="brand_status" id="brand-status" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select brand status') }} --</option>
                <option value="0" {{ isset($brand) && $brand?->brand_status == '0' ? 'selected' : (old('brand_status') == '0' ? 'selected' : '') }}>{{ __('Inactive') }}</option>
				<option value="1" {{ isset($brand) && $brand?->brand_status == '1' ? 'selected' : (old('brand_status') == '1' ? 'selected' : '') }}>{{ __('Active') }}</option>
            </select>
            @error('brand_status')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>