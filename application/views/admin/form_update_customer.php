<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Update Customer</h1>
          
          </div>
          <?php foreach($customer as $cs) : ?>
          <div class="card">
          		<div class="card-body">
                <form method="post" action="<?php echo base_url('admin/data_customer/update_customer_aksi'); ?>" enctype="multipart/form-data">
          			<div class="row">
          				<div class="col-md-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="hidden" name="aid_customer" class="form-control" value="<?php echo $cs->aid_customer ; ?>">
                    <input type="text" name="nama" class="form-control" value="<?php echo $cs->nama ;  ?>">
                      <?php echo form_error('nama', '<div class="text-small text-danger"> ','</div>') ?>
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $cs->username ;  ?>">
                      <?php echo form_error('username', '<div class="text-small text-danger"> ','</div>') ?>
                  </div>
                   <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="<?php echo $cs->password ;  ?>">
                      <?php echo form_error('password', '<div class="text-small text-danger"> ','</div>') ?>
                  </div>
                   <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $cs->alamat ;  ?>">
                      <?php echo form_error('alamat', '<div class="text-small text-danger"> ','</div>') ?>
                  </div>
                 
          				</div>	
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Gender</label>
                    <input type="text" name="gender" class="form-control" value="<?php echo $cs->gender ;  ?>">
                      <?php echo form_error('gender', '<div class="text-small text-danger"> ','</div>') ?>
                  </div>   
                  <div class="form-group">
                    <label>No Telp</label>
                    <input type="text" name="no_telp" class="form-control" value="<?php echo $cs->no_telp ; ?>">
                      <?php echo form_error('no_telp', '<div class="text-small text-danger"> ','</div>') ?>
                  </div>
                   <div class="form-group">
                    <label>No KTP</label>
                    <input type="text" name="no_ktp" class="form-control" value="<?php echo $cs->no_ktp ;  ?>">
                      <?php echo form_error('no_ktp', '<div class="text-small text-danger"> ','</div>') ?>
                  </div>
                  <button class="btn btn-primary mt-4">Simpan</button>
                  <button class="btn btn-danger mt-4">Reset</button>
          			</div>	
          		</div>	
              </form>
          <?php endforeach; ?>
          </div>
      </section>

  </div>