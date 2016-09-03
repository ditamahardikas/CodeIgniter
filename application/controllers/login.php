<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		
 
	}
 
	public function index(){
		$this->load->view('v_login');
	}
 
	//////////////////login///////////////////////////////////////////////////////////////////////
		function aksi_login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' => $username,
				'password' => $password
				);
			$cek = $this->m_data->cek_login("admin",$where)->num_rows();
			if ($cek > 0) {
				# code...
				$data_session  = array('nama' => $username,
				'status' => "login"
				);
				$this->session->set_userdata($data_session);
				redirect(base_url("crud"));
			}else{
				echo "username atau password anda salah";
			}
		}
		function logout(){
			$this->session->sess_destroy();
			redirect(base_url('login'));

		}
}
?>