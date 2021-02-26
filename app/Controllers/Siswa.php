<?php

namespace App\Controllers;

use App\Models\SiswaModel;
use App\Models\PengaturanModel;
//use App\Models\BerkasModel;
use chillerlan\QRCode\QRCode;
use PhpOffice;
use PHPExcel;
use PHPExcel_IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Siswa extends BaseController
{
    protected $siswaModel;
    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
        $this->pengaturanModel = new PengaturanModel();
        // $this->berkasModel = new BerkasModel();
        $this->db = \Config\Database::connect();

        // helper('pmb');
        // is_logged_in();
    }
    public function index()
    {
        //$komik = $this->komikModel->findAll();
        $data = [
            'title' => 'Data Calon Peserta Didik',
            'siswa' => $this->siswaModel->getIdentitas(),
            'pengaturan' => $this->pengaturanModel->getPengaturan(),
            'user' => $this->db->table('admin')->getWhere(['username' => session('username')])->getRowArray()
        ];
        return view('admin/pendaftar/index', $data);
    }
    public function detail($no_daftar)
    {
        $data = [
            'title' => 'Detail Calon Peserta Didik',
            'siswa' => $this->siswaModel->getDetail($no_daftar),
            'pengaturan' => $this->pengaturanModel->getPengaturan(),
            'user' => $this->db->table('admin')->getWhere(['username' => session('username')])->getRowArray()
        ];
        return view('admin/pendaftar/detail', $data);
    }

    //cetak formulir
    public function cetakformulir($no_daftar)
    {
        $data = [
            'title' => 'SiPDB | Formulir Pendaftaran',
            'pengaturan' => $this->pengaturanModel->getPengaturan(),

            'validation' => \Config\Services::validation(),
            'siswa' => $this->siswaModel->getDetail($no_daftar)
        ];

        return view('admin/pendaftar/cetakformulir', $data);
    }

    public function delete($no_daftar)
    {
        $this->db->table('tbl_siswa')
            ->delete([
                'no_daftar'    => $no_daftar
            ]);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/pendaftar');
    }
    //export excel
    public function export()
    {


        $siswa = new SiswaModel();
        $dataSiswa = $siswa->findAll();
        // 
        $spreadsheet = new Spreadsheet();
        // tulis header/nama kolom 
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No Pendaftaran')
            ->setCellValue('B1', 'Nama Lengkap')
            ->setCellValue('C1', 'NIK')
            ->setCellValue('D1', 'Tempat lahir')
            ->setCellValue('E1', 'Tgl lahir')
            ->setCellValue('F1', 'Alamat')
            ->setCellValue('G1', 'Prog. Pilihan 1')
            ->setCellValue('H1', 'Prog. Pilihan 2')
            ->setCellValue('I1', 'Nama Ayah')
            ->setCellValue('J1', 'Nama Ibu')
            ->setCellValue('K1', 'Tgl Daftar');

        $column = 2;
        // tulis data mobil ke cell
        foreach ($dataSiswa as $data) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $data['no_daftar'])
                ->setCellValue('B' . $column, $data['nama_lengkap'])
                ->setCellValue('C' . $column, $data['nik'])
                ->setCellValue('D' . $column, $data['tempat_lahir'])
                ->setCellValue('E' . $column, date('d F Y', strtotime($data['tgl_lahir'])))
                ->setCellValue('F' . $column, $data['alamat'])
                ->setCellValue('G' . $column, $data['pil_jurusan1'])
                ->setCellValue('H' . $column, $data['pil_jurusan2'])
                ->setCellValue('I' . $column, $data['nama_ayah'])
                ->setCellValue('J' . $column, $data['nama_ibu'])

                ->setCellValue('K' . $column, date('d F Y', strtotime($data['tgl_daftar'])));

            $column++;
        }
        // tulis dalam format .xlsx
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data Siswa';

        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
