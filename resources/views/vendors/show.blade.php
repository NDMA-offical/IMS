@extends('layouts.app')

@section('title', __('Detail of Vendors'))

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-8 order-md-1 order-last">
                    <h3>{{ __('Vendors') }}</h3>
                    <p class="text-subtitle text-muted">
                        {{ __('Detail of vendor.') }}
                    </p>
                </div>

                <x-breadcrumb>
                    <li class="breadcrumb-item">
                        <a href="/">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('vendors.index') }}">{{ __('Vendors') }}</a>
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
                    <td class="fw-bold">{{ __('Vendor Name') }}</td>
                    <td>{{ $vendor->vendor_name }}</td>
                </tr>
<tr>
                    <td class="fw-bold">{{ __('Vendor Description') }}</td>
                    <td>{{ $vendor->vendor_desp }}</td>
                </tr>
<tr>
                                <td class="fw-bold">{{ __('Vendor Status') }}</td>
                                <td>{{ $vendor->vendor_status == 1 ? 'Active' : 'Inactive' }}</td>
                              </tr>
                                    <!-- <tr>
                                        <td class="fw-bold">{{ __('Created at') }}</td>
                                        <td>{{ $vendor->created_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Updated at') }}</td>
                                        <td>{{ $vendor->updated_at->format('Y-m-d H:i:s') }}</td>
                                    </tr> -->
                                </table>
                            </div>

                            <a href="{{ route('vendors.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
