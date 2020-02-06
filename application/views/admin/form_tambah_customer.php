<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Input Data Customer</h1>
          
          </div>

          <div class="card">
          		<div class="card-body">
                <form method="post" action="<?php echo base_url('admin/data_customer/tambah_customer_aksi'); ?>" enctype="multipart/form-data">
          			<div class="row">
          				<div class="col-md-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                      <?php echo form_error('nama', '<div class="text-small text-danger"> ','</div>') ?>
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                      <?php echo form_error('username', '<div class="text-small text-danger"> ','</div>') ?>
                  </div>
                   <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control">
                      <?php echo form_error('password', '<div class="text-small text-danger"> ','</div>') ?>
                  </div>
                   <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                      <?php echo form_error('alamat', '<div class="text-small text-danger"> ','</div>') ?>
                  </div>
                 
          				</div>	
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Gender</label>
                    <input type="text" name="gender" class="form-control">
                      <?php echo form_error('gender', '<div class="text-small text-danger"> ','</div>') ?>
                  </div>   
                  <div class="form-group">
                    <label>No Telp</label>
                    <input type="text" name="no_telp" class="form-control">
                      <?php echo form_error('no_telp', '<div class="text-small text-danger"> ','</div>') ?>
                  </div>
                   <div class="form-group">
                    <label>No KTP</label>
                    <input type="text" name="no_ktp" class="form-control">
                      <?php echo form_error('no_ktp', '<div class="text-small text-danger"> ','</div>') ?>
                  </div>
                  <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                  <button class="btn btn-danger mt-4">Reset</button>
          			</div>	
          		</div>	
              </form>
          </div>
      </section>

  </div>