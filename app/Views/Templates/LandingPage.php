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

    @media (max-width: 1024px) {
        .main-container {
            margin-top: 50px;
        }
    }

    @media (max-width: 767px) {
        .main-container {
            margin-top: 0px;
        }
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
                            <a class="nav-link" href="<?= base_url('/'); ?>"> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Antrian'); ?>">Antrian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Cari'); ?>">
                                Cari</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- section -->
                <?= $this->renderSection('content'); ?>
            </div>
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

    $('#btnBerkas').click(function() {
        $('#tabBerkas').click();
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
        'alamat', 'jalur_pendaftaran'
    ];
    const dataAntrian = [];
    $('#btn_tambah_antiran').click(function(e) {
        e.preventDefault();
        let formData = new FormData();
        let status = true;
        listFields.forEach((field) => {
            if ($(`#${field}`).val() == '') {
                $(`#${field}`).addClass('form-control-danger');
                $(`#error${field}`).html('Field ini tidak boleh kosong');
                $(`#error${field}`).addClass('has-danger');
                status = false;
            } else {
                $(`#${field}`).addClass('form-control-success');
                $(`#${field}`).removeClass('form-control-danger');
                $(`#error${field}`).html('');
                $(`#error${field}`).removeClass('has-danger');
                formData.append(field, $(`#${field}`).val());
            }
        });

        if (status) {
            $('#Medium-modal').modal('show');
            dataAntrian.push(formData);
        }
    });

    $('#form_syarat_ketentuan').submit(function(e) {
        e.preventDefault();
        $("#btn_sk").attr("disabled", "disabled");
        $("#btn_sk").html("Loading...");
        $.ajax({
            url: '<?= base_url('Admin/Antrian/save'); ?>',
            type: 'POST',
            data: dataAntrian[0],
            contentType: false,
            processData: false,
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
                    dataAntrian.pop();
                    $('#Medium-modal').modal('hide');
                    $("#btn_sk").removeAttr("disabled");
                    $("#btn_sk").html("Tambah");
                } else {
                    getSwall(response.status, 'Antrian berhasil ditambahkan');
                    listFields.forEach(function(item) {
                        $("#" + item).removeClass('form-control-danger');
                        $("#" + item).removeClass('form-control-success');
                        $("#error" + item).html('');
                        $("#error" + item).removeClass('has-danger');
                    });
                    $('#syatKetentuan').prop('checked', false);
                    $("#form_tambah_antrian")[0].reset();
                    $('#Medium-modal').modal('hide');
                    $("#btn_sk").removeAttr("disabled");
                    $("#btn_sk").html("Kirim");
                }

            }
        });
    });
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>