<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {

	public function list()
	{
 		 $query = $this->db->get('pelanggan');
  		 return $query->result();
	}

	public function daftarpenjualan()
	{
 		 $query = $this->db->query('Select p.kodetransaksi,p.tanggaltransaksi,p.noantrian,l.namapelanggan,p.total FROM penjualan as p INNER JOIN pelanggan as l ON p.noantrian=l.noantrian');
  		 return $query->result();
	}

	public function insertpelanggan()
	{
 		 $object = array('namapelanggan' => $this->input->post('namapelanggan'), 'alamat' => $this->input->post('alamat'));
 		 $this->db->insert('pelanggan', $object);
	}

	public function daftarobat()
	{
		$query = $this->db->query("Select * FROM obat as o INNER JOIN jenisobat as j ON o.idjenisobat=j.idjenisobat");
		return $query->result();
	}

	public function getpelanggan($id)
	{
 		 $this->db->where('noantrian', $id);
 		 $query = $this->db->get('pelanggan');
  		return $query->result();
	}

	public function insertpenjualan($idobat,$total,$totalharga)
	{
 		 $object = array('tanggaltransaksi' => $this->input->post('tanggaltransaksi'), 'noantrian' => $this->input->post('noantrian'), 'idpegawai' => $this->input->post('idpegawai'),'idobat' => $idobat, 'jumlahobat' => $total, 'total' => $totalharga);
 		  $this->db->insert('penjualan', $object);
	}

	public function updatestok($idobat,$kurangstok) 
    { 
        $this->db->set('stock',$kurangstok);
		$this->db->where('idobat', $idobat);
		$this->db->update('obat');
    } 

	public function gethargastockobat($idobat)
	{
		$this->db->select('*');
        $this->db->from('obat');
        $this->db->where('idobat', $idobat);
        $query = $this->db->get();
        return $query->result();
	}

	public function deleteById($id)
	{
 		 $this->db->where('id', $id);
 		 $this->db->delete('pegawai');
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */