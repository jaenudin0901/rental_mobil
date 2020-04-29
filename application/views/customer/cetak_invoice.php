<table class="table">
	<?php foreach ($transaksi as $tr ) :?>
		<h2>Invoce Pembayaran anda</h2>
		<tr>
			<td>Nama Customer</td>
			<td>:</td>
			<td><?php echo $tr->nama ?></td>
		</tr>
		<tr>
			<td>Merk Mobil</td>
			<td>:</td>
			<td><?php echo $tr->merk ; ?></td>
		</tr>
		<tr>
			<td>Tanggal Rental</td>
			<td>:</td>
			<td><?php echo $tr->tanggal_rental ; ?></td>
		</tr>
		<tr>
			<td>Tanggal Kembali</td>
			<td>:</td>
			<td><?php echo $tr->tanggal_kembali ; ?></td>
		</tr>
		<tr>
			<td>Biaya Sewa</td>
			<td>:</td>
			<td>Rp. <?php echo number_format($tr->harga,0,',','.') ; ?></td>
		</tr>
			<tr>
				<?php 
				$x= strtotime($tr->tanggal_kembali);
				$y= strtotime($tr->tanggal_rental);
				$jmlHari = abs(($x-$y)/(60*60*24)); ?>
			<td>Jumlah Hari Sewa</td>
			<td>:</td>
			<td>Rp. <?php echo $jmlHari ; ?> Hari</td>
		</tr>
		<tr>
			<td>Status Pembayaran</td>
			<td>:</td>
			<td><?php 
			if($tr->status_pembayaran==='0') {
				echo"Belum Lunas";
				} else{
					echo "Lunas";
				}  
			?>		
				</td>
		
		</tr>
		</tr>
		<tr style="font-weight: bold; color: red;">
			<td>Jumlah Pembayaran</td>
			<td>:</td>
			<td>Rp. <?php echo number_format($tr->harga* $jmlHari,0,',','.') ; ?></td>
		</tr>
		<tr>
			<td>Rekening Pembayaran</td>
			<td>
				<ul class="class-group list-group-flush">
					<li class="list-group-item">Bank Mandiri</li>
					<li class="list-group-item">Bank BCA</li>
					<li class="list-group-item">Bank BRI</li>
					<li class="list-group-item">Bank Danamon</li>
				</ul>

			</td>
	<?php endforeach; ?>
	
</table>

<script type="text/javascript">
	window.print();
</script>