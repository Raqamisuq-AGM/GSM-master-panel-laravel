@extends('layouts.app')
@section('title')
    {{ 'All invoice' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Bordered Table -->
        <div class="card">
            <h5 class="card-header">Invoice</h5>
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
                            @forelse ($invoices as $invoice)
                                <tr>
                                    <td>
                                        <span class="fw-medium">{{ $invoice->invoice_id }}</span>
                                    </td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                <img src="{{ asset('assets/img/user/' . $invoice->user->avatar) }}"
                                                    alt="Avatar" class="rounded-circle" />
                                            </li>
                                        </ul>

                                    </td>
                                    <td>{{ $invoice->product->title }}</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                <img src="{{ asset('assets/img/product/' . $invoice->product->thumb) }}"
                                                    alt="Avatar" class="rounded-circle" />
                                            </li>
                                        </ul>

                                    </td>
                                    <td>{{ $invoice->user->first_name . ' ' . $invoice->user->lasst_name }}</td>
                                    <td>
                                        <span
                                            class="badge
                                        @if ($invoice->status == 'paid') bg-label-success
                                            @elseif($invoice->status == 'pending')
                                            bg-label-danger @endif
                                        me-1">
                                            {{ $invoice->status }}
                                        </span>
                                    </td>
                                    <td class="d-flex">
                                        <a href="javascript:void(0);" style="margin-right: 15px">
                                            <i class='bx bx-send me-1'></i>
                                        </a>
                                        <a href="{{ route('invoice.view', ['id' => $invoice->id]) }}">
                                            <i class="bx bx-show mx-1"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No invoices found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Bordered Table -->
    </div>
    <!-- / Content -->
@endsection
