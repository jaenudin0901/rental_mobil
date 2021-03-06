<?php 
class Transaksi extends CI_Controller {

	public function index(){

		$customer = $this->session->userdata('aid_customer');
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.aid_mobil= mb.aid_mobil AND tr.aid_customer=cs.aid_customer AND cs.aid_customer='$customer' ORDER BY aid_rental DESC")->result();
		$this->load->view('templates_customer/header');
		$this->load->view('customer/transaksi', $data);
		$this->load->view('templates_customer/footer');

	}

	public function pembayaran($id){
		$customer = $this->session->userdata('aid_customer');
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.aid_mobil= mb.aid_mobil AND tr.aid_customer=cs.aid_customer AND tr.aid_rental='$id' ORDER BY aid_rental DESC")->result();

		$this->load->view('templates_customer/header');
		$this->load->view('customer/pembayaran', $data);
		$this->load->view('templates_customer/footer');

	}

	public function pembayaran_aksi(){
		$id = $this->input->post('aid_rental');
			$bukti_pembayaran 	= $_FILES['bukti_pembayaran']['name'];

			if($bukti_pembayaran)  {
				$config ['upload_path'] ='./assets/upload';
				$config['allowed_types']='pdf|jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if($this->upload->do_upload('bukti_pembayaran')){
					$bukti_pembayaran =$this->upload->data('file_name');
					$this->db->set('bukti_pembayaran', $bukti_pembayaran);
				} else {
					echo $this->upload->display_errors();
				}

		}
		$data = array(
			'bukti_pembayaran' =>$bukti_pembayaran,
		);

		$where = array(
				'aid_rental' => $id	
		);

		$this->Rental_model->update_data('transaksi',$data, $where);
		$this->session->set_flashdata('pesan','   <div class="alert alert-success alert-dismissble fade show" role="alert">Bukti Pembayaran anda Berhasil di Upload!.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
          </button>
    	 </div>');
		redirect('customer/transaksi');
	}
	public function cetak_invoice($id){
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.aid_mobil= mb.aid_mobil AND tr.aid_customer=cs.aid_customer AND tr.aid_rental='$id' ORDER BY aid_rental DESC")->result();
		$this->load->view('customer/cetak_invoice', $data);
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
		redirect('customer/transaksi');
	}
}