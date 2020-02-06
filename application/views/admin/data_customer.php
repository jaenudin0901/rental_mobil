<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Customer</h1>
		</div>
		<a href="<?= base_url('admin/data_customer/tambah_customer') ; ?>" class="btn btn-primary mb-3" >Tambah Data</a>
		<?php echo $this->session->flashdata('pesan');  ?>
		<table class="table table-hover table-striped table-borderd">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>username</th>
					<th>Password</th>
					<th>Gender</th>
					<th>Alamat</th>
					<th>No Telp</th>
					<th>No KTP</th>
					<th>Aksi</th>
				</tr>
			</thead>

				<?php 
				$no=1;
				foreach($customer as $cs) : ?>
				<tr>
					<td><?php echo $no++ ; ?></td>
					<td><?php echo $cs->nama ; ?></td>
					<td><?php echo $cs->username ; ?></td>
					<td><?php echo $cs->password ; ?></td>
					<td><?php echo $cs->gender ; ?></td>
					<td><?php echo $cs->alamat ; ?></td>
					<td><?php echo $cs->no_telp ; ?></td>
					<td><?php echo $cs->no_ktp ; ?></td>
					<td>
						<a href="<?php echo base_url('admin/data_customer/detail_customer/').$cs->aid_customer  ;?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>
						<a href="<?php echo base_url('admin/data_customer/update_customer/').$cs->aid_customer  ;?>" class="btn btn-primary"><i class="fas fa-edit "></i></a>
						<a href="<?php echo base_url('admin/data_customer/delete_customer/').$cs->aid_customer  ;?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
					</td>
				</tr>
			<?php  endforeach ; ?>
		</table>
	</section>
</div>