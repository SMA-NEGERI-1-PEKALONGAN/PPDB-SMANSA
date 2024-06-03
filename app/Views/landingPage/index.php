<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('Assets/'); ?>LandingPage/img/LOGO SMANSA.png" rel="icon">
    <link href="<?= base_url('Assets/'); ?>LandingPage/img/LOGO SMANSA.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendors CSS Files -->
    <link href="<?= base_url('Assets/'); ?>LandingPage/vendors/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('Assets/'); ?>LandingPage/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('Assets/'); ?>LandingPage/vendors/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('Assets/'); ?>LandingPage/vendors/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('Assets/'); ?>LandingPage/vendors/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('Assets/'); ?>LandingPage/vendors/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('Assets/'); ?>LandingPage/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('Assets/'); ?>LandingPage/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <div class="rows">
                    <a href="index.html"><img src="<?= base_url('Assets/'); ?>LandingPage/img/LOGO SMANSA.png" alt=""
                            class="img-fluid"> </a>
                    <h1 class="mx-2">
                        <a href="index.html">PPDB SMANSA</a>
                    </h1>
                </div>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#informasi">Informasi</a></li>
                    <li><a class="nav-link scrollto" href="#persyaratan">Persyaratan</a></li>
                    <li><a class="nav-link scrollto" href="#ketentuan">Ketentuan</a></li>
                    <li><a class="nav-link scrollto" href="#alur">Alur</a></li>
                    <li><a class="nav-link scrollto" href="#kontak">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container my-3">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>PPDB <span>2024/2025</span></h1>
                        <h2>
                            Selamat Datang di Website PPDB SMA Negeri 1 Pekalongan
                        </h2>
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <!-- inluce svg -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="img-fluid animated" data-name="Layer 1"
                        width="891.29496" height="745.19434" viewBox="0 0 891.29496 745.19434"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <ellipse cx="418.64354" cy="727.19434" rx="352" ry="18" fill="#f2f2f2" />
                        <path
                            d="M778.64963,250.35008h-3.99878V140.80476a63.40187,63.40187,0,0,0-63.4018-63.40193H479.16232a63.40188,63.40188,0,0,0-63.402,63.4017v600.9744a63.40189,63.40189,0,0,0,63.4018,63.40192H711.24875a63.40187,63.40187,0,0,0,63.402-63.40168V328.32632h3.99878Z"
                            transform="translate(-154.35252 -77.40283)" fill="#3f3d56" />
                        <path
                            d="M761.156,141.24713v600.09a47.35072,47.35072,0,0,1-47.35,47.35h-233.2a47.35084,47.35084,0,0,1-47.35-47.35v-600.09a47.3509,47.3509,0,0,1,47.35-47.35h28.29a22.50659,22.50659,0,0,0,20.83,30.99h132.96a22.50672,22.50672,0,0,0,20.83-30.99h30.29A47.35088,47.35088,0,0,1,761.156,141.24713Z"
                            transform="translate(-154.35252 -77.40283)" fill="#fff" />
                        <path
                            d="M686.03027,400.0032q-2.32543,1.215-4.73047,2.3-2.18994.99-4.4497,1.86c-.5503.21-1.10987.42-1.66992.63a89.52811,89.52811,0,0,1-13.6001,3.75q-3.43506.675-6.96,1.06-2.90991.33-5.87989.47c-1.41015.07-2.82031.1-4.24023.1a89.84124,89.84124,0,0,1-16.75977-1.57c-1.44043-.26-2.85009-.57-4.26025-.91a88.77786,88.77786,0,0,1-19.66992-7.26c-.56006-.28-1.12012-.58-1.68018-.87-.83008-.44-1.63965-.9-2.4497-1.38.38964-.54.81005-1.07,1.23974-1.59a53.03414,53.03414,0,0,1,78.87012-4.1,54.27663,54.27663,0,0,1,5.06006,5.86C685.25977,398.89316,685.6499,399.44321,686.03027,400.0032Z"
                            transform="translate(-154.35252 -77.40283)" fill="#ffa62f" />
                        <circle cx="492.14325" cy="234.76352" r="43.90974" fill="#2f2e41" />
                        <circle cx="642.49883" cy="327.46205" r="32.68086"
                            transform="translate(-232.6876 270.90663) rotate(-28.66315)" fill="#a0616a" />
                        <path
                            d="M676.8388,306.90589a44.44844,44.44844,0,0,1-25.402,7.85033,27.23846,27.23846,0,0,0,10.796,4.44154,89.62764,89.62764,0,0,1-36.61.20571,23.69448,23.69448,0,0,1-7.66395-2.63224,9.699,9.699,0,0,1-4.73055-6.3266c-.80322-4.58859,2.77227-8.75743,6.488-11.567a47.85811,47.85811,0,0,1,40.21662-8.03639c4.49246,1.16124,8.99288,3.12327,11.91085,6.731s3.78232,9.16981,1.00224,12.88488Z"
                            transform="translate(-154.35252 -77.40283)" fill="#2f2e41" />
                        <path
                            d="M644.5,230.17319a89.98675,89.98675,0,0,0-46.83984,166.83l.58007.34q.72.43506,1.43995.84c.81005.48,1.61962.94,2.4497,1.38.56006.29,1.12012.59,1.68018.87a88.77786,88.77786,0,0,0,19.66992,7.26c1.41016.34,2.81982.65,4.26025.91a89.84124,89.84124,0,0,0,16.75977,1.57c1.41992,0,2.83008-.03,4.24023-.1q2.97-.135,5.87989-.47,3.52513-.39,6.96-1.06a89.52811,89.52811,0,0,0,13.6001-3.75c.56005-.21,1.11962-.42,1.66992-.63q2.26464-.87,4.4497-1.86,2.40015-1.08,4.73047-2.3a90.7919,90.7919,0,0,0,37.03955-35.97c.04-.07995.09034-.16.13038-.24a89.30592,89.30592,0,0,0,9.6499-26.41,90.051,90.051,0,0,0-88.3501-107.21Zm77.06006,132.45c-.08008.14-.1499.28-.23.41a88.17195,88.17195,0,0,1-36.48,35.32q-2.29542,1.2-4.66992,2.25c-1.31006.59-2.64991,1.15-4,1.67-.57032.22-1.14991.44-1.73.64a85.72126,85.72126,0,0,1-11.73,3.36,84.69473,84.69473,0,0,1-8.95019,1.41c-1.8501.2-3.73.34-5.62012.41-1.21.05-2.42969.08-3.6499.08a86.762,86.762,0,0,1-16.21973-1.51,85.62478,85.62478,0,0,1-9.63037-2.36,88.46592,88.46592,0,0,1-13.98974-5.67c-.52-.27-1.04-.54-1.5503-.82-.73-.39-1.46972-.79-2.18994-1.22-.54-.3-1.08008-.62-1.60986-.94-.31006-.18-.62012-.37-.93018-.56a88.06851,88.06851,0,1,1,123.18018-32.47Z"
                            transform="translate(-154.35252 -77.40283)" fill="#3f3d56" />
                        <path
                            d="M624.2595,268.86254c-.47244-4.968-6.55849-8.02647-11.3179-6.52583s-7.88411,6.2929-8.82863,11.19308a16.0571,16.0571,0,0,0,2.16528,12.12236c2.40572,3.46228,6.82664,5.623,10.95,4.74406,4.70707-1.00334,7.96817-5.59956,8.90127-10.32105s.00667-9.58929-.91854-14.31234Z"
                            transform="translate(-154.35252 -77.40283)" fill="#2f2e41" />
                        <path
                            d="M691.24187,275.95964c-.47245-4.968-6.5585-8.02646-11.3179-6.52582s-7.88412,6.29289-8.82864,11.19307a16.05711,16.05711,0,0,0,2.16529,12.12236c2.40571,3.46228,6.82663,5.623,10.95,4.74406,4.70707-1.00334,7.96817-5.59955,8.90127-10.32105s.00667-9.58929-.91853-14.31234Z"
                            transform="translate(-154.35252 -77.40283)" fill="#2f2e41" />
                        <path
                            d="M488.93638,356.14169a4.47525,4.47525,0,0,1-3.30664-1.46436L436.00767,300.544a6.02039,6.02039,0,0,0-4.42627-1.94727H169.3618a15.02615,15.02615,0,0,1-15.00928-15.00927V189.025a15.02615,15.02615,0,0,1,15.00928-15.00928H509.087A15.02615,15.02615,0,0,1,524.0963,189.025v94.5625A15.02615,15.02615,0,0,1,509.087,298.59676h-9.63135a6.01157,6.01157,0,0,0-6.00464,6.00489v47.0332a4.474,4.474,0,0,1-2.87011,4.1958A4.52563,4.52563,0,0,1,488.93638,356.14169Z"
                            transform="translate(-154.35252 -77.40283)" fill="#fff" />
                        <path
                            d="M488.93638,356.14169a4.47525,4.47525,0,0,1-3.30664-1.46436L436.00767,300.544a6.02039,6.02039,0,0,0-4.42627-1.94727H169.3618a15.02615,15.02615,0,0,1-15.00928-15.00927V189.025a15.02615,15.02615,0,0,1,15.00928-15.00928H509.087A15.02615,15.02615,0,0,1,524.0963,189.025v94.5625A15.02615,15.02615,0,0,1,509.087,298.59676h-9.63135a6.01157,6.01157,0,0,0-6.00464,6.00489v47.0332a4.474,4.474,0,0,1-2.87011,4.1958A4.52563,4.52563,0,0,1,488.93638,356.14169ZM169.3618,176.01571A13.024,13.024,0,0,0,156.35252,189.025v94.5625a13.024,13.024,0,0,0,13.00928,13.00927H431.5814a8.02436,8.02436,0,0,1,5.90039,2.59571l49.62208,54.1333a2.50253,2.50253,0,0,0,4.34716-1.69092v-47.0332a8.0137,8.0137,0,0,1,8.00464-8.00489H509.087a13.024,13.024,0,0,0,13.00928-13.00927V189.025A13.024,13.024,0,0,0,509.087,176.01571Z"
                            transform="translate(-154.35252 -77.40283)" fill="#3f3d56" />
                        <circle cx="36.81601" cy="125.19345" r="13.13371" fill="#ffa62f" />
                        <path
                            d="M493.76439,275.26947H184.68447a7.00465,7.00465,0,1,1,0-14.00929H493.76439a7.00465,7.00465,0,0,1,0,14.00929Z"
                            transform="translate(-154.35252 -77.40283)" fill="#e6e6e6" />
                        <path
                            d="M393.07263,245.49973H184.68447a7.00465,7.00465,0,1,1,0-14.00929H393.07263a7.00464,7.00464,0,0,1,0,14.00929Z"
                            transform="translate(-154.35252 -77.40283)" fill="#e6e6e6" />
                        <path
                            d="M709.41908,676.83065a4.474,4.474,0,0,1-2.87011-4.1958v-47.0332a6.01157,6.01157,0,0,0-6.00464-6.00489H690.913a15.02615,15.02615,0,0,1-15.00928-15.00927V510.025A15.02615,15.02615,0,0,1,690.913,495.01571H1030.6382a15.02615,15.02615,0,0,1,15.00928,15.00928v94.5625a15.02615,15.02615,0,0,1-15.00928,15.00927H768.4186a6.02039,6.02039,0,0,0-4.42627,1.94727l-49.62207,54.1333a4.47525,4.47525,0,0,1-3.30664,1.46436A4.52563,4.52563,0,0,1,709.41908,676.83065Z"
                            transform="translate(-154.35252 -77.40283)" fill="#fff" />
                        <path
                            d="M709.41908,676.83065a4.474,4.474,0,0,1-2.87011-4.1958v-47.0332a6.01157,6.01157,0,0,0-6.00464-6.00489H690.913a15.02615,15.02615,0,0,1-15.00928-15.00927V510.025A15.02615,15.02615,0,0,1,690.913,495.01571H1030.6382a15.02615,15.02615,0,0,1,15.00928,15.00928v94.5625a15.02615,15.02615,0,0,1-15.00928,15.00927H768.4186a6.02039,6.02039,0,0,0-4.42627,1.94727l-49.62207,54.1333a4.47525,4.47525,0,0,1-3.30664,1.46436A4.52563,4.52563,0,0,1,709.41908,676.83065ZM690.913,497.01571A13.024,13.024,0,0,0,677.9037,510.025v94.5625A13.024,13.024,0,0,0,690.913,617.59676h9.63135a8.0137,8.0137,0,0,1,8.00464,8.00489v47.0332a2.50253,2.50253,0,0,0,4.34716,1.69092l49.62208-54.1333a8.02436,8.02436,0,0,1,5.90039-2.59571h262.2196a13.024,13.024,0,0,0,13.00928-13.00927V510.025a13.024,13.024,0,0,0-13.00928-13.00928Z"
                            transform="translate(-154.35252 -77.40283)" fill="#3f3d56" />
                        <path
                            d="M603.53027,706.11319a89.06853,89.06853,0,0,1-93.65039,1.49,54.12885,54.12885,0,0,1,9.40039-12.65,53.43288,53.43288,0,0,1,83.90967,10.56994C603.2998,705.71316,603.41992,705.91318,603.53027,706.11319Z"
                            transform="translate(-154.35252 -77.40283)" fill="#ffa62f" />
                        <circle cx="398.44256" cy="536.68841" r="44.20157" fill="#2f2e41" />
                        <circle cx="556.81859" cy="629.4886" r="32.89806"
                            transform="translate(-416.96496 738.72884) rotate(-61.33685)" fill="#ffb8b8" />
                        <path
                            d="M522.25039,608.79582a44.74387,44.74387,0,0,0,25.57085,7.9025,27.41946,27.41946,0,0,1-10.8677,4.47107,90.22316,90.22316,0,0,0,36.85334.20707,23.852,23.852,0,0,0,7.71488-2.64973,9.76352,9.76352,0,0,0,4.762-6.36865c.80855-4.61909-2.7907-8.81563-6.53113-11.64387a48.17616,48.17616,0,0,0-40.4839-8.08981c-4.52231,1.169-9.05265,3.144-11.99,6.77579s-3.80746,9.23076-1.0089,12.97052Z"
                            transform="translate(-154.35252 -77.40283)" fill="#2f2e41" />
                        <path
                            d="M555.5,721.17319a89.97205,89.97205,0,1,1,48.5708-14.21875A89.87958,89.87958,0,0,1,555.5,721.17319Zm0-178a88.00832,88.00832,0,1,0,88,88A88.09957,88.09957,0,0,0,555.5,543.17319Z"
                            transform="translate(-154.35252 -77.40283)" fill="#3f3d56" />
                        <circle cx="563.81601" cy="445.19345" r="13.13371" fill="#ffa62f" />
                        <path
                            d="M1020.76439,595.26947H711.68447a7.00465,7.00465,0,1,1,0-14.00929h309.07992a7.00464,7.00464,0,0,1,0,14.00929Z"
                            transform="translate(-154.35252 -77.40283)" fill="#e6e6e6" />
                        <path
                            d="M920.07263,565.49973H711.68447a7.00465,7.00465,0,1,1,0-14.00929H920.07263a7.00465,7.00465,0,0,1,0,14.00929Z"
                            transform="translate(-154.35252 -77.40283)" fill="#e6e6e6" />
                        <ellipse cx="554.64354" cy="605.66091" rx="24.50394" ry="2.71961" fill="#f2f2f2" />
                        <ellipse cx="335.64354" cy="285.66091" rx="24.50394" ry="2.71961" fill="#f2f2f2" />
                    </svg>
                    <!-- <img src="<?= base_url('Assets/'); ?>LandingPage/img/hero-img.png" class="img-fluid animated" alt=""> -->
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Informasi Section ======= -->
        <section id="informasi" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div
                        class="col-xl-5 col-lg-4 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= base_url('Assets/'); ?>LandingPage/img/jalur/PPDB 2024.jpeg"
                                        class="d-block w-100 rounded-3" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url('Assets/'); ?>LandingPage/img/jalur/PPDB 2024.jpeg"
                                        class="d-block w-100 rounded-3" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url('Assets/'); ?>LandingPage/img/jalur/PPDB 2024.jpeg"
                                        class="d-block w-100 rounded-3" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                        data-aos="fade">
                        <h3>Informasi</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt recusandae voluptate
                            dolorum ullam
                            labore deserunt vero reprehenderit. Asperiores, perspiciatis inventore.
                        </p>

                        <div class="icon-box" data-aos="fade" data-aos-delay="100">
                            <div class="icon">
                                <!-- maps location -->
                                <i class="bi bi-geo-alt"></i>
                                </i>
                            </div>
                            <h4 class="title"><a href="">Zonasi</a></h4>
                            <p class="description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla quibusdam dolorum maxime
                                praesentium aut
                                officiis hic optio, facere adipisci quod?
                        </div>
                        <div class="icon-box" data-aos="fade" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-award"></i></div>
                            <h4 class="title"><a href="">Afirmasi</a></h4>
                            <p class="description">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente enim quis iste,
                                accusamus quae rerum
                                consectetur omnis deserunt est numquam.
                            </p>
                        </div>
                        <div class="icon-box" data-aos="fade" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-people"></i></div>
                            <h4 class="title"><a href="">Perpindahan Orang Tua</a></h4>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dignissimos aliquid esse
                                hic placeat
                                nemo ad, expedita fugiat voluptates! Cum.
                            </p>
                        </div>
                        <div class="icon-box" data-aos="fade" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-trophy"></i></div>
                            <h4 class="title"><a href="">Prestasi</a></h4>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic laboriosam architecto velit
                                eos sapiente,
                                neque ducimus at harum voluptatibus? Natus.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Informasi Section -->

        <!-- ======= Informasi section Section ======= -->
        <section id="" class="counts">
            <div class="container">
                <div class="section-title" data-aos="fade">
                    <h2>Informasi</h2>
                    <p>Daya Tampung</p>
                </div>
                <div class="row mb-4" data-aos="fade">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-geo-alt"></i>
                            <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Zonasi</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-award"></i>
                            <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Afiramsi</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Perpindahan Orang Tua</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-trophy"></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Prestasi</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Informasi Section -->

        <!-- ======= Persyaratan Section ======= -->
        <section id="persyaratan" class="details">
            <div class="container">
                <div class="section-title" data-aos="fade">
                    <h2>Persyaratan</h2>
                    <p>Umum & Khusus</p>
                </div>
                <div class="row content">
                    <div class="col-md-4" data-aos="fade">
                        <img src="<?= base_url('Assets/'); ?>LandingPage/img/jalur/PPDB 2024.jpeg"
                            class="img-fluid rounded-4" alt="" />
                    </div>
                    <div class="col-md-8 pt-4" data-aos="fade">
                        <h3>Persyaratan UMUM</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id assumenda ipsa veniam nemo
                            deserunt
                            cupiditate cum maiores commodi voluptates laudantium?
                        </p>
                        <ul>
                            <li class="list-items"><i class="bi bi-check"></i> Lorem ipsum, dolor sit amet consectetur
                                adipisicing
                                elit. Quae suscipit ipsam necessitatibus aspernatur quaerat vel ipsa laboriosam
                                accusamus laudantium
                                illo.</li>
                            <li class="list-items"><i class="bi bi-check"></i> Peserta didik baru adalah peserta didik
                                yang telah
                                lulus dari jenjang
                                pendidikan sebelumnya.</li>
                            <li class="list-items"><i class="bi bi-check"></i> Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Explicabo, fugit?</li>
                            <li class="list-items"><i class="bi bi-check"></i> Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Quos, vero?</li>
                            <li class="list-items"><i class="bi bi-check"></i> Lorem ipsum dolor, sit amet consectetur
                                adipisicing
                                elit. Nisi, ea!</li>
                        </ul>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-5 order-1 order-md-2" data-aos="fade">
                        <div id="carousel_persyaratan" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carousel_persyaratan" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carousel_persyaratan" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carousel_persyaratan" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= base_url('Assets/'); ?>LandingPage/img/jalur/PPDB 2024.jpeg"
                                        class="d-block rounded-4 img-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url('Assets/'); ?>LandingPage/img/jalur/PPDB 2024.jpeg"
                                        class="d-block img-fluid rounded-4" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url('Assets/'); ?>LandingPage/img/jalur/PPDB 2024.jpeg"
                                        class="d-block img-fluid rounded-4" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel_persyaratan"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel_persyaratan"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1 umum" data-aos="fade-up">
                        <h3>Persyaratan Khusus</h3>
                        <div class="umum-list">
                            <ul>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <a data-bs-toggle="collapse" data-bs-target="#persyaratan1" class="collapsed">
                                        Zonasi
                                        <i class="bi bi-plus icon-show"></i><i class="bi bi-x icon-close"></i></a>
                                    <div id="persyaratan1" class="collapse" data-bs-parent=".umum-list">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                            reiciendis!
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="200">
                                    <a data-bs-toggle="collapse" data-bs-target="#persyaratan2"
                                        class="collapsed">Afirmasi
                                        <i class="bi bi-plus icon-show"></i><i class="bi bi-x icon-close"></i></a>
                                    <div id="persyaratan2" class="collapse" data-bs-parent=".umum-list">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                            reiciendis!
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="200">
                                    <a data-bs-toggle="collapse" data-bs-target="#persyaratan3"
                                        class="collapsed">Perpindahan Orang Tua
                                        <i class="bi bi-plus icon-show"></i><i class="bi bi-x icon-close"></i></a>
                                    <div id="persyaratan3" class="collapse" data-bs-parent=".umum-list">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                            reiciendis!
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="200">
                                    <a data-bs-toggle="collapse" data-bs-target="#persyaratan4"
                                        class="collapsed">Prestasi
                                        <i class="bi bi-plus icon-show"></i><i class="bi bi-x icon-close"></i></a>
                                    <div id="persyaratan4" class="collapse" data-bs-parent=".umum-list">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                            reiciendis!
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Persyaratan Section -->

        <!-- ======= ketentuan Section ======= -->
        <section id="ketentuan" class="faq section-bg">
            <div class="container">
                <div class="section-title" data-aos="fade">
                    <h2>Ketentuan</h2>
                    <p>Ketentuan Pendaftaran</p>
                </div>
                <div class="row content">
                    <div class="col-md-4" data-aos="fade">
                        <img src="<?= base_url('Assets/'); ?>LandingPage/img/jalur/PPDB 2024.jpeg"
                            class="img-fluid rounded-3" alt="" />
                    </div>
                    <div class="col-md-8 pt-4" data-aos="fade-up">
                        <div class="faq-list">
                            <ul>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <a data-bs-toggle="collapse" data-bs-target="#pendaftaran1" class="collapsed">
                                        Pendaftaran Akun dan
                                        Verifikasi Berkas
                                        <i class="bi bi-plus icon-show"></i><i class="bi bi-x icon-close"></i></a>
                                    <div id="pendaftaran1" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                            reiciendis!
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="200">
                                    <a data-bs-toggle="collapse" data-bs-target="#pendaftaran3"
                                        class="collapsed">Aktifasi Akun
                                        <i class="bi bi-plus icon-show"></i><i class="bi bi-x icon-close"></i></a>
                                    <div id="pendaftaran3" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                            reiciendis!
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="200">
                                    <a data-bs-toggle="collapse" data-bs-target="#pendaftaran4"
                                        class="collapsed">Pendaftaran dan
                                        Perubahan Pilihan
                                        <i class="bi bi-plus icon-show"></i><i class="bi bi-x icon-close"></i></a>
                                    <div id="pendaftaran4" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                            reiciendis!
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="200">
                                    <a data-bs-toggle="collapse" data-bs-target="#pendaftaran5" class="collapsed">Masa
                                        Teanang
                                        <i class="bi bi-plus icon-show"></i><i class="bi bi-x icon-close"></i></a>
                                    <div id="pendaftaran5" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                            reiciendis!
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="200">
                                    <a data-bs-toggle="collapse" data-bs-target="#pendaftaran6"
                                        class="collapsed">Pengumuman
                                        <i class="bi bi-plus icon-show"></i><i class="bi bi-x icon-close"></i></a>
                                    <div id="pendaftaran6" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                            reiciendis!
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End ketentuan Section -->

        <!-- alur -->
        <!-- ======= Alur Section ======= -->
        <section id="alur" class="alur">
            <div class="container">
                <div class="section-title" data-aos="fade">
                    <h2>Alur</h2>
                    <p>Alur Pendaftaran</p>
                </div>

                <!-- alur desktop -->
                <div class="alur-desktop">
                    <!-- 1 -->
                    <div class="row content" data-aos="fade">
                        <div class="col-md-5 icon-left">
                            <img src="<?= base_url('Assets/'); ?>LandingPage/img/icon/TOA.png"
                                class="img-fluid rounded-3" alt="" data-aos="fade" />
                        </div>
                        <div class="col-md-2 svg-line">
                            <svg width="97" height="317" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-full">
                                <path
                                    d="M24-606c24.962 117.911 49 191.829 49 319.375C73-159.079 23.961-94.295 24 33.25c.039 127.164 48.98 192.712 49 319.875C73.02 480.48 48.979 556.31 24 674"
                                    stroke="#FFA62F" stroke-width="4" stroke-dasharray="8 12"></path>
                                <rect width="48" height="48" rx="24" fill="#7D0A0A"></rect>
                                <text fill="#F2F2FA" font-family="AvertaStd" font-weight="600" font-size="24">
                                    <tspan x="17" y="30.792">1</tspan>
                                </text>
                            </svg>
                        </div>
                        <div class="col-md-5 icon-right">
                            <div class="card border-0" data-aos="fade">
                                <div class="card-body">
                                    <h5 class="title-content">Pengumuman PPDB 2024</h5>
                                    <p class="content-text">
                                        Pengumuman PPDB 2024 tanggal 5 juni 2024
                                    </p>
                                    <a href="#" class="btn_soft">Baca ketentuan</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="row content" data-aos="fade">
                        <div class="col-md-5 icon-left">
                            <div class="card border-0" data-aos="fade">
                                <div class="card-body">
                                    <h5 class="title-content">
                                        Pendaftaran Akun & Verifikasi Berkas
                                    </h5>
                                    <p class="content-text">
                                        Pendaftaran akun dan verifikasi berkas tanggal 5 juni 2024
                                    </p>
                                    <a href="#" class="btn_soft">Baca ketentuan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 svg-line">
                            <svg width="97" height="317" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-full">
                                <path
                                    d="M24-306C48.962-188.089 73-114.171 73 13.375c0 127.546-49.039 192.329-49 319.875.039 127.164 48.98 192.712 49 319.875C73.02 780.48 48.979 856.31 24 974"
                                    stroke="#FFA62F" stroke-width="4" stroke-dasharray="8 12"></path>
                                <rect x="49" width="48" height="48" rx="24" fill="#7D0A0A"></rect><text fill="#F2F2FA"
                                    font-family="AvertaStd" font-weight="600" font-size="24">
                                    <tspan x="66.5" y="30.792">2</tspan>
                                </text>
                            </svg>
                        </div>
                        <div class="col-md-5 icon-right" data-aos="fade">
                            <img src="<?= base_url('Assets/'); ?>LandingPage/img/icon/daftar.png"
                                class="img-fluid rounded-3" alt="" />
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="row content" data-aos="fade">
                        <div class="col-md-5 icon-left">
                            <img src="<?= base_url('Assets/'); ?>LandingPage/img/icon/gembok.png"
                                class="img-fluid rounded-3" alt="" data-aos="fade" />
                        </div>
                        <div class="col-md-2 svg-line">
                            <svg width="97" height="317" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-full">
                                <path
                                    d="M24-606c24.962 117.911 49 191.829 49 319.375C73-159.079 23.961-94.295 24 33.25c.039 127.164 48.98 192.712 49 319.875C73.02 480.48 48.979 556.31 24 674"
                                    stroke="#FFA62F" stroke-width="4" stroke-dasharray="8 12"></path>
                                <rect width="48" height="48" rx="24" fill="#7D0A0A"></rect>
                                <text fill="#F2F2FA" font-family="AvertaStd" font-weight="600" font-size="24">
                                    <tspan x="17" y="30.792">3</tspan>
                                </text>
                            </svg>
                        </div>
                        <div class="col-md-5 icon-right">
                            <div class="card border-0" data-aos="fade">
                                <div class="card-body">
                                    <h5 class="title-content">
                                        Aktifasi Akun
                                    </h5>
                                    <p class="content-text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt, explicabo?
                                    </p>
                                    <a href="#" class="btn_soft">Baca ketentuan</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="row content" data-aos="fade">
                        <div class="col-md-5 icon-left">
                            <div class="card border-0" data-aos="fade">
                                <div class="card-body">
                                    <h5 class="title-content">
                                        Pendaftaran dan Perubahan Pilihan
                                    </h5>
                                    <p class="content-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, sit?
                                    </p>
                                    <a href="#" class="btn_soft">Baca ketentuan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 svg-line">
                            <svg width="97" height="317" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-full">
                                <path
                                    d="M24-306C48.962-188.089 73-114.171 73 13.375c0 127.546-49.039 192.329-49 319.875.039 127.164 48.98 192.712 49 319.875C73.02 780.48 48.979 856.31 24 974"
                                    stroke="#FFA62F" stroke-width="5" stroke-dasharray="8 12"></path>
                                <rect x="49" width="48" height="48" rx="24" fill="#7D0A0A"></rect><text fill="#F2F2FA"
                                    font-family="AvertaStd" font-weight="600" font-size="24">
                                    <tspan x="66.5" y="30.792">4</tspan>
                                </text>
                            </svg>
                        </div>
                        <div class="col-md-5 icon-right" data-aos="fade">
                            <img src="<?= base_url('Assets/'); ?>LandingPage/img/icon/pilihan.png"
                                class="img-fluid rounded-3" alt="" />
                        </div>
                    </div>

                    <!-- 5 -->
                    <div class="row content" data-aos="fade">
                        <div class="col-md-5 icon-left">
                            <img src="<?= base_url('Assets/'); ?>LandingPage/img/icon/timeglass.png"
                                class="img-fluid rounded-3" alt="" data-aos="fade" />
                        </div>
                        <div class="col-md-2 svg-line">
                            <svg width="97" height="317" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-full">
                                <path
                                    d="M24-606c24.962 117.911 49 191.829 49 319.375C73-159.079 23.961-94.295 24 33.25c.039 127.164 48.98 192.712 49 319.875C73.02 480.48 48.979 556.31 24 674"
                                    stroke="#FFA62F" stroke-width="4" stroke-dasharray="8 12"></path>
                                <rect width="48" height="48" rx="24" fill="#7D0A0A"></rect>
                                <text fill="#F2F2FA" font-family="AvertaStd" font-weight="600" font-size="24">
                                    <tspan x="17" y="30.792">5</tspan>
                                </text>
                            </svg>
                        </div>
                        <div class="col-md-5 icon-right">
                            <div class="card border-0" data-aos="fade">
                                <div class="card-body">
                                    <h5 class="title-content">
                                        Masa tenang
                                    </h5>
                                    <p class="content-text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente, obcaecati!
                                    </p>
                                    <a href="#" class="btn_soft">Baca ketentuan</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6 -->
                    <div class="row content" data-aos="fade">
                        <div class="col-md-5 icon-left">
                            <div class="card border-0" data-aos="fade">
                                <div class="card-body">
                                    <h5 class="title-content">
                                        Pengumuman
                                    </h5>
                                    <p class="content-text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente, obcaecati!
                                    </p>
                                    <a href="#" class="btn_soft">Baca ketentuan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 svg-line">
                            <svg width="97" height="317" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-full">
                                <path
                                    d="M24-306C48.962-188.089 73-114.171 73 13.375c0 127.546-49.039 192.329-49 319.875.039 127.164 48.98 192.712 49 319.875C73.02 780.48 48.979 856.31 24 974"
                                    stroke="#FFA62F" stroke-width="5" stroke-dasharray="8 12"></path>
                                <rect x="49" width="48" height="48" rx="24" fill="#7D0A0A"></rect><text fill="#F2F2FA"
                                    font-family="AvertaStd" font-weight="600" font-size="24">
                                    <tspan x="66.5" y="30.792">6</tspan>
                                </text>
                            </svg>
                        </div>
                        <div class="col-md-5 icon-right" data-aos="fade">
                            <img src="<?= base_url('Assets/'); ?>LandingPage/img/icon/pengumuman.png"
                                class="rounded-3 w-50" alt="" />
                        </div>
                    </div>
                </div>

                <!-- alur mobile -->
                <div class="alur-mobile">
                    <div class="row content" data-aos="fade">
                        <!-- card -->

                    </div>

                    <style>
                    .title-content {
                        font-size: 20px;
                        font-weight: 700;
                        color: #000;
                    }

                    .content-text {
                        font-size: 16px;
                        color: #000;
                    }

                    .icon-left {
                        display: flex;
                        justify-content: right;
                        align-items: start;
                    }

                    .icon-right {
                        display: flex;
                        justify-content: left;
                        align-items: start;
                    }

                    .btn_soft {
                        background-color: #FFA62F;
                        color: #fff;
                        padding: 10px 20px;
                        border-radius: 10px;
                        text-decoration: none;
                    }

                    .btn_soft:hover {
                        background-color: #7D0A0A;
                        color: #fff;
                    }

                    .svg-line {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }
                    </style>

                </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footers">
        <div class="footer-top" id="kontak">
            <h1 class="text-center fw-bold mb-4">Kontak</h1>
            <div class="container mt-4">
                <!-- header -->
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="footer-info">
                            <h3>PPDB SMANSA</h3>
                            <p class="pb-3"><em>
                                    Jl. Ra. Kartini No. 39, Kec. Pekalongan Barat, Kota Pekalongan, Jawa Tengah 51118
                                </em>
                            </p>
                            <p>
                                <strong>Phone:</strong> (022) 000 000 00 <br>
                                <strong>Help Desk PPDB:</strong> (022) 000 000 00 <br>
                                <strong>Email:</strong> info@sma1pekalongan.sch.id<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bi-globe"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-telegram"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-youtube"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        </p>
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9489047996085!2d109.67528207499628!3d-6.896715093102491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7025f06f9d33d9%3A0x467ab29a33cab166!2sSMA%20Negeri%201%20Pekalongan!5e0!3m2!1sid!2sid!4v1716997103332!5m2!1sid!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; 2024 <strong><span>PPDB SMANSA</span></strong>. All Rights Reserved
            </div>

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendors JS Files -->
    <script src="<?= base_url('Assets/'); ?>LandingPage/vendors/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('Assets/'); ?>LandingPage/vendors/aos/aos.js"></script>
    <script src="<?= base_url('Assets/'); ?>LandingPage/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('Assets/'); ?>LandingPage/vendors/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('Assets/'); ?>LandingPage/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('Assets/'); ?>LandingPage/vendors/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('Assets/'); ?>LandingPage/js/main.js"></script>
    <!-- include cdn  -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>

    </script>
</body>

</html>