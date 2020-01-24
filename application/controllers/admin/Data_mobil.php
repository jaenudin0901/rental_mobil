<?php 

class Data_mobil extends CI_Controller {

	public function index()
	{
		$data['mobil'] = $this->Rental_model->get_data('mobil')->result();
		$data['type'] = $this->Rental_model->get_data('type')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_mobil', $data);
		$this->load->view('templates_admin/footer');
	}
}
