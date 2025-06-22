<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>PPDB 2024/2025 (DAFTAR ULANG)</title>
    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('Assets/'); ?>LOGO SMANSA.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('Assets/'); ?>LOGO SMANSA.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('Assets/'); ?>LOGO SMANSA.png" />

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
    <link rel="stylesheet" type="text/css" href="<?= base_url('Assets/'); ?>vendors/styles/style.css" />

    <link rel="stylesheet" type="text/css"
        href="<?= base_url('Assets/'); ?>src/plugins/jquery-steps/jquery.steps.css" />

    <script async src="https://tally.so/widgets/embed.js"></script>
    <style type="text/css">
    html {
        margin: 0;
        height: 100%;
        // overflow: hidden;
    }

    iframe {
        position: absolute;
        top: 50px;
        right: 0;
        bottom: 0;
        left: 0;
        border: 0;
    }

    <style>.navbar {
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

        iframe {
            top: 50px;
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
</head>

<body>
    <div class="row">
        <!-- list menu center -->
        <div class="col-md-12 mx-2">
            <nav class="navbar navbar-expand-lg fixed-top navbar-shrink">
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
                        <!-- <li class="nav-item <?= $active == 'Antrian' ? 'active-nav' : ''; ?>">
                            <a class="nav-link" href="<?= base_url('Antrean'); ?>">
                                Antrean</a> -->
                        <li class="nav-item <?= $active == 'Pengumuman' ? 'active-nav' : ''; ?>">
                            <a class="nav-link" href="<?= base_url('Pengumuman'); ?>">
                                Pengumuman</a>
                        </li>
                        <li class="nav-item <?= $active == 'Form-DU' ? 'active-nav' : ''; ?>" id="formDu">
                            <a class="nav-link" href="<?= base_url('FORM-DU'); ?>">
                                Form DU</a>
                        </li>
                        <!-- <li class="nav-item <?= $active == 'Cari' ? 'active-nav' : ''; ?>">
                            <a class="nav-link" href="<?= base_url('Cari'); ?>">
                                Cari</a>
                        </li> -->
                    </ul>
                </div>

            </nav>
        </div>
    </div>
    <!-- icon back -->
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="M11.354 4.354a.5.5 0 0 1 0 .708L7.707 8l3.647 3.646a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0z" />
        <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5z" />
    </svg>
    </a>

    <iframe  class="mt-4"
  width="100%" 
  height="700px" 
  src="https://www.appsheet.com/start/0bcc4050-029c-47b7-b7d4-5543a7e9d3f1" 
  frameborder="0" 
  allowfullscreen>
</iframe>


    <!-- js -->
    <script src="<?= base_url('Assets/'); ?>vendors/scripts/core.js"></script>
    <script src="<?= base_url('Assets/'); ?>vendors/scripts/script.min.js"></script>
    <script src="<?= base_url('Assets/'); ?>vendors/scripts/process.js"></script>
    <script src="<?= base_url('Assets/'); ?>vendors/scripts/layout-settings.js"></script>
    <script src="<?= base_url('Assets/'); ?>vendors/scripts/dashboard3.js"></script>

    <script script type="text/javascript">
    // if ($('#iconNavBar').hasClass('navbar-toggler-icon')) {
    //     $('#iconNavBar').removeClass('navbar-toggler-icon');
    //     $('#iconNavBar').addClass('bi bi-x');
    // } else {
    //     $('#iconNavBar').removeClass('bi bi-x');
    //     $('#iconNavBar').addClass('navbar-toggler-icon');
    // }
    </script>
</body>

</html>