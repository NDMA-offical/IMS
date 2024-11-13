<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="section-name">{{ __('Section Name') }}</label>
            <input type="text" name="section_name" id="section-name" class="form-control @error('section_name') is-invalid @enderror" value="{{ isset($section) ? $section->section_name : old('section_name') }}" placeholder="{{ __('Section Name') }}" required />
            @error('section_name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="wing-id">{{ __('Wing') }}</label>
            <select class="form-select @error('wing_id') is-invalid @enderror" name="wing_id" id="wing-id" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select wing') }} --</option>
                
                        @foreach ($wings as $wing)
                            <option value="{{ $wing?->id }}" {{ isset($section) && $section?->wing_id == $wing?->id ? 'selected' : (old('wing_id') == $wing?->id ? 'selected' : '') }}>
                                {{ $wing?->wing_name }}
                            </option>
                        @endforeach
            </select>
            @error('wing_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="section-status">{{ __('Section Status') }}</label>
            <select class="form-select @error('section_status') is-invalid @enderror" name="section_status" id="section-status" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select section status') }} --</option>
                <option value="0" {{ isset($section) && $section?->section_status == '0' ? 'selected' : (old('section_status') == '0' ? 'selected' : '') }}>{{ __('Inactive') }}</option>
				<option value="1" {{ isset($section) && $section?->section_status == '1' ? 'selected' : (old('section_status') == '1' ? 'selected' : '') }}>{{ __('Active') }}</option>
            </select>
            @error('section_status')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>