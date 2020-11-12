<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiwa extends CI_Controller {

	public function index()
	{

		$data['nama_lengkap'] = "agus rinaldi perkasa";
		$data['nim'] = "1810330025";
		$mahasiswa[0] = array(
			'nim'  => "",
			'nama' => ""
		);


		$data['mahasiswa'] = $mahasiswa;
		$this->load->view('mahasiswa_index', $data);

	}
	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
	}

}

/* End of file Mahasiwa.php */
/* Location: ./application/controllers/Mahasiwa.php */