<?php defined('BASEPATH') OR exit('No direct script access allowed');

class adminjenisobat_model extends CI_Model {
	
	public function getAlljenisobat()
     {
        $query     = $this->db->get('jenisobat');

        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    public function save() 
    { 
        $data      = $this->input->post(); 
        $this->db->insert('jenisobat', $data); 
    } 

    public function update() 
    { 
        $id        = $this->input->post('idjenisobat'); 
        $data      = $this->input->post(); 
        $this->db->where('idjenisobat', $id)->update('jenisobat', $data); 
    } 

    public function delete() 
    { 
        $id        = $this->input->post('idjenisobat'); 
        $this->db->where('idjenisobat', $id); 
        $this->db->delete('jenisobat');
    }

    public function insertkomik()
    {
         $object = array('idkomik' => $this->input->post('idkomik'), 'namakomik' => $this->input->post('namakomik'), 'pengarang' => $this->input->post('pengarang'),'status' => $this->input->post('status'),'ringkasan' => $this->input->post('ringkasan'),'cover' => $this->upload->data('file_name'));
         $this->db->insert('komik', $object);
    }
}