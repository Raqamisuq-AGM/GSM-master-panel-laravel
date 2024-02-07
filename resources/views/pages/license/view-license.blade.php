@extends('layouts.app')
@section('title')
    {{ 'View license' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- User Sidebar -->
            <div class="col-xl-12 col-lg-12 col-md-12 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class="d-flex align-items-center flex-column">
                                <img class="img-fluid rounded my-4"
                                    src="{{ asset('assets/img/user/' . $license->user->avatar) }}" height="110"
                                    width="110" alt="User avatar" />
                                <div class="user-info text-center">
                                    <h4 class="mb-2">{{ $license->user->first_name . ' ' . $license->user->last_name }}
                                    </h4>
                                    {{-- <span class="badge bg-label-secondary">Author</span> --}}
                                </div>
                            </div>
                        </div>
                        <h5 class="pb-2 border-bottom mb-4"></h5>
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Username:</span>
                                    <span>{{ $license->user->user_name }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Email:</span>
                                    <span>{{ $license->user->email }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Status:</span>
                                    <span
                                        class="badge @if ($license->status == 'active') bg-label-success
                                        @elseif($license->status == 'pending')
                                        bg-label-warning
                                        @elseif($license->status == 'suspended')
                                        bg-label-danger @endif }}">{{ $license->status }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Domain:</span>
                                    <span>{{ $license->domain_reg }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Reg date:</span>
                                    <span>{{ \Carbon\Carbon::parse($license->created_at)->format('d-m-y h:i A') }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Next due:</span>
                                    <span>{{ \Carbon\Carbon::parse($license->next_due)->format('d-m-y h:i A') }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Product:</span>
                                    <span>{{ $license->product->title }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">License code:</span>
                                    <span>{{ $license->license_code }}</span>
                                </li>
                            </ul>
                            {{-- <div class="d-flex justify-content-center pt-3">
                                <a href="javascript:;" class="btn btn-label-danger suspend-user me-2">
                                    Suspend
                                </a>
                                <a href="javascript:;" class="btn btn-label-success suspend-user">
                                    Activate
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- /User Card -->
            </div>
            <!--/ User Sidebar -->
        </div>

        <!-- Delete Item Modal -->
        <div class="modal fade" id="deleteItem" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-5">Delete this item</h3>
                        </div>
                        <form id="deleteItemForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">
                                    Yes
                                </button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Delete Item Modal -->
    </div>
    <!-- / Content -->
@endsection
