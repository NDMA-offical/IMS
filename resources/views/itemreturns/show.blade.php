@extends('layouts.app')

@section('title', __('Detail of Itemreturns'))

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-8 order-md-1 order-last">
                    <h3>{{ __('Itemreturns') }}</h3>
                    <p class="text-subtitle text-muted">
                        {{ __('Detail of itemreturn.') }}
                    </p>
                </div>

                <x-breadcrumb>
                    <li class="breadcrumb-item">
                        <a href="/">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('itemreturns.index') }}">{{ __('Itemreturns') }}</a>
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
                                        <td>{{ $itemreturn->item ? $itemreturn->item->item_code : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Returned By') }}</td>
                                        <td>{{ optional($itemreturn->returnedByEmployee)->employee_name ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Received By') }}</td>
                                        <td>{{ optional($itemreturn->receivedByEmployee)->employee_name ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Condition') }}</td>
                                        <td>{{ $itemreturn->condition ? $itemreturn->condition->condition_name : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Quantity Returned') }}</td>
                                        <td>{{ $itemreturn->quantity_returned }}</td>
                                    </tr>
                                    <!-- <tr>
                                        <td class="fw-bold">{{ __('Created at') }}</td>
                                        <td>{{ $itemreturn->created_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Updated at') }}</td>
                                        <td>{{ $itemreturn->updated_at->format('Y-m-d H:i:s') }}</td>
                                    </tr> -->
                                </table>
                            </div>

                            <a href="{{ route('itemreturns.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
