  <nav class="main-header navbar navbar-expand navbar-warning navbar-light">
    <!-- Left navbar links -->
    
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('dashboard') ?>" class="btn btn-outline-secondary">Dashboard</a>
      </li>&nbsp;&nbsp;&nbsp;
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('siswa') ?>" class="btn btn-outline-secondary">Data Siswa</a>
      </li>&nbsp;&nbsp;&nbsp;
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('petugas') ?>" class="btn btn-outline-secondary">Data Petugas</a>
      </li>&nbsp;&nbsp;&nbsp;
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('kelas') ?>" class="btn btn-outline-secondary">Data Kelas</a>
      </li>&nbsp;&nbsp;&nbsp;
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('spp') ?>" class="btn btn-outline-secondary">Data SPP</a>
      </li>
      </li>&nbsp;&nbsp;&nbsp;
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('pembayaran') ?>" class="btn btn-outline-secondary">Pembayaran</a>
      </li>
      </li>&nbsp;&nbsp;&nbsp;
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/dist/img/nate.jpeg" class="brand-image img-circle elevation-3" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">
           <?php 
            if ($this->session->userdata('level') =='3') {
              echo $this->session->userdata('nama');
            }else{
              echo $this->session->userdata('nama_petugas');
            }
            ?>
  
</a>
        </div>
      </div>

    </ul>
  </nav>
  <!-- /.navbar -->