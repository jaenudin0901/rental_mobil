
<div class="container">
	<div class="card">
		<div class="card-body">
			<?php foreach($detail as $dt): ?>
				<div class="row">
					<div class="col-md-6">
						<img style="width: 80%" src="<?php echo base_url('assets/upload/'.$dt->gambar) ?>">
					</div>
					<div class="col-md-6">
						<table class="table">
							<tr>
								<th>Merk</th>
								<td><?php  echo $dt->merk ; ?></td>
							</tr>
							<tr>
								<th>No Plat</th>
								<td><?php  echo $dt->no_plat ; ?></td>
							</tr>
							<tr>
								<th>Warna</th>
								<td><?php  echo $dt->warna ; ?></td>
							</tr>
							<tr>
								<th>Tahun</th>
								<td><?php  echo $dt->tahun ; ?></td>
							</tr>
							<tr>
								<th>Status</th>
								<td><?php  if($dt->status == '1') {
									echo "Tersedia" ;
								} else {
									echo "Sedang di Rental";
								}
								?>
									
								</td>
							</tr>
						</table>
					</div>	
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>