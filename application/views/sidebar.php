    <a href="<?php echo base_url('dashboard') ?>" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminSPP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
      <br>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">

            <a href="<?php echo base_url('dashboard') ?>" class="nav-link btn btn-outline-primary btn-outline-primary">
              <p>
                  Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('siswa') ?>" class="nav-link btn btn-outline-warning">
              <p>
                Data Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('petugas') ?>" class="nav-link btn btn-outline-warning">
              <p>
                Data Petugas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('kelas') ?>" class="nav-link btn btn-outline-warning">
              <p>
                Data Kelas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('spp') ?>" class="nav-link btn btn-outline-warning">
              <p>
                Data SPP
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('pembayaran') ?>" class="nav-link btn btn-outline-warning">
              <p>
                Transaksi Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('login/logout') ?>" class="nav-link btn btn-outline-danger">
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  