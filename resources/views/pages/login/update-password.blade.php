@extends('layouts.login')
@section('title')
    {{ 'Update password' }}
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
                        <p class="mb-4">Please enter your new password</p>

                        <form id="formAuthentication" class="mb-3" action="#" method="GET">
                            <div class="mb-3">
                                <label for="password" class="form-label">New Password</label>
                                <input type="text" class="form-control" id="password" name="password"
                                    placeholder="Enter your new password" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="text" class="form-control" id="confirmPassword" name="confirmPassword"
                                    placeholder="Enter your confirm password" autofocus>
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
