@extends('layouts.app')
@section('title')
    {{ 'All sub-category' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Bordered Table -->
        <div class="card">
            <h5 class="card-header">Sub Categories</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sub category</th>
                                <th>Category</th>
                                <th>Products</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subcategories as $subcategory)
                                <tr>
                                    <td>
                                        <span class="fw-medium">{{ $subcategory->sub_category }}</span>
                                    </td>
                                    <td>{{ $subcategory->category->category }}</td>
                                    <td>{{ $subcategory->products_count }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('sub-category.edit', ['id' => $subcategory->id]) }}"
                                            style="margin-right: 15px">
                                            <i class="bx bx-edit-alt me-1"></i>
                                        </a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteItem"
                                            data-category-id="{{ $subcategory->id }}"
                                            onclick="document.getElementById('ItemID').value = {{ $subcategory->id }}">
                                            <i class="bx bx-trash me-1"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No subcategories found</td>
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
                        <form id="deleteItemForm" class="row g-3" method="POST"
                            action="{{ route('sub-category.delete') }}">
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
