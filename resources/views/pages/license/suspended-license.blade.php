@extends('layouts.app')
@section('title')
    {{ 'Suspended license' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Bordered Table -->
        <div class="card">
            <h5 class="card-header">All License</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Thumb</th>
                                <th>Product</th>
                                <th>Avatar</th>
                                <th>Full Name</th>
                                <th>Package</th>
                                <th>Created at</th>
                                <th>Next Due</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($licenses as $license)
                                <tr>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                <img src="{{ asset('assets/img/product/' . $license->product->thumb) }}"
                                                    alt="Avatar" class="rounded-circle" />
                                            </li>
                                        </ul>
                                    </td>
                                    <td>{{ $license->product->title }}</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                <img src="{{ asset('assets/img/user/' . $license->user->avatar) }}"
                                                    alt="Avatar" class="rounded-circle" />
                                            </li>
                                        </ul>
                                    </td>
                                    <td>{{ $license->user->first_name . ' ' . $license->user->last_name }}</td>
                                    <td>
                                        @if ($license->package == '1')
                                            monthly
                                        @elseif($license->package == '6')
                                            half yearly
                                        @elseif($license->package == '12')
                                            yealy
                                        @endif
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($license->created_at)->format('d-m-y h:i A') }}
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($license->next_due)->format('d-m-y h:i A') }}
                                    </td>
                                    <td>
                                        <span
                                            class="badge
                                            @if ($license->status == 'active') bg-label-success
                                            @elseif($license->status == 'pending')
                                            bg-label-warning
                                            @elseif($license->status == 'suspended')
                                            bg-label-danger @endif me-1">{{ $license->status }}</span>
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('license.edit', ['id' => $license->id]) }}"
                                            style="margin-right: 15px">
                                            <i class="bx bx-edit-alt me-1"></i>
                                        </a>
                                        <a href="{{ route('license.view', ['id' => $license->id]) }}"
                                            style="margin-right: 15px">
                                            <i class="bx bx-show me-1"></i>
                                        </a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteItem"
                                            data-category-id="{{ $license->id }}"
                                            onclick="document.getElementById('ItemID').value = {{ $license->id }}">
                                            <i class="bx bx-trash me-1"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">No license found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Bordered Table -->

        <!-- Delete Item Modal -->
        <div class="modal fade" id="deleteItem" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-5">Delete this item</h3>
                        </div>
                        <form id="deleteItemForm" class="row g-3" method="POST" action="{{ route('license.delete') }}">
                            @csrf
                            <input type="hidden" name="ItemID" id="ItemID">
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
