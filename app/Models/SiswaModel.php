<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = "tbl_siswa";
    protected $UseTimestamps = TRUE;
    protected $allowedFields = [
        'no_daftar', 'nik', 'pil_jurusan1', 'pil_jurusan2', 'nisn', 'nama_lengkap', 'tempat_lahir', 'tgl_lahir', 'kip', 'no_kip', 'alamat', 'telpon', 'nama_ayah', 'nama_ibu', 'alamat_ortu', 'no_ortu', 'nama_sekolah', 'alamat_sekolah', 'foto', 'ukuran'
    ];



    public function getIdentitas($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getSearch($keyword)
    {
        // $builder = $this->table('tbl_siswa');
        $query = "SELECT * FROM tbl_siswa WHERE no_daftar= '$keyword'";
        return $this->db->query($query)->getRowArray();
    }

    public function getDetail($no_daftar)
    {
        $query1 = "SELECT * FROM tbl_siswa WHERE no_daftar= '$no_daftar'";

        return $this->db->query($query1)->getResultArray();
    }
}
