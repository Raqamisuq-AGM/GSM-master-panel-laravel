@extends('layouts.login')
@section('title')
    {{ 'verification Code' }}
@endsection
@section('content')
    <!-- Layout Content -->

    <!-- Content -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-2">Recover Password 👋</h4>
                        <p class="mb-4">Please check your mail inbox</p>

                        <form id="formAuthentication" class="mb-3" action="#" method="GET">
                            <div class="mb-3">
                                <label for="verificationCode" class="form-label">Verification Code</label>
                                <input type="text" class="form-control" id="verificationCode" name="verificationCode"
                                    placeholder="Enter verification code" autofocus>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>
    <!--/ Content -->

    <!--/ Layout Content -->
@endsection
