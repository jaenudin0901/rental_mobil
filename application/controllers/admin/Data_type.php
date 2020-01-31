<?php 

class Data_type extends CI_Controller {

	public function index()
	{
		$data['mobil'] = $this->Rental_model->get_data('mobil')->result();
		$data['type'] = $this->Rental_model->get_data('type')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_type', $data);
		$this->load->view('templates_admin/footer');
	}

		public function tambah_type()
	{
		$data['type'] = $this->Type_model->get_data('type')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_type', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_type_aksi()
	{
		$this-> _rules();

	if ( $this->form_validation->run() == FALSE){
			$this->tambah_type();
		} else {
			$kode_type = $this->input->post('kode_type');
			$nama_type = $this->input->post('nama_type');
		
		$data = array(
				'kode_type' =>$kode_type,
				'nama_type' =>$nama_type
			);

		$this->Type_model->insert_data($data, 'type');
		$this->session->set_flashdata('pesan','   <div class="alert alert-primary alert-dismissble fade show" role="alert">Data Mobil Berhasil Ditambahkan!.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
          </button>
     </div>');
		redirect('admin/data_type');
		}
	}

		public function detail_type($id)
	{
		$data['detail'] = $this->Type_model->ambil_id_type($id); 
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_type', $data);
		$this->load->view('templates_admin/footer');
	}

	public function delete_type($id)
	{
		$where = array('aid_type' => $id);
		$this->Type_model->delete_type($where , 'type');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data Type mobil behasil dihapus!.
			<button type="button" class="close" data-dismiss="alert" aria-label="CLose">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>') ;
		redirect('admin/data_type');

	}

	public function _rules()
	{
		$this->form_validation->set_rules('kode_type', 'Kode Type', 'required');
		$this->form_validation->set_rules('nama_type', 'Nama Type', 'required');
	

	}


}