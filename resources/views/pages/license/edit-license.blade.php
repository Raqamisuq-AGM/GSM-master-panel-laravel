@extends('layouts.app')
@section('title')
    {{ 'Edit license' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="app-ecommerce">
            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1 mt-3">Edit license</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <button class="btn btn-label-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        Update license
                    </button>
                </div>
            </div>

            <div class="row">

                <!-- Second column -->
                <div class="col-12 col-lg-12">
                    <!-- Organize Card -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <!-- Vendor -->
                            <div class="mb-3 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1" for="vendor">
                                    User
                                </label>
                                <select id="vendor" class="select2 form-select" data-placeholder="Select User">
                                    <option value="">Select User</option>
                                    <option value="men-clothing">Shazib</option>
                                    <option value="women-clothing">
                                        Babu
                                    </option>
                                    <option value="kid-clothing">Shahin</option>
                                </select>
                            </div>
                            <!-- Category -->
                            <div class="mb-3 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1 d-flex justify-content-between align-items-center"
                                    for="category-org">
                                    <span>Product</span>
                                </label>
                                <select id="category-org" class="select2 form-select" data-placeholder="Select Category">
                                    <option value="">Select Product</option>
                                    <option value="Household">Household</option>
                                    <option value="Management">Management</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Office">Office</option>
                                    <option value="Automotive">Automotive</option>
                                </select>
                            </div>
                            <!-- Sub category -->
                            <div class="mb-3 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1" for="collection">Package
                                </label>
                                <select id="collection" class="select2 form-select" data-placeholder="Select Package">
                                    <option value="">Select Package</option>
                                    <option value="men-clothing">Monthly</option>
                                    <option value="women-clothing">
                                        6 Month
                                    </option>
                                    <option value="kid-clothing">Yearly</option>
                                </select>
                            </div>
                            <!-- Status -->
                            <div class="mb-3 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1" for="status-org">Status
                                </label>
                                <select id="status-org" class="select2 form-select" data-placeholder="Active">
                                    <option value="">Active</option>
                                    <option value="Published">Pending</option>
                                    <option value="Inactive">Suspended</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /Organize Card -->
                </div>
                <!-- /Second column -->
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection

@section('style')
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css%3Fid=de339ead5e9c9e36f12e46cbef7aaffd.css') }}" />

    <!-- Vendor Styles -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
@endsection

@section('scripts')
    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js%3Fid=0a520e103384b609e3c9eb3b732d1be8') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js%3Fid=f6bda588c16867a6cc4158cb4ed37ec6') }}">
    </script>
    <script src="{{ asset('assets/vendor/js/menu.js%3Fid=c6ce30ded4234d0c4ca0fb5f2a2990d8') }}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/js/main.js%3Fid=6bea3f2e092d5fe7327c226f3242f31b') }}"></script>
    <script src="{{ asset('assets/js/app-ecommerce-product-add.js') }}"></script>
@endsection
