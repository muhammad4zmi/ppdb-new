<?php

namespace App\Controllers;

use App\Models\InformasiModel;
use App\Models\SiswaModel;

class Home extends BaseController
{
	protected $informasiModel;
	protected $siswaModel;
	public function __construct()
	{
		$this->siswaModel = new SiswaModel();
		$this->informasiModel = new InformasiModel();
		$this->db = \Config\Database::connect();
		//$this->email = \Config\Services::email();
		$this->session = session();
	}
	public function index()
	{
		$keyword = $this->request->getVar('keyword');
		$data = [
			'title' => 'PPDB MA Mu`allimin NW Anjani',
			'informasi' => $this->informasiModel->getInformasi_bydate(),
			'calon' => $this->siswaModel->getIdentitas()
		];
		return view('/front/index', $data);
	}

	public function cari($keyword)
	{

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {

			$data = [
				'calon' => $this->siswaModel->search($keyword)
			];
			echo "oke";
		} else {
			session()->setFlashdata('pesan', 'h');
			return redirect()->to('/');
		}
	}
	public function cetakformulir()
	{
		$users = new SiswaModel();
		$cari = $this->request->getGet('cari');
		$data = $users->where('no_daftar', $cari)->findAll();
		return view('/hasil_pencarian', compact('data'));
	}
	public function contact()
	{

		$data = [
			'title' => 'Contact - PPDB MA Mu`allimin NW Anjani'
		];
		return view('/front/contact', $data);
	}
}
