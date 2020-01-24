<?php 

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mobil_model');
	}


	public function index()
	{
		$data['title'] = 'Halaman Home';
		$data['mobil']= $this->Mobil_model->getAllMobil();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
}
