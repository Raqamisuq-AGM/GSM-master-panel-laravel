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
                    <!-- Account -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt="user-avatar"
                                        class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                    <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block">Upload Logo</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="upload" class="account-file-input" hidden
                                                accept="image/png, image/jpeg" />
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
                                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt="user-avatar"
                                        class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                    <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block">Upload Favicon</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="upload" class="account-file-input" hidden
                                                accept="image/png, image/jpeg" />
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
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">Company Name</label>
                                    <input class="form-control" type="text" id="firstName" name="firstName"
                                        value="Company Name" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        value="john.doe@example.com" placeholder="john.doe@example.com" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        {{-- <span class="input-group-text">US (+1)</span> --}}
                                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                            placeholder="202 555 0111" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="whatsappNo">Whatsapp</label>
                                    <div class="input-group input-group-merge">
                                        {{-- <span class="input-group-text">US (+1)</span> --}}
                                        <input type="text" id="whatsappNo" name="phoneNumber" class="form-control"
                                            placeholder="202 555 0111" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="telegramId">Telegram ID</label>
                                    <div class="input-group input-group-merge">
                                        {{-- <span class="input-group-text">US (+1)</span> --}}
                                        <input type="text" id="telegramId" name="phoneNumber" class="form-control"
                                            placeholder="202ki" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Address" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">State</label>
                                    <input class="form-control" type="text" id="state" name="state"
                                        placeholder="California" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="zipCode" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="zipCode" name="zipCode"
                                        placeholder="231465" maxlength="6" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="country">Country</label>
                                    <select id="country" class="select2 form-select">
                                        <option value="">Select</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">
                                            United Arab Emirates
                                        </option>
                                        <option value="United Kingdom">
                                            United Kingdom
                                        </option>
                                        <option value="United States">
                                            United States
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="language" class="form-label">Language</label>
                                    <select id="language" class="select2 form-select">
                                        <option value="">Select Language</option>
                                        <option value="en">English</option>
                                        <option value="fr">French</option>
                                        <option value="de">German</option>
                                        <option value="pt">Portuguese</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="timeZones" class="form-label">Timezone</label>
                                    <select id="timeZones" class="select2 form-select">
                                        <option value="">Select Timezone</option>
                                        <option value="-12">
                                            (GMT-12:00) International Date Line West
                                        </option>
                                        <option value="-11">
                                            (GMT-11:00) Midway Island, Samoa
                                        </option>
                                        <option value="-10">(GMT-10:00) Hawaii</option>
                                        <option value="-9">(GMT-09:00) Alaska</option>
                                        <option value="-8">
                                            (GMT-08:00) Pacific Time (US & Canada)
                                        </option>
                                        <option value="-8">
                                            (GMT-08:00) Tijuana, Baja California
                                        </option>
                                        <option value="-7">(GMT-07:00) Arizona</option>
                                        <option value="-7">
                                            (GMT-07:00) Chihuahua, La Paz, Mazatlan
                                        </option>
                                        <option value="-7">
                                            (GMT-07:00) Mountain Time (US & Canada)
                                        </option>
                                        <option value="-6">
                                            (GMT-06:00) Central America
                                        </option>
                                        <option value="-6">
                                            (GMT-06:00) Central Time (US & Canada)
                                        </option>
                                        <option value="-6">
                                            (GMT-06:00) Guadalajara, Mexico City, Monterrey
                                        </option>
                                        <option value="-6">
                                            (GMT-06:00) Saskatchewan
                                        </option>
                                        <option value="-5">
                                            (GMT-05:00) Bogota, Lima, Quito, Rio Branco
                                        </option>
                                        <option value="-5">
                                            (GMT-05:00) Eastern Time (US & Canada)
                                        </option>
                                        <option value="-5">
                                            (GMT-05:00) Indiana (East)
                                        </option>
                                        <option value="-4">
                                            (GMT-04:00) Atlantic Time (Canada)
                                        </option>
                                        <option value="-4">
                                            (GMT-04:00) Caracas, La Paz
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">
                                    Update
                                </button>
                                <button type="reset" class="btn btn-label-secondary">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
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
