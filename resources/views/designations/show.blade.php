@extends('layouts.app')

@section('title', __('Detail of Designations'))

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-8 order-md-1 order-last">
                    <h3>{{ __('Designations') }}</h3>
                    <p class="text-subtitle text-muted">
                        {{ __('Detail of designation.') }}
                    </p>
                </div>

                <x-breadcrumb>
                    <li class="breadcrumb-item">
                        <a href="/">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('designations.index') }}">{{ __('Designations') }}</a>
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
                    <td class="fw-bold">{{ __('Designation Name') }}</td>
                    <td>{{ $designation->designation_name }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Designation Name Short') }}</td>
                    <td>{{ $designation->designation_name_short }}</td>
                </tr>
<tr>
                                <td class="fw-bold">{{ __('Designation Status') }}</td>
                                <td>{{ $designation->designation_status == 1 ? 'Active' : 'Inactive' }}</td>
                              </tr>
                                    <!-- <tr>
                                        <td class="fw-bold">{{ __('Created at') }}</td>
                                        <td>{{ $designation->created_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Updated at') }}</td>
                                        <td>{{ $designation->updated_at->format('Y-m-d H:i:s') }}</td>
                                    </tr> -->
                                </table>
                            </div>

                            <a href="{{ route('designations.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
