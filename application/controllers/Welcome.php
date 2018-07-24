<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	// public function detail($id)
	// {
	// 	$this->load->model('home_model');
	// 	$data["komik"] = $this->home_model->detail($id);
	// 	$data["chapter"] = $this->home_model->chapterkomik($id);
	// 	$this->load->view('homepagedetail',$data);
	// }

	public function home()
	{
		$this->load->view('homepage');
	}

	public function antrian()
	{
		$this->load->model('home_model');
		$data["antrian"] = $this->home_model->list();
		$this->load->view('antrian',$data);
	}

	public function daftarpenjualan()
	{
		$this->load->model('home_model');
		$data["penjualan"] = $this->home_model->daftarpenjualan();
		$this->load->view('daftarpenjualan',$data);
	}

	public function daftarobat()
	{
		$this->load->model('home_model');
		$data["obat"] = $this->home_model->daftarobat();
		$this->load->view('daftarobat',$data);
	}

	public function create()
	{
		$this->load->model('home_model');
		$this->form_validation->set_rules('namapelanggan','Nama Pelanggan','trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat Pelanggan', 'trim|required');

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('antrian');
		}
		else
		{
			$this->home_model->insertpelanggan();
			$data["antrian"] = $this->home_model->list();
			$this->load->view('antrian',$data);
		}
	}

	public function penjualan($id)
	{
		$this->load->model('home_model');
		$this->load->model('admin_model');
		$data['pelanggan']=$this->home_model->getpelanggan($id);
		$data['obat']=$this->admin_model->getAllobat();
		$data['pegawai']=$this->admin_model->getAllpegawai();
		$this->load->view('penjualan',$data);
	}

	public function inputpenjualan()
	{
		$this->load->model('home_model');
		$idobat = $this->input->post('pilihobat');
		$total = $this->input->post('jumlahobat');
		$harga=$this->home_model->gethargastockobat($idobat);

		$no = 0; 
		$stock = 0;
		foreach ($harga as $key) {
		$no = $key->harga;
		$stock = $key->stock; }
		
		$totalharga = $no*$total;
		$stockbaru = $stock-$total;
		var_dump($stock);
		$this->home_model->insertpenjualan($idobat,$total,$totalharga);
		$this->home_model->updatestok($idobat,$stockbaru);
		$this->daftarpenjualan();
	}


}
