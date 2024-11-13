@extends('layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>

    <div class="page-content">
        <section class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible show fade">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="stats-icon purple">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">098</h5>
                                <p class="text-muted mb-0">{{ __('Users') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="stats-icon blue">
                                <i class="bi bi-file-earmark-post"></i>
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">327</h5>
                                <p class="text-muted mb-0">{{ __('Posts') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="stats-icon green">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">700</h5>
                                <p class="text-muted mb-0">{{ __('Items') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="stats-icon orange">
                                <i class="bi bi-tags"></i>
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">33</h5>
                                <p class="text-muted mb-0">{{ __('Categories') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
