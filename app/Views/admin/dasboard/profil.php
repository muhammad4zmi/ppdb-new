<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<?php
$db = \Config\Database::connect();
$userid = session()->get('email');

$queryUser = $db->query("SELECT * FROM users 
                                    
                                WHERE users.email= '$userid'");
$user = $queryUser->getRowArray();
// dd($user);
// die;
//$id_pendaftar = $user['id'];

// $queryDiri = $db->query("SELECT * FROM pendaftar WHERE id='$id_pendaftar'");
// $data = $queryDiri->getRowArray();
// $diri = $data['status_datadiri'];
// $ortu = $data['status_dataortu'];

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
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <p class="h6 mb-4 text-gray-700 text-left" style="font-size: 12px;">
        <i class="fas fa-home"></i>
        <?php foreach ($pengaturan as $k) : ?>
            <?= $k['nama_aplikasi']; ?> / <a href="/user/dasboard" class="text-gray-700">User</a> / <a href="/" class="text-gray-700"> My Profil</a> </p>
<?php endforeach; ?>
<!-- <hr> -->

<div class="row">
    <div class="col-md-12">

    </div>
</div>

<!-- Content Row -->
<div class="col-md-8">
    <div class="row">
        <!-- Data Nilai -->
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" style="font-size: 12px;">PROFIL USER</h6>
                </div>


                <div class="card-body">
                    <div class="text-center">
                        <img src="<?= base_url('/admin/assets/img/profil') . '/' . $user['image']; ?>"" alt=" fotoprofil" class="img-fuild rounded-circle" style="width: 200px; height:200px">
                    </div>
                    <!-- <div class="card-header py-3 mb-2 mt-4">
                        <h6 class="m-0 font-weight-bold text-primary" style="font-size: 14px;">DATA AYAH</h6>
                    </div> -->
                    <h5 class="text-center text-gray-900 card-title mt-4 text-uppercase" style="font-size: 15px">
                        <?php if ($user['role_id'] == 1) : ?>
                            <b>Level User : Administrator</b>
                        <?php else : ?>
                            <b>Level User : Guest User</b>
                        <?php endif; ?>
                    </h5>
                    <ul class="list-group">
                        <li class="list-group-item ">


                            <h6 class="mb-0 text-gray-900" style="font-size: 13px" style="font-size: 10px;"><b>Nama Lengkap</b></h6>
                            <strong><?= $user['nama']; ?></strong>
                        </li>
                        <li class="list-group-item ">
                            <h6 class="mb-0 text-gray-900" style="font-size: 13px" style="font-size: 10px;"><b>Email</b></h6>
                            <strong><?= $user['email']; ?></strong>
                        </li>
                        <!-- <li class="list-group-item ">
                            <h6 class="mb-0 text-gray-900" style="font-size: 13px" style="font-size: 10px;"><b>Tanggal Daftar</b></h6>
                            <medium> </medium>
                        </li> -->


                    </ul>


                </div>


            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>