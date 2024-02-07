@extends('layouts.app')
@section('title')
    {{ 'Company Detail' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <form id="formCompanySettings" action="{{ route('setting.update-company') }}" method="POST"
                        onsubmit="return false" enctype="multipart/form-data">
                        @csrf
                        <!-- Account -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        <img src="{{ asset('assets/img/logo/' . $company[0]->logo) }}" alt="user-avatar"
                                            class="d-block rounded" height="100" width="100" id="uploadedLogo" />
                                        <div class="button-wrapper">
                                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                <span class="d-none d-sm-block">Upload Logo</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="upload" class="account-file-input" hidden
                                                    accept="image/png, image/jpeg" name="logo" />
                                            </label>

                                            <p class="text-muted mb-0">
                                                Allowed JPG, GIF or PNG. Max size of 800K
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        <img src="{{ asset('assets/img/logo/' . $company[0]->favicon) }}" alt="user-avatar"
                                            class="d-block rounded" height="100" width="100" id="uploadedFav" />
                                        <div class="button-wrapper">
                                            <label for="fav" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                <span class="d-none d-sm-block">Upload Favicon</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="fav" class="account-file-input" hidden
                                                    accept="image/png, image/jpeg" name="fav" />
                                            </label>

                                            <p class="text-muted mb-0">
                                                Allowed JPG, GIF or PNG. Max size of 800K
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="company_name" class="form-label">Company Name</label>
                                    <input class="form-control" type="text" id="company_name" name="company_name"
                                        value="{{ $company[0]->company_name }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        value="{{ $company[0]->email }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phon">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        {{-- <span class="input-group-text">US (+1)</span> --}}
                                        <input type="text" id="phon" name="phon" class="form-control"
                                            value="{{ $company[0]->phon }}" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="whatsapp">Whatsapp</label>
                                    <div class="input-group input-group-merge">
                                        {{-- <span class="input-group-text">US (+1)</span> --}}
                                        <input type="text" id="whatsapp" name="whatsapp" class="form-control"
                                            value="{{ $company[0]->whatsapp }}" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="telegram_id">Telegram ID</label>
                                    <div class="input-group input-group-merge">
                                        {{-- <span class="input-group-text">US (+1)</span> --}}
                                        <input type="text" id="telegram_id" name="telegram_id" class="form-control"
                                            value="{{ $company[0]->telegram_id }}" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="{{ $company[0]->address }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">State</label>
                                    <input class="form-control" type="text" id="state" name="state"
                                        value="{{ $company[0]->state }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="zip" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="zip" name="zip"
                                        value="{{ $company[0]->zip }}" maxlength="6" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="country">Country</label>
                                    <select id="country" name="country" value="{{ $company[0]->country }}"
                                        class="select2 form-select">
                                        <option value="">Select</option>
                                        <option value="Australia"
                                            {{ $company[0]->country == 'Australia' ? 'selected' : '' }}>Australia
                                        </option>
                                        <option value="Bangladesh"
                                            {{ $company[0]->country == 'Bangladesh' ? 'selected' : '' }}>Bangladesh
                                        </option>
                                        <option value="Belarus" {{ $company[0]->country == 'Belarus' ? 'selected' : '' }}>
                                            Belarus
                                        </option>
                                        <option value="Brazil" {{ $company[0]->country == 'Brazil' ? 'selected' : '' }}>
                                            Brazil
                                        </option>
                                        <option value="Canada" {{ $company[0]->country == 'Canada' ? 'selected' : '' }}>
                                            Canada
                                        </option>
                                        <option value="China" {{ $company[0]->country == 'China' ? 'selected' : '' }}>
                                            China
                                        </option>
                                        <option value="France" {{ $company[0]->country == 'France' ? 'selected' : '' }}>
                                            France
                                        </option>
                                        <option value="Germany" {{ $company[0]->country == 'Germany' ? 'selected' : '' }}>
                                            Germany
                                        </option>
                                        <option value="India" {{ $company[0]->country == 'India' ? 'selected' : '' }}>
                                            India
                                        </option>
                                        <option value="Indonesia"
                                            {{ $company[0]->country == 'Indonesia' ? 'selected' : '' }}>Indonesia
                                        </option>
                                        <option value="Israel" {{ $company[0]->country == 'Israel' ? 'selected' : '' }}>
                                            Israel
                                        </option>
                                        <option value="Italy" {{ $company[0]->country == 'Italy' ? 'selected' : '' }}>
                                            Italy
                                        </option>
                                        <option value="Japan" {{ $company[0]->country == 'Japan' ? 'selected' : '' }}>
                                            Japan
                                        </option>
                                        <option value="Korea" {{ $company[0]->country == 'Korea' ? 'selected' : '' }}>
                                            Korea,
                                            Republic of</option>
                                        <option value="Mexico" {{ $company[0]->country == 'Mexico' ? 'selected' : '' }}>
                                            Mexico
                                        </option>
                                        <option value="Philippines"
                                            {{ $company[0]->country == 'Philippines' ? 'selected' : '' }}>
                                            Philippines</option>
                                        <option value="Russia" {{ $company[0]->country == 'Russia' ? 'selected' : '' }}>
                                            Russian
                                            Federation</option>
                                        <option value="South Africa"
                                            {{ $company[0]->country == 'South Africa' ? 'selected' : '' }}>South
                                            Africa</option>
                                        <option value="Thailand"
                                            {{ $company[0]->country == 'Thailand' ? 'selected' : '' }}>Thailand
                                        </option>
                                        <option value="Turkey" {{ $company[0]->country == 'Turkey' ? 'selected' : '' }}>
                                            Turkey
                                        </option>
                                        <option value="Ukraine" {{ $company[0]->country == 'Ukraine' ? 'selected' : '' }}>
                                            Ukraine
                                        </option>
                                        <option value="United Arab Emirates"
                                            {{ $company[0]->country == 'United Arab Emirates' ? 'selected' : '' }}>
                                            United Arab Emirates
                                        </option>
                                        <option value="United Kingdom"
                                            {{ $company[0]->country == 'United Kingdom' ? 'selected' : '' }}>
                                            United Kingdom
                                        </option>
                                        <option value="United States"
                                            {{ $company[0]->country == 'United States' ? 'selected' : '' }}>
                                            United States
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="language" class="form-label">Language</label>
                                    <select id="language" name="language" class="select2 form-select"
                                        value="{{ $company[0]->language }}">
                                        <option value="">Select Language</option>
                                        <option value="en" {{ $company[0]->language == 'en' ? 'selected' : '' }}>
                                            English</option>
                                        <option value="bn" {{ $company[0]->language == 'bn' ? 'selected' : '' }}>
                                            Bangla</option>
                                        <option value="fr" {{ $company[0]->language == 'fr' ? 'selected' : '' }}>
                                            French</option>
                                        <option value="de" {{ $company[0]->language == 'de' ? 'selected' : '' }}>
                                            German</option>
                                        <option value="pt" {{ $company[0]->language == 'pt' ? 'selected' : '' }}>
                                            Portuguese</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2"
                                    onclick="document.getElementById('formCompanySettings').submit()">
                                    Update
                                </button>
                            </div>
                        </div>
                        <!-- /Account -->
                    </form>
                </div>
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
