<?php 

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Rental_model');
	}


	public function index()
	{
		$data['title'] = 'Halaman Home';
		$data['mobil'] = $this->Rental_model->get_data('mobil')->result();
		$this->load->view('templates_customer/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates_customer/footer');
	}
}
