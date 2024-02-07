@php
    $notifications = app(\App\Models\Company\CompanyNotification::class)
        ->take(10)
        ->get();
    $notificationCount = app(\App\Models\Company\CompanyNotification::class)
        ->where('status', 'unread')
        ->count();
@endphp

<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <!--  Brand demo (display only for navbar-full and hide on below xl) -->

    <!-- ! Not required for layout-without-menu -->
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Style Switcher -->
            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="bx bx-sm"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                            <span class="align-middle"><i class="bx bx-sun me-2"></i>Light</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                            <span class="align-middle"><i class="bx bx-moon me-2"></i>Dark</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                            <span class="align-middle"><i class="bx bx-desktop me-2"></i>System</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ Style Switcher -->

            <!-- Notification -->
            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" aria-expanded="false">
                    <i class="bx bx-bell bx-sm"></i>
                    @if ($notificationCount > 0)
                        <span class="badge bg-danger rounded-pill badge-notifications">
                            {{ $notificationCount }}
                        </span>
                    @endif
                </a>
                <ul class="dropdown-menu dropdown-menu-end py-0">
                    <li class="dropdown-menu-header border-bottom">
                        <div class="dropdown-header d-flex align-items-center py-3">
                            <h5 class="text-body mb-0 me-auto">Notification</h5>
                            <a href="{{ route('notifications.mark-all-as-read') }}"
                                class="dropdown-notifications-all text-body" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Mark all as read"><i
                                    class="bx fs-4 bx-envelope-open"></i></a>
                        </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container">
                        <ul class="list-group list-group-flush">
                            @forelse ($notifications as $notification)
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="{{ asset('assets/img/avatars/' . $notification->icon) }}" alt
                                                    class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">{{ $notification->title }}</h6>
                                            <p class="mb-0">
                                                {{ $notification->short_desc }}
                                            </p>
                                            <small class="text-muted">1h ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="#" class="dropdown-notifications-read"><span
                                                    class="badge
                                                    @if ($notification->status == 'read') @elseif($notification->status == 'unread') badge-dot @endif
                                                    "></span></a>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">

                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">No notification found yet</h6>
                                        </div>
                                    </div>
                                </li>
                            @endforelse
                        </ul>
                    </li>
                    <li class="dropdown-menu-footer border-top p-3">
                        <a href="{{ route('notifications.all') }}" class="btn btn-primary text-uppercase w-100">
                            view all notifications
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ Notification -->
        </ul>
    </div>
</nav>
<!-- / Navbar -->
