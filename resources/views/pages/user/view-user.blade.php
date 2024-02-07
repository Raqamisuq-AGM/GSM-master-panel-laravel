@extends('layouts.app')
@section('title')
    {{ 'View user' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- User Sidebar -->
            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class="d-flex align-items-center flex-column">
                                <img class="img-fluid rounded my-4" src="{{ asset('assets/img/user/' . $user[0]->avatar) }}"
                                    height="110" width="110" alt="User avatar" />
                                <div class="user-info text-center">
                                    <h4 class="mb-2">{{ $user[0]->first_name . ' ' . $user[0]->last_name }}</h4>
                                    {{-- <span class="badge bg-label-secondary">Author</span> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="d-flex justify-content-around flex-wrap my-4 py-3">
                            <div class="d-flex align-items-start me-4 mt-3 gap-3">
                                <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-check bx-sm"></i></span>
                                <div>
                                    <h5 class="mb-0">1.23k</h5>
                                    <span>Tasks Done</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mt-3 gap-3">
                                <span class="badge bg-label-primary p-2 rounded"><i
                                        class="bx bx-customize bx-sm"></i></span>
                                <div>
                                    <h5 class="mb-0">568</h5>
                                    <span>Projects Done</span>
                                </div>
                            </div>
                        </div> --}}
                        <h5 class="pb-2 border-bottom mb-4"></h5>
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Username:</span>
                                    <span>{{ $user[0]->user_name }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Email:</span>
                                    <span>{{ $user[0]->email }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Status:</span>
                                    <span
                                        class="badge @if ($user[0]->status == 'active') bg-label-success
                                        @elseif($user[0]->status == 'pending')
                                        bg-label-warning
                                        @elseif($user[0]->status == 'suspended') bg-label-danger @endif">{{ $user[0]->status }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Phone:</span>
                                    <span>{{ $user[0]->phon }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Whatsapp:</span>
                                    <span>{{ $user[0]->Whatsapp }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Telegram Id:</span>
                                    <span>{{ $user[0]->telegram_id }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Instagram Id:</span>
                                    <span>{{ $user[0]->ig_id }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Linkedin Id:</span>
                                    <span>{{ $user[0]->linkedin_id }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Facebook Id:</span>
                                    <span>{{ $user[0]->fb_id }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Twitter Id:</span>
                                    <span>{{ $user[0]->twitter_id }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Address:</span>
                                    <span>{{ $user[0]->address }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">State:</span>
                                    <span>{{ $user[0]->state }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">City:</span>
                                    <span>{{ $user[0]->city }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Country:</span>
                                    <span>{{ $user[0]->country }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Languages:</span>
                                    <span>{{ $user[0]->language }}</span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center pt-3">
                                @if ($user[0]->status == 'active')
                                    <a href="#" class="btn btn-label-danger suspend-user me-2" data-bs-toggle="modal"
                                        data-bs-target="#suspendUserModal" data-category-id="{{ $user[0]->id }}"
                                        onclick="document.getElementById('suspendUserID').value = {{ $user[0]->id }}">
                                        Suspend
                                    </a>
                                @elseif($user[0]->status == 'pending')
                                    <a href="#" class="btn btn-label-success suspend-user" href="#"
                                        data-bs-toggle="modal" data-bs-target="#activeUser"
                                        data-category-id="{{ $user[0]->id }}"
                                        onclick="document.getElementById('userID').value = {{ $user[0]->id }}">
                                        Activate
                                    </a>
                                @elseif($user[0]->status == 'suspended')
                                    <a href="#" class="btn btn-label-success suspend-user" href="#"
                                        data-bs-toggle="modal" data-bs-target="#activeUser"
                                        data-category-id="{{ $user[0]->id }}"
                                        onclick="document.getElementById('userID').value = {{ $user[0]->id }}">
                                        Activate
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /User Card -->
            </div>
            <!--/ User Sidebar -->

            <!-- User Content -->
            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">

                <!-- Project table -->
                <div class="card mb-4">
                    <h5 class="card-header">User's License List</h5>
                    <div class="table-responsive mb-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Thumb</th>
                                    <th>Product</th>
                                    <th>Package</th>
                                    <th>Created at</th>
                                    <th>Next Due</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($user[0]->licenses as $license)
                                    <tr>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">
                                                    <img src="{{ asset('assets/img/product/' . $license->product->thumb) }}"
                                                        alt="Avatar" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td>{{ $license->product->title }}</td>
                                        <td>
                                            @if ($license->package == '1')
                                                monthly
                                            @elseif($license->package == '6')
                                                half yearly
                                            @elseif($license->package == '12')
                                                yealy
                                            @endif
                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($license->created_at)->format('d-m-y h:i A') }}
                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($license->next_due)->format('d-m-y h:i A') }}
                                        </td>
                                        <td>
                                            <span
                                                class="badge
                                                @if ($license->status == 'active') bg-label-success
                                                @elseif($license->status == 'pending')
                                                bg-label-warning
                                                @elseif($license->status == 'suspended')
                                                bg-label-danger @endif }} me-1">{{ $license->status }}</span>
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ route('license.edit', ['id' => $license->id]) }}"
                                                style="margin-right: 15px">
                                                <i class="bx bx-edit-alt me-1"></i>
                                            </a>
                                            <a href="{{ route('license.view', ['id' => $license->id]) }}"
                                                style="margin-right: 15px">
                                                <i class="bx bx-show me-1"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteItem"
                                                data-category-id="{{ $license->id }}"
                                                onclick="document.getElementById('ItemID').value = {{ $license->id }}">
                                                <i class="bx bx-trash me-1"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No license found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /Project table -->
            </div>
            <!--/ User Content -->
        </div>

        <!-- Suspend Item Modal -->
        <div class="modal fade" id="suspendUserModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-5">Suspend this user</h3>
                        </div>
                        <form id="suspendUserForm" class="row g-3" method="POST"
                            action="{{ route('user.update-status') }}">
                            @csrf
                            <input type="hidden" name="suspendUserID" id="suspendUserID">
                            <input type="hidden" name="status" id="status" value="suspended">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">
                                    Yes
                                </button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Suspend Item Modal -->

        <!-- Active Item Modal -->
        <div class="modal fade" id="activeUser" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-5">Active this user</h3>
                        </div>
                        <form id="activeUserForm" class="row g-3" method="POST"
                            action="{{ route('user.update-status') }}">
                            @csrf
                            <input type="hidden" name="userID" id="userID">
                            <input type="hidden" name="status" id="status" value="active">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">
                                    Yes
                                </button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Active Item Modal -->

        <!-- Delete Item Modal -->
        <div class="modal fade" id="deleteItem" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-5">Delete this item</h3>
                        </div>
                        <form id="deleteItemForm" class="row g-3" method="POST"
                            action="{{ route('license.delete') }}">
                            @csrf
                            <input type="hidden" name="ItemID" id="ItemID">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">
                                    Yes
                                </button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Delete Item Modal -->
    </div>
    <!-- / Content -->
@endsection
