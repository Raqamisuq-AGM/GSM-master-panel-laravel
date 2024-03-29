@extends('layouts.app')
@section('title')
    {{ 'All products' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Bordered Table -->
        <div class="card">
            <h5 class="card-header">Products</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                {{-- <th>ID</th> --}}
                                <th>Thumb</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Sub category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    {{-- <td>
                                        <span class="fw-medium">15995</span>
                                    </td> --}}
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                <img src="{{ asset('assets/img/product/5.png') }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                        </ul>

                                    </td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->category->category }}</td>
                                    <td>{{ $product->subCategory->sub_category }}</td>
                                    <td>
                                        <span class="badge bg-label-primary me-1">Active</span>
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('product.edit', ['id' => $product->id]) }}"
                                            style="margin-right: 15px">
                                            <i class="bx bx-edit-alt me-1"></i>
                                        </a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteItem"
                                            data-category-id="{{ $product->id }}"
                                            onclick="document.getElementById('ItemID').value = {{ $product->id }}">
                                            <i class="bx bx-trash me-1"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No products found</td>
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
                        <form id="deleteItemForm" class="row g-3" method="POST" action="{{ route('product.delete') }}">
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
