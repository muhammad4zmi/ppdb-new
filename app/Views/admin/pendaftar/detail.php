<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<?php

// $db = \Config\Database::connect();
// $id_pendaftar = $this->get('id_pendaftar');
// dd($id_pendaftar);
// die;

// // $queryDiri = $db->query("SELECT * FROM pendaftar WHERE id='$id_pendaftar'");
// // $data = $queryDiri->getRowArray();
// $query = $db->query("SELECT pendaftar.no_pendaftaran, pendaftar.nama,pendaftar.email, pendaftar.users_id, pendaftar.status_datadiri, pendaftar.status_dataortu, pendaftar.created_at, data_diri.id_pendaftar, data_diri.tmpt_lahir, data_diri.tgl_lahir, data_diri.jenis_kelamin,data_diri.anak_ke,data_diri.alamat, data_diri.no_hp,data_diri.alamat, data_diri.asal_madrasah, data_diri.pil_prodi1, data_diri.pil_prodi2, prodi.kode_prodi,prodi.prodi, users.id, users.image FROM pendaftar,prodi,data_diri, users WHERE pendaftar.id = data_diri.id_pendaftar AND data_diri.pil_prodi1 = prodi.kode_prodi AND users.id AND users.email=$k");
// $pedaftar = $query->getRowArray();



?>
<div class="container-fluid">
    <!-- Page Heading -->
    <p class="h6 mb-4 text-gray-700 text-left" style="font-size: 12px;">
        <i class="fas fa-home"></i>
        <?php foreach ($pengaturan as $p) : ?>
            <?= $p['nama_aplikasi']; ?> / <a href="/admin/dasboard" class="text-gray-700">Admin</a> / <a href="dasboard" class="text-gray-700"><?= $title; ?> </a>
    </p>
