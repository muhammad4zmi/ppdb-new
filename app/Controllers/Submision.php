<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Submision extends BaseController
{
    protected $siswaModel;
    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
        //$this->pendaftarModel = new PendaftarModel();
        $this->db = \Config\Database::connect();
        //$this->email = \Config\Services::email();
        $this->session = session();
    }
    public function index()
    {
        $data = [
            'title' => 'Formulir Pendaftaran',
            'validation' => \Config\Services::validation()
        ];
        return view('/front/submision', $data);
    }

    public function addsubmision()
    {
        //validasi
        if (!$this->validate([
            'nik' => [
                'rules' => 'required|is_unique[tbl_siswa.nik]|trim',
                'errors' => [
                    'required' => 'NIK harus diisi!.',
                    'is_unique' => 'NIK sudah terdaftar!'
                ]
            ],
            'nisn' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'NISN harus disi!'
                ]
            ],
            'program1' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Program Pilihan 1 belum dipilih!'
                ]
            ],
            'program2' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Program Pilihan 2 belum dipilih!'
                ]
            ],
            'nama' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Nama Wajib diisi!'
                ]
            ],

            'tempat_lahir' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Tempat lahir Tidak boleh kosong!'
                ]
            ],
            'tgl_lahir' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Tanggal Lahir Tidak boleh kosong!'
                ]
            ],
            'kip' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'KIP belum dipilih!'
                ]
            ],
            'alamat' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong!'
                ]
            ],
            'telepon' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong!'
                ]
            ],
            'asal' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Asal Sekolah Tidak boleh kosong!'
                ]
            ],
            'alamat_sekolah' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Alamat Sekolah Tidak boleh kosong!'
                ]
            ],
            'ukuran' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Ukuran Baju belum dipilih!'
                ]
            ],

            'nama_ayah' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Nama Ayah wajib diisi!'
                ]
            ],
            'nama_ibu' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Nama ibu wajib diisi!'
                ]
            ],
            'alamat_ortu' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Alamat Ortu wajib diisi!'
                ]
            ],
            'image' => [
                'rules' => 'max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png|uploaded[image]',
                'errors' => [
                    'uploaded' => 'Pilih File terlebih dahulu!',
                    'max_size' => 'ukuran File terlalu besar!',
                    'is_image' => 'Yang anda pilih bukan gambar!',
                    'mime_in' => 'Yang anda pilih bukan gambar!'
                ]
            ]
        ])) {
            //$validation = \Config\Services::validation();
            return redirect()->to('/submision')->withInput();
        }
        $fileFoto = $this->request->getFile('image');

        //cek gambar
        if ($fileFoto->getError() == 4) {
            $namaImage = $this->request->getVar('image');
        } else {
            //generate nama file random
            $namaImage = $fileFoto->getRandomName();
            //pindah gambar
            $fileFoto->move('assets/img/profil', $namaImage);
            //hapus file lama
            //unlink('admin/assets/img/profil/' . $this->request->getVar('profil'));
        }

        $cek = $this->db->query('SELECT LAST_INSERT_ID()')->getRowArray();
        $tgl_lahir = $this->request->getVar('tgl_lahir');
        // $id_user = $cek[0];
        // dd($id_user);
        //die;
        $this->siswaModel->save([
            'no_daftar' => $this->request->getVar('no_daftar'),
            'nik' => $this->request->getVar('nik'),
            'nisn' => $this->request->getVar('nisn'),
            'pil_jurusan1' => $this->request->getVar('program1'),
            'pil_jurusan2' => $this->request->getVar('program2'),
            'nama_lengkap' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => date("Y-m-d", strtotime($tgl_lahir)),

            'kip' => $this->request->getVar('kip'),
            'no_kip' => $this->request->getVar('seri'),
            'alamat' => $this->request->getVar('alamat'),
            'telpon' => $this->request->getVar('telepon'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'nama_sekolah' => $this->request->getVar('asal'),
            'alamat_sekolah' => $this->request->getVar('alamat_sekolah'),
            'alamat_ortu' => $this->request->getVar('alamat_ortu'),
            'no_ortu' => $this->request->getVar('telepon_ortu'),
            'ukuran' => $this->request->getVar('ukuran'),
            'foto' => $namaImage

        ]);
        $no_daftar = $this->request->getVar('no_daftar');
        session()->setFlashdata('pesan', 'Data Identitas Pendaftaran anda berhasil dengan <strong>No Pendaftaran : ' . $no_daftar . '</strong>! <br>Silahkan Catat No Pendaftaran dan Lakukan Cetak Formulir pada Halaman beranda! Terima Kasih');
        return redirect()->to('/submision');
    }

    // public function ajaxSearch()
    // {
    //     helper(['form', 'url']);

    //     $data = [];

    //     $db      = \Config\Database::connect();
    //     $builder = $db->table('tbl_siswa');

    //     $query = $builder->like('nama_lengkap', $this->request->getVar('q'))
    //         ->select('no_daftar, nama_lengkap as text')
    //         ->limit(10)->get();
    //     $data = $query->getResult();

    //     echo json_encode($data);
    // }
    public function list()
    {
        //$model = new M_user();
        //$request = \Config\Services::request();
        $id = $this->request->getPostGet('term');
        $user = $this->siswaModel->like('no_daftar', $id)->findAll();
        $w = array();
        foreach ($user as $rt) :
            $w[] = [
                "label" => $rt['no_daftar'],
                "nama" => $rt['nama_lengkap'],
                "nomor" => $rt['no_daftar']
            ];

        endforeach;
        echo json_encode($w);
    }
}
