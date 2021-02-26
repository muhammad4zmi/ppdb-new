<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Muhammad Azmi">


    <title><?= $title; ?></title>


    <!-- Gambar title -->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>/assets/img/mumin.png">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/admin/assets/js/style/css/main.css">
    <!-- Font-icon css-->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/admin/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/admin/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/admin/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/admin/assets/css/style2.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/admin/assets/css/alertify.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>




    <!-- css datepicker -->
    <link href="<?= base_url(); ?>/admin/assets/vendor/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/admin/assets/vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>


</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?= $this->include('templates/sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->


                <?= $this->include('templates/topbar.php'); ?>
                <?= $this->renderSection('content'); ?>
            </div>
        </div>


        <!-- End of Main Content -->
        <?= $this->include('templates/footer.php'); ?>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-double-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>

                    <!-- <div class="modal-body">Apakah Anda keluar dari aplikasi?</div> -->
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">
                            <i class="fas fa-arrow-left"></i>
                            Batal</button>

                        <a href="<?= base_url('auth/logout'); ?>" class="btn btn-danger btn-sm btn-icon-split" type="submit"><span class="icon text-white-50"><i class="fas fa-sign-out-alt fa-sm fa-fw"></i></span><span class="text"> Logout</span></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url(); ?>/admin/assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url(); ?>/admin/assets/vendor/jquery/jquery.js"></script>
        <script src="<?= base_url(); ?>/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url(); ?>/admin/assets/vendor/bootstrap/js/bootstrap.js"></script>

        <!-- Essential javascripts for application to work-->
        <script src="<?= base_url(); ?>/admin/assets/js/style/js/jquery-3.2.1.min.js"></script>
        <script src="<?= base_url(); ?>/admin/assets/js/style/js/jquery-3.4.1.min.js"></script>

        <script src="<?= base_url(); ?>/admin/assets/js/style/js/popper.min.js"></script>
        <script src="<?= base_url(); ?>/admin/assets/js/style/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>/admin/assets/js/style/js/main.js"></script>

        <!-- The javascript plugin to display page loading on top-->
        <script src="assets/js/style/js/plugins/pace.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url(); ?>/admin/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url(); ?>/admin/assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?= base_url(); ?>/admin/assets/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>/admin/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?= base_url(); ?>/admin/assets/js/demo/datatables-demo.js"></script>
        <script src="<?= base_url(); ?>/admin/assets/js/alertify.min.js"></script>

        <!-- js datepicker -->
        <script src="<?= base_url(); ?>/admin/assets/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>

        <!--<script src="<?= base_url(); ?>/admin/assets/js/style/js/sweetalert2.all.min.js"></script>-->

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        <script type="text/javascript" src="<?= base_url(); ?>/admin/assets/js/hapus.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="<?= base_url(); ?>/admin/assets/js/myscript.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
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
        <!-- <script>
            $(document).ready(function() {
                $("#pekerjaan_ibu").select2({
                    placeholder: "Please Select"
                });
                $("#kota2").select2({
                    placeholder: "Please Select"
                });
            });
        </script> -->
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
        <script type="text/javascript">
            $(document).ready(function() {
                $('#tgl_buka').datepicker({
                    //merubah format tanggal datepicker ke dd-mm-yyyy
                    format: "yyyy-mm-dd",
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    //format: "dd-mm-yyyy",
                    autoclose: true
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#tgl_tutup').datepicker({
                    //merubah format tanggal datepicker ke dd-mm-yyyy
                    format: "yyyy-mm-dd",
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    //format: "dd-mm-yyyy",
                    autoclose: true
                });
            });
        </script>


        <script type="text/javascript">
            function validasiFile() {
                var fileInput = document.getElementById('foto');
                var filePath = fileInput.value;
                var fileSize = $('#foto')[0].files[0].size;
                // tentukan extension yang diperbolehkan
                var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
                // Jika tipe file yang diupload tidak sesuai dengan allowedExtensions, tampilkan pesan :
                if (!allowedExtensions.exec(filePath)) {
                    alert('Tipe file foto tidak sesuai. Harap unggah file foto yang memiliki tipe *.jpg atau *.png');
                    fileInput.value = '';
                    document.getElementById('imagePreview').innerHTML = '<img class="foto-preview" src="foto/default.png"/>';
                    return false;
                }
                // jika ukuran file yang diupload lebih dari sama dengan 1 Mb
                else if (fileSize >= 1000000) {
                    alert('Ukuran file foto lebih dari 1 Mb. Harap unggah file foto yang memiliki ukuran maksimal 1 Mb.');
                    fileInput.value = '';
                    document.getElementById('imagePreview').innerHTML = '<img class="foto-preview" src="foto/default.png"/>';
                    return false;
                }
                // selain itu
                else {
                    // Image preview
                    if (fileInput.files && fileInput.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            document.getElementById('imagePreview').innerHTML = '<img class="foto-preview" src="' + e.target.result + '"/>';
                        };
                        reader.readAsDataURL(fileInput.files[0]);
                    }
                }
            }
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


        <script type="text/javascript">
            // $(document).ready(function() {
            //     //FANCYBOX
            //     //https://github.com/fancyapps/fancyBox
            //     $(".fancybox").fancybox({
            //         openEffect: "none",
            //         closeEffect: "none"
            //     });
            // });
        </script>
        <script>
            $(document).ready(function() {

                // get Edit Product
                $('.btn-edit').on('click', function() {
                    // get data from button edit
                    const kode = $(this).data('kode');
                    const prodi = $(this).data('prodi');
                    // const price = $(this).data('price');
                    // const category = $(this).data('category_id');
                    // Set data to Form Edit
                    $('.kode').val(kode);
                    $('.prodi').val(prodi);
                    // $('.product_price').val(price);
                    // $('.product_category').val(category).trigger('change');
                    // Call Modal Edit
                    $('#editModal').modal('show');
                });

                // get Delete Product
                $('.btn-delete').on('click', function() {
                    // get data from button edit
                    const kode = $(this).data('kode');
                    // Set data to Form Edit
                    $('.prodiID').val(kode);
                    // Call Modal Edit
                    $('#deleteModal').modal('show');
                });

            });
        </script>
        <script>
            $(document).ready(function() {
                $('.export').on("click", function() {
                    window.location = "<?php echo base_url("/admin/pendaftar/export"); ?>";
                });

            });
        </script>

        <script>
            (function() {

                var showHide = function(element, field) {
                    this.element = element;
                    this.field = field;

                    this.toggle();
                };

                showHide.prototype = {
                    toggle: function() {
                        var self = this;
                        self.element.addEventListener("change", function() {
                            if (self.element.checked) {
                                self.field.setAttribute("type", "text");
                            } else {
                                self.field.setAttribute("type", "password");
                            }
                        }, false);
                    }
                };

                document.addEventListener("DOMContentLoaded", function() {
                    var checkbox = document.querySelector("#show-hide"),
                        password = document.querySelector("#password"),
                        form = document.querySelector("#form");

                    form.addEventListener("submit", function(e) {
                        e.preventDefault();
                    }, false);

                    var toggler = new showHide(checkbox, password);
                });

            })();
        </script>

</body>

</html>