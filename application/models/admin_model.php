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

    public function insertkomik()
    {
         $object = array('idkomik' => $this->input->post('idkomik'), 'namakomik' => $this->input->post('namakomik'), 'pengarang' => $this->input->post('pengarang'),'status' => $this->input->post('status'),'ringkasan' => $this->input->post('ringkasan'),'cover' => $this->upload->data('file_name'));
         $this->db->insert('komik', $object);
    }
}