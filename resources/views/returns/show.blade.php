@extends('layouts.app')

@section('title', __('Detail of Returns'))

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-8 order-md-1 order-last">
                    <h3>{{ __('Returns') }}</h3>
                    <p class="text-subtitle text-muted">
                        {{ __('Detail of return.') }}
                    </p>
                </div>

                <x-breadcrumb>
                    <li class="breadcrumb-item">
                        <a href="/">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('returns.index') }}">{{ __('Returns') }}</a>
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
                    <td class="fw-bold">{{ __('Item') }}</td>
                    <td>{{ $return->item ? $return->item->item_code : '' }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Returned By') }}</td>
                    <td>{{ $return->returned_by }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Received By') }}</td>
                    <td>{{ $return->received_by }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Condition') }}</td>
                    <td>{{ $return->condition ? $return->condition->condition_name : '' }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Quantity Returned') }}</td>
                    <td>{{ $return->quantity_returned }}</td>
                </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Created at') }}</td>
                                        <td>{{ $return->created_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Updated at') }}</td>
                                        <td>{{ $return->updated_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                </table>
                            </div>

                            <a href="{{ route('returns.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
