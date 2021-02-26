<?= $this->extend('layout/template_front'); ?>
<?= $this->section('content'); ?>
<?php
$db = \Config\Database::connect();
date_default_timezone_set("Asia/Jakarta");
$date = date("Y-m-d");
$tgl_daftar = date('d-m-Y', strtotime($date));
// cari id transaksi terakhir yang berawalan tanggal hari ini
$query = $db->query("SELECT max(no_daftar) AS last FROM tbl_siswa");
$data = $query->getRowArray();
// dd($data);
// die;
//$noOrder = $data['maxKode'];

$nomorreg = $data['last'];

// baca nomor urut transaksi dari id transaksi terakhir
$noUrut = (int) substr($nomorreg, 9, 3);
$noUrut++;

$tahun = substr($date, 0, 4);
$bulan = substr($date, 5, 2);
$tgl1 = substr($date, 8, 2);
// nomor urut ditambah 1
//$nextNoUrut = $lastNoUrut + 1;

// membuat format nomor transaksi berikutnya
$no_pendaftaran = $tahun . $bulan . $tgl1 . sprintf("%04s", $noUrut);


?>
<style type="text/css">
    .foto-thumbnail {
        padding: .07rem;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: .25rem;
        width: 3.3rem;
        height: auto;
    }

    .foto-preview {
        padding: .25rem;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: .25rem;
        width: 10rem;
        height: 14rem;
    }
</style>
<div class="banner-section">
    <div class="banner-area img-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h3 class="mb-20">Submision</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Formulir Pendaftaran</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========================= banner end ========================= -->
</section>

