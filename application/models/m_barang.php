<?php 
class m_barang extends CI_Model{

	function edit_data($where){
		// return $this->db->get_where($table,$where)->result_array();
		return $this->db->query("
		SELECT id,kode,nama,deskripsi,
		REPLACE(FORMAT(stok,0),',','') stok,
		REPLACE(FORMAT(harga,0),',','') harga,
		REPLACE(FORMAT(berat,0),',','') berat
		 FROM barang WHERE id=". $where. ";")->result_array();
	}

	function get_data() {
		return $this->db->get('barang')->result_array();
	}

	function insert_data($data){
		$this->db->insert('barang',$data);
	}

	function update_data($where,$data){
		$this->db->where($where);
		$this->db->update('barang',$data);
	}

	function delete_data($where){
		$this->db->where($where);
		$this->db->delete('barang');
	}
}
?>