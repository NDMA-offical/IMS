@extends('layouts.app')

@section('title', __('Detail of Brands'))

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-8 order-md-1 order-last">
                    <h3>{{ __('Brands') }}</h3>
                    <p class="text-subtitle text-muted">
                        {{ __('Detail of brand.') }}
                    </p>
                </div>

                <x-breadcrumb>
                    <li class="breadcrumb-item">
                        <a href="/">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('brands.index') }}">{{ __('Brands') }}</a>
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
                                        <td class="fw-bold">{{ __('Brand Name') }}</td>
                                        <td>{{ $brand->brand_name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Brand Desp') }}</td>
                                        <td>{{ $brand->brand_desp }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Brand Status') }}</td>
                                        <td>{{ $brand->brand_status == 1 ? 'Active' : 'Inactive' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Created at') }}</td>
                                        <td>{{ $brand->created_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Updated at') }}</td>
                                        <td>{{ $brand->updated_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                </table>
                            </div>

                            <a href="{{ route('brands.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
