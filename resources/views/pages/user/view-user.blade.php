@extends('layouts.app')
@section('title')
    {{ 'View user' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- User Sidebar -->
            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class="d-flex align-items-center flex-column">
                                <img class="img-fluid rounded my-4" src="{{ asset('assets/img/avatars/10.png') }}"
                                    height="110" width="110" alt="User avatar" />
                                <div class="user-info text-center">
                                    <h4 class="mb-2">Violet Mendoza</h4>
                                    {{-- <span class="badge bg-label-secondary">Author</span> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="d-flex justify-content-around flex-wrap my-4 py-3">
                            <div class="d-flex align-items-start me-4 mt-3 gap-3">
                                <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-check bx-sm"></i></span>
                                <div>
                                    <h5 class="mb-0">1.23k</h5>
                                    <span>Tasks Done</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mt-3 gap-3">
                                <span class="badge bg-label-primary p-2 rounded"><i
                                        class="bx bx-customize bx-sm"></i></span>
                                <div>
                                    <h5 class="mb-0">568</h5>
                                    <span>Projects Done</span>
                                </div>
                            </div>
                        </div> --}}
                        <h5 class="pb-2 border-bottom mb-4"></h5>
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Username:</span>
                                    <span>violet.dev</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Email:</span>
                                    <span>vafgot@vultukir.org</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Status:</span>
                                    <span class="badge bg-label-success">Active</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Role:</span>
                                    <span>Author</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Tax id:</span>
                                    <span>Tax-8965</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Contact:</span>
                                    <span>(123) 456-7890</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Languages:</span>
                                    <span>French</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Country:</span>
                                    <span>England</span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center pt-3">
                                <a href="javascript:;" class="btn btn-label-danger suspend-user me-2">
                                    Suspend
                                </a>
                                <a href="javascript:;" class="btn btn-label-success suspend-user">
                                    Activate
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /User Card -->
            </div>
            <!--/ User Sidebar -->

            <!-- User Content -->
            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                <!-- User Pills -->
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);">
                            <i class='bx bx-receipt me-1'></i>
                            Licenses
                        </a>
                    </li>
                </ul>
                <!--/ User Pills -->

                <!-- Project table -->
                <div class="card mb-4">
                    <h5 class="card-header">User's Projects List</h5>
                    <div class="table-responsive mb-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Thumb</th>
                                    <th>Product</th>
                                    <th>Avatar</th>
                                    <th>Full Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="fw-medium">15995</span>
                                    </td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                        </ul>
                                    </td>
                                    <td>this is demo product</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                        </ul>
                                    </td>
                                    <td>shazib ahmed</td>
                                    <td>
                                        <span class="badge bg-label-primary me-1">Active</span>
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('license.edit', ['id' => '1']) }}" style="margin-right: 15px">
                                            <i class="bx bx-edit-alt me-1"></i>
                                        </a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteItem">
                                            <i class="bx bx-trash me-1"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /Project table -->
            </div>
            <!--/ User Content -->
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
