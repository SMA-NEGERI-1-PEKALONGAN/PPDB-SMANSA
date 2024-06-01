<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>
        <?= $title; ?>
    </title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('Assets/'); ?>LOGO SMANSA.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('Assets/'); ?>LOGO SMANSA.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('Assets/'); ?>LOGO SMANSA.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- dataTables -->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('Assets/'); ?>src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('Assets/'); ?>src/plugins/datatables/css/responsive.bootstrap4.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('Assets/'); ?>vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('Assets/'); ?>vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('Assets/'); ?>src/plugins/sweetalert2/sweetalert2.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('Assets/'); ?>vendors/styles/style.css" />

    <link rel="stylesheet" type="text/css"
        href="<?= base_url('Assets/'); ?>src/plugins/jquery-steps/jquery.steps.css" />

    <style>
    .navbar {
        background-color: ;
        color: black;
    }

    .navbar .navbar-brand {
        color: black;
        padding: 0 20px;
        font-weight: bold;
        font-family: 'Inter', sans-serif;
        height: 50px;
        line-height: 50px;
    }

    .navbar .nav-link {
        color: black;
        font-family: 'Inter', sans-serif;
        font-weight: 500;
    }

    .rq {
        color: red;
    }

    .navbar-shrink {
        background-color: #fff;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
    }

    .navbar-shrink .navbar-brand {
        color: #333;
    }

    .navbar-shrink .nav-link {
        color: #333;
    }

    .navbar-shrink .nav-link:hover {
        color: #333;
    }

    .navbar .nav-link:hover {
        color: #333;
    }

    .navbar .nav-link::after {
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background: #333;
        transition: width .3s;
    }

    .navbar .nav-link:hover::after {
        width: 100%;
        transition: width .3s;
    }

    /* change color  wizard contetm */
    .wizard-content !important {
        background-color: #f8f9fa;
        color: black;
    }

    /* perbesar icon bi bi-x */
    .bi-x {
        font-size: 2rem;
    }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>

    <script>
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (currentScrollPos > 0) {
            document.querySelector('.navbar').classList.add('navbar-shrink');
        } else {
            document.querySelector('.navbar').classList.remove('navbar-shrink');
        }
    }

    // change icons navbar to close
    </script>


</head>

