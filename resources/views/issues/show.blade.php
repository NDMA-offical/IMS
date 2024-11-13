@extends('layouts.app')

@section('title', __('Detail of Issues'))

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-8 order-md-1 order-last">
                    <h3>{{ __('Issues') }}</h3>
                    <p class="text-subtitle text-muted">
                        {{ __('Detail of issue.') }}
                    </p>
                </div>

                <x-breadcrumb>
                    <li class="breadcrumb-item">
                        <a href="/">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('issues.index') }}">{{ __('Issues') }}</a>
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
                                    <td>{{ $issue->item ? $issue->item->item_code : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Issue To Name') }}</td>
                                    <td>{{ $issue->issueToEmployee ? $issue->issueToEmployee->employee_name : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Issue By') }}</td>
                                    <td>{{ $issue->issueByEmployee ? $issue->issueByEmployee->employee_name : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Issue Date') }}</td>
                                    <td>{{ isset($issue->issue_date) ? $issue->issue_date?->format("Y-m-d") : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Voucher No') }}</td>
                                    <td>{{ $issue->voucher_no }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Remarks') }}</td>
                                    <td>{{ $issue->remarks }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">{{ __('Issue Status') }}</td>
                                    <td>{{ $issue->issue_status }}</td>
                                </tr>
                                    <!-- <tr>
                                        <td class="fw-bold">{{ __('Created at') }}</td>
                                        <td>{{ $issue->created_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Updated at') }}</td>
                                        <td>{{ $issue->updated_at->format('Y-m-d H:i:s') }}</td>
                                    </tr> -->
                                </table>
                            </div>

                            <a href="{{ route('issues.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
