<?php 

class Data_customer extends CI_Controller {

	public function index()
	{
		$data['customer'] = $this->Customer_model->get_data('customer')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_customer', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_customer()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_customer');
		$this->load->view('templates_admin/footer');

	}

	public function tambah_customer_aksi()
	{
		$this-> _rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_customer();
		}else{
			$nama  = $this->input->post('nama');
			$username 		= $this->input->post('username');
			$password 	= $this->input->post('password');
			$alamat 	= $this->input->post('alamat');
			$gender 		= $this->input->post('gender');
			$no_telp 	= $this->input->post('no_telp');
			$no_ktp 	= $this->input->post('no_ktp');
		
	
		$data = array(
				'nama' =>	$nama,
				'username'		=>	$username,
				'password'	=>	$password,
				'alamat'		=> 	$alamat,
				'gender'		=> 	$gender,
				'no_telp'	=>  $no_telp,
				'no_ktp'	=>	$no_ktp
			);
		$this->Customer_model->insert_data($data, 'customer');
		$this->session->set_flashdata('pesan','   <div class="alert alert-primary alert-dismissble fade show" role="alert">Data Customer Berhasil Ditambahkan!.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
          </button>
     </div>');
		redirect('admin/data_customer');
		
		}

	}

	public function detail_customer($id)
	{
		$data['detail'] = $this->Customer_model->ambil_id_customer($id); 
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_customer', $data);
		$this->load->view('templates_admin/footer');
	}


	public function update_customer($id)
	{
		$where = array('aid_customer' => $id);
		$data['customer'] = $this->db->query("SELECT * FROM  customer cs WHERE aid_customer = '$id' ")->result();
	
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_update_customer', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update_customer_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->update_customer();
		} else { 

			$id 		= $this->input->post('aid_type');
			$nama 		= $this->input->post('kode_type');
			$username 	= $this->input->post('nama_type');
			$password 	=$this->input->post('password');
			$alamat 	= $this->input->post('alamat');
			$gender 	= $this->input->post('gender');
			$no_telp 	= $this->input->post('no_telp');
			$no_ktp 	= $this->input->post('no_ktp');

			$data = array(
				'nama' =>	$nama,
				'username'		=>	$username,
				'password'	=>	$password,
				'alamat'		=> 	$alamat,
				'gender'		=> 	$gender,
				'no_telp'	=>  $no_telp,
				'no_ktp'	=>	$no_ktp		
			);
			
		$where = array(
			'aid_customer' => $id 
		);

		$this->Customer_model->update_data('customer',$data, $where);
		$this->session->set_flashdata('pesan','   <div class="alert alert-success alert-dismissble fade show" role="alert">Data Customer Berhasil DiUpdate!.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
          </button>
     </div>');
		redirect('admin/data_customer');

		}
	}

	public function delete_customer($id)
	{
		$where = array('aid_customer' => $id);
		$this->Customer_model->delete_data($where , 'customer');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data Customer behasil dihapus!.
			<button type="button" class="close" data-dismiss="alert" aria-label="CLose">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>') ;
		redirect('admin/data_customer');

	}
	public function _rules()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'required');
		$this->form_validation->set_rules('no_ktp', 'No Ktp', 'required');
	}

}