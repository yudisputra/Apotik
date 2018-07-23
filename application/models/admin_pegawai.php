<?php defined('BASEPATH') OR exit('No direct script access allowed');

class admin_pegawai extends CI_Model {
	
	public function getAllpegawai()
     {
        $query     = $this->db->get('pegawai');

        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    public function save() 
    { 
        $data      = $this->input->post(); 
        $this->db->insert('pegawai', $data); 
    } 

    public function update() 
    { 
        $id        = $this->input->post('idpegawai'); 
        $data      = $this->input->post(); 
        $this->db->where('idpegawai', $id)->update('pegawai', $data); 
    } 

    public function delete() 
    { 
        $id        = $this->input->post('idpegawai'); 
        $this->db->where('idpegawai', $id); 
        $this->db->delete('pegawai');
    }

    public function insertkomik()
    {
         $object = array('idkomik' => $this->input->post('idkomik'), 'namakomik' => $this->input->post('namakomik'), 'pengarang' => $this->input->post('pengarang'),'status' => $this->input->post('status'),'ringkasan' => $this->input->post('ringkasan'),'cover' => $this->upload->data('file_name'));
         $this->db->insert('komik', $object);
    }
}