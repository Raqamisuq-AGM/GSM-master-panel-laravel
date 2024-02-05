@extends('layouts.app')
@section('title')
    {{ 'Add product' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="app-ecommerce">
            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1 mt-3">Add a new Product</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <button class="btn btn-label-secondary">Discard</button>
                    <button class="btn btn-label-primary">Save draft</button>
                    <button type="submit" class="btn btn-primary">
                        Publish product
                    </button>
                </div>
            </div>

            <div class="row">
                <!-- First column-->
                <div class="col-12 col-lg-8">
                    <!-- Product Information -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Product information</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-product-name">Name</label>
                                <input type="text" class="form-control" id="ecommerce-product-name"
                                    placeholder="Product title" name="productTitle" aria-label="Product title" />
                            </div>
                            <!-- Description -->
                            <div>
                                <label class="form-label">Description</label>
                                <div class="form-control p-0 pt-1">
                                    <div class="comment-toolbar border-0 border-bottom">
                                        <div class="d-flex justify-content-start">
                                            <span class="ql-formats me-0">
                                                <button class="ql-bold"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-underline"></button>
                                                <button class="ql-list" value="ordered"></button>
                                                <button class="ql-list" value="bullet"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="comment-editor border-0 pb-4" id="ecommerce-category-description"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Information -->
                    <!-- Media -->
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 card-title">Thumbnail</h5>
                        </div>
                        <div class="card-body">
                            <form action="#" class="dropzone needsclick" id="dropzone-basic">
                                <div class="dz-message needsclick my-5">
                                    <p class="fs-4 note needsclick my-2">
                                        Drag and drop your image here
                                    </p>
                                    <small class="text-muted d-block fs-6 my-2">or</small>
                                    <span class="note needsclick btn bg-label-primary d-inline" id="btnBrowse">Browse
                                        image</span>
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /Media -->
                    <!-- SEO Information -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">SEO</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="author">Author</label>
                                <input type="text" class="form-control" id="author" placeholder="shazib"
                                    name="author" aria-label="Author" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title_slogan">Title</label>
                                <input type="text" class="form-control" id="title_slogan" placeholder="Title"
                                    name="productTitle" aria-label="Title/Slogan" />
                            </div>
                            <!-- Description -->
                            <div>
                                <label class="form-label">Meta Description</label>
                                <textarea class="form-control" aria-label="With textarea" data-gramm="false" wt-ignore-input="true"
                                    data-quillbot-element="BRMw-EL30SE9sNAVLeCFM"></textarea>
                            </div>
                            <!-- Tags -->
                            <div class="mb-3 mt-3">
                                <label for="ecommerce-product-tags" class="form-label mb-1">Keywords</label>
                                <input id="ecommerce-product-tags" class="form-control" name="ecommerce-product-tags"
                                    value="Normal,Standard,Premium" aria-label="Product Tags" />
                            </div>
                        </div>
                    </div>
                    <!-- /SEO Information -->
                </div>
                <!-- /Second column -->

                <!-- Second column -->
                <div class="col-12 col-lg-4">
                    <!-- Pricing Card -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Pricing</h5>
                        </div>
                        <div class="card-body">
                            <!-- Base Price -->
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-product-price">Base Price</label>
                                <input type="number" class="form-control" id="ecommerce-product-price"
                                    placeholder="Price" name="productPrice" aria-label="Product price" />
                            </div>
                            <!-- Discounted Price -->
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-product-discount-price">Discounted Price</label>
                                <input type="number" class="form-control" id="ecommerce-product-discount-price"
                                    placeholder="Discounted Price" name="productDiscountedPrice"
                                    aria-label="Product discounted price" />
                            </div>
                            <!-- Charge tax check box -->
                            {{-- <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="price-charge-tax"
                                    checked />
                                <label class="form-label" for="price-charge-tax">
                                    Charge tax on this product
                                </label>
                            </div> --}}
                            <!-- Instock switch -->
                            {{-- <div class="d-flex justify-content-between align-items-center border-top pt-3">
                                <span class="mb-0 h6">In stock</span>
                                <div class="w-25 d-flex justify-content-end">
                                    <label class="switch switch-primary switch-sm me-4 pe-2">
                                        <input type="checkbox" class="switch-input" checked="" />
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on">
                                                <span class="switch-off"></span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <!-- /Pricing Card -->
                    <!-- Organize Card -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Organize</h5>
                        </div>
                        <div class="card-body">
                            <!-- Vendor -->
                            {{-- <div class="mb-3 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1" for="vendor">
                                    Vendor
                                </label>
                                <select id="vendor" class="select2 form-select" data-placeholder="Select Vendor">
                                    <option value="">Select Vendor</option>
                                    <option value="men-clothing">Men's Clothing</option>
                                    <option value="women-clothing">
                                        Women's-clothing
                                    </option>
                                    <option value="kid-clothing">Kid's-clothing</option>
                                </select>
                            </div> --}}
                            <!-- Category -->
                            <div class="mb-3 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1 d-flex justify-content-between align-items-center"
                                    for="category-org">
                                    <span>Category</span><a href="javascript:void(0);" class="fw-medium">Add new
                                        category</a>
                                </label>
                                <select id="category-org" class="select2 form-select" data-placeholder="Select Category">
                                    <option value="">Select Category</option>
                                    <option value="Household">Household</option>
                                    <option value="Management">Management</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Office">Office</option>
                                    <option value="Automotive">Automotive</option>
                                </select>
                            </div>
                            <!-- Sub category -->
                            <div class="mb-3 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1" for="collection">Collection
                                </label>
                                <select id="collection" class="select2 form-select" data-placeholder="Collection">
                                    <option value="">Sub category</option>
                                    <option value="men-clothing">Men's Clothing</option>
                                    <option value="women-clothing">
                                        Women's-clothing
                                    </option>
                                    <option value="kid-clothing">Kid's-clothing</option>
                                </select>
                            </div>
                            <!-- Status -->
                            <div class="mb-3 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1" for="status-org">Status
                                </label>
                                <select id="status-org" class="select2 form-select" data-placeholder="Published">
                                    <option value="">Published</option>
                                    <option value="Published">Published</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                            <!-- Tags -->
                            <div class="mb-3">
                                <label for="ecommerce-product-tags" class="form-label mb-1">Tags</label>
                                <input id="ecommerce-product-tags" class="form-control" name="ecommerce-product-tags"
                                    value="Normal,Standard,Premium" aria-label="Product Tags" />
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
