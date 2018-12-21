<?php
/**
 * 
 */
class db_company extends CI_Model
{
	//sudah
	public function getCompany()
	{
		$query = $this->db->get('company')->result();
		return $query;
	}
	//sudah
	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	//sudah
	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
}
	//sudah
	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	//sudah
	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function ambildata($judul, $pengarang, $table) {
		$this->db->where('name =', $judul);
		$this->db->or_where('pengarang =', $pengarang);
		$this->db->get($table); 
	}
	
}

?>