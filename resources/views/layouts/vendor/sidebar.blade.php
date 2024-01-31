  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="{{ route('setting.company') }}" class="d-block">Alexander Pierce</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="{{ route('index') }}" class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li
                      class="nav-item  {{ request()->routeIs('category.all', 'category.add', 'category.edit', 'category.update') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('category.all', 'category.add', 'category.edit', 'category.update') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-th-list"></i>
                          <p>
                              Category
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('category.add') }}"
                                  class="nav-link {{ request()->routeIs('category.add') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add new</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('category.all') }}"
                                  class="nav-link {{ request()->routeIs('category.all') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item  {{ request()->routeIs('sub-category.all', 'sub-category.add', 'sub-category.edit', 'sub-category.update') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('sub-category.all', 'sub-category.add', 'sub-category.edit', 'sub-category.update') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tasks"></i>
                          <p>
                              Sub category
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('sub-category.add') }}"
                                  class="nav-link {{ request()->routeIs('sub-category.add') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add new</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('sub-category.all') }}"
                                  class="nav-link {{ request()->routeIs('sub-category.all') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item  {{ request()->routeIs('product.all', 'product.add', 'product.edit', 'product.update') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('product.all', 'product.add', 'product.edit', 'product.update') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-shopping-cart"></i>
                          <p>
                              Products
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('product.add') }}"
                                  class="nav-link {{ request()->routeIs('product.add') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Upload</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('product.all') }}"
                                  class="nav-link {{ request()->routeIs('product.all') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item {{ request()->routeIs('license.all', 'license.create', 'license.pending', 'license.suspended', 'license.edit', 'license.update', 'license.active') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('license.all', 'license.create', 'license.pending', 'license.suspended', 'license.edit', 'license.update', 'license.active') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-clipboard-list"></i>
                          <p>
                              License
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li
                              class="nav-item {{ request()->routeIs('license.all', 'license.create', 'license.pending', 'license.suspended', 'license.edit', 'license.update', 'license.active') ? 'active' : '' }}">
                              <a href="{{ route('license.create') }}"
                                  class="nav-link {{ request()->routeIs('license.create') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Create new</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('license.all') }}"
                                  class="nav-link {{ request()->routeIs('license.all') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('license.active') }}"
                                  class="nav-link {{ request()->routeIs('license.active') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Active</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('license.pending') }}"
                                  class="nav-link {{ request()->routeIs('license.pending') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Pending</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('license.suspended') }}"
                                  class="nav-link {{ request()->routeIs('license.suspended') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Suspended</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item {{ request()->routeIs('user.all', 'user.active', 'user.pending', 'user.suspended', 'user.edit', 'user.update') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('user.all', 'user.active', 'user.pending', 'user.suspended', 'user.edit', 'user.update') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              Users
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('user.all') }}"
                                  class="nav-link {{ request()->routeIs('user.all') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('user.active') }}"
                                  class="nav-link {{ request()->routeIs('user.active') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Active</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('user.pending') }}"
                                  class="nav-link {{ request()->routeIs('user.pending') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Pending</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('user.suspended') }}"
                                  class="nav-link {{ request()->routeIs('user.suspended') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Suspended</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item {{ request()->routeIs('invoice.all', 'invoice.paid', 'invoice.pending') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('invoice.all', 'invoice.paid', 'invoice.pending') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-file-invoice-dollar"></i>
                          <p>
                              Invoices
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('invoice.all') }}"
                                  class="nav-link {{ request()->routeIs('invoice.all') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('invoice.paid') }}"
                                  class="nav-link {{ request()->routeIs('invoice.paid') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Paid</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('invoice.pending') }}"
                                  class="nav-link {{ request()->routeIs('invoice.pending') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Pending</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item {{ request()->routeIs('ticket.all', 'ticket.answered', 'ticket.pending', 'ticket.closed') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('ticket.all', 'ticket.answered', 'ticket.pending', 'ticket.closed') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-ticket-alt"></i>
                          <p>
                              Support Tickets
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('ticket.all') }}"
                                  class="nav-link {{ request()->routeIs('ticket.all') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ticket.pending') }}"
                                  class="nav-link {{ request()->routeIs('ticket.pending') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Pending</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ticket.answered') }}"
                                  class="nav-link {{ request()->routeIs('ticket.answered') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Answered</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ticket.closed') }}"
                                  class="nav-link {{ request()->routeIs('ticket.closed') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Closed</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item {{ request()->routeIs('setting.company', 'setting.logo-fav', 'setting.seo', 'setting.change-password') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('setting.company', 'setting.logo-fav', 'setting.seo', 'setting.change-password') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-cog"></i>
                          <p>
                              Settings
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('setting.company') }}"
                                  class="nav-link {{ request()->routeIs('setting.company') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Company</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('setting.logo-fav') }}"
                                  class="nav-link {{ request()->routeIs('setting.logo-fav') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Logo & Fav</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('setting.seo') }}"
                                  class="nav-link {{ request()->routeIs('setting.seo') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>SEO</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('setting.change-password') }}"
                                  class="nav-link {{ request()->routeIs('setting.change-password') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Change password</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('logout') }}"
                          class="nav-link {{ request()->routeIs('logout') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-power-off"></i>
                          <p>Logout</p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
