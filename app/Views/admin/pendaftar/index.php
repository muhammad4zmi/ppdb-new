<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
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
    width: 12rem;
    height: 16rem;
  }
</style>
<div class="container-fluid">
  <!-- Page Heading -->
  <p class="h6 mb-4 text-gray-700 text-left" style="font-size: 12px;">
    <i class="fas fa-home"></i>
    <?php foreach ($pengaturan as $k) : ?>
      <?= $k['nama_aplikasi']; ?> / <a href="/admin/dasboard" class="text-gray-700">Admin</a> / <a href="dasboard" class="text-gray-700"><?= $title; ?> </a>
  </p>
<?php endforeach; ?>
<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-uppercase" style="font-size: 14px;">Data Calon Peserta Didik Baru</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <div class="col-md-12 mb-3" align="right">
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>">
            </div>
            <?php if (session()->getFlashdata('pesan')) : ?>

            <?php endif; ?>
            <button class="btn btn-sm btn-success export"><i class="far fa-file-excel"></i> Export File Excel</button>
          </div>

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr align="center" style="font-size: 14px;">
                <!-- <th width="1%"><input type="checkbox" id="pilih_semua"></th> -->
                <th width="1%">No</th>
                <th width="2%">Photo</th>
                <th width="10%">No Pendaftaran</th>
                <th width="15%">Nama</th>
                <!-- <th width="10%">Email</th> -->
                <th width="10%">Prog Pilihan 1</th>
                <th width="10%">Prog Pilihan 2</th>

                <th width="5%">Tanggal Daftar</th>
                <th width="10%">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($siswa as $k) : ?>
                <tr>
                  <th scope="row"><?= $i++; ?></th>
                  <td class="center"><img class="foto-thumbnail" src="<?= base_url('/assets/img/profil') . '/' . $k['foto']; ?>" alt="Foto Siswa"></td>
                  <td><?= $k['no_daftar']; ?></td>
                  <td><?= $k['nama_lengkap']; ?></td>

                  <td><?= $k['pil_jurusan1']; ?></td>
                  <td><?= $k['pil_jurusan2']; ?></td>

                  <td><?= date('d F Y', strtotime($k['tgl_daftar'])); ?></td>
                  <td align="center">
                    <a href="/admin/pendaftar/detail/<?= $k['no_daftar']; ?>" class="btn btn-primary m-1 btn-sm btn-circle data-placement=" top" title="" data-toggle="tooltip" data-original-title="Data Detail <?= $k['nama_lengkap']; ?>"">
                      <i class=" fas fa-eye"></i></a>
                    <a href="/admin/pendaftar/cetakformulir/<?= $k['no_daftar']; ?>" class="btn btn-warning btn-sm m-1 btn-circle data-placement=" top" title="" data-toggle="tooltip" data-original-title="Download Formulir <?= $k['nama_lengkap']; ?>"" target=" _blank">
                      <i class=" fas fa-print"></i></a>
                    <a href="/siswa/delete/<?= $k['no_daftar']; ?>" class="btn btn-danger m-1 btn-circle btn-sm tombol-hapus" data-placement="top" title="" data-toggle="tooltip" data-original-title="Hapus <?= $k['nama_lengkap']; ?>">
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