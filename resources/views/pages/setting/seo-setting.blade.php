@extends('layouts.app')
@section('title')
    {{ 'SEO setting' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="app-ecommerce">
            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column justify-content-center">
                    {{-- <h4 class="mb-1 mt-3">Add a new Product</h4> --}}
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <button class="btn btn-label-primary">Update</button>
                </div>
            </div>

            <div class="row">
                <!-- First column-->
                <div class="col-12 col-lg-12">
                    <!-- Product Information -->
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
                                <div class="form-control p-0 pt-1">
                                    <div class="comment-toolbar border-0 border-bottom">
                                        <div class="d-flex justify-content-start">
                                            <span class="ql-formats me-0">
                                                <button class="ql-bold"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-underline"></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="comment-editor border-0 pb-4" id="ecommerce-category-description"></div>
                                </div>
                            </div>
                            <!-- Tags -->
                            <div class="mb-3 mt-3">
                                <label for="ecommerce-product-tags" class="form-label mb-1">Keywords</label>
                                <input id="ecommerce-product-tags" class="form-control" name="ecommerce-product-tags"
                                    value="Normal,Standard,Premium" aria-label="Product Tags" />
                            </div>
                        </div>
                    </div>
                    <!-- /Product Information -->
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
