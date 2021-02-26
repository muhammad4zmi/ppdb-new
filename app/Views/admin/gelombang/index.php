<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <p class="h6 mb-4 text-gray-700 text-left" style="font-size: 12px;">
        <i class="fas fa-home"></i>
        <?php foreach ($pengaturan as $k) : ?>
            <?= $k['nama_aplikasi']; ?> / <a href="/admin/dasboard" class="text-gray-700">Admin</a> / <a href="#" class="text-gray-700"><?= $title; ?> </a> </p>
<?php endforeach; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-uppercase" style="font-size: 14px;">Gelombang Pendaftaran PMB</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="col-md-12 mb-3" align="right">
                        <a href="gelombang/create" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i>
                            Tambah Gelombang</a>
                    </div>
                    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>">
                    </div>
                    <?php if (session()->getFlashdata('pesan')) : ?>

                    <?php endif; ?>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center" style="font-size: 14px;">
                                <!-- <th width="1%"><input type="checkbox" id="pilih_semua"></th> -->
                                <th width="2%">No</th>
                                <!-- <th width="3%">NISN</th> -->
                                <th width="10%">Tanggal Buka</th>
                                <th width="10%">Tanggal Tutup</th>
                                <th width="20%">Keterangan</th>
                                <th width="5%">Status</th>
                                <th width="8%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($gelombang as $k) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>

                                    <td><?= date('d F Y', strtotime($k['tgl_buka'])); ?></td>
                                    <td><?= date('d F Y', strtotime($k['tgl_tutup'])); ?></td>
                                    <td><?= $k['keterangan']; ?></td>
                                    <td>
                                        <?php if ($k['status'] == 1) : ?>
                                            <span class="badge badge-pill badge-primary">Dibuka</span>
                                        <?php elseif ($k['status'] == 2) : ?>
                                            <span class="badge badge-pill badge-success">Belum dibuka</span>
                                        <?php else : ?>
                                            <span class="badge badge-pill badge-warning">Ditutup</span>
                                        <?php endif; ?>
                                    </td>
                                    <td align="center">

                                        <a href="/gelombang/edit/<?= $k['id']; ?>" class="btn btn-warning m-1 btn-circle" data-placement="top" title="" data-toggle="tooltip" data-original-title="Ubah Gelombang <?= $k['keterangan']; ?>">
                                            <i class="fas fa-edit"></i></a>
                                         <a href="/gelombang/delete/<?= $k['id']; ?>" class="btn btn-danger m-1 btn-circle tombol-hapus" data-placement="top" title="" data-toggle="tooltip" data-original-title="Hapus <?= $k['keterangan']; ?>">
                                            <i class="fas fa-trash"></i></a>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




<?= $this->endSection(); ?>