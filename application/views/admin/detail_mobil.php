 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Mobil</h1>
          </div>

        </section>

        <?php 	foreach($detail as $dt) : ?>
    	<div class="card">
    		<div class="card-body">
    			<div class="row">
    				<div class="col-md-5" >
    					<img src="<?php echo base_url(). 'assets/upload/'. $dt->gambar ;?>" width="310px" >
                    </div>
    				<div class="col-md-7">
						<table class="table">
							<tr>
								<td>Type Mobil</td>
                                <td>
								<?php 	
								if($dt->kode_type == "SDN"){
									echo "Sedan";
								} elseif($dt->kode_type == "HTB"){
									echo "Hatchback";  
								} elseif($dt->kode_type == "MPV"){
									echo "Multi Putpose Vechile";  
								} else {
									echo "<span class='text-danger'>Type Mobil Belum Terdaftar<span>";  
								}

								?>
                                </td>
							</tr>	

							<tr>
    							<td>Merk</td>
    							<td><?php 	echo $dt->merk ; ?></td>
                            </tr>
                            <tr>
                                <td>No. PLat</td>
    							<td><?php 	echo $dt->no_plat ;?></td>
                            </tr>
                            <tr>
                                <td>Warna</td>
    							<td><?php 	echo $dt->warna ;?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
    							<td><?php 	echo $dt->tahun ?></td>	
							</tr>

							<tr>	
								<td>Status</td>
								<td>	
									<?php 	
									if($dt->status == ""){
										echo "<span class='badge badge-danger '>Tidak Tersedia </span>";
								} else {
									echo "<span class='badge badge-primary'>Tersedia</span>";
								}
								?>
									
								</td>
							</tr>
						</table>	
    						<a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_mobil') ?>">Kembali</a>
                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_mobil/update_mobil/'. $dt->aid_mobil) ?>">Update</a>
    				</div>
    				
    			</div>
    		</div>	
    	</div>
    <?php endforeach ; ?>
  </div>