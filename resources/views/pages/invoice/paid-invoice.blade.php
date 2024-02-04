@extends('layouts.app')
@section('title')
    {{ 'Paid invoice' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Bordered Table -->
        <div class="card">
            <h5 class="card-header">Paid Invoice</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
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
                                    <span class="badge bg-label-success me-1">paid</span>
                                </td>
                                <td class="d-flex">
                                    <a href="javascript:void(0);" style="margin-right: 15px">
                                        <i class='bx bx-send me-1'></i>
                                    </a>
                                    <a href="{{ route('invoice.view', ['id' => '1']) }}">
                                        <i class="bx bx-show mx-1"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Bordered Table -->
    </div>
    <!-- / Content -->
@endsection
