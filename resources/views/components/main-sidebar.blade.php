<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/dist/img/turaco-white-bg-180-180.png" alt="TURACO SERP Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Turaco</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/turaco-160-160.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info small">
          <a href="#" class="d-block ">{{auth()->user()->name}}</a>
          <div class="row">
            <div class="col-4 offset-2" >
                <form id="logout-form" action="{{ route('logout') }}" method="post">
                  @csrf
                  <input type="submit" value="Logout" class="btn btn-link btn-sm text-gray" style="font-size:8pt">
                </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          

          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('users.index') }}" class="nav-link small">
              <i class="nav-icon fas fa-user"></i>
              <p>User Management</p>
            </a>
          </li>

           <li class="nav-item has-treeview menu-open">
            <a href="{{ route('roles.index') }}" class="nav-link small">
              <i class="nav-icon fas fa-table"></i>
              <p>Role Management</p>
            </a>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  