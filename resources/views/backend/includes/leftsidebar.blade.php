 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    @php
     $routeactive = Route::current()->getName();
    @endphp

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('dashboard')}}" class="nav-link {{($routeactive == 'dashboard')?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <!-- 
 <i class="nav-icon fas fa-th"></i>
<i class="nav-icon fas fa-copy"></i>
<i class="nav-icon fas fa-chart-pie"></i>
 <i class="nav-icon fas fa-tree"></i>
 <i class="nav-icon fas fa-edit"></i>
 <i class="nav-icon fas fa-table"></i>
 <i class="nav-icon fas fa-calendar-alt"></i>
 <i class="nav-icon far fa-envelope"></i>
 <i class="nav-icon far fa-image"></i>
  <i class="nav-icon fas fa-book"></i>
    <i class="nav-icon far fa-plus-square"></i>
    <i class="nav-icon fas fa-file"></i>
    <i class="fas fa-circle nav-icon"></i>
     <i class="nav-icon fas fa-circle"></i>
     <i class="fas fa-circle nav-icon"></i>
     <i class="nav-icon far fa-circle text-danger"></i>
 -->

          <li class="nav-header">EXAMPLES</li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{($routeactive == 'blank')?'active':''}}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('blank')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
