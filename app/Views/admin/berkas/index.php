<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <p class="h6 mb-4 text-gray-700 text-left" style="font-size: 12px;">
        <i class="fas fa-home"></i>
        <?php foreach ($pengaturan as $k) : ?>
            <?= $k['nama_aplikasi']; ?> / <a href="/admin/dasboard" class="text-gray-700">Admin</a> / <a href="dasboard" class="text-gray-700"><?= $title; ?> </a> </p>
<?php endforeach; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-uppercase" style="font-size: 14px;">Data Berkas Calon Mahasiswa</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="col-md-12 mb-3" align="right">

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
                                <th width="5%">No Pendaftaran</th>
                                <th width="15%">Nama</th>
                                <!-- <th width="10%">Email</th> -->
                                <th width="10%">Bukti Pembayaran</th>
                                <th width="15%">Tanggal Upload</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($berkas as $k) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <th><?= $k['no_pendaftaran']; ?></th>
                                    <td><?= $k['nama']; ?></td>
                                    <!-- <td><?= $k['email']; ?></td> -->
                                    <td>
                                        <?php if ($k['scan'] == NULL) : ?>
                                            <span class="badge badge-danger">Calon Mahasiswa Baru belum melakukan Pembayaran Administrasi Pendaftaran</span>
                                        <?php else : ?>
                                            <a data-fancybox="gallery" rel=" ligthbox" href="<?= base_url('/img') . '/' . $k['scan']; ?>" data-placement="top" title="" data-toggle="tooltip" data-original-title="Klik untuk Lihat Berkas <?= $k['nama']; ?>">
                                                <?= $k['scan']; ?>
                                            </a>
                                        <?php endif; ?>

                                    </td>
                                    <!-- <td><?= $k['scan']; ?></td> -->
                                    <td>
                                        <?php if ($k['scan'] == NULL) : ?>
                                            <p>-</p>
                                        <?php else : ?>

                                            <?= $k['tgl_upload'] . ' | ' . $k['jam_upload']; ?>
                                        <?php endif; ?>
                                    </td>
                                    <td align="center">
                                        <?php if ($k['scan'] == NULL) : ?>
                                            <span class="badge badge-danger"><i class="fas fa-exclamation-triangle"></i> File has not been uploaded</span>
                                        <?php else : ?>
                                            <?php if ($k['status'] == 0) : ?>
                                                 <a href="berkas/verifikasi/<?= $k['no_pendaftaran']; ?>" class="btn btn-danger m-1 btn-sm btn-verify" data-placement="top" title="" data-toggle="tooltip" data-original-title="Belum di Verifikasi">
                                                    <i class="fas fa-file-signature"></i> has not been verified</a>
                                                    <a href="berkas/reject/<?= $k['no_pendaftaran']; ?>" class="btn btn-warning m-1 btn-sm btn-reject" data-placement="top" title="" data-toggle="tooltip" data-original-title="Reject Jika berkas tidak valid">
                                                    <i class="fas fa-redo"></i> Reject</a>

                                            <?php else : ?>

                                                <button class="btn btn-primary m-1 btn-sm" data-placement="top" title="" data-toggle="tooltip" data-original-title="Sudah Terverifikasi" disabled>
                                                    <i class="far fa-check-square"></i> Verified</button>
                                            <?php endif; ?>
                                        <?php endif; ?>

                                        <!-- <a href="" class="btn btn-warning btn-sm m-1 btn-circle data-placement=" top" title="" data-toggle="tooltip" data-original-title="Download Formulir <?= $k['nama']; ?>"">
                      <i class=" fas fa-download"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm m-1 btn-circle" data-placement="top" title="" data-toggle="tooltip" data-original-title="Hapus Data <?= $k['nama']; ?>">
                                            <i class="fas fa-trash-alt"></i></a> -->
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