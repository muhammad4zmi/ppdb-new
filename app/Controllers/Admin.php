<?php

namespace App\Controllers;

use App\Models\PengaturanModel;
use App\Models\SiswaModel;
use App\Models\InformasiModel;


class Admin extends BaseController
{
    protected $pengaturanModel;
    protected $siswaModel;
    protected $informasiModel;
    public function __construct()
    {
        // helper('pmb');
        // is_logged_in();
        $this->pengaturanModel = new PengaturanModel();
        $this->siswaModel = new SiswaModel();
        $this->informasiModel = new InformasiModel();
    }

    public function index()
    {
        //$komik = $this->komikModel->findAll();
        $db = \Config\Database::connect();
        $query = $db->table('admin');

        $data = [
            'title' => 'Dasboard',
            'pengaturan' => $this->pengaturanModel->getPengaturan(),
            'user' => $query->getWhere(['username' => session('username')])->getRowArray(),
            'siswa' => $this->siswaModel->getIdentitas()

        ];
        return view('admin/dasboard/index', $data);


        // return view('admin/informasi/index', $data);
        // return view('admin/pengaturan/index', $data);
    }
    public function profil()
    {
        $db = \Config\Database::connect();
        $query = $db->table('users');
        $data = [
            'title' => 'Profil',
            'pengaturan' => $this->pengaturanModel->getPengaturan(),
            'informasi' => $this->informasiModel->getInformasi(),
            'user' => $query->getWhere(['email' => session('email')])->getRowArray()
            // 'pendaftar' => $this->pendaftarModel->getPendaftar()
        ];
        return view('admin/dasboard/profil', $data);
    }
}