<section id="about" class="about-section about-style-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-8 col-md-10">
                <div class="about-content-wrapper">
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>

                        </div>

                    <?php endif; ?>
                    <div class="section-title mb-30">
                        <div class="alert alert-danger" role="alert">
                            Silahkan Lengkapi identitasmu dengan mengisi Form dibawah ini!, isilah dengan data sebenarnya!
                        </div>
                        <strong>IDENTITAS PRIBADI</strong>
                        <hr>
                        <form class="user" method="POST" action="/submision/addsubmision" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label for="nama" style="font-size: 12px;">Nama Lengkap *</label>
                                            <input type="hidden" name="no_daftar" value="<?= $no_pendaftaran; ?>">
                                            <input type="text" name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" autofocus value="<?= old('nama'); ?>" style="font-size: 12px;">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('nama'); ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-md-6">
                                                <label for="tempat_lahir" style="font-size: 12px;">NIK
                                                    *</label>
                                                <input type="text" name="nik" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" autofocus value="<?= old('nik'); ?>" style="font-size: 12px;" placeholder="Masukkan NIK" value="" maxlength="16" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('nik'); ?>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="tgl_lahir" style="font-size: 12px;">NISN
                                                    *</label>
                                                <input type="text" name="nisn" class="form-control <?= ($validation->hasError('nisn')) ? 'is-invalid' : ''; ?>" id="nisn" autofocus value="<?= old('nisn'); ?>" style="font-size: 12px;" placeholder="Masukkan NISN" value="" maxlength="16" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('nisn'); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-md-6">
                                                <label for="tempat_lahir" style="font-size: 12px;">Tempat Lahir
                                                    *</label>
                                                <input type="text" name="tempat_lahir" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" id="tempat_lahir" autofocus value="<?= old('tempat_lahir'); ?>" style="font-size: 12px;">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('tempat_lahir'); ?>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="tgl_lahir" style="font-size: 12px;">Tanggal Lahir
                                                    *</label>
                                                <input type="text" name="tgl_lahir" class="form-control <?= ($validation->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>" autofocus value="<?= old('tgl_lahir'); ?>" data-provide="datepicker" id="tgl_lahir" style="font-size: 12px;" value="" placeholder="Masukkan Tanggal Lahir">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('tgl_lahir'); ?>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="alamat" style="font-size: 12px;">Alamat *</label>
                                            <textarea name="alamat" id="alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="jenis_kelamin" autofocus value="<?= old('alamat'); ?>" style="font-size: 12px;"></textarea>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('alamat'); ?>

                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                                <label for="email" style="font-size: 12px;">Email *</label>
                                                <input type="email" name="email" id="email" class="form-control" style="font-size: 12px;" placeholder="Email" value="">
                                            </div> -->
                                        <div class="form-group row">

                                            <div class="col-md-6">
                                                <label for="telepon" style="font-size: 12px;">Nomor HP / WhatsApp
                                                    *</label>
                                                <input type="text" name="telepon" id="telepon" class="form-control <?= ($validation->hasError('telepon')) ? 'is-invalid' : ''; ?>" id="jenis_kelamin" autofocus value="<?= old('telepon'); ?>" style="font-size: 12px;" placeholder="Nomor HP / WhatsApp" value="" maxlength="14" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('telepon'); ?>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="telepon" style="font-size: 12px;">Ukuran Baju
                                                    *</label>
                                                <select name="ukuran" class="form-control <?= ($validation->hasError('ukuran')) ? 'is-invalid' : ''; ?>" autofocus value="<?= old('ukuran'); ?>" style="font-size: 12px;">
                                                    <option value="">Pilih:</option>
                                                    <option value="XXL">XXL</option>
                                                    <option value="XL">XL</option>
                                                    <option value="L">L</option>
                                                    <option value="M">M</option>
                                                    < </select>
                                                        <div class="invalid-feedback">
                                                            <?= $validation->getError('ukuran'); ?>

                                                        </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="asal" style="font-size: 12px;">Asal Madrasah / Sekolah
                                                *</label>
                                            <input type="text" name="asal" id="asal" class="form-control <?= ($validation->hasError('asal')) ? 'is-invalid' : ''; ?>" id="jenis_kelamin" autofocus value="<?= old('asal'); ?>" style="font-size: 12px;" placeholder="Asal Madrasah / Sekolah" value="">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('asal'); ?>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat" style="font-size: 12px;">Alamat Sekolah</label>
                                            <textarea name="alamat_sekolah" id="alamat" class="form-control <?= ($validation->hasError('alamat_sekolah')) ? 'is-invalid' : ''; ?>" id="jenis_kelamin" autofocus value="<?= old('alamat_sekolah'); ?>" style="font-size: 12px;"></textarea>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('alamat_sekolah'); ?>

                                            </div>
                                        </div>
                                        <div class="form-group">


                                            <label for="tempat_lahir" style="font-size: 12px;">Punya KIP/PKH/KIS?
                                                *</label>
                                            <select name="kip" id="kps" class="form-control <?= ($validation->hasError('kip')) ? 'is-invalid' : ''; ?>" autofocus value="<?= old('kip'); ?>" style="font-size: 12px;">
                                                <option value="">Pilih:</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('kip'); ?>

                                            </div>

                                        </div>
                                        <div class="form-group" id="seri">

                                            <label for="tgl_lahir" style="font-size: 12px;">KODE KIP/PKH/KIS
                                                *</label>
                                            <input type="text" name="seri" class="form-control" id="input-text" value="0" placeholder="Seri KPS" style="font-size: 12px;">
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="status" style="font-size: 12px;">Program Pilihan 1
                                                    *</label>

                                                <select name="program1" id="status" class="form-control <?= ($validation->hasError('program1')) ? 'is-invalid' : ''; ?>" id="jenis_kelamin" autofocus value="<?= old('program1'); ?>" style="font-size: 12px;">

                                                    <option value="">Pilih Program :</option>
                                                    <option value="IPA">IPA</option>
                                                    <option value="IPS">IPS</option>
                                                    <option value="BAHASA">BAHASA</option>
                                                    <option value="AGAMA">AGAMA</option>

                                                </select>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('program1'); ?>

                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <label for="status" style="font-size: 12px;">Program Pilihan 2
                                                    *</label>
                                                <select name="program2" id="status" class="form-control <?= ($validation->hasError('program2')) ? 'is-invalid' : ''; ?>" id="jenis_kelamin" autofocus value="<?= old('program2'); ?>" style="font-size: 12px;">

                                                    <option value="">Pilih Program:</option>
                                                    <option value="IPA">IPA</option>
                                                    <option value="IPS">IPS</option>
                                                    <option value="BAHASA">BAHASA</option>
                                                    <option value="AGAMA">AGAMA</option>

                                                </select>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('program2'); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <strong class="mt-3"> ORANG TUA/WALI</strong>
                                        <hr>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <label for="nama" style="font-size: 12px;">Nama Ayah *</label>
                                                    <input type="text" name="nama_ayah" class="form-control <?= ($validation->hasError('nama_ayah')) ? 'is-invalid' : ''; ?>" id="nama_ayah" autofocus value="<?= old('nama_ayah'); ?>" style="font-size: 12px;" placeholder="Masukkan nama Sesuai KK">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('nama_ayah'); ?>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama" style="font-size: 12px;">Nama Ibu *</label>
                                                    <input type="text" name="nama_ibu" class="form-control <?= ($validation->hasError('nama_ibu')) ? 'is-invalid' : ''; ?>" id="nama_ibu" autofocus value="<?= old('nama_ibu'); ?>" style="font-size: 12px;" placeholder="Masukkan nama Sesuai KK">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('nama_ibu'); ?>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="alamat" style="font-size: 12px;">Alamat Ortu</label>
                                            <textarea name="alamat_ortu" id="alamat" class="form-control <?= ($validation->hasError('alamat_ortu')) ? 'is-invalid' : ''; ?>" id="jenis_kelamin" autofocus value="<?= old('alamat_ortu'); ?>" style="font-size: 12px;"></textarea>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('alamat_ortu'); ?>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="telepon" style="font-size: 12px;">Nomor HP Ortu</label>
                                            <input type="text" name="telepon_ortu" id="telepon_ayah" class="form-control" placeholder="Nomor HP / WhatsApp (Tidak Wajib)" style="font-size: 12px;">
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <img src=" <?= base_url('assets/img/default.png'); ?>" class=" img-thumbnail img-preview">
                                                    </div>
                                                    <div class="col-sm-6">

                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input <?= ($validation->hasError('image')) ? 'is-invalid' : ''; ?>" id="image" name="image" onchange="previewProfil()">
                                                            <div class="invalid-feedback">
                                                                <?= $validation->getError('image'); ?>

                                                            </div>
                                                            <label class="custom-file-label" style="font-size: 14px;"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="text-right">
                                            <a href="<?= base_url(); ?>" class="btn btn-lg btn-danger" name="kembali">
                                                <i class="fas fa-arrow-left"></i>
                                                Kembali</a>
                                            <button type="submit" name="btn_simpan" value="simpan_data" class="btn btn-lg btn-success">
                                                <i class="fas fa-save"></i>
                                                Simpan </button>

                                        </div>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>