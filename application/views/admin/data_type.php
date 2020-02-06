    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Type Mobil</h1>
          </div>

            <a href="<?= base_url('admin/data_type/tambah_type') ?>" class="btn btn-primary mb-3">Tambah Data</a>
          <?php echo $this->session->flashdata('pesan');  ?>
          <table class="table table-hover table-striped table-borderd">
          	<thead>
                    <tr>
               		<th>No</th>
               		<th>Kode TYpe</th>
               		<th>Type</th>
               		<th>Aksi</th>
                    </tr>
          	</thead>

          		<?php 
          		$no=1;
          		foreach($type as $tp) : ?>
                    <tr>
          			<td><?php echo $no++ ;?></td>
          			<td><?php echo $tp->kode_type ;?></td>
          			<td><?php echo $tp->nama_type ;?></td>
 
          			<td>
          				<a href="<?php echo base_url('admin/data_type/detail_type/').$tp->aid_type  ;?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
          				<a href="<?php echo base_url('admin/data_type/update_type/').$tp->aid_type ;?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
          				<a href="<?php echo base_url('admin/data_type/delete_type/').$tp->aid_type  ;?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
          			</td>
                    </tr> 

          		<?php endforeach ; ?>
          	
          </table>
      </section>
     </div>