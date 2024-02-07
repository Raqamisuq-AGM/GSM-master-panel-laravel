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
                        <form id="formAccountPasswordSettings" method="POST"
                            action="{{ route('setting.update-password') }}" onsubmit="return false">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="newPassword" class="form-label">New Password</label>
                                    <input class="form-control" type="text" id="newPassword" name="newPassword"
                                        value="{{ old('newPassword') }}" placeholder="New Password" autofocus />
                                    @error('newPassword')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <input class="form-control" type="text" id="confirmPassword" name="confirmPassword"
                                        value="{{ old('confirmPassword') }}" placeholder="Confirm Password" />
                                    @error('confirmPassword')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2"
                                    onclick="document.getElementById('formAccountPasswordSettings').submit()">
                                    Update Password
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
