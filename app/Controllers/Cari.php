<?php

namespace App\Controllers;

use App\Models\InformasiModel;
use App\Models\SiswaModel;

class Cari extends BaseController
{

    protected $siswaModel;
    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
        //$this->informasiModel = new InformasiModel();
        $this->db = \Config\Database::connect();
        //$this->email = \Config\Services::email();
        $this->session = session();
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
        //$users = new SiswaModel();
        $cari = $this->request->getVar('cari');
        // $d = $users->where('no_daftar', $cari)->findAll();
        //$query = $this->db->query("SELECT * FROM tbl_siswa WHERE no_daftar='$cari'")->
        $data = [
            'datasiswa' => $this->db->query("SELECT * FROM tbl_siswa WHERE no_daftar='$cari'")->getResultArray()
        ];
        // dd($data);
        // die;
        return view('/front/hasil_pencarian', $data);
    }
}
