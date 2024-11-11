<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="class-name">{{ __('Class Name') }}</label>
            <input type="text" name="class_name" id="class-name" class="form-control @error('class_name') is-invalid @enderror" value="{{ isset($itemclass) ? $itemclass->class_name : old('class_name') }}" placeholder="{{ __('Class Name') }}" required />
            @error('class_name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="class-status">{{ __('Class Status') }}</label>
            <select class="form-select @error('class_status') is-invalid @enderror" name="class_status" id="class-status" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select class status') }} --</option>
                <option value="0" {{ isset($itemclass) && $itemclass?->class_status == '0' ? 'selected' : (old('class_status') == '0' ? 'selected' : '') }}>{{ __('Inactive') }}</option>
				<option value="1" {{ isset($itemclass) && $itemclass?->class_status == '1' ? 'selected' : (old('class_status') == '1' ? 'selected' : '') }}>{{ __('Active') }}</option>
            </select>
            @error('class_status')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>