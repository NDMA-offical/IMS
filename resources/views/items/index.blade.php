@extends('layouts.app')

@section('title', __('Items'))

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-8 order-md-1 order-last">
                    <h3>{{ __('Items') }}</h3>
                    <p class="text-subtitle text-muted">
                        {{ __('Below is a list of all items.') }}
                    </p>
                </div>
                <x-breadcrumb>
                    <li class="breadcrumb-item"><a href="/">{{ __('Dashboard') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Items') }}</li>
                </x-breadcrumb>
            </div>
        </div>

        <section class="section">
            <x-alert></x-alert>

                @can('item create')
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('items.create') }}" class="btn btn-primary mb-3">
                            <i class="fas fa-plus"></i>
                            {{ __('Create a new item') }}
                        </a>
                    </div>
                @endcan

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive p-1">
                                <table class="table table-striped" id="data-table" width="100%">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Serial No') }}</th>
											<th>{{ __('Item Name') }}</th>
											<th>{{ __('Item Model No') }}</th>
											<th>{{ __('Item Desp') }}</th>
											<th>{{ __('Brand') }}</th>
											<th>{{ __('Category') }}</th>
											<th>{{ __('Project') }}</th>
											<th>{{ __('Fundingsource') }}</th>
											<th>{{ __('Classification') }}</th>
											<th>{{ __('Item Status') }}</th>
                                            <!-- <th>{{ __('Created At') }}</th>
                                            <th>{{ __('Updated At') }}</th> -->
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.0/datatables.min.css" />
@endpush

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.0/datatables.min.js"></script>
    <script>
        $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('items.index') }}",
            columns: [
                {
                    data: 'item_code',
                    name: 'item_code',
                },
				{
                    data: 'item_name',
                    name: 'item_name',
                },
				{
                    data: 'item_model_no',
                    name: 'item_model_no',
                },
				{
                    data: 'item_desp',
                    name: 'item_desp',
                },
				{
                    data: 'brand',
                    name: 'brand.brand_name'
                },
				{
                    data: 'category',
                    name: 'category.category_name'
                },
				{
                    data: 'project',
                    name: 'project.project_name'
                },
				{
                    data: 'fundingsource',
                    name: 'fundingsource.source_name'
                },
                {
                    data: 'itemclass',
                    name: 'itemclass.class_name'
                },
				{
                    data: 'item_status',
                    name: 'item_status',
                },
                // {
                //     data: 'created_at',
                //     name: 'created_at'
                // },
                // {
                //     data: 'updated_at',
                //     name: 'updated_at'
                // },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ],
        });
    </script>
@endpush
