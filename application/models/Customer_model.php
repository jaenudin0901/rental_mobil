<?php 

class Customer_model extends CI_model {

	public function get_data($table)
	{
		return $this->db->get($table);
	}

		public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function update_data($table, $data, $where)
	{
		$this->db->update($table, $data, $where);
	}

	public function ambil_id_customer($id)
	{
		$hasil = $this->db->where('aid_customer', $id)->get('customer');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return false;
		}
	} 

		public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}