<?php

namespace App\Models;

use CodeIgniter\Model;

class InformasiModel extends Model
{
    protected $table = "informasi";
    protected $UseTimestamps = TRUE;
    protected $allowedFields = ['judul', 'slug', 'info'];

    public function getInformasi($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getInformasi_bydate()
    {
        $query = "SELECT judul,info, date_format(tgl_post, '%d %b %Y') as tgl,
        time(tgl_post) as jam FROM informasi ORDER BY tgl_post DESC LIMIT 0,2";
        return $this->db->query($query)->getResultArray();
    }
}
