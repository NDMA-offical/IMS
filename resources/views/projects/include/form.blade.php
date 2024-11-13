<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="project-name">{{ __('Project Name') }}</label>
            <input type="text" name="project_name" id="project-name" class="form-control @error('project_name') is-invalid @enderror" value="{{ isset($project) ? $project->project_name : old('project_name') }}" placeholder="{{ __('Project Name') }}" required />
            @error('project_name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="project-desp">{{ __('Project Description') }}</label>
            <input type="text" name="project_desp" id="project-desp" class="form-control @error('project_desp') is-invalid @enderror" value="{{ isset($project) ? $project->project_desp : old('project_desp') }}" placeholder="{{ __('Project Description') }}"/>
            @error('project_desp')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="project-status">{{ __('Project Status') }}</label>
            <select class="form-select @error('project_status') is-invalid @enderror" name="project_status" id="project-status" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select project status') }} --</option>
                <option value="0" {{ isset($project) && $project?->project_status == '0' ? 'selected' : (old('project_status') == '0' ? 'selected' : '') }}>{{ __('Inactive') }}</option>
				<option value="1" {{ isset($project) && $project?->project_status == '1' ? 'selected' : (old('project_status') == '1' ? 'selected' : '') }}>{{ __('Active') }}</option>
            </select>
            @error('project_status')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>