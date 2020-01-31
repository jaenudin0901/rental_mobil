<?php 

class Type_model extends CI_Model {
	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function ambil_id_type($id)
	{
		$hasil = $this->db->where('aid_type', $id)->get('type');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return false;
		}
	} 

		public function delete_type($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}