<body class="sidebar-shrink">
    <!-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <img src="vendors/images/deskapp-logo.svg" alt="" />
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
            <div class="loading-text">Loading...</div>
        </div>
    </div> -->
    <!-- navbar -->
    <div class="row">
        <!-- list menu center -->
        <div class="col-md-12 mx-2">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('Assets/'); ?>LOGO SMANSA.png" alt="" width="40" height="40" class=""
                        loading="lazy">
                    PPDB SMANSA

                    <style>
                    .navbar-brand img {
                        margin-right: 10px;
                        /* posistion align center */
                        display: inline-block;
                        vertical-align: middle;


                    }
                    </style>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" id="iconNavBar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Antrian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cari</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>

    <style>
    /* show icon navbar */
    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23000000' class='bi bi-list' viewBox='0 0 16 16'%3e%3cpath fill-rule='evenodd' d='M2.5 4.5A.5.5 0 0 1 3 4h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0 3A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z' /%3e%3c/svg%3e");
    }

    /* /* pindah list */
    </style>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <h4 class="text-black h4">
                            Form Antrian
                        </h4>
                        <p class="mb-30">

                        </p>
                    </div>
                    <div class="wizard-content">
                        <form id="form_tambah_antrian" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="nama_siswa" class="col-sm-4 col-form-label">Nama Siswa<span
                                            class="rq">*</span></label></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control required" id="nama_siswa"
                                            name="nama_siswa" placeholder="Masukan nama">
                                        <div class="form-control-feedback " id="errornama_siswa"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nisn" class="col-sm-4 col-form-label">Nisn<span
                                            class="rq">*</span></label></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control required" id="nisn" name="nisn"
                                            placeholder="Masukan NSIN">
                                        <div class="form-control-feedback" id="errornisn"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin<span
                                            class="rq">*</span></label></label>
                                    <div class="col-sm-8">
                                        <select class="form-control required" id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                        <div class="form-control-feedback " id="errorjenis_kelamin"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kode_pendaftaran" class="col-sm-4 col-form-label">Kode Pendaftaran
                                        PPDB<span class="rq">*</span></label></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control required" id="kode_pendaftaran"
                                            name="kode_pendaftaran" placeholder="Masukan kode pendaftaran PPDB">
                                        <div class="form-control-feedback " id="errorkode_pendaftaran"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="asal_sekolah" class="col-sm-4 col-form-label">Asal Sekolah<span
                                            class="rq">*</span></label></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control required" id="asal_sekolah"
                                            name="asal_sekolah" placeholder="Masukan asal sekolah ">
                                        <div class="form-control-feedback " id="errorasal_sekolah"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_tlp" class="col-sm-4 col-form-label">No telpon<span
                                            class="rq">*</span></label></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control required" id="no_tlp" name="no_tlp"
                                            placeholder="Masukan no telpom ">
                                        <div class="form-control-feedback " id="errorno_tlp"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-4 col-form-label">alamat<span
                                            class="rq">*</span></label></label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control required" id="alamat" name="alamat"
                                            placeholder="Masukan alamat "></textarea>
                                        <div class="form-control-feedback " id="erroralamat"></div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="jalur_pendaftaran" class="col-sm-4 col-form-label">Jalur
                                        Pendaftaran<span class="rq">*</span></label></label>
                                    <div class="col-sm-8">
                                        <select class="form-control required" id="jalur_pendaftaran"
                                            name="jalur_pendaftaran">
                                            <option value="">Pilih Jalur Pendaftaran</option>
                                            <option value="Zonasi">Zonasi</option>
                                            <option value="Afirmasi">Afirmasi</option>
                                            <option value="Perpindahan Orang Tua">Perpindahan Orang Tua</option>
                                            <option value="Prestasi">Prestasi</option>
                                        </select>
                                        <div class="form-control-feedback " id="errorjalur_pendaftaran"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Batal
                                </button>
                                <button type="submit" class="btn btn-primary" id="btn_tambah_antiran">
                                    Tambah
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- success Popup html Start -->
                <div class="modal fade" id="success-modal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center font-18">
                                <h3 class="mb-20">
                                    Konfirmasi
                                </h3>
                                <div class="mb-30 text center">
                                    <p>Apakah anda yakin ingin menyimpan data ini?</p>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-primary btn-block"
                                            data-dismiss="modal">Tidak</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-danger btn-block"
                                            data-dismiss="modal">Ya</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- success Popup html End -->
                </div>
                <footer class="footer my-3">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                            document.write(new Date().getFullYear())
                            </script> © TIM IT SMANSA
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About Us</a>
                                <a href="javascript: void(0);">Help</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- card privacy police -->
    <div class="card text-center">
        <div class="card-header">
            Ketentuan
        </div>
        <div class="card-body">
            <h5 class="card-title">Privacy Police</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago

            <!-- js -->
            <script src="<?= base_url('Assets/'); ?>vendors/scripts/core.js"></script>
            <script src="<?= base_url('Assets/'); ?>vendors/scripts/script.min.js"></script>
            <script src="<?= base_url('Assets/'); ?>vendors/scripts/process.js"></script>
            <script src="<?= base_url('Assets/'); ?>vendors/scripts/layout-settings.js"></script>
            <script src="<?= base_url('Assets/'); ?>vendors/scripts/dashboard3.js"></script>


            <script src="<?= base_url('Assets/'); ?>src/plugins/jquery-steps/jquery.steps.js"></script>
            <script src="<?= base_url('Assets/'); ?>vendors/scripts/steps-setting.js"></script>

            <script src="<?= base_url('Assets/'); ?>src/plugins/sweetalert2/sweetalert2.all.js"></script>

            <script type="text/javascript">
            $('.navbar-toggler').click(function() {
                if ($('#iconNavBar').hasClass('navbar-toggler-icon')) {
                    $('#iconNavBar').removeClass('navbar-toggler-icon');
                    $('#iconNavBar').addClass('bi bi-x');
                } else {
                    $('#iconNavBar').removeClass('bi bi-x');
                    $('#iconNavBar').addClass('navbar-toggler-icon');
                }
            });

            $(document).on('focusout', '.required', function() {
                const id = $(this).attr('id');
                if ($(this).val() == '') {
                    $(this).addClass('form-control-danger');
                    $(`#error${id}`).html('Field ini tidak boleh kosong');
                    $(`#error${id}`).addClass('has-danger');
                } else {
                    $(this).addClass('form-control-success');
                    $(this).removeClass('form-control-danger');
                    $(`#error${id}`).html('');
                    $(`#error${id}`).removeClass('has-danger');
                }
            });

            // on keyup
            $(document).on('keyup', '.required', function() {
                const id = $(this).attr('id');
                if ($(this).val() == '') {
                    $(this).addClass('form-control-danger');
                    $(`#error${id}`).html('Field ini tidak boleh kosong');
                    $(`#error${id}`).addClass('has-danger');
                } else {
                    $(this).addClass('form-control-success');
                    $(this).removeClass('form-control-danger');
                    $(`#error${id}`).html('');
                    $(`#error${id}`).removeClass('has-danger');
                }
            });


            function getSwall(status, message) {
                swal({
                    title: message,
                    type: status == '200' ? 'success' : 'error',
                    showCancelButton: false,
                    showConfirmButton: true,
                    timer: 1500

                })
            }

            const listFields = ['nama_siswa', 'nisn', 'jenis_kelamin', 'kode_pendaftaran', 'asal_sekolah', 'no_tlp',
                'alamat',
                'jalur_pendaftaran', 'tanggal_lahir',
            ];

            // tambah user
            $("#form_tambah_antrian").submit(function(e) {
                e.preventDefault();
                const formData = new FormData(this);
                if (!this.checkValidity()) {
                    e.preventDefault();
                    $(this).addClass('form-control-success');
                } else {
                    $("#btn_tambah_antiran").attr("disabled", "disabled");
                    $("#btn_tambah_antiran").html("Loading.....");
                    $.ajax({
                        url: '<?= base_url('Admin/Antrian/save') ?>',
                        method: 'post',
                        data: formData,
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType: 'json',
                        success: function(response) {
                            if (response.error) {
                                $.each(response.data, function(key, value) {
                                    if (value != '') {
                                        $("#" + key).addClass('form-control-danger');
                                        $("#error" + key).addClass('has-danger');
                                        $("#error" + key).html(value);
                                    } else {
                                        $("#" + key).removeClass('form-control-danger');
                                        $("#" + key).addClass('form-control-success');
                                        $("#error" + key).html('');
                                        $("#error" + key).removeClass('has-danger');
                                    }
                                });
                                $("#btn_tambah_antiran").removeAttr("disabled");
                                $("#btn_tambah_antiran").html("Tambah");
                            } else {
                                $("#form_tambah_antrian")[0].reset();
                                $("#addAntrian").modal('hide');
                                $('#tableAntrian').DataTable().ajax.reload();
                                getSwall(response.status, response.data);
                                listFields.forEach(function(item) {
                                    $("#" + item).removeClass('form-control-danger');
                                    $("#" + item).removeClass('form-control-success');
                                    $("#error" + item).html('');
                                    $("#error" + item).removeClass('has-danger');
                                });

                                $("#btn_tambah_antiran").removeAttr("disabled");
                                $("#btn_tambah_antiran").html("Tambah");
                            }
                        }
                    });
                }
            });
            </script>
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
                    style="display: none; visibility: hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
</body>

</html>