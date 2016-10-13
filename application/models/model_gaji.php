<?php
/**
* 
*/
class Model_gaji extends CI_Model
{
	function tampil_data(){
		//$this->db->like('mapel','pemograman');//menampilkan dengan kondisi tertentu
		
		
		$this->db->order_by('id', 'desc');
		$data= $this->db->get('transaksi');
		return $data->result();
	}


////////////////////////////////////////////////////////////////////////
	function simpan_data($data,$table){
	
		$this->db->insert($table,$data);
	}
	
////////////////////////////////////////////////////////////////////////
	//tampilan form edit data
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	//aksi edit data
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
//////////////////////////////////////////////////

	//metode hapus data
	function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

////////////////////////////////////////////////////////////
	 function caridata(){
		$c = $this->input->POST ('cari');
		$this->db->like('ket', $c);
		$query = $this->db->get ('transaksi');
		return $query->result(); 
	}

}
?>