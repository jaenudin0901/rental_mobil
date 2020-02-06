<?php 

class Dasboard extends CI_Controller {

	public function index()
	{
		$data['mobil'] = $this->Rental_model->get_data('mobil')->result();
		$this->load->view('templates_customer/header');
		$this->load->view('customer/dasboard', $data);
		$this->load->view('templates_customer/footer');

	}

}
?>