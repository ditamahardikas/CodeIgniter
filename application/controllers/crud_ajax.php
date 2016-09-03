<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Crud_ajax extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_ajax','data_mahasiswa');
    }
 
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('v_header');
        $this->load->view('v_ajax');
        $this->load->view('v_footer');
    }
 
    public function ajax_list()
    {
        $list = $this->data_mahasiswa->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $data_mahasiswa) {
            $no++;
            $row = array();
            $row[] = $data_mahasiswa->nm_awal;
            $row[] = $data_mahasiswa->nm_akhir;
            $row[] = $data_mahasiswa->alamat;
            $row[] = $data_mahasiswa->tgl_lahir;
            $row[] = $data_mahasiswa->kel;
 
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$data_mahasiswa->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$data_mahasiswa->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->data_mahasiswa->count_all(),
                        "recordsFiltered" => $this->data_mahasiswa->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function ajax_edit($id)
    {
        $data = $this->data_mahasiswa->get_by_id($id);
        echo json_encode($data);
    }
 
    public function ajax_add()
    {
        $data = array(
                'nm_awal' => $this->input->post('nm_awal'),
                'nm_akhir' => $this->input->post('nm_akhir'),
                'alamat' => $this->input->post('alamat'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'kel' => $this->input->post('kel'),
            );
        $insert = $this->data_mahasiswa->save($data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_update()
    {
       
        $data = array(
                 'nm_awal' => $this->input->post('nm_awal'),
                'nm_akhir' => $this->input->post('nm_akhir'),
                'alamat' => $this->input->post('alamat'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'kel' => $this->input->post('kel'),
            );
        $this->data_mahasiswa->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_delete($id)
    {
        $this->data_mahasiswa->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
}