@extends('layouts.app')
@section('title')
    {{ 'Change password' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">New Password</label>
                                    <input class="form-control" type="text" id="firstName" name="firstName"
                                        value="" placeholder="New Password" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">Confirm Password</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        value="" placeholder="Confirm Password" />
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">
                                    Update Password
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
