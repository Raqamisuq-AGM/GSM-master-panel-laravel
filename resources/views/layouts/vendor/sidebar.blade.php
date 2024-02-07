@php
    $company = app(\App\Models\Company\Company::class)->get();
@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <!-- ! Hide app brand if navbar-full -->
    <div class="app-brand demo">
        <a href="{{ route('index') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/logo/' . $company[0]->logo) }}" alt="" style="width: 150px">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ request()->routeIs('index') ? 'active' : '' }}">
            <a href="{{ route('index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate">Dashboards</div>
            </a>
        </li>

        <li
            class="menu-item {{ request()->routeIs('category.all', 'category.add', 'category.edit', 'category.update') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                {{-- <i class="menu-icon tf-icons bx bx-layout"></i> --}}
                <i class='menu-icon tf-icons bx bx-list-ul'></i>
                <div class="text-truncate">Categories</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('category.add') ? 'active' : '' }}">
                    <a href="{{ route('category.add') }}" class="menu-link">
                        <div>Add new</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('category.all') ? 'active' : '' }}">
                    <a href="{{ route('category.all') }}" class="menu-link">
                        <div>All</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="menu-item {{ request()->routeIs('sub-category.all', 'sub-category.add', 'sub-category.edit', 'sub-category.update') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-list-plus'></i>
                <div class="text-truncate">Sub Categories</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('sub-category.add') ? 'active' : '' }}">
                    <a href="{{ route('sub-category.add') }}" class="menu-link">
                        <div>Add new</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('sub-category.all') ? 'active' : '' }}">
                    <a href="{{ route('sub-category.all') }}" class="menu-link">
                        <div>All</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="menu-item {{ request()->routeIs('product.all', 'product.add', 'product.edit', 'product.update') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-cart'></i>
                <div class="text-truncate">Products</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('product.add') ? 'active' : '' }}">
                    <a href="{{ route('product.add') }}" class="menu-link">
                        <div>Upload</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('product.all') ? 'active' : '' }}">
                    <a href="{{ route('product.all') }}" class="menu-link">
                        <div>All</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="menu-item {{ request()->routeIs('license.all', 'license.create', 'license.pending', 'license.suspended', 'license.edit', 'license.update', 'license.active', 'license.view') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-food-menu'></i>
                <div class="text-truncate">License</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('license.create') ? 'active' : '' }}">
                    <a href="{{ route('license.create') }}" class="menu-link">
                        <div>Create new</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('license.all') ? 'active' : '' }}">
                    <a href="{{ route('license.all') }}" class="menu-link">
                        <div>All</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('license.active') ? 'active' : '' }}">
                    <a href="{{ route('license.active') }}" class="menu-link">
                        <div>Active</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('license.pending') ? 'active' : '' }}">
                    <a href="{{ route('license.pending') }}" class="menu-link">
                        <div>Pending</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('license.suspended') ? 'active' : '' }}">
                    <a href="{{ route('license.suspended') }}" class="menu-link">
                        <div>Suspended</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="menu-item {{ request()->routeIs('user.all', 'user.view', 'user.active', 'user.pending', 'user.suspended', 'user.edit', 'user.update') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-user'></i>
                <div class="text-truncate">Users</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('user.all') ? 'active' : '' }}">
                    <a href="{{ route('user.all') }}" class="menu-link">
                        <div>All</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('user.active') ? 'active' : '' }}">
                    <a href="{{ route('user.active') }}" class="menu-link">
                        <div>Active</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('user.pending') ? 'active' : '' }}">
                    <a href="{{ route('user.pending') }}" class="menu-link">
                        <div>Pending</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('user.suspended') ? 'active' : '' }}">
                    <a href="{{ route('user.suspended') }}" class="menu-link">
                        <div>Suspended</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="menu-item {{ request()->routeIs('invoice.all', 'invoice.paid', 'invoice.pending', 'invoice.view') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-receipt'></i>
                <div class="text-truncate">Invoice</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('invoice.all') ? 'active' : '' }}">
                    <a href="{{ route('invoice.all') }}" class="menu-link">
                        <div>All</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('invoice.paid') ? 'active' : '' }}">
                    <a href="{{ route('invoice.paid') }}" class="menu-link">
                        <div>Paid</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('invoice.pending') ? 'active' : '' }}">
                    <a href="{{ route('invoice.pending') }}" class="menu-link">
                        <div>Pending</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="menu-item {{ request()->routeIs('ticket.all', 'ticket.answered', 'ticket.pending', 'ticket.closed', 'ticket.view') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-support'></i>
                <div class="text-truncate">Support ticket</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('ticket.all') ? 'active' : '' }}">
                    <a href="{{ route('ticket.all') }}" class="menu-link">
                        <div>All</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('ticket.pending') ? 'active' : '' }}">
                    <a href="{{ route('ticket.pending') }}" class="menu-link">
                        <div>Pending</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('ticket.answered') ? 'active' : '' }}">
                    <a href="{{ route('ticket.answered') }}" class="menu-link">
                        <div>Answered</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('ticket.closed') ? 'active' : '' }}">
                    <a href="{{ route('ticket.closed') }}" class="menu-link">
                        <div>Closed</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="menu-item {{ request()->routeIs('setting.company', 'setting.logo-fav', 'setting.seo', 'setting.change-password') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-cog'></i>
                <div class="text-truncate">Settings</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('setting.company') ? 'active' : '' }}">
                    <a href="{{ route('setting.company') }}" class="menu-link">
                        <div>Company</div>
                    </a>
                </li>
                {{-- <li class="menu-item {{ request()->routeIs('setting.logo-fav') ? 'active' : '' }}">
                    <a href="{{ route('setting.logo-fav') }}" class="menu-link">
                        <div>Logo & Fav</div>
                    </a>
                </li> --}}
                <li class="menu-item {{ request()->routeIs('setting.seo') ? 'active' : '' }}">
                    <a href="{{ route('setting.seo') }}" class="menu-link">
                        <div>SEO</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('setting.change-password') ? 'active' : '' }}">
                    <a href="{{ route('setting.change-password') }}" class="menu-link">
                        <div>Change Password</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->routeIs('logout') ? 'active' : '' }}">
            <a href="{{ route('logout') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-power-off'></i>
                <div class="text-truncate">Logout</div>
            </a>
        </li>
    </ul>
</aside>
