<?php
/**
* 
*/
class M_data extends CI_Model
{
	function tampil_data($num, $offset){
		//$this->db->like('mapel','pemograman');//menampilkan dengan kondisi tertentu
		
		
		$this->db->order_by('nis', 'desc');
		$data= $this->db->get('mahasiswa',$num, $offset);
		return $data->result();
	}


////////////////////////////////////////////////////////////////////////
	function simpan_data($data,$table){
	
		$this->db->insert($table,$data);
	}
	function ambil_data(){
		$data = array();
        $query = $this->db->get('mapel');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
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
		$this->db->like('nama', $c);
		$query = $this->db->get ('mahasiswa');
		return $query->result(); 
	}
	///////////////////////////////////////////////////////////////////////////
	function tampil_mapel(){
		return $this->db->get('mapel');
	}
	function tampil_mahasiswa(){
		return $this->db->get('mahasiswa');
	}
		//tampilan form edit data
	function edit_mapel($where,$table){
		return $this->db->get_where($table,$where);
	}
	//aksi edit data
	function update_mapel($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
/////////////////////////////////////////////////////////////////////
	function remove_checked_mapel() {
		$action = $this->input->post('action');
		if ($action == "delete") {
			$delete = $this->input->post('msg');
			for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id_mapel', $delete[$i]);
				$this->db->delete('mapel');
			}
		}
	}
///////////////////////login validasi/////////////////////////////////
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);

	}

}
?>