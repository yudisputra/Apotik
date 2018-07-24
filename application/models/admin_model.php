<?php defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {
	
	public function getAllobat()
     {
        $query     = $this->db->get('obat');

        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

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
        $this->db->insert('obat', $data); 
    } 

    public function update() 
    { 
        $id        = $this->input->post('idobat'); 
        $data      = $this->input->post(); 
        $this->db->where('idobat', $id)->update('obat', $data); 
    } 

    public function delete() 
    { 
        $id        = $this->input->post('idobat'); 
        $this->db->where('idobat', $id); 
        $this->db->delete('obat');
    }


}