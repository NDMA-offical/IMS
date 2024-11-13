<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="item-id">{{ __('Item') }}</label>
            <select class="form-select @error('item_id') is-invalid @enderror" name="item_id" id="item-id" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select item') }} --</option>
                
                        @foreach ($items as $item)
                            <option value="{{ $item?->id }}" {{ isset($issue) && $issue?->item_id == $item?->id ? 'selected' : (old('item_id') == $item?->id ? 'selected' : '') }}>
                                {{ $item?->item_code }}
                            </option>
                        @endforeach
            </select>
            @error('item_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="item-id">{{ __('Issue to ') }}</label>
            <select class="form-select @error('employee_id') is-invalid @enderror" name="issue_to" id="issue_to" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select Employee') }} --</option>
                
                        @foreach ($employees as $employee)
                            <option value="{{ $employee?->id }}" {{ isset($issue) && $issue?->employee_id == $employee?->id ? 'selected' : (old('employee_id') == $employee?->id ? 'selected' : '') }}>
                                {{ $employee?->employee_name }}
                            </option>
                        @endforeach
            </select>
            @error('employee_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="item-id">{{ __('Issue by ') }}</label>
            <select class="form-select @error('employee_id') is-invalid @enderror" name="issue_by" id="issue_by" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select Employee') }} --</option>
                
                        @foreach ($employees as $employee)
                            <option value="{{ $employee?->id }}" {{ isset($issue) && $issue?->employee_id == $employee?->id ? 'selected' : (old('employee_id') == $employee?->id ? 'selected' : '') }}>
                                {{ $employee?->employee_name }}
                            </option>
                        @endforeach
            </select>
            @error('employee_id')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

   

   

    <div class="col-md-6">
        <div class="form-group">
            <label for="issue-date">{{ __('Issue Date') }}</label>
            <input type="date" name="issue_date" id="issue-date" class="form-control @error('issue_date') is-invalid @enderror" value="{{ isset($issue) && $issue?->issue_date ? $issue?->issue_date?->format('Y-m-d') : old('issue_date') }}" placeholder="{{ __('Issue Date') }}" required />
            @error('issue_date')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="voucher-no">{{ __('Voucher No') }}</label>
            <input type="text" name="voucher_no" id="voucher-no" class="form-control @error('voucher_no') is-invalid @enderror" value="{{ isset($issue) ? $issue->voucher_no : old('voucher_no') }}" placeholder="{{ __('Voucher No') }}" required />
            @error('voucher_no')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="quantity_issued">{{ __('Quantity Issued') }}</label>
            <input type="text" name="quantity_issued" id="quantity_issued" class="form-control @error('quantity_issued') is-invalid @enderror" value="{{ isset($issue) ? $issue->quantity_issued : old('quantity_issued') }}" placeholder="{{ __('Quantity Issued') }}" required />
            @error('quantity_issued')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="remark">{{ __('Remarks') }}</label>
            <input type="text" name="remarks" id="remark" class="form-control @error('remarks') is-invalid @enderror" value="{{ isset($issue) ? $issue->remarks : old('remarks') }}" placeholder="{{ __('Remarks') }}" />
            @error('remarks')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <!-- <div class="col-md-6">
        <div class="form-group">
            <label for="issue-status">{{ __('Issue Status') }}</label>
            <select class="form-select @error('issue_status') is-invalid @enderror" name="issue_status" id="issue-status" class="form-control" required>
                <option value="" selected disabled>-- {{ __('Select issue status') }} --</option>
                <option value="one" {{ isset($issue) && $issue->issue_status == 'one' ? 'selected' : (old('issue_status') == 'one' ? 'selected' : '') }}>one</option>
		<option value="two" {{ isset($issue) && $issue->issue_status == 'two' ? 'selected' : (old('issue_status') == 'two' ? 'selected' : '') }}>two</option>			
            </select>
            @error('issue_status')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div> -->
</div>