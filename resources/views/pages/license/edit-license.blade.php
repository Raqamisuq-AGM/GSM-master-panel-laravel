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
                    <a href="{{ route('license.all') }}" class="btn btn-label-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary"
                        onclick="document.getElementById('updateLicenseForm').submit()">
                        Update
                    </button>
                </div>
            </div>

            <div class="row">

                <!-- Second column -->
                <div class="col-12 col-lg-12">
                    <!-- Display validation errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error:</strong> Please fix the following issues:
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form id="updateLicenseForm" action="{{ route('license.update', ['id' => $license->id]) }}"
                        method="POST">
                        @csrf
                        <!-- Use the PUT method for updating -->
                        @method('PUT')
                        <!-- Organize Card -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <!-- Vendor -->
                                <div class="mb-3 col ecommerce-select2-dropdown">
                                    <label class="form-label mb-1" for="vendor">
                                        User
                                    </label>
                                    <select id="vendor" class="select2 form-select" data-placeholder="Select user"
                                        name="user" disabled>
                                        <option value="">Select user</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ $user->id == $license->user->id ? 'selected' : '' }}>
                                                {{ $user->first_name . ' ' . $user->last_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('user')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Category -->
                                <div class="mb-3 col ecommerce-select2-dropdown">
                                    <label class="form-label mb-1 d-flex justify-content-between align-items-center"
                                        for="category-org">
                                        <span>Product</span>
                                    </label>
                                    <select id="category-org" class="select2 form-select" data-placeholder="Select product"
                                        name="product" disabled>
                                        <option value="">Select Product</option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}"
                                                {{ $product->id == $license->product->id ? 'selected' : '' }}>
                                                {{ $product->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('product')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Sub category -->
                                <div class="mb-3 col ecommerce-select2-dropdown">
                                    <label class="form-label mb-1" for="collection">Package
                                    </label>
                                    <select id="status-org" class="select2 form-select" data-placeholder="Select package"
                                        name="package" disabled>
                                        <option value="">Select package</option>
                                        <option value="1" {{ $license->package == '1' ? 'selected' : '' }}>Monthly
                                        </option>
                                        <option value="6" {{ $license->package == '6' ? 'selected' : '' }}>Half
                                            yearly
                                        </option>
                                        <option value="12" {{ $license->package == '12' ? 'selected' : '' }}>
                                            Yearly</option>
                                    </select>
                                    @error('package')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="domain" class="form-label">Domain</label>
                                    <input class="form-control" type="text" id="domain" name="domain"
                                        value="{{ $license->domain_reg }}" placeholder="example.com" disabled />
                                </div>
                                <!-- Status -->
                                <div class="mb-3 col ecommerce-select2-dropdown">
                                    <label class="form-label mb-1" for="status-org">Status
                                    </label>
                                    <select id="status-org" class="select2 form-select" data-placeholder="Select status"
                                        name="status">
                                        option value="">Select status</option>
                                        <option value="active" {{ $license->status == 'active' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="pending" {{ $license->status == 'pending' ? 'selected' : '' }}>
                                            Pending
                                        </option>
                                        <option value="suspended" {{ $license->status == 'suspended' ? 'selected' : '' }}>
                                            Suspended</option>
                                    </select>
                                    @error('status')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- /Organize Card -->
                    </form>
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
