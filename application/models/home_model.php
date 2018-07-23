<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {

	public function list()
	{
 		 $query = $this->db->get('pelanggan');
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

	public function insertpenjualan()
	{
		 $idobat = $this->input->post('pilihobat');
		 $total = $this->input->post('jumlahobat');

		 $query = $this->db->query("select sum(harga) from obat where idobat=".$idobat);
		 echo var_dump($query);
		 // $result = $query->row(); // returns a single result row

 		//  $harga = intval($result)*$total;


 		 $object = array('kodetransaksi' => $this->input->post('kodetransaksi'),'tanggaltransaksi' => $this->input->post('tanggaltransaksi'), 'noantrian' => $this->input->post('noantrian'), 'idpegawai' => $this->input->post('idpegawai'),'idobat' => $idobat, 'jumlahobat' => $total, 'total' => $bayar);
 		  $this->db->insert('penjualan', $object);
	}

	public function deleteById($id)
	{
 		 $this->db->where('id', $id);
 		 $this->db->delete('pegawai');
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */