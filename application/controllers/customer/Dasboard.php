<?php 

class dasboard extends CI_Controller {

	public function index()
	{
		$this->load->view('templates_customer/header');
		$this->load->view('customer/dasboard');
		$this->load->view('templates_customer/footer');

	}
}
?>