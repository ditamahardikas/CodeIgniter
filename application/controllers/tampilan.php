<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Tampilan extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
 
	public function index(){		
		$this->load->view('v_header');
		$this->load->view('v_index');
		$this->load->view('v_footer');
	}
	public function crud(){		
		$this->load->view('v_header');
		$this->load->view('v_tampil');
		$this->load->view('v_footer');
	}
 
}