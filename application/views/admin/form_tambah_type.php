<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Input Data Type</h1>
          </div>

          <div class="card">
          	<div class="card-body">
          		<form method="post" action="<?php echo base_url('admin/data_type/tambah_type_aksi'); ?>" enctype="multipart/form-data">
          			<div class="row">
          				<div class="col-md-6">
          					<div class="form-group">
          						<label>Kode Type</label>
          						<input type="text" name="kode_type" class="form-control">
          					</div>
          					<div class="form-group">
          						<label>Nama Type</label>
          						<input type="text" name="nama_type" class="form-control">
          					</div>

          				<button class="btn btn-primary mt-4">Simpan</button>
          				<button class="btn btn-danger mt-4">Reset</button>
          				</div>

          			</div>
          			
          		</form>
          		
          	</div>
          	
          </div>

      </section>
</div>