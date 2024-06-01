<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>
        <?= $title; ?>
    </title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png" />

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
        background-color: #007bff;
        color: white;
    }

    .navbar .navbar-brand {
        color: white;
        padding: 0 20px;
        font-weight: bold;
        font-family: 'Inter', sans-serif;
        height: 50px;
        line-height: 50px;
    }

    .navbar .nav-link {
        color: white;
        font-family: 'Inter', sans-serif;
        font-weight: 500;
    }


    .rq {
        color: red;
    }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>


    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            "gtm.start": new Date().getTime(),
            event: "gtm.js"
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->

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
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('Assets/'); ?>vendors/images/logo.png" alt="" width="30" height="30"
                        class="d-inline-block align-text-top" loading="lazy">
                    PPDB SMANSA
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
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
                        <form class="tab-wizard wizard-circle wizard vertical">
                            <h5>Data Diri</h5>
                            <!-- data diri -->
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama <span class="rq">*</span></label>
                                            <input type="text" class="form-control required" id="nama" name="nama"
                                                placeholder="Masukkan Nama">
                                            <div class="form-control-feedback " id="errornama"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>NISN
                                                <span class="rq">*</span>
                                            </label>
                                            <input type="text" class="form-control required" id="nisn" name="nisn"
                                                placeholder="Masukkan NISN">
                                            <div class="form-control-feedback " id="errornisn"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jenis Kelamin <span class="rq">*</span></label>
                                            <select class="custom-select form-control required" id="jenis_kelamin"
                                                name="jenis_kelamin">
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                            <div class="form-control-feedback " id="errorjenis_kelamin"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_tlp">No Telp <span class="rq">*</span></label>
                                            <input type="text" class="form-control required" id="no_tlp" name="no_tlp"
                                                placeholder="Masukkan No Telp">
                                            <div class="form-control-feedback " id="errorno_tlp"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="asal_sekolah">Asal sekolah <span class="rq">*</span></label>
                                            <input type="text" class="form-control required" id="asal_sekolah"
                                                name="asal_sekolah" placeholder="Masukkan Asal Sekolah">
                                            <div class="form-control-feedback " id="errorasal_sekolah"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alamat">Alamat <span class="rq">*</span></label>
                                            <textarea class="form-control required" id="alamat"
                                                name="alamat"></textarea>
                                            <div class="form-control-feedback " id="erroralamat"></div>
                                        </div>
                                    </div>

                                </div>
                            </section>
                            <!-- Pendaftaran -->
                            <h5>Pendaftaran</h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kode Pendaftaran <span class="rq">*</span></label>
                                            <input type="text" class="form-control required" id="kode_pendaftaran"
                                                name="kode_pendaftaran"
                                                placeholder="Masukkan kode pendaftaran dari PPDB">
                                            <div class="form-control-feedback " id="errorkode_pendaftaran"></div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jalur <span class="rq">*</span></label>
                                            <select class="custom-select form-control required" id="jalur" name="jalur">
                                                <option value="">Pilih Jalur</option>
                                                <option value="1">Jalur Zonasi</option>
                                                <option value="2">Jalur Prestasi</option>
                                                <option value="3">Jalur Afirmasi</option>
                                                <option value="4">Jalur Perpindahan Orang Tua</option>
                                            </select>
                                            <div class="form-control-feedback " id="errorjalur"></div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Step 4 -->
                            <h5>Ketentuan</h5>
                            <section>
                                <!-- list ketentuan verifikasi berkas -->
                                <div class="row">
                                    <div class="tab">
                                        <ul class="nav nav-tabs customtab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#Dokumen" role="tab"
                                                    aria-selected="true">Dokumen</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#verifikasi2" role="tab"
                                                    aria-selected="false">Verifikasi</a>
                                            </li>

                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="Dokumen" role="tabpanel">
                                                <div class="pd-20">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                    ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu
                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                                    non proident, sunt in culpa qui officia deserunt mollit
                                                    anim id est laborum.
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="verifikasi2" role="tabpanel">
                                                <div class="pd-20">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur
                                                    magni, eaque suscipit ullam quae minus praesentium minima porro sunt
                                                    ratione incidunt a vel dicta accusantium, doloremque at, consequatur
                                                    error assumenda rem. Sit tenetur aliquid ex distinctio fuga possimus
                                                    laborum, enim nam quis perspiciatis reprehenderit blanditiis soluta
                                                    aperiam obcaecati provident saepe mollitia magnam, incidunt odit
                                                    tempore, consequatur maxime minima velit sapiente? Ut commodi
                                                    consequatur sint saepe fugit amet sunt ea est tenetur quisquam
                                                    architecto at reiciendis, nam quidem harum enim, sapiente molestiae
                                                    in quo voluptatem inventore. Beatae qui atque voluptatem dolores
                                                    dolor sint, mollitia minima odio aut voluptas, totam debitis
                                                    officia.
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row hrs">
                                    <!-- check setuju -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input required"
                                                    id="customCheck1" name="example1">
                                                <label class="custom-control-label" for="customCheck1">Saya setuju
                                                    dengan
                                                    ketentuan yang berlaku</label>
                                                </label>
                                            </div>
                                            <div class="form-control-feedback " id="errorcustomCheck1"></div>
                                        </div>
                                    </div>
                                    <!-- end check setuju -->
                                </div>
                                <style>
                                .hrs {
                                    border-top: 1px solid #e0e0e0;
                                    padding-top: 20px;
                                }

                                /* change color form wizard  to red
                                */
                                .wizard .nav-tabs .nav-link {
                                    color: #000;
                                }
                                </style>
                            </section>
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


    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="<?= base_url('Assets/'); ?>vendors/scripts/core.js"></script>
    <script src="<?= base_url('Assets/'); ?>vendors/scripts/script.min.js"></script>
    <script src="<?= base_url('Assets/'); ?>vendors/scripts/process.js"></script>
    <script src="<?= base_url('Assets/'); ?>vendors/scripts/layout-settings.js"></script>
    <script src="<?= base_url('Assets/'); ?>vendors/scripts/dashboard3.js"></script>


    <script src="<?= base_url('Assets/'); ?>src/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="<?= base_url('Assets/'); ?>vendors/scripts/steps-setting.js"></script>

    <script src="<?= base_url('Assets/'); ?>src/plugins/sweetalert2/sweetalert2.all.js"></script>

    <script type="text/javascript">
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
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>