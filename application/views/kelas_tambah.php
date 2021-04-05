<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $subtitle; ?></h5>
              </div>
                  <form class="form-horizontal" method="post" action="<?php echo base_url('kelas/simpan') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">ID Kelas</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_kelas" placeholder="ID Kelas" required>
                            </div>
                          </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Nama Kelas</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="nama_kelas" placeholder="Nama Kelas" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="kompetensi_keahlian" placeholder="Kompetensi Keahlian" required>
                            </div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-bg btn-outline-primary btn-outline-primary">Simpan</button>
                        <button type="reset" class="btn btn-bg btn-outline-danger btn-outline-danger">Reset</button>
                    </div>
                </form>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>