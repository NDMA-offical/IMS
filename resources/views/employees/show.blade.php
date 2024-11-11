@extends('layouts.app')

@section('title', __('Detail of Employees'))

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-8 order-md-1 order-last">
                    <h3>{{ __('Employees') }}</h3>
                    <p class="text-subtitle text-muted">
                        {{ __('Detail of employee.') }}
                    </p>
                </div>

                <x-breadcrumb>
                    <li class="breadcrumb-item">
                        <a href="/">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('employees.index') }}">{{ __('Employees') }}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ __('Detail') }}
                    </li>
                </x-breadcrumb>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <tr>
                    <td class="fw-bold">{{ __('Employee Name') }}</td>
                    <td>{{ $employee->employee_name }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Employee Cnic') }}</td>
                    <td>{{ $employee->employee_cnic }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Employee Email') }}</td>
                    <td>{{ $employee->employee_email }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Employee Contact') }}</td>
                    <td>{{ $employee->employee_contact }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Wing') }}</td>
                    <td>{{ $employee->wing ? $employee->wing->wing_name : '' }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Designation') }}</td>
                    <td>{{ $employee->designation ? $employee->designation->designation_name : '' }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('User Status') }}</td>
                    <td>{{ $employee->user_status }}</td>
                </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Created at') }}</td>
                                        <td>{{ $employee->created_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Updated at') }}</td>
                                        <td>{{ $employee->updated_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                </table>
                            </div>

                            <a href="{{ route('employees.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
