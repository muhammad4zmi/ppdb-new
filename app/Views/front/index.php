<?= $this->extend('layout/template_front'); ?>


<?= $this->section('content'); ?>
<style type="text/css">
  .foto-thumbnail {
    padding: .07rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    width: 200px;
    height: 100px;
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
<div class="hero-section hero-style-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="hero-content-wrapper">
          <h2>Yakin, Ikhlas, Istiqomah</h2>
          <p>Please, purchase full version of the template to get all pages and features.</p>
          <a href="submision" rel="nofollow" class="button button-lg radius-50">Daftar Sekarang</a>
        </div>
      </div>
      <div class="col-lg-6 align-self-end">
        <div class="hero-image">
          <img src="assets/img/siswa.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="shapes">
    <img src="assets/img/hero/hero-1/shape-1.svg" alt="" class="shape shape-1">
    <img src="assets/img/hero/hero-1/shape-2.svg" alt="" class="shape shape-2">
    <img src="assets/img/hero/hero-1/shape-3.svg" alt="" class="shape shape-3">
    <img src="assets/img/hero/hero-1/shape-4.svg" alt="" class="shape shape-4">
  </div>
</div>
<!-- ========================= hero-1 end ========================= -->
</section>
<section id="features" class="feature-section feature-style-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10">
        <div class="section-title text-center mb-6">
          <h3 class="mb-2">Cetak Formulir Pendaftaran</h3>
          <p>Masukkan No Pendaftaran Anda dan Lakukan Cetak Formulir Pendaftaran</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="single-feature">
          <div class="icon">
            <i class="fas fa-print"></i>
          </div>
          <div class="content">
            <form action="/cari/cetakformulir" method="POST">
              <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="Masukkan No Pendaftaran" aria-label="Masukkan No Pendaftaran" aria-describedby="button-addon2" name="cari" id="cari" onclick="myFunction()">
                <div class="input-group-append">
                  <button class="btn btn-primary btn-lg" type="submit" id="show" o><i class="fas fa-print"></i> Cetak</button>
                </div>
              </div>
            </form>

            <div class="card mt-3" id="myDIV">
              <div class="card-body">

                <span class="badge badge-success mb-3">Informasi Singkat Calon Santri</span>
                <table class="table">

                  <tbody>
                    <tr>

                      <th width="20%" scope="col">No Pendaftaran</th>
                      <th width="1%">:</th>
                      <th width="90%" scope="col">
                        <p id="nomor" style="font-size: 15px; font-weight: bolder; text-align: left"></p>
                      </th>
                    </tr>
                    <tr>

                      <td>Nama Calon Santri Baru</td>
                      <td>:</td>
                      <td><span id="results"></span></td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-8">
        <div class="section-title text-center mb-60">
          <h3 class="mb-15">Informasi PPDB 2021</h3>
          <p>Informasi dan Jadwal Kegiatan PPDB MA Mu'allimin NW Anjani Tahun Ajaran 2021/2022</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
        <div class="single-feature">
          <div class="icon">
            <i class="fas fa-th-list"></i>
          </div>
          <div class="content">
            <h5><span class="badge badge-primary">Syarat Pendaftaran</span></h5>
            <p>
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                  <tr align="center" style="font-size: 14px;">
                    <th width="1%">No</th>
                    <th width="50%">Persyaratan</th>

                    <th width="2%">Ket</th>


                  </tr>
                </thead>
                <tfoot>
                  <tbody>
                    <tr style="font-size: 14px;">
                      <td align="center">1</td>
                      <td>Mengisi Formulir Pendaftaran melalui Online atau Offline</td>

                      <td align="center"> <span class="btn btn-danger m-1 btn-circle btn-sm" data-toggle="tooltip" data-placement="right" title="Bersifat Wajib"><i class="far fa-check-circle"></i> </span></td>
                    </tr>
                    <tr style="font-size: 14px;">
                      <td align="center">2</td>
                      <td>Photocopy Ijazah Terakhir yang terlegalisir 5 lembar</td>

                      <td align="center"><span class="btn btn-danger m-1 btn-circle btn-sm" data-toggle="tooltip" data-placement="right" title="Bersifat Wajib"><i class="far fa-check-circle"></i> </span></td>
                    </tr>
                    <tr style="font-size: 14px;">
                      <td align="center">3</td>
                      <td>Pas Photo Hitam Putih ukuran 3x4 5 lembar</td>

                      <td align="center"> <span class="btn btn-danger btn-sm m-1 btn-circle" data-toggle="tooltip" data-placement="right" title="Bersifat Wajib"><i class="far fa-check-circle"></i> </span></td>
                    </tr>
                    <tr style="font-size: 14px;">
                      <td align="center">4</td>
                      <td>Photocopy Kartu Keluarga 5 lembar</td>

                      <td align="center"> <span class="btn btn-danger btn-sm m-1 btn-circle" data-toggle="tooltip" data-placement="right" title="Bersifat Wajib"><i class="far fa-check-circle"></i> </span></td>
                    </tr>
                    <tr style="font-size: 14px;">
                      <td align="center">5</td>
                      <td>Administrasi Pendaftaran Rp 80.000</td>

                      <td align="center"> <span class="btn btn-danger btn-sm m-1 btn-circle" data-toggle="tooltip" data-placement="right" title="Bersifat Wajib"><i class="far fa-check-circle"></i> </span></td>
                    </tr>

                  </tbody>
              </table>
            </div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
        <div class="single-feature">
          <div class="icon">
            <i class="fas fa-calendar-alt"></i>
          </div>
          <div class="content">
            <h5>Scedule PPDB 2021</h5>
            <p>
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                  <tr align="center" style="font-size: 14px;">
                    <th width="1%">No</th>
                    <th width="30%">Gelombang</th>

                    <th width="30%">Ket</th>


                  </tr>
                </thead>
                <tfoot>
                  <tbody>
                    <tr style="font-size: 14px;">
                      <td align="center">1</td>
                      <td>Gelombang 1</td>

                      <td><span class="badge badge-success">1 Maret s/d 29 Mei 2021</span></td>
                    </tr>
                    <tr style="font-size: 14px;">
                      <td align="center">2</td>
                      <td>Gelombang 2</td>

                      <td><span class="badge badge-success">1 Juni s/d 10 Juli 2021</span></td>
                    </tr>
                    <tr style="font-size: 14px;">
                      <td align="center">3</td>
                      <td>Calon Peserta Didik Baru Kumpul</td>

                      <td><span class="badge badge-info">10 Juli 2021</span></td>
                    </tr>
                    <tr style="font-size: 14px;">
                      <td align="center">4</td>
                      <td>Orientasi Peserta Didik Baru</td>

                      <td><span class="badge badge-info">15 s/d 15 Juli 2021</span></td>
                    </tr>
                    <tr style="font-size: 14px;">
                      <td align="center">5</td>
                      <td>Awal Masuk Sekolah</td>

                      <td><span class="badge badge-info">19 Juli 2021</span></span></td>
                    </tr>
                    <tr style="font-size: 14px;">
                      <td colspan="3">
                        <p>Jika ada perubahan jadwal akan di informasikan melalui Portal ini atau websiet : <a href="https://mamualliminnwanjani.sch.id/">www.mamualliminnwanjani.sch.id</a></p>
                      </td>

                    </tr>

                  </tbody>
              </table>
            </div>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-8">
        <div class="section-title text-center mb-60">
          <h3 class="mb-15">Program/Jurusan</h3>
          <p>Program-Program yang tersedia di MA Mu'allimin NW Anjani</p>
        </div>
      </div>
    </div>
    <div class="row">

      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
        <div class="single-feature">
          <div class="icon">
            <i class="fas fa-atom"></i>
          </div>
          <div class="content">
            <h5>IPA</h5>
            <p>Ilmu Pengetahuan Alama</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
        <div class="single-feature">
          <div class="icon">
            <i class="lni lni-stats-up"></i>
          </div>
          <div class="content">
            <h5>IPS</h5>
            <p>Ilmu Pengetahuan Sosial</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
        <div class="single-feature">
          <div class="icon">
            <i class="fas fa-language"></i>
          </div>
          <div class="content">
            <h5>BAHASA</h5>
            <p>Pengetahuan Bahasa</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
        <div class="single-feature">
          <div class="icon">
            <i class="fas fa-quran"></i>
          </div>
          <div class="content">
            <h5>AGAMA</h5>
            <p>Pengetahuan Keagamaan</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ========================= feature style-3 end ========================= -->

<!-- ========================= about style-5 start ========================= -->
<section id="about" class="about-section about-style-5" style="background-image: url('assets/img/guru.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-8 col-md-10 wow fadeInUp" data-wow-delay=".5s">
        <div class="about-content-wrapper">
          <div class="section-title mb-30">
            <h4 class="mb-25">Informasi</h4>
            <hr>

            <?php foreach ($informasi as $info) : ?>
              <ul class="list-unstyled timeline widget">
                <li>
                  <div class="block">
                    <div class="block_content">
                      <h5 class="title">
                        <a><b><?= $info['judul']; ?></b></a>
                      </h5>

                      <div class="byline">
                        <span class="badge badge-pill badge-primary">
                          <i class="far fa-calendar-alt"></i> <?= $info['tgl']; ?> |
                          <i class="bx bxs-time"></i> <?= $info['jam']; ?>
                        </span>

                      </div>
                      <hr>
                      <p class="excerpt"><?= substr($info['info'], 0, 500); ?>

                      </p>
                    </div>
                  </div>
                </li>
              </ul>
              </p>
            <?php endforeach; ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- ========================= about style-5 end ========================= -->

<!-- ========================= team style-6 start ========================= -->
<section class="team-section text-center team-style-6">
  <div class="col-12">
    <div class="section-title text-center pt-60 mb-60">
      <!-- <h3 class="mb-15">You are using free lite version</h3>
      <p>Please, purchase full version of the template to get all pages and features</p><br />
      <a href="https://rebrand.ly/base-gg" rel="nofollow" target="_blank" class="button radius-30">Purchase Now</a> -->
    </div>
  </div>
</section>
<!-- ========================= team style-6 end ========================= -->


<!-- ========================= clients-logo start ========================= -->
<!-- <section class="clients-logo-section pb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center mb-60">
          <h3>Co-created by</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="client-logo wow fadeInUp" data-wow-delay=".2s">
          <img src="assets/img/clients/brands.svg" alt="" class="w-100">
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- ========================= clients-logo end ========================= -->

<?= $this->endSection(); ?>