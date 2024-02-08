@php
    $productCount = app(\App\Models\Product\Product::class)->count();

    $pendingInvoiceCount = app(\App\Models\Invoice\Invoice::class)
        ->where('status', 'unread')
        ->count();

    $pendingTicketCount = app(\App\Models\Support\Ticket::class)
        ->where('status', 'unread')
        ->count();

    $licenseCount = app(\App\Models\License\License::class)->count();

    $pendingLicenseCount = app(\App\Models\License\License::class)
        ->where('status', 'unread')
        ->count();
@endphp

@extends('layouts.app')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 col-md-12 order-1">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="assets/img/icons/unicons/chart.png" alt="Credit Card" class="rounded" />
                                    </div>
                                </div>
                                <span>Sales</span>
                                <h3 class="card-title text-nowrap mb-1">$0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="assets/img/icons/unicons/cube-secondary.png" alt="Credit Card"
                                            class="rounded" />
                                    </div>
                                </div>
                                <span>Products</span>
                                <h3 class="card-title text-nowrap mb-1">{{ $productCount }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="assets/img/icons/unicons/cc-success.png" alt="Credit Card"
                                            class="rounded" />
                                    </div>
                                </div>
                                <span>Pending Invoices</span>
                                <h3 class="card-title text-nowrap mb-1">{{ $pendingInvoiceCount }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="assets/img/icons/unicons/briefcase-round.png" alt="Credit Card"
                                            class="rounded" />
                                    </div>
                                </div>
                                <span>Pending Tickets</span>
                                <h3 class="card-title text-nowrap mb-1">{{ $pendingTicketCount }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                            class="rounded" />
                                    </div>
                                </div>
                                <span>Licenses</span>
                                <h3 class="card-title text-nowrap mb-1">{{ $licenseCount }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="assets/img/icons/unicons/wallet-round.png" alt="Credit Card"
                                            class="rounded" />
                                    </div>
                                </div>
                                <span>Pending License</span>
                                <h3 class="card-title text-nowrap mb-1">{{ $pendingLicenseCount }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- pill table -->
            <div class="col-md-12 order-3 order-lg-4 mb-4 mb-lg-0">
                <div class="card text-center">
                    <div class="card-header py-3">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-pills-browser" aria-controls="navs-pills-browser"
                                    aria-selected="true">
                                    Browser
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-pills-os" aria-controls="navs-pills-os" aria-selected="false">
                                    Operating System
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-pills-country" aria-controls="navs-pills-country"
                                    aria-selected="false">
                                    Country
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content pt-0">
                        <div class="tab-pane fade show active" id="navs-pills-browser" role="tabpanel">
                            <div class="table-responsive text-start">
                                <table class="table table-borderless text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Browser</th>
                                            <th>Visits</th>
                                            <th class="w-50">Data In Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/img/icons/brands/chrome.png" alt="Chrome"
                                                        height="24" class="me-2" />
                                                    <span>Chrome</span>
                                                </div>
                                            </td>
                                            <td>8.92k</td>
                                            <td>
                                                <div class="d-flex justify-content-between align-items-center gap-3">
                                                    <div class="progress w-100" style="height: 10px">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 84.75%" aria-valuenow="84.75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <small class="fw-medium">84.75%</small>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navs-pills-os" role="tabpanel">
                            <div class="table-responsive text-start">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>System</th>
                                            <th>Visits</th>
                                            <th class="w-50">Data In Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/img/icons/brands/windows.png" alt="Windows"
                                                        height="24" class="me-2" />
                                                    <span>Windows</span>
                                                </div>
                                            </td>
                                            <td>875.24k</td>
                                            <td>
                                                <div class="d-flex justify-content-between align-items-center gap-3">
                                                    <div class="progress w-100" style="height: 10px">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 71.5%" aria-valuenow="71.50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <small class="fw-medium">71.50%</small>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navs-pills-country" role="tabpanel">
                            <div class="table-responsive text-start">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Country</th>
                                            <th>Visits</th>
                                            <th class="w-50">Data In Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/svg/flags/us.svg" alt="USA" height="24"
                                                        class="me-2" />
                                                    <span>USA</span>
                                                </div>
                                            </td>
                                            <td>87.24k</td>
                                            <td>
                                                <div class="d-flex justify-content-between align-items-center gap-3">
                                                    <div class="progress w-100" style="height: 10px">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 89.12%" aria-valuenow="89.12" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <small class="fw-medium">89.12%</small>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ pill table -->
        </div>
    </div>
@endsection
