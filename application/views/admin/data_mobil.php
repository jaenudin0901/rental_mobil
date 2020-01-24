    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Mobil</h1>
          </div>
          <a href="" class="btn btn-primary mb-3">Tambah Data</a>
          <table class="table table-hover table-striped table-borderd">
          	<thead>
          		<th>No</th>
          		<th>Gambar</th>
          		<th>Type</th>
          		<th>Merk</th>
          		<th>No. Plat</th>
          		<th>Status</th>
          		<th>Aksi</th>
          	</thead>

          		<?php 
          		$no=1;
          		foreach($mobil as $mb) : ?>
          			<td><?php echo $no++ ;?></td>
          			<td></td>
          			<td><?php echo $mb->kode_type ;?></td>
          			<td><?php echo $mb->merk ;?></td>
          			<td><?php echo $mb->no_plat ;?></td>
          			<td>
          				<?php 
          				if ($mb->status == "0") {
          				 	echo"<span class='badge badge-danger'> Tidak Tersedia </span>";
          				 } else {
          				 	echo "<span class='badge badge-primary'> Tersedia </span>";
          				 } 
          				 ?>
          			</td>
          			<td>
          				<a href="" class="btn btn-success"><i class="fas fa-eye"></i></a>
          				<a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a>
          				<a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
          			</td>
      

          		<?php endforeach ?>
          	
          </table>
        </section>
     </div>