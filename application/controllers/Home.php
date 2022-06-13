<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_Mahasiswa');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function dashboard()
	{
		$queryAllMahasiswa = $this->M_Mahasiswa->getDataMahasiswa();
		$DATA = array('queryAllMhs' => $queryAllMahasiswa);
		$this->load->view('dashboard', $DATA);
	}

	public function halaman_tambah() 
	{
		$this->load->view('halaman_tambah_mhs');
	}

	public function halaman_edit($nim)
	{
		$queryMahasiswaDetail = $this->M_Mahasiswa->getDataMahasiswaDetail($nim);
		$DATA = array('queryMhsDetail' => $queryMahasiswaDetail);
		$this->load->view('halaman_edit_mhs', $DATA);
	}

	public function fungsiTambah()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');

		$ArrInsert = array(
			'nim' => $nim,
			'nama' => $nama,
			'alamat' => $alamat
		);

		$this->M_Mahasiswa->insertDataMahasiswa($ArrInsert);
		redirect(base_url('home/dashboard'));

	}

	public function fungsiEdit()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');

		$ArrUpdate = array(
			'nama' => $nama,
			'alamat' => $alamat
		);

		$this->M_Mahasiswa->updateDataMahasiswa($nim, $ArrUpdate);
		redirect(base_url('home/dashboard'));

	}

	public function fungsiDelete($nim)
	{
		$this->M_Mahasiswa->deleteDataMahasiswa($nim);
		redirect(base_url('home/dashboard'));
	}

	public function logout() 
	{
		$this->load->view('login');
	}
}
