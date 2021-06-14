<?php
class Grup_model extends CI_Model{
	function getAll(){//function getAll
		$this->db->select('*');//select semua data
		$this->db->from('tm_grup');//dari table user
		// $this->db->join('grup', 'user.grup = grup.id_grup');//gabungkan table grup dan user menggunakan id_grup
		$query = $this->db->get();
		return $query;//lakukan query db
	}

	function input_data($data, $table) {
		$this->db->insert($table,$data);
	}

	function edit($where, $table) {
		return $this->db->get_where($table, $where);
	}

	function update($where,$data, $table) {
		return $this->db->where($where);
		return $this->db->update($table, $data);
	}

	function hapus_data($where, $table) {
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>