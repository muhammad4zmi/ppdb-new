<?php

namespace App\Controllers;

use App\Models\AuthModel;
use CodeIgniter\I18n\Time;
use App\Models\SiswaModel;

class Auth extends BaseController
{
    protected $authModel;
    protected $siswaModel;
    public function __construct()
    {
        $this->authModel = new AuthModel();
        $this->siswaModel = new SiswaModel();
        $this->db = \Config\Database::connect();
        $this->email = \Config\Services::email();
        $this->session = session();
    }

    public function index()
    {
        if (session('username')) {
            return redirect()->to('/front/index');
        }
        $data = [
            'title' => 'Login',
            'validation' => \Config\Services::validation()

        ];

        return view('auth/login', $data);
    }

    public function proses_login()
    {
        if (!$this->validate([

            'username' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Username tidak boleh kosong!'


                ]
            ],
            'password' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Password tidak boleh kosong!'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/auth')->withInput()->with('validation', $validation);
        } else {
            $db = \Config\Database::connect();
            $query = $db->table('admin');
            $username = htmlspecialchars($this->request->getVar('username'));
            $password = $this->request->getVar('password');
            $user = $query->getWhere(['username' => $username])->getRowArray();

            if ($user) {
                //ada user
                // if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username']
                    ];

                    session()->set($data);

                    return redirect()->to('/admin/dasboard');
                } else {
                    session()->setFlashdata('pesan', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                    return redirect()->to('/auth');
                }
                // } else {
                //     session()->setFlashdata('pesan', '<div class="alert alert-warning" role="alert">Email atau Username tidak aktif!</div>');
                //     return redirect()->to('/auth');
                // }
            } else {
                //tidak ada user
                session()->setFlashdata('pesan', '<div class="alert alert-danger" role="alert">Email atau Username tidak terdaftar!</div>');
                return redirect()->to('/auth');
            }
        }
    }



    public function registration()
    {
        if (session('email')) {
            return redirect()->to('/user/dasboard');
        }
        $data = [
            'title' => 'Registration',
            'validation' => \Config\Services::validation()
        ];

        return view('auth/registration', $data);
    }

    public function proses_register()
    {

        //validasi
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[users.nama]|trim',
                'errors' => [
                    'required' => 'Nama harus diisi!.',
                    'is_unique' => 'Nama sudah terdaftar!'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]|trim',
                'errors' => [
                    'required' => 'Email harus disi!',
                    'valid_email' => 'Email tidak valid!',
                    'is_unique' => 'Email sudah terdaftar!'
                ]
            ],
            'password1' => [
                'rules' => 'required|trim|min_length[5]|matches[password2]',
                'errors' => [
                    'required' => 'Tidak boleh kosong!',
                    'matches' => 'Password tidak sama!',
                    'min_length' => 'Password Minimal 5 karakter!'
                ]
            ],
            'password2' => [
                'rules' => 'required|trim|matches[password1]',
                'errors' => [
                    'required' => 'Tidak boleh kosong!',
                    'matches' => 'Password tidak sama!',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/auth/registration')->withInput()->with('validation', $validation);
        }

        // $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->authModel->save([
            'nama' => htmlspecialchars($this->request->getVar('nama')),
            'email' => htmlspecialchars($this->request->getVar('email')),
            'password' => password_hash($this->request->getVar('password1'), PASSWORD_DEFAULT),
            'image' => 'default.png',
            'role_id' => 2,
            'is_active' => 1,
            'date_created' => time()

        ]);
        $email = $this->request->getVar('email');
        $nama = $this->request->getVar('nama');
        $password = $this->request->getVar('password1');
        $cek = $this->db->query('SELECT LAST_INSERT_ID()')->getRowArray();
        // $id_user = $cek[0];
        // dd($id_user);
        //die;
        $this->pendaftarModel->save([
            'no_pendaftaran' => $this->request->getVar('no_daftar'),
            'nama' => htmlspecialchars($this->request->getVar('nama')),
            'email' => htmlspecialchars($this->request->getVar('email')),
            'status_datadiri' => 0,
            'status_dataortu' => 0,
            'users_id' => $cek
        ]);

        $this->db->table('berkas')
            ->insert([
                'no_pendaftaran' => $this->request->getVar('no_daftar'),
                'nama_berkas' => 'Bukti Pendaftaran',
                'status' => 0,
                'scan' => ''

            ]);

        $message = "<h3>Informasi Pendaftaran</h3><p>Kepada Yth. Calon Mahasiswa Baru <b>" . $nama . "</b><br>
            Selamat anda telah berhasil melakukan registrasi dengan akun berikut : <br> Username : " . $email . " <br>
            Password : " . $password . "<br>
            Silahkan <strong><a href='https://pmb.stmiksznw.ac.id/auth'>Login</a></strong> untuk melengkapi data dan melihat detail pembayaran administrasi pendaftaran.<br>Pembayaran biaya Administrasi melalui transfer :<br> ke Rekening Bank Syari'ah Indonesia<br>KCP. Lombok Aikmel<br>No. Rek: 1060290586<br>a.n. Panitia PMB STMIK SZ NW.<br> Terima Kasih</p>";
        $this->sendEmail($email, 'Info Pendaftaran', $message);


        session()->setFlashdata('pesan', ' <div class="alert alert-success" role="alert">Selamat! Registrasi Akun anda berhasil!. Silahkan Login</div>');
        return redirect()->to('/auth');
    }

    private function sendEmail($to, $title, $message)
    {

        $this->email->setFrom('pmb@stmiksznw.ac.id', 'PMB STMIK Syaikh Zainuddin NW');
        $this->email->setTo($to);

        //$this->email->attach($attachment);

        $this->email->setSubject($title);
        $this->email->setMessage($message);

        if (!$this->email->send()) {
            return false;
        } else {
            return true;
        }
    }

    public function logout()
    {
        $array_items = ['username'];
        session()->remove($array_items);
        // session()->destroy();
        session()->setFlashdata('pesan', ' <div class="alert alert-success" role="alert">Anda telah Logout!</div>');
        return redirect()->to('/auth');
    }

    public function blocked()
    {
        return view('auth/blocked');
    }
}