<?php endforeach; ?>
<div class="row">
    <!-- Data Pendaftar -->
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" style="font-size: 14px;">DATA DIRI CALON PESERTA DIDIK BARU</h6>
            </div>
            <?php foreach ($siswa as $k) : ?>

                <div class="card-body">
                    <div class="text-center">


                        <img src="<?= base_url('/assets/img/profil') . '/' . $k['foto']; ?>" alt="fotoprofil" class="img-fuild rounded-circle" style="width: 200px; height:200px">
                    </div>
                    <h5 class="text-center text-gray-900 card-title mt-4 text-uppercase" style="font-size: 15px">
                        <b><?= $k['nama_lengkap'] . " | No Pendaftaran : " . $k['no_daftar'] ?></b><br>

                    </h5>

                    <ul class="list-group">

                        <li class="list-group-item ">
                            <?php
                            $tmpt_lahir = "";
                            $tgl_lahir = "";
                            if (isset($k['tempat_lahir']) || isset($k['tgl_lahir'])) {
                                $tmpt_lahir = $k['tempat_lahir'];
                                $tgl_lahir = $k['tgl_lahir'];
                            } else {
                                $tmpt_lahir = "TTL Belum Diisi";
                                $tgl_lahir  = "-";
                            }
                            ?>
                            <h6 class="mb-0 text-gray-900" style="font-size: 13px"><b>Tempat, Tanggal Lahir</b></h6>
                            <medium class="text-muted"><?= $tmpt_lahir ?>, <?= date("d-m-Y", strtotime($tgl_lahir)) ?></medium>
                        </li>




                        <li class="list-group-item ">
                            <?php
                            $alamat = "";
                            if (isset($k['alamat'])) {
                                $alamat = $k['alamat'];
                            } else {
                                $alamat = "-";
                            }
                            ?>
                            <h6 class="mb-0 text-gray-900" style="font-size: 13px"><b>Alamat</b></h6>
                            <medium> <?= $alamat ?> </medium>
                        </li>

                        <li class="list-group-item ">
                            <?php
                            $no_hp = "";
                            if (isset($k['telpon'])) {
                                $no_hp = $k['telpon'];
                            } else {
                                $no_hp = "-";
                            }
                            ?>
                            <h6 class="mb-0 text-gray-900" style="font-size: 13px"><b>Nomor HP</b></h6>
                            <medium><?= $no_hp ?></medium>
                        </li>
                        <li class="list-group-item ">
                            <?php
                            $asal_madrasah = "";
                            if (isset($k['nama_sekolah'])) {
                                $asal_madrasah = $k['nama_sekolah'];
                            } else {
                                $asal_madrasah = "-";
                            }
                            ?>
                            <h6 class="mb-0 text-gray-900" style="font-size: 13px"><b>Asal Madrasah / Sekolah</b></h6>
                            <medium><?= $asal_madrasah ?></medium>
                        </li>
                        <li class="list-group-item ">
                            <?php
                            $pil_prodi1 = "";
                            if (isset($k['pil_jurusan1'])) {
                                $pil_prodi1 = $k['pil_jurusan1'];
                            } else {
                                $pil_prodi1 = "-";
                            }
                            ?>
                            <h6 class="mb-0 text-gray-900" style="font-size: 13px"><b>Program Pilihan 1</b></h6>
                            <medium><?= $pil_prodi1 ?></medium>
                        </li>
                        <li class="list-group-item ">
                            <?php
                            $pil_prodi2 = "";
                            if (isset($k['pil_jurusan2'])) {
                                $pil_prodi2 = $k['pil_jurusan2'];
                            } else {
                                $pil_prodi2 = "-";
                            }
                            ?>
                            <h6 class="mb-0 text-gray-900" style="font-size: 13px"><b>Program Pilihan 2</b></h6>
                            <medium><?= $pil_prodi2 ?></medium>
                        </li>
                    </ul>
                </div>

        </div>
    </div>
    <!-- Data Pendaftar -->
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" style="font-size: 14px;">DATA ORANG TUA SISWA</h6>
            </div>





            <div class="card-body">
                <div class="text-center">
                    <img src="<?= base_url('/admin/assets/img/orang_tua.png') ?>" alt="fotoprofil" class="img-fuild rounded-circle" style="width: 200px; height:200px">
                </div>
                <div class="card-header py-3 mb-2 mt-4">
                    <h6 class="m-0 font-weight-bold text-primary" style="font-size: 14px;">DATA ORANG TUA/WALI</h6>
                </div>
                <ul class="list-group">
                    <li class="list-group-item ">
                        <?php
                        $nama_ayah = "";
                        $nama_ibu = "";
                        $alamat_ayah = "";
                        $alamat_ayah = "";
                        $telepon_ortu = "";
                        $pendidikan_ayah = "";
                        $pekerjaan_ayah = "";
                        $pekerjaan_ibu = "";

                        if (
                            isset($k['nama_ayah']) || isset($k['nama_ibu']) || isset($k['alamat_ayah']) || isset($k['pekerjaan_ayah']) || isset($k['pendidikan_ayah']) || isset($k['pekerjaan_ibu'])
                            || isset($j['alamat_ibu']) || isset($j['telepon_ortu'])
                        ) {
                            $nama_ayah = $k['nama_ayah'];
                            $nama_ibu = $k['nama_ibu'];
                            $alamat_ortu = $k['alamat_ortu'];

                            $telepon_ortu = $k['no_ortu'];


                            // if ($j['telepon_ortu'] != NULL || $j['telepon_ibu'] != NULL) {
                            //     $telepon_ortu = $j['telepon_ortu'];
                            // }
                        } else {
                            $nama_ayah = "-";
                            $nama_ibu = "-";
                            $alamat_ayah = "-";
                            $alamat_ibu = "-";
                            $telepon_ortu = "-";
                            $pekerjaan_ayah = "-";
                            $pendidikan_ayah = "-";
                            $pekerjaan_ibu = "-";
                        }
                        ?>
                        <h6 class="mb-0 text-gray-900" style="font-size: 13px" style="font-size: 10px;"><b>Nama Ayah</b></h6>
                        <medium><?= $nama_ayah ?></medium>
                    </li>
                    <li class="list-group-item ">
                        <h6 class="mb-0 text-gray-900" style="font-size: 13px"><b>Nama Ibu</b></h6>
                        <medium><?= $nama_ibu ?></medium>
                    </li>
                    <li class="list-group-item ">
                        <h6 class="mb-0 text-gray-900" style="font-size: 13px" style="font-size: 10px;"><b>Alamat Ortu</b></h6>
                        <medium><?= $alamat_ortu ?></medium>
                    </li>
                    <li class="list-group-item ">
                        <h6 class="mb-0 text-gray-900" style="font-size: 13px" style="font-size: 10px;"><b>Nomor HP Ayah</b></h6>
                        <medium> <?= $telepon_ortu ?> </medium>
                    </li>
                    <!-- <li class="list-group-item ">
                                <h6 class="mb-0 text-gray-900" style="font-size: 13px" style="font-size: 10px;"><b>Pekerjaan Ayah</b></h6>
                                <medium> <?= $pekerjaan_ayah ?> </medium>
                            </li> -->

                </ul>

                <ul class="list-group">




                </ul>
            </div>

        <?php endforeach; ?>

        </div>

        <!-- Modal -->

        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="mb-4">
                    <a href="/admin/pendaftar" class="btn btn-secondary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">Kembali ke halaman data pendaftar</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>