@extends('layouts.login')
@section('title')
    {{ 'Forget password' }}
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
                        <p class="mb-4">Please enter your registered email address</p>

                        <form id="formAuthentication" class="mb-3" action="#" method="GET">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" autofocus>
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
