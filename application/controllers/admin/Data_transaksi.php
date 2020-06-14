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

	public function cek_pembayaran ()
	{
		$id = $this->input->post('aid_rental');
		$status_pembayaran = $this->input->post('status_pembayaran');
		$data = array(
			'status_pembayaran' => $status_pembayaran,
		);
		$where = array(
			'aid_rental' =>$id
		);

		$this->Rental_model->update_data('transaksi', $data,$where);
		redirect('admin/data_transaksi');
	}
	public function download_pembayaran($id) {
		$this->load->helper ('download');
		$filePembayaran = $this->Rental_model->downloadPembayaran($id);
		$file='assets/upload/'. $filePembayaran['bukti_pembayaran'];
		force_download($file, NULL);
	}

	public function transaksi_selesai($id){
		$where = array('aid_rental' => $id);
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE aid_rental='$id'")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/transaksi_selesai', $data);
		$this->load->view('templates_admin/footer');

	}

	public function transaksi_selesai_aksi(){
		$id=$this->input->post('aid_rental');
		$tanggal_pengembalian		= $this->input->post('tanggal_pengembalian');
		$status_rental				= $this->input->post('status_rental');
				$status_pengembalian   = $this->input->post('status_pengembalian');
		$tanggal_kembali		= $this->input->post('tanggal_kembali');
		$denda		= $this->input->post('denda');

		$x							=strtotime($tanggal_pengembalian);
		$y							=strtotime($tanggal_kembali);
		
		$selisih				=abs($x - $y)/(60*60*24);		
		$total_denda			= $selisih * $denda;

		$data = array(
				'tanggal_pengembalian'		=>$tanggal_pengembalian,
				'status_rental'				=> $status_rental,
				'status_pengembalian' 		=> $status_pengembalian,
				'total_denda'				=> $total_denda

		);
		$where = array(
				'aid_rental'		=>$id
		);

		$this->Rental_model->update_data('transaksi', $data, $where);
		$this->session->set_flashdata('pesan','   <div class="alert alert-primary alert-dismissble fade show" role="alert">Transaksi berhasil Di Update!.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
          </button>
     </div>');
		redirect('admin/data_transaksi');
	}

	public function batal_transaksi($id){
		$where = array('aid_rental' => $id);
		$data= $this->Rental_model->get_where($where, 'transaksi')->row();
		$where2= array('aid_mobil' =>$data->aid_mobil);

		$data2=array('status' =>'1');

		$this->Rental_model->update_data('mobil', $data2, $where2);
		$this->Rental_model->delete_data($where, 'transaksi');
		$this->session->set_flashdata('pesan','   <div class="alert alert-success alert-dismissble fade show" role="alert">Transaksi berhasil di batalkan!.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
          </button>
    	 </div>');
		redirect('admin/data_transaksi');
	}
}