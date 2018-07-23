<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_jenisobat extends CI_Controller {

    function __construct(){
    parent::__construct();  
    }

    public function index()
    {
        $this->load->view('admin/admin_jenisobat');
    }

    public function getAlljenisobat()
    {
        $this->load->model('adminjenisobat_model');
        $result = $this->adminjenisobat_model->getAlljenisobat(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function add(){
        $this->load->model('adminjenisobat_model');
        $this->adminjenisobat_model->save();
    }

    public function delete()
    {
        $this->load->model('adminjenisobat_model');
        $id = $this->input->post('id'); 
        $this->adminjenisobat_model->delete($id);
    }

    public function update(){
        $this->load->model('adminjenisobat_model'); 
        $this->adminjenisobat_model->update();
    }

    // public function create()
    // {
    //     $this->load->model('adminjenisjenisobat_model');
    //     $this->form_validation->set_rules('namakomik','Nama Komik','trim|required');
    //     $this->form_validation->set_rules('pengarang', 'Pengarang', 'trim|required');
    //     $this->form_validation->set_rules('status', 'Status', 'trim|required');

    //     if($this->form_validation->run()==FALSE)
    //     {
    //         $this->load->view('admin/admin_tambahkomik');
    //     }
    //     else
    //     {
    //         $config['upload_path']      = './assets/images/cover';
    //         $config['allowed_types']        = 'gif|jpg|png';
    //         $config['max_size']     = 100000000;
    //         $config['max_width']        = 10240;
    //         $config['max_height']       = 7680;

    //         $this->load->library('upload',$config);

    //         if(!$this->upload->do_upload('cover'))
    //         {
    //             $error = array('error'=> $this->upload->display_errors());
    //             $this->load->view('admin/admin_tambahkomik',$error);
    //         }

    //         else
    //         {
    //             $this->adminjenisjenisobat_model->insertkomik();
    //             $this->load->view('admin/admin_komik');
    //         }
    //     }
    // }
}