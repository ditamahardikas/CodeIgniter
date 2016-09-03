<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Crud extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->model('m_composer');
		$this->load->helper('url');
		$this->load->library('pagination');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	///////////////////////////////////////////////////////////////////////
		//tampilan web

	public function index(){		
		$this->load->view('v_header');
		$this->load->view('v_index');
		$this->load->view('v_footer');
	}

	function tampil($nis=NULL){
	 $jml = $this->db->get('mahasiswa');

	//pengaturan pagination
	 $config['base_url'] = base_url().'crud/tampil';
	 $config['total_rows'] = $jml->num_rows();
	 $config['per_page'] = '5';
	 $config['first_page'] = 'Awal';
	 $config['last_page'] = 'Akhir';
	 $config['next_page'] = '&laquo;';
	 $config['prev_page'] = '&raquo;';
	 //inisialisasi config
 	 $this->pagination->initialize($config);
 	 //buat pagination
 	 $data['halaman'] = $this->pagination->create_links();


		$data['user']=$this->m_data->tampil_data($config['per_page'], $nis);
		$this->load->view('v_header');
		$this->load->view('v_tampil',$data);
		$this->load->view('v_footer');

	}
	//////////////////////////////////////////////////////////////////////////
	//tampilan form tambah
	
	//proses setelah submit
	function tambah(){
	
		$this->load->view('v_header');
        $data['mapel'] = $this->m_data->ambil_data();
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
	        $data['mapel'] = $this->m_data->ambil_data();
			$this->load->view('v_input',$data);
			$this->load->view('v_footer');

		}else{
			$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'mapel' => $mapel
			 );
		$this->m_data->simpan_data($data,'mahasiswa');
		
		redirect('crud/tampil');

		}

		
	}
////////////////////////////////////////////////////////////////////////////////////////////

	function edit($nis){
		$this->load->view('v_header');
		$where  = array('nis' => $nis);
		$data['mapel'] = $this->m_data->ambil_data();
		$data['mahasiswa']=$this->m_data->edit_data($where,'mahasiswa')->result();
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
       $data['halaman'] = $this->pagination->create_links();
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
///////////////////////////////////////////////////////////////////////////////////////////
		function tampilmapel(){
		$data['user']=$this->m_data->tampil_mapel()->result();
		$this->load->view('v_header');
		$this->load->view('v_mapel',$data);
		$this->load->view('v_footer');

	}
	function editmapel($id_mapel){
		$this->load->view('v_header');
		$where  = array('id_mapel' => $id_mapel);
		$data['mapel']=$this->m_data->edit_mapel($where,'mapel')->result();
		$this->load->view('v_editmapel',$data);
		$this->load->view('v_footer');
	}

	function update_mapel(){
		
		$id_mapel = $this->input->post('id_mapel');
		$nm_mapel =$this->input->post('nm_mapel');
		
		$data = array(
			'id_mapel' => $id_mapel,
			'nm_mapel' => $nm_mapel,
		 );
		$where = array('id_mapel' => $id_mapel );
		$this->m_data->update_mapel($where,$data,'mapel');
		redirect('crud/tampilmapel');
	}
//////////////////////////////////////////////////////////////////////////////////////////
	function delete_multiple() {
			
			$this->m_data->remove_checked_mapel();
			redirect('crud/tampilmapel');
		}
//////////////////////////////panel ajax//////////////////////////////////////////////////
	public function panelAjax($nis=NULL) {
		$this->load->view('v_header');
		$data['mapel']=$this->m_data->tampil_mapel()->result();
		$data['mahasiswa']=$this->m_data->tampil_mahasiswa()->result();
		
	 	$this->load->view('v_panelAjax',$data);
	}
	
	
}
?>