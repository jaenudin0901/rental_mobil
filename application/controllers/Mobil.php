<?php 

class Mobil extends CI_Controller {
	parent function __construct()
	{
		parent::__construct();
		$this->load->model('Mobil_rental');
	}

	public function index()
	{
		
	}
}