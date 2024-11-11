<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="category-name">{{ __('Category Name') }}</label>
            <input type="text" name="category_name" id="category-name" class="form-control @error('category_name') is-invalid @enderror" value="{{ isset($category) ? $category->category_name : old('category_name') }}" placeholder="{{ __('Category Name') }}" required />
            @error('category_name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="category-desp">{{ __('Category Desp') }}</label>
            <input type="text" name="category_desp" id="category-desp" class="form-control @error('category_desp') is-invalid @enderror" value="{{ isset($category) ? $category->category_desp : old('category_desp') }}" placeholder="{{ __('Category Desp') }}" />
            @error('category_desp')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="category-status">{{ __('Category Status') }}</label>
            <select class="form-select @error('category_status') is-invalid @enderror" name="category_status" id="category-status" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select category status') }} --</option>
                <option value="0" {{ isset($category) && $category?->category_status == '0' ? 'selected' : (old('category_status') == '0' ? 'selected' : '') }}>{{ __('Inactive') }}</option>
				<option value="1" {{ isset($category) && $category?->category_status == '1' ? 'selected' : (old('category_status') == '1' ? 'selected' : '') }}>{{ __('Active') }}</option>
            </select>
            @error('category_status')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>