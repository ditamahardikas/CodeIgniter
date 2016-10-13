<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class C_gaji extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_gaji');
		$this->load->helper('url');
		
	}
	///////////////////////////////////////////////////////////////////////
		//tampilan web

	public function index(){		
		$this->load->view('v_header');
		$this->load->view('v_index');
		$this->load->view('v_footer');
	}

	function tampil(){

		$this->load->view('v_header');
		$this->load->view('v_tampil',$data);
		$this->load->view('v_footer');

	}
	//////////////////////////////////////////////////////////////////////////
	//tampilan form tambah
	
	//proses setelah submit
	function tambah(){
	
		$this->load->view('v_header');
		$this->load->view('v_input',$data);
		$this->load->view('v_footer');

	}
	function tambah_aksi(){
		$nis=$this->input->post('nis');
		$nama=$this->input->post('nama');
		$mapel=$this->input->post('mapel');

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nis','nis','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('mapel','mapel','required');
		if ($this->form_validation->run()==FALSE) {
			# code...
			$this->load->view('v_header');
			$this->load->view('v_input',$data);
			$this->load->view('v_footer');

		}else{
			$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'mapel' => $mapel
			 );
		$this->m_data->simpan_data($data,'transaksi');
		
		redirect('c_gaji/tampil');

		}

		
	}
////////////////////////////////////////////////////////////////////////////////////////////

	function edit($id){
		$this->load->view('v_header');
		$where  = array('id' => $id);
		$data['transaksi']=$this->m_data->edit_data($where,'transaksi')->result();
		$this->load->view('v_edit',$data);
		$this->load->view('v_footer');
	}

	function update(){
		
		$nis = $this->input->post('nis');
		$nama =$this->input->post('nama');
		$mapel =$this->input->post('mapel');
		
		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'mapel' => $mapel
		 );
		$where = array('nis' => $nis );
		$this->m_data->update_data($where,$data,'mahasiswa');
		redirect('crud/tampil');
	}
//////////////////////////////////////////////////////////////////////////////////////////
	function hapus($nis){
		$where  = array('nis' => $nis);
		$this->m_data->hapus_data($where,'mahasiswa');
		redirect('crud/tampil');
	}
///////////////////////////////////////////////////////////////////////////////////
	
	  function cari() {
       $data['user']=$this->m_data->caridata();
       //jika data yang dicari tidak ada maka akan keluar informasi 
       //bahwa data yang dicari tidak ada
       if($data['user']==null) {
          print 'maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('welcome','kembali');
          }
          else {
          	 $this->load->view('v_header');
             $this->load->view('v_tampil',$data); 
		}
		}

	
}
?>