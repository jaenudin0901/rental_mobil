<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Update Type Mobil</h1>
          </div>
          	<?php foreach($type as $tp): ?>
          <div class="card">
          	<div class="card-body">
          		<form method="post" action="<?php echo base_url('admin/data_type/update_type_aksi'); ?>" enctype="multipart/form-data">
          			<div class="row">
          				<div class="col-md-6">
          					<div class="form-group">
          						<label>Kode Type</label>
          						<input type="hidden" name="aid_type" value="<?php echo $tp->aid_type ; ?>">
          						<input type="text" name="kode_type" class="form-control" value="<?php 	echo $tp->kode_type ; ?>"	>
          					</div>
          					<div class="form-group">
          						<label>Nama Type</label>
          						<input type="text" name="nama_type" class="form-control" value="<?php 	echo $tp->nama_type ; ?>"	>
          					</div>

          				<button class="btn btn-primary mt-4">Simpan</button>
          				<button class="btn btn-danger mt-4">Reset</button>
          				</div>

          			</div>
          			
          		</form>
          	<?php 	endforeach ;?>
          		
          	</div>
          	
          </div>

      </section>
</div>