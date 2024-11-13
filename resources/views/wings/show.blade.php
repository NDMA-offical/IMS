@extends('layouts.app')

@section('title', __('Detail of Wings'))

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-8 order-md-1 order-last">
                    <h3>{{ __('Wings') }}</h3>
                    <p class="text-subtitle text-muted">
                        {{ __('Detail of wing.') }}
                    </p>
                </div>

                <x-breadcrumb>
                    <li class="breadcrumb-item">
                        <a href="/">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('wings.index') }}">{{ __('Wings') }}</a>
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
                                        <td class="fw-bold">{{ __('Wing Name') }}</td>
                                        <td>{{ $wing->wing_name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Wing Short Name') }}</td>
                                        <td>{{ $wing->wing_short_name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Wing Description') }}</td>
                                        <td>{{ $wing->wing_desp }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Wing Status') }}</td>
                                        <td>{{ $wing->wing_status == 1 ? 'Active' : 'Inactive' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Created at') }}</td>
                                        <td>{{ $wing->created_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Updated at') }}</td>
                                        <td>{{ $wing->updated_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                </table>
                            </div>

                            <a href="{{ route('wings.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
