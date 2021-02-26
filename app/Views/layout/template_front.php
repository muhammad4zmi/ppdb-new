<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title><?= $title; ?></title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/mumin.png" />
  <!-- Place favicon.ico in the root directory -->

  <!-- ========================= CSS here ========================= -->
  <!-- <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-alpha-2.min.css" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/lindy-uikit.css" />
  <link rel="stylesheet" href="assets/css/base-style.css" />
  <link href="assets/vendor/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">
  <link href="assets/vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


</head>

<body>
  <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

  <!-- ========================= preloader start ========================= -->
  <div class="preloader">
    <div class="loader">
      <div class="spinner">
        <div class="spinner-container">
          <div class="spinner-rotator">
            <div class="spinner-left">
              <div class="spinner-circle"></div>
            </div>
            <div class="spinner-right">
              <div class="spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?= $this->include('layout/header.php'); ?>
  <?= $this->renderSection('content'); ?>


  <footer class="footer footer-style-4 footer-dark">
    <div class="container">
      <div class="widget-wrapper">
        <div class="row">
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="footer-widget">
              <div class="logo">
                <a href="#0"> <img src="assets/img/logo1.png" alt=""> </a>
              </div>

              <ul class="socials">
                <li> <a href="https://www.facebook.com/ma.mamualliminnwanjani"> <i class="lni lni-facebook-filled"></i> </a> </li>
                <li> <a href="#0"> <i class="lni lni-twitter-filled"></i> </a> </li>
                <li> <a href="https://www.instagram.com/mamualliminnwanjani98/"> <i class="lni lni-instagram-filled"></i> </a> </li>

              </ul>
            </div>
          </div>

          <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6">
            <div class="footer-widget">

              <!-- <ul class="links">
                <li> <a href="#0">Web Design</a> </li>
                <li> <a href="#0">Web Development</a> </li>
                <li> <a href="#0">Seo Optimization</a> </li>
                <li> <a href="#0">Blog Writing</a> </li>
              </ul> -->
              <p class="desc">Madrasah Aliyah Mu'allimin NW Anjani<br>
                Jalan Raya Mataram-Lb. Lombok, KM 49 Desa Anjani, Kec. Suralaga, Kabupaten Lombok Timur-NTB</p>
            </div>
          </div>

        </div>
      </div>
      <div class="copyright-wrapper">
        <p>Copyright &copy; <?= date('Y'); ?> MA Mu'allimin NW Anjani, Lombok Timur-NTB</p>
      </div>
    </div>
  </footer>
  <!-- ========================= footer style-4 footer-dark end ========================= -->

  <!-- ========================= scroll-top start ========================= -->
  <a href="#" class="scroll-top"> <i class="lni lni-chevron-up"></i> </a>
  <!-- ========================= scroll-top end ========================= -->


  <!-- ========================= JS here ========================= -->
  <!-- <script src="assets/js/bootstrap.5.0.0.alpha-2-min.js"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <script src="assets/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


  <!-- < src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></> -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="assets/js/count-up.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    $(document).ready(function() {

      $("#seri").hide();
      // $("#ketTotal").hide();
      $("#kps").change(function() {
        // var tgl1 = $("#tgl1").val();
        // var jmlPembayaran = $("#jmlPembayaran").val();
        var kps = $("#kps").val();
        if (kps == "Ya") {
          $("#seri").show(0);
        } else {
          $("#seri").hide(0);

        }
      });
    });
    // $("#ketTotal").show(0);
    // $("#jmlBayar").val(jmlPembayaran);
    // $("#jmlDenda").val(0);
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tgl_lahir').datepicker({
        //merubah format tanggal datepicker ke dd-mm-yyyy
        format: "yyyy-mm-dd",
        //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
        //format: "dd-mm-yyyy",
        autoclose: true
      });
    });
  </script>
  <script>
    function previewImg() {
      const bukti = document.querySelector('#bukti');
      const buktiLabel = document.querySelector('.custom-file-label');

      buktiLabel.textContent = bukti.files[0].name;

      const fileBukti = new FileReader();
      fileBukti.readAsDataURL(bukti.files[0]);


    }
  </script>

  <script>
    function previewProfil() {
      const image = document.querySelector('#image');
      const imageLabel = document.querySelector('.custom-file-label');
      const imgPreview = document.querySelector('.img-preview');
      imageLabel.textContent = image.files[0].name;

      const fileImage = new FileReader();
      fileImage.readAsDataURL(image.files[0]);

      fileImage.onload = function(e) {
        imgPreview.src = e.target.result;
      }


    }
  </script>


  <script>
    $(document).ready(function() {
      $("#cari").autocomplete({
        minLength: 0,
        source: 'submision/list',
        focus: function(event, ui) {
          $("#cari").val(ui.item.label);

          return false;
        },
        select: function(event, ui) {
          $("#cari").val(ui.item.label);

          $("#nomor").text(ui.item.nomor);
          $("#results").text(ui.item.nama);
          return false;
        }
      })

    });
  </script>
  <script>
    $(document).ready(function() {

      $("#myDIV").hide();
      // $("#ketTotal").hide();
    });
    // $("#ketTotal").show(0);
    // $("#jmlBayar").val(jmlPembayaran);
    // $("#jmlDenda").val(0);
  </script>
  <script>
    function myFunction() {
      var x = document.getElementById("myDIV");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>
</body>

</html>