@extends('layouts.app')

@section('title', __('Detail of Repairs'))

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-8 order-md-1 order-last">
                    <h3>{{ __('Repairs') }}</h3>
                    <p class="text-subtitle text-muted">
                        {{ __('Detail of repair.') }}
                    </p>
                </div>

                <x-breadcrumb>
                    <li class="breadcrumb-item">
                        <a href="/">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('repairs.index') }}">{{ __('Repairs') }}</a>
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
                    <td class="fw-bold">{{ __('Request By') }}</td>
                    <td>{{ $repair->request_by }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Request Date') }}</td>
                    <td>{{ isset($repair->request_date) ? $repair->request_date?->format("Y-m-d") : '' }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Request Sheet Id') }}</td>
                    <td>{{ $repair->request_sheet_id }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Repair Cost') }}</td>
                    <td>{{ $repair->repair_cost }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Repair Date') }}</td>
                    <td>{{ isset($repair->repair_date) ? $repair->repair_date?->format("Y-m-d") : '' }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Repair Status') }}</td>
                    <td>{{ $repair->repair_status }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Fundingsource') }}</td>
                    <td>{{ $repair->fundingsource ? $repair->fundingsource->source_name : '' }}</td>
                </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Created at') }}</td>
                                        <td>{{ $repair->created_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Updated at') }}</td>
                                        <td>{{ $repair->updated_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                </table>
                            </div>

                            <a href="{{ route('repairs.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
