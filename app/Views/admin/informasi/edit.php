<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <!-- Data Nilai -->
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-uppercase" style="font-size: 14px;">Ubah Informasi PMB</h6>
                </div>
                <div class="card-body">

                    <form action="/informasi/update/<?= $informasi['id']; ?>" method="POST">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="slug" value="<?= $informasi['slug']; ?>">
                        <div class=" col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 12px;">Judul Info</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $informasi['judul']; ?>" style="font-size: 12px;">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('judul'); ?>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="informasi" style="font-size: 12px;">Informasi</label>

                                        <textarea id="editor" name="info" class="form-control col-md-7 col-xs-12"><?= $informasi['info']; ?></textarea>


                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-left">
                                <a href="/admin/informasi" class="btn btn-sm btn-danger" name="kembali">
                                    <i class="fas fa-arrow-left"></i>
                                    Kembali</a>
                                <button type="submit" value="simpan_datasetting" class="btn btn-sm btn-success">
                                    <i class="fas fa-save"></i>
                                    Ubah Data </button>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>



    <?= $this->endSection(); ?>