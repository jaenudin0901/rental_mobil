<?php 
class Data_transaksi extends CI_Controller {
	
	public function index()
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.aid_mobil= mb.aid_mobil AND tr.aid_customer=cs.aid_customer")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_transaksi', $data);
		$this->load->view('templates_admin/footer');

	}

	public function pembayaran($id) {
		$where = array('aid_rental' => $id);
		$data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE aid_rental ='$id'")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/konfirmasi_pembayaran', $data);
		$this->load->view('templates_admin/footer');


	}

	public function cek_pembayaran (){
		$id = $this->input->post('aid_rental');
		$status_pembayaran = $this->input->post('status_pembayaran');
		$data = array(
			'status_pembayaran' => $status_pembayaran,
		);

		$this->rental_model->update_date('transaksi', $data,$where);
		redirect('admin/transaksi');
	}
	public function download_pembayaran($id) {
		$this->load->helper ('download');
		$filePembayaran = $this->Rental_model->downloadPembayaran($id);
		$file='assets/upload/'. $filePembayaran['bukti_pembayaran'];
		force_download($file, NULL);
	}
}