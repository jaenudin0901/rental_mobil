<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Konfirmasi Pembayaran</h1>
		</div>
		<div class="card">
			<div class="card-header">
				Konfirmasi Pembayaran
			</div>
			<div class="card-body">
				<form  method="POST" action="<?php echo base_url('admin/transaksi/cek_pembayaran') ;?>" >
					<?php foreach ($pembayaran as $pmb) :?>
						<a class="btn btn-sm btn-success"  href="<?php echo base_url('admin/Data_transaksi/download_pembayaran/'.$pmb->aid_rental) ;?>"><i class="fas fa-download"></i>Download Bukti Pembayaran</a>

					<div class="custom-control custom-switch ml-5">
						<input type="hidden" class="custom-control-input"  value="<?phpecho $pmb->aid_rental ;?>" name="bukti_pembayaran">
						<input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="bukti_pembayaran">
						<label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
					</div>
					<hr>
					<button type="submit" class="btn btn-sm btn-primary">
						
					</button>
					<?php endforeach ; ?>
				</form>
			</div>
		</div>
	</section>
</div>