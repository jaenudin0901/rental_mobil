<div class="main-content">	
<section class="section">	
		<div class="section-header">	
			<h1>Filter Laporan Transaksi</h1>
		</div>	
</section>
	<form method="post" action="<?= base_url('admin/laporan') ?>">
		<div class="form-group">
			<label>	Dari tanggal</label>
			<input class="form-control" name="dari" class="form-control" type="date">
			<?= form_error('dari','<span class="text-small text-danger">'.'</span>') ?>
		</div>		
		<div class="form-group">
			<label>	Dari tanggal</label>
			<input class="form-control" name="sampai" type="date">
			<?= form_error('sampai','<span class="text-small text-danger">'.'</span>') ?>
		</div>	
		<button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye">	</i>	Tampilkan Data</button>	
	</form>
</div>	