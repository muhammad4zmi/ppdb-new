<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
     <p class="h6 mb-4 text-gray-700 text-left" style="font-size: 12px;">
        <i class="fas fa-home"></i>
        <?php foreach ($pengaturan as $k) : ?>
            <?= $k['nama_aplikasi']; ?> / <a href="/admin/dasboard" class="text-gray-700">Admin</a> / <a href="#" class="text-gray-700"><?= $title; ?> </a> </p>
<?php endforeach; ?>
    <div class="row">
        <!-- Data Nilai -->
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-uppercase" style="font-size: 14px;">Tambah Gelombang PMB</h6>
                </div>
                <div class="card-body">

                    <form class="user" method="POST" action="/gelombang/save">
                        <?= csrf_field(); ?>
                        <div class=" col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label style="font-size: 12px;">Tanggal Buka*</label>
                                                <input type="text" name="tgl_buka" class="form-control <?= ($validation->hasError('tgl_buka')) ? 'is-invalid' : ''; ?>" autofocus value="<?= old('tgl_buka'); ?>" data-provide="datepicker" id="tgl_buka" style="font-size: 12px;" value="" placeholder="Masukkan Tanggal Buka Pendaftaran">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('tgl_buka'); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label style="font-size: 12px;">Tanggal Tutup*</label>
                                                <input type="text" name="tgl_tutup" class="form-control <?= ($validation->hasError('tgl_tutup')) ? 'is-invalid' : ''; ?>" autofocus value="<?= old('tgl_tutup'); ?>" data-provide="datepicker" id="tgl_tutup" style="font-size: 12px;" value="" placeholder="Masukkan Tanggal Penutupan Pendaftaran">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('tgl_tutup'); ?>

                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="form-group">
                                        <label for="telepon" style="font-size: 12px;">Keterangan
                                            *</label>
                                        <input type="text" name="keterangan" id="keterangan" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" id="keterangan" autofocus value="<?= old('keterangan'); ?>" style="font-size: 12px;" placeholder="Keterangan Pendaftaran" value="">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('keterangan'); ?>

                                        </div>
                                    </div>
                                    <div class="form-group">


                                        <label for="tempat_lahir" style="font-size: 12px;">Status
                                            *</label>
                                        <select name="status" id="kps" class="form-control <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" autofocus value="<?= old('status'); ?>" style="font-size: 12px;">
                                            <option value="">Pilih Status:</option>
                                            <option value="1">Buka</option>
                                            <option value="2">Belum dibuka</option>
                                            <option value="0">Tutup</option>

                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('status'); ?>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-left">
                                <a href="/admin/gelombang" class="btn btn-sm btn-danger" name="kembali">
                                    <i class="fas fa-arrow-left"></i>
                                    Kembali</a>
                                <button type="submit" value="simpan_datasetting" class="btn btn-sm btn-success">
                                    <i class="fas fa-save"></i>
                                    Simpan </button>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>



    <?= $this->endSection(); ?>