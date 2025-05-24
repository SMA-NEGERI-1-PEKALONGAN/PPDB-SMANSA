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
        width: 20px;
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
        color: #333;
    }

    .active-nav a !important {
        color: #007bff !important;
    }

    .active-nav a::after {
        width: 20px !important;

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

        .footer {
            text-align: center;
        }
    }

    .footer {
        position: relative;
        bottom: 0;
        width: 100%;
        color: #333;
        padding: 10px 0;
    }

    /* icon nabvar */
    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        color: black;
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
    <?php 
    if($active != 'Views'  && $active != 'printAntrean'):
        
    ?>
    <div class="row">
        <!-- list menu center -->
        <div class="col-md-12 mx-2">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('Assets/'); ?>LOGO SMANSA.png" alt="" width="40" height="40" class=""
                        loading="lazy">
                    SPMB SMANSA

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
                        <li class="nav-item <?= $active == 'Antrian' ? 'active-nav' : ''; ?>">
                            <a class="nav-link" href="<?= base_url('Antrean'); ?>">
                                Antrean</a>
                            <!-- <li class="nav-item <?= $active == 'Pengumuman' ? 'active-nav' : ''; ?>">
                            <a class="nav-link" href="<?= base_url('Pengumuman'); ?>">
                                Pengumuman</a>
                        </li>
                        <li class="nav-item <?= $active == 'Form-DU' ? 'active-nav' : ''; ?>" id="formDu">
                            <a class="nav-link" href="<?= base_url('FORM-DU'); ?>">
                                Form</a>
                        </li> -->
                        <li class="nav-item <?= $active == 'Cari' ? 'active-nav' : ''; ?>">
                            <a class="nav-link" href="<?= base_url('Cari'); ?>">
                                Cari</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
    <?php endif; ?>

    <div class="main-container" id="container-footer">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- section -->
                <?= $this->renderSection('content'); ?>
            </div>
        </div>
        <?php 
       if($active != 'Views'  && $active != 'printAntrean'):
        ?>
        <footer class="footer my-3">
            <div class="row text-center">
                <div class="col-md-12">
                    &copy; 2025 <strong><span>SPMB SMANSA</span></strong>. All Rights Reserved
                </div>
            </div>
        </footer>
        <?php endif; ?>
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


    <script src="<?= base_url('Assets/'); ?>src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('Assets/'); ?>src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('Assets/'); ?>src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('Assets/'); ?>src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable Setting js -->
    <?= $this->renderSection('dataTables');?>

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

    // add data unique id to local storage and automatic remove wehen day after 1 day
    function addDataUniqueIdToLocalStorage() {
        const uniqueId = localStorage.getItem('unique_id');
        const uniqueIdDate = localStorage.getItem('unique_id_date');
        const currentDate = new Date();
        console.log('Current Date:', currentDate);
        console.log('Unique ID:', uniqueId);
        console.log('Unique ID Date:', uniqueIdDate);
        if (uniqueId && currentDate - new Date(uniqueIdDate) >= 24 * 60 * 60 * 1000) {
            // If unique_id exists but is older than 1 day, remove it
            localStorage.removeItem('unique_id');
            localStorage.removeItem('unique_id_date');
            console.log('Unique ID expired and removed:', uniqueId);
        } else {
            const newUniqueId = 'UID-' + Math.random().toString(36).substr(2, 9);
            localStorage.setItem('unique_id', newUniqueId);
            const date = new Date();
            localStorage.setItem('unique_id_date', date.toISOString());
            setTimeout(() => {
                localStorage.removeItem('unique_id');
                localStorage.removeItem('unique_id_date');
            }, 24 * 60 * 60 * 1000); // 1 day in milliseconds
            $.ajax({
                url: '<?= base_url('saveAktifitasWeb'); ?>',
                type: 'POST',
                data: {
                    unique_id: newUniqueId
                },
                success: function(response) {
                    console.log('Data unique id saved to server:', response);
                },
                error: function(xhr, status, error) {
                    console.error('Error saving unique id:', error);
                }
            });

        }
    }

    // call when page load
    $(document).ready(function() {
        addDataUniqueIdToLocalStorage();
    });
    </script>

    <?= $this->renderSection('script'); ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>