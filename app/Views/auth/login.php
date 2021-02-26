<?= $this->extend('templates/auth_header'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card o-hidden border-0 shadow-lg my-4">
                <div class="card-body bg-light p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="p-5">
                                <div class="text-center" class="text">
                                    <img src="<?= base_url(); ?>/assets/img/mumin.png" alt="Logo Aplikasi" class="img-logo">
                                    <h3 class="h6 text-gray-900">Sistem Informasi Penerimaan Peserta Didik Baru</h3>
                                    <h1 class="h5 text-gray-900"><b>MA Mu'allimin NW Anjani</b></h1>


                                    <?php if (session()->getFlashdata('pesan')) : ?>

                                        <?= session()->getFlashdata('pesan'); ?>



                                    <?php endif; ?>

                                </div>
                                <form class="user" action="/auth/proses_login" method="POST">
                                    <?= csrf_field(); ?>
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>""  placeholder=" Masukkan Username..." style="font-size: 12px;" autofocus value="<?= old('username'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('username'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>"" id=" username" placeholder="Masukkan Email..." style="font-size: 12px;" autofocus value="<?= old('password'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('password'); ?>
                                        </div>

                                    </div>
                                    <input type="submit" name="btn_login" value="Login" class="btn btn-sm btn-success btn-user btn-block ">
                                    </input>
                                </form>

                                <div class="text-center mt-2 mb-2">
                                    <a class="h4 text-gray-900" style="font-size: 12px;"> Belum punya akun?
                                        <a class="text-success" style="font-size: 16px;" href="/auth/registration"> <span class="badge badge-primary">Registrasi Disini!</span></a>
                                    </a>
                                </div>
                                <div style="margin:5px auto; text-align:center">
                                    <!-- <a class="btn btn-sm btn-warning" href="https://bit.ly/Mekanisme-Pendaftaran-PPDB-MANUSGI-2020" target="spmb">
                                        <i class="fas fa-book-open"></i>
                                        Lihat Mekanisme Pendaftaran</a> -->
                                    <a class="btn btn-xsm btn-warning m-1" href="/">
                                        <i class="fas fa-arrow-left"></i>
                                        Back</a>
                                </div>
                                <hr>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>