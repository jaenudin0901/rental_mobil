<?php 

class Register extends CI_Controller {

	public function index()
	{	
		$this->_rules();

		if($this->form_validation->run() == FALSE){

		$this->load->view('templates_admin/header');
		$this->load->view('register_form');
		$this->load->view('templates_admin/footer');
		}
		 else {
			$nama 		= $this->input->post('nama');
			$username 	= $this->input->post('username');
			$password 	= md5($this->input->post('password'));
			$alamat 	= $this->input->post('alamat');
			$gender 	= $this->input->post('gender');
			$no_telp 	= $this->input->post('no_telp');
			$no_ktp 	= $this->input->post('no_ktp');
			$role_id  	='2';
		
	
		$data = array(
				'nama' 			=>	$nama,
				'username'		=>	$username,
				'password'		=>	$password,
				'alamat'		=> 	$alamat,
				'gender'		=> 	$gender,
				'no_telp'		=>  $no_telp,
				'no_ktp'		=>	$no_ktp,
				'role_id' 		=> 	$role_id
			);

		$this->Customer_model->insert_data($data, 'customer');
		$this->session->set_flashdata('pesan','   <div class="alert alert-primary alert-dismissble fade show" role="alert"> Berhasil register, Silahkan Login!.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
          </button>
     	</div>');
		redirect('auth/login');
		
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'required');
		$this->form_validation->set_rules('no_ktp', 'No Ktp', 'required');
	}
}