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
                    {{-- <button class="btn btn-label-secondary">Discard</button>
                    <button class="btn btn-label-primary">Save draft</button> --}}
                    <button type="submit" class="btn btn-primary"
                        onclick="document.getElementById('addProductForm').submit()">
                        Publish
                    </button>
                </div>
            </div>

            <form id="addProductForm" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
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
                                        placeholder="Product title" name="productTitle" aria-label="Product title"
                                        value="{{ old('productTitle') }}" />
                                    @error('productTitle')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Description -->
                                <div>
                                    <label class="form-label">Description</label>
                                    <textarea id="editor" class="form-control" aria-label="With textarea" data-gramm="false" wt-ignore-input="true"
                                        data-quillbot-element="BRMw-EL30SE9sNAVLeCFM" name="productDescription">{{ old('productDescription') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Information -->
                        <!-- SEO Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-tile mb-0">SEO</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="author">Author</label>
                                    <input type="text" class="form-control" id="author" placeholder="jon doe"
                                        name="author" aria-label="Author" value="{{ old('author') }}" />
                                    @error('author')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="title_slogan">Title</label>
                                    <input type="text" class="form-control" id="title_slogan" placeholder="Title"
                                        name="productSEoTitle" aria-label="Title/Slogan"
                                        value="{{ old('productSEoTitle') }}" />
                                    @error('productSEoTitle')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Description -->
                                <div>
                                    <label class="form-label">Meta Description</label>
                                    <textarea class="form-control" aria-label="With textarea" data-gramm="false" wt-ignore-input="true"
                                        data-quillbot-element="BRMw-EL30SE9sNAVLeCFM" name="metaDescription">{{ old('metaDescription') }}</textarea>
                                    @error('metaDescription')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Tags -->
                                <div class="mb-3 mt-3">
                                    <label for="ecommerce-product-tags" class="form-label mb-1">Keywords</label>
                                    <input id="ecommerce-product-tags" class="form-control" name="keywords"
                                        value="{{ old('keywords') }}" aria-label="Product Tags" />
                                    @error('keywords')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
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
                                    <label class="form-label" for="ecommerce-product-price">Price</label>
                                    <input type="text" class="form-control" id="ecommerce-product-price"
                                        placeholder="Price" name="price" aria-label="Product price"
                                        value="{{ old('price') }}">
                                    @error('price')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- /Pricing Card -->
                        <!-- Organize Card -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Organize</h5>
                            </div>
                            <div class="card-body">
                                <!-- Category -->
                                <div class="mb-3 col ecommerce-select2-dropdown">
                                    <label class="form-label mb-1 d-flex justify-content-between align-items-center"
                                        for="category-org">
                                        <span>Category</span>
                                    </label>
                                    <select id="category-org" class="select2 form-select"
                                        data-placeholder="Select Category" value="{{ old('category') }}"
                                        name="category">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category') == $category->id ? 'selected' : '' }}>
                                                {{ $category->category }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Sub category -->
                                <div class="mb-3 col ecommerce-select2-dropdown">
                                    <label class="form-label mb-1" for="collection">Sub Category
                                    </label>
                                    <select id="collection" class="select2 form-select" data-placeholder="Sub Category"
                                        name="subCategory" value="{{ old('subCategory') }}">
                                        <option value="">Select Sub Category</option>
                                        @foreach ($subCategories as $subCategorie)
                                            <option value="{{ $subCategorie->id }}"
                                                {{ old('subCategory') == $subCategorie->id ? 'selected' : '' }}>
                                                {{ $subCategorie->sub_category }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('subCategory')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Status -->
                                <div class="mb-3 col ecommerce-select2-dropdown">
                                    <label class="form-label mb-1" for="status-org">Status
                                    </label>
                                    <select id="status-org" class="select2 form-select" data-placeholder="Published"
                                        name="status">
                                        <option value="">Select Status</option>
                                        <option value="published">Published</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    @error('status')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Upload thumbnail -->
                            <div class="card-body">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img src="{{ asset('assets/img/product/5.png') }}" alt="user-avatar"
                                        class="d-block rounded" height="100" width="100"
                                        id="uploadedProductThumb" />
                                    <div class="button-wrapper">
                                        <label for="ProductThumb" class="btn btn-primary me-2 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block">Upload Thumbnail</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="ProductThumb" class="account-file-input" hidden
                                                accept="image/png, image/jpeg" name="ProductThumb" />
                                        </label>

                                        <p class="text-muted mb-0">
                                            Allowed JPG, GIF or PNG. Max size of 800K
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Upload product file -->
                            <div class="card-body">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img src="{{ asset('assets/img/product/5.png') }}" alt="user-avatar"
                                        class="d-block rounded" height="100" width="100"
                                        id="uploadedProductFile" />
                                    <div class="button-wrapper">
                                        <label for="ProductFile" class="btn btn-primary me-2 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block">Upload product file</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="ProductFile" class="account-file-input" hidden
                                                accept="image/png, image/jpeg" name="ProductFile" />
                                        </label>

                                        <p class="text-muted mb-0">
                                            Allowed JPG, GIF or PNG. Max size of 800K
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Organize Card -->
                    </div>
                    <!-- /Second column -->
                </div>
            </form>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: '{{ route('ckeditor.file') . '?_token=' . csrf_token() }}'
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
