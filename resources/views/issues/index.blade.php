@extends('layouts.app')

@section('title', __('Issues'))

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-8 order-md-1 order-last">
                <h3>{{ __('Issues') }}</h3>
                <p class="text-subtitle text-muted">
                    {{ __('Below is a list of all issues.') }}
                </p>
            </div>
            <x-breadcrumb>
                <li class="breadcrumb-item"><a href="/">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('Issues') }}</li>
            </x-breadcrumb>
        </div>
    </div>

    <section class="section">
        <x-alert></x-alert>

        @can('issue create')
        <div class="d-flex justify-content-end">
            <a href="{{ route('issues.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i>
                {{ __('Create a new issue') }}
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
                                        <th>{{ __('Item') }}</th>
                                        <th>{{ __('Issue To Name') }}</th>

                                        <th>{{ __('Issue By') }}</th>
                                        <th>{{ __('Issue Date') }}</th>
                                        <th>{{ __('Quantity') }}</th>
                                        <th>{{ __('Voucher No') }}</th>

                                        <!-- <th>{{ __('Issue Status') }}</th> -->
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
        ajax: "{{ route('issues.index') }}",
        columns: [{
                data: 'item',
                name: 'item.item_code'
            },
            {
                data: 'issue_to_name',
                name: 'issueToEmployee.employee_name',
            },
            {
                data: 'issue_by_name',
                name: 'issueByEmployee.employee_name',
            },
            {
                data: 'issue_date',
                name: 'issue_date',
            },
            {
                data: 'quantity_issued',
                name: 'quantity_issued',
            },
            {
                data: 'voucher_no',
                name: 'voucher_no',
            },
            // {
            //     data: 'remarks',
            //     name: 'remarks',
            // },
            // {
            //     data: 'issue_status',
            //     name: 'issue_status',
            // },
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