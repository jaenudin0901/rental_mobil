<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Transaksi</h1>
		</div>

		<table class="table-responsive table table-bordered table-striped">
			
			<tr>
				<th>No</th>
				<th>Customer</th>
				<th>Mobil</th>
				<th>Tgl.Rental</th>
				<th>Tgl. Kembali</th>
				<th>Harga</th>
				<th>Denda / Hari</th>
				<th>Total Denda</th>
				<th>Tgl. Dikembalikan</th>
				<th>Status Pengembalian</th>
				<th>Status Rental</th>
				<th>Cek Pembayaran</th>
				<th>Action</th>
			</tr>

			<?php 
			$no=1; 
			foreach($transaksi as $tr) : ?>
			<tr>
				<td><?php echo $no++ ;?></td>
				<td><?php echo $tr->nama ; ?></td>
				<td><?php echo $tr->merk ; ?></td>
				<td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental)) ; ?></td>
				<td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)) ; ?></td>
				<td>Rp.<?php echo number_format( $tr->harga,0,',','.') ; ?></td>
				<td>Rp<?php echo number_format( $tr->denda,0,',','.') ; ?></td>
				<td>Rp<?php echo number_format( $tr->total_denda,0,',','.') ; ?></td>
				<td>
					<?php 
					if ($tr->tanggal_pengembalian == "0000-00-00") {
					 	echo"-";
					 } else {
					 	echo date('d/m/Y'.strtotime(($tr->tanggal_pengembalian)));
					 } 
					 ?>
				</td>
				<td>
					<?php 
					if ($tr->status_pengembalian =="1") {
					 	echo"Kembali";
					 } else {
					 	echo"Belum Kembali";
					 } ?>
				</td>
				<td>
					<?php 
					if ($tr->status_rental =="1") {
					 	echo"Selesai";
					 } else {
					 	echo"Belum Selesai";
					 } ?>
				</td>

				<td>
					<center>
						<?php 
						if (empty($tr->bukti_pembayaran)){ ?>
							<button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
						<?php } else { ?>
							<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/Data_transaksi/pembayaran/'.$tr->aid_rental); ?>"><i class="fas fa-check-circle"></i></a>
						<?php } ?>
					</center>
				</td>
				<td>
					<?php 
					if ($tr->status =="1") {
					 	echo"-";
					 }  else { ?>

					 <div class="row">
					 	<a class="btn btn-sm btn-primary mr-2" href="<?= base_url('admin/data_transaksi/transaksi_selesai/'.$tr->aid_rental) ?>"><i class="fas fa-check"></i></a>
					 	<a class="btn btn-sm btn-danger" href="<?= base_url('admin/transaksi/transaksi_batal/'.$tr->aid_rental) ?>"><i class="fas fa-times"></i></a>
					 </div>

					 <?php } ?>
				</td>
			</tr>
		<?php endforeach; ?>
			
		</table>
	</section>
</div>