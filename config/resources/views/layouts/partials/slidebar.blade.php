<aside class="main-sidebar navbar-navy">
    <!-- Brand Logo -->
    <div class="brand-link">
      <img src="{{asset('assets/dist/img/m.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Informasi  Wisata</span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/m.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @auth
          <div class="d-block"> {{Auth::user()->name}}</div>
          @else
          <a href="#" class="d-block">Member</a>
          @endauth
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('wisata.index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wisata</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('destinasi.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Destinasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('kategori.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
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
