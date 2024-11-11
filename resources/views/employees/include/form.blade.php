<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="employee-name">{{ __('Employee Name') }}</label>
            <input type="text" name="employee_name" id="employee-name" class="form-control @error('employee_name') is-invalid @enderror" value="{{ isset($employee) ? $employee->employee_name : old('employee_name') }}" placeholder="{{ __('Employee Name') }}" required />
            @error('employee_name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="employee-cnic">{{ __('Employee Cnic') }}</label>
            <input type="text" name="employee_cnic" id="employee-cnic" class="form-control @error('employee_cnic') is-invalid @enderror" value="{{ isset($employee) ? $employee->employee_cnic : old('employee_cnic') }}" placeholder="{{ __('Employee Cnic') }}" required />
            @error('employee_cnic')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="employee-email">{{ __('Employee Email') }}</label>
            <input type="text" name="employee_email" id="employee-email" class="form-control @error('employee_email') is-invalid @enderror" value="{{ isset($employee) ? $employee->employee_email : old('employee_email') }}" placeholder="{{ __('Employee Email') }}" required />
            @error('employee_email')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="employee-contact">{{ __('Employee Contact') }}</label>
            <input type="text" name="employee_contact" id="employee-contact" class="form-control @error('employee_contact') is-invalid @enderror" value="{{ isset($employee) ? $employee->employee_contact : old('employee_contact') }}" placeholder="{{ __('Employee Contact') }}" required />
            @error('employee_contact')
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
                            <option value="{{ $wing?->id }}" {{ isset($employee) && $employee?->wing_id == $wing?->id ? 'selected' : (old('wing_id') == $wing?->id ? 'selected' : '') }}>
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
            <label for="wing-id">{{ __('Section') }}</label>
            <select class="form-select @error('section_id') is-invalid @enderror" name="section_id" id="section_id" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select wing') }} --</option>
                
                        @foreach ($sections as $section)
                            <option value="{{ $section?->id }}" {{ isset($employee) && $employee?->section_id == $section?->id ? 'selected' : (old('section_id') == $section?->id ? 'selected' : '') }}>
                                {{ $section?->section_name }}
                            </option>
                        @endforeach
            </select>
            @error('section_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="designation-id">{{ __('Designation') }}</label>
            <select class="form-select @error('designation_id') is-invalid @enderror" name="designation_id" id="designation-id" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select designation') }} --</option>
                
                        @foreach ($designations as $designation)
                            <option value="{{ $designation?->id }}" {{ isset($employee) && $employee?->designation_id == $designation?->id ? 'selected' : (old('designation_id') == $designation?->id ? 'selected' : '') }}>
                                {{ $designation?->designation_name }}
                            </option>
                        @endforeach
            </select>
            @error('designation_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="user-status">{{ __('User Status') }}</label>
            <select class="form-select @error('user_status') is-invalid @enderror" name="user_status" id="user-status" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select user status') }} --</option>
                <option value="Active" {{ isset($employee) && $employee->user_status == 'Active' ? 'selected' : (old('user_status') == 'Active' ? 'selected' : '') }}>Active</option>
		<option value="Inactive" {{ isset($employee) && $employee->user_status == 'Inactive' ? 'selected' : (old('user_status') == 'Inactive' ? 'selected' : '') }}>Inactive</option>			
            </select>
            @error('user_status')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>