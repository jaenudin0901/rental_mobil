<div class="main-content">
	<section class="section">	
		<div class="section-header">
		<h1>Detail Type Mpbil</h1>	
		</div>
	</section>

	<?php 	foreach($detail as $dt): ?>
		<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
							<label>	kode Type</label>	
							<input type="text" name="kode_type" class="form-control" value="<?php  echo $dt->kode_type ;?>">
							</div>
							<div class="form-group">
							<label>	Nama Type</label>	
							<input type="text" name="nama_type" class="form-control" value="<?php echo $dt->nama_type ; ?>">
							</div>
							<a class="btn btn-sm btn-danger " href="<?php echo base_url('admin/data_type') ;?>">Kembali</a>
                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_mobil/update_mobil/'. $dt->aid_type); ?>">Update</a>

						</div>	
					</div>	
				</div>	
		</div>
	    <?php endforeach ; ?>
</div>