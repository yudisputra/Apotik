<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpegawai extends CI_Controller {

    function __construct(){
    parent::__construct();  
    }

    public function index()
    {
        $this->load->view('admin/admin_pegawai');
    }

    public function getAllpegawai()
    {
        $this->load->model('admin_pegawai');
        $result = $this->admin_pegawai->getAllpegawai(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function add(){
        $this->load->pegawai('admin_pegawai');
        $this->admin_pegawai->save();
    }

    public function delete()
    {
        $this->load->pegawai('admin_pegawai');
        $id = $this->input->post('id'); 
        $this->admin_pegawai->delete($id);
    }

    public function update(){
        $this->load->pegawai('admin_pegawai'); 
        $this->admin_pegawai->update();
    }

    // public function create()
    // {
    //     $this->load->pegawai('admin_pegawai');
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
    //             $this->admin_pegawai->insertkomik();
    //             $this->load->view('admin/admin_komik');
    //         }
    //     }
    // }
}