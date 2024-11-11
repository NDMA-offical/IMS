@extends('layouts.app')

@section('title', __('Detail of Items'))

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-8 order-md-1 order-last">
                <h3>{{ __('Items') }}</h3>
                <p class="text-subtitle text-muted">
                    {{ __('Detail of item.') }}
                </p>
            </div>

            <x-breadcrumb>
                <li class="breadcrumb-item">
                    <a href="/">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('items.index') }}">{{ __('Items') }}</a>
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
                                    <td class="fw-bold">{{ __('Item Code') }}</td>
                                    <td>{{ $item->item_code }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Item Name') }}</td>
                                    <td>{{ $item->item_name }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Item Model No') }}</td>
                                    <td>{{ $item->item_model_no }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Item Desp') }}</td>
                                    <td>{{ $item->item_desp }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Brand') }}</td>
                                    <td>{{ $item->brand ? $item->brand->brand_name : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Category') }}</td>
                                    <td>{{ $item->category ? $item->category->category_name : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Class') }}</td>
                                    <td>{{ $item->itemclass ? $item->itemclass->class_name : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Type') }}</td>
                                    <td>{{ $item->itemtype ? $item->itemtype->type_name : '' }}</td>
                                </tr>
                                
                                <tr>
                                    <td class="fw-bold">{{ __('Project') }}</td>
                                    <td>{{ $item->project ? $item->project->project_name : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Fundingsource') }}</td>
                                    <td>{{ $item->fundingsource ? $item->fundingsource->source_name : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Item Status') }}</td>
                                    <td>{{ $item->item_status }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('GRN Date') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->received_date)->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('GRN ID') }}</td>
                                    <td>{{ $item->grn_id }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Vendor') }}</td>
                                    <td>{{ $item->vendor ? $item->vendor->vendor_name : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Created at') }}</td>
                                    <td>{{ $item->created_at->format('Y-m-d H:i:s') }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Updated at') }}</td>
                                    <td>{{ $item->updated_at->format('Y-m-d H:i:s') }}</td>
                                </tr>
                            </table>
                        </div>

                        <a href="{{ route('items.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection