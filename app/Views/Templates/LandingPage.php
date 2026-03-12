<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPMB SMAN 1 Pekalongan</title>
    <!-- Favicons -->
    <link href="<?= base_url('Assets/'); ?>LandingPage/img/LOGO SMANSA.png" rel="icon">
    <link href="<?= base_url('Assets/'); ?>LandingPage/img/LOGO SMANSA.png" rel="apple-touch-icon">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Konfigurasi Tailwind untuk Dark Mode, Animasi & Warna Tema -->
    <script type="text/javascript">
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                fontFamily: {
                    sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                },
                colors: {
                    primary: {
                        50: '#eff6ff',
                        100: '#dbeafe',
                        400: '#60a5fa',
                        500: '#3b82f6',
                        600: '#2563eb',
                        700: '#1d4ed8',
                        800: '#1e40af',
                        900: '#1e3a8a',
                    },
                    accent: {
                        100: '#e0e7ff',
                        200: '#c7d2fe',
                        300: '#a5b4fc',
                        400: '#a78bfa',
                        500: '#8b5cf6',
                        600: '#7c3aed',
                        700: '#6d28d9',
                        800: '#5b21b6',
                        900: '#4c1d95',
                    }
                },
                animation: {
                    'blob': 'blob 7s infinite',
                    'float': 'float 6s ease-in-out infinite',
                    'text-gradient': 'text-gradient 4s linear infinite',
                    'ring-pulse': 'ring-pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                },
                keyframes: {
                    blob: {
                        '0%': {
                            transform: 'translate(0px, 0px) scale(1)'
                        },
                        '33%': {
                            transform: 'translate(30px, -50px) scale(1.1)'
                        },
                        '66%': {
                            transform: 'translate(-20px, 20px) scale(0.9)'
                        },
                        '100%': {
                            transform: 'translate(0px, 0px) scale(1)'
                        },
                    },
                    float: {
                        '0%, 100%': {
                            transform: 'translateY(0)'
                        },
                        '50%': {
                            transform: 'translateY(-15px)'
                        },
                    },
                    'text-gradient': {
                        '0%': {
                            backgroundPosition: '0% 50%'
                        },
                        '50%': {
                            backgroundPosition: '100% 50%'
                        },
                        '100%': {
                            backgroundPosition: '0% 50%'
                        },
                    },
                    'ring-pulse': {
                        '0%': {
                            boxShadow: '0 0 0 0 rgba(59, 130, 246, 0.7)'
                        },
                        '70%': {
                            boxShadow: '0 0 0 10px rgba(59, 130, 246, 0)'
                        },
                        '100%': {
                            boxShadow: '0 0 0 0 rgba(59, 130, 246, 0)'
                        },
                    }
                }
            }
        }
    }
    </script>
    <style>
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f5f9;
    }

    .dark ::-webkit-scrollbar-track {
        background: #0f172a;
    }

    ::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 10px;
    }

    .dark ::-webkit-scrollbar-thumb {
        background: #334155;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }

    /* Animasi Scroll Reveal */
    .reveal {
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    .reveal-delay-1 {
        transition-delay: 0.15s;
    }

    .reveal-delay-2 {
        transition-delay: 0.3s;
    }

    .reveal-delay-3 {
        transition-delay: 0.45s;
    }

    /* Accordion Style */
    details>summary {
        list-style: none;
    }

    details>summary::-webkit-details-marker {
        display: none;
    }

    /* Timeline Line Glow */
    .timeline-line {
        position: absolute;
        left: 24px;
        top: 0;
        bottom: 0;
        width: 3px;
        background: linear-gradient(to bottom, #3b82f6, #8b5cf6, #ec4899);
        box-shadow: 0 0 15px rgba(139, 92, 246, 0.5);
        border-radius: 10px;
    }

    @media (min-width: 768px) {
        .timeline-line {
            left: 50%;
            transform: translateX(-50%);
        }
    }

    /* Glassmorphism */
    .glass {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.4);
    }

    .dark .glass {
        background: rgba(15, 23, 42, 0.6);
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    /* Animated Text Gradient Class */
    .animate-bg-text {
        background-size: 200% auto;
    }

    /* Custom Styling (Glassmorphism & Scrollbar) */
    .glass-panel {
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
    }

    /* Validasi Error Style */
    .form-control-danger {
        border-color: #f43f5e !important;
    }

    .form-control-success {
        border-color: #22c55e !important;
    }

    .has-danger {
        color: #f43f5e !important;
        font-size: 0.75rem;
        margin-top: 0.25rem;
        display: block;
    }

    /* Hilangkan panah input type number */
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Custom Scrollbar untuk modal */
    .custom-scroll::-webkit-scrollbar {
        width: 6px;
    }

    .custom-scroll::-webkit-scrollbar-track {
        background: transparent;
    }

    .custom-scroll::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 10px;
    }

    .dark .custom-scroll::-webkit-scrollbar-thumb {
        background: #475569;
    }

    /* Tiket Cetak Antrean - Garis Putus-putus */
    .ticket-dashed {
        background-image: linear-gradient(to bottom, transparent 50%, rgba(148, 163, 184, 0.4) 50%);
        background-size: 2px 15px;
        background-repeat: repeat-y;
        background-position: left center;
    }

    @media (max-width: 768px) {
        .ticket-dashed {
            background-image: linear-gradient(to right, transparent 50%, rgba(148, 163, 184, 0.4) 50%);
            background-size: 15px 2px;
            background-repeat: repeat-x;
            background-position: top center;
        }
    }

    /* --- ACTIVE MENU STYLING --- */
    /* Desktop Active */
    .active-menu {
        color: #2563eb !important;
        /* warna primary-600 */
    }

    .dark .active-menu {
        color: #60a5fa !important;
        /* warna primary-400 */
    }

    .active-menu .nav-line {
        width: 75% !important;
        left: 12.5% !important;
    }

    /* Mobile Active */
    .active-mobile-menu {
        color: #2563eb !important;
        background-color: #eff6ff !important;
        /* bg-primary-50 */
    }

    .dark .active-mobile-menu {
        color: #60a5fa !important;
        background-color: rgb(51 65 85 / 0.5) !important;
        /* bg-slate-700/50 */
    }
    </style>
</head>

<body
    class="bg-slate-50 text-slate-800 dark:bg-[#0B1120] dark:text-slate-200 transition-colors duration-500 font-sans overflow-x-hidden relative">
    <!-- 1. Navigasi -->
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 bg-transparent py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 rounded-2xl px-2 transition-all duration-300"
                id="navbar-container">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3 cursor-pointer group" onclick="window.scrollTo(0,0)">
                    <div
                        class="w-10 h-10 rounded-xl flex items-center justify-center text-white font-bold text-xl0 overflow-hidden transform group-hover:scale-105 transition-transform duration-300">
                        <img src="<?= base_url('Assets/'); ?>LandingPage/img/LOGO SMANSA.png" alt=""
                            class="img-fluid object-contain">
                    </div>
                    <div>
                        <span
                            class="font-bold text-lg tracking-tight block text-slate-900 dark:text-white leading-none group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">SMAN
                            1 Pekalongan</span>
                        <span
                            class="text-[10px] text-primary-600 dark:text-primary-400 font-bold tracking-widest uppercase">Portal
                            SPMB</span>
                    </div>
                </div>

                <!-- Menu Desktop -->
                <div
                    class="hidden md:flex items-center space-x-1 bg-white/70 dark:bg-slate-800/70 backdrop-blur-xl px-2 py-1.5 rounded-full border border-white/40 dark:border-slate-700/50 shadow-sm">
                    <?php if($active != 'Antrian'): ?>
                    <!-- List Landing Page (ScrollSpy akan aktif di sini) -->
                    <a href="#beranda"
                        class="desktop-nav-link group relative px-4 py-2 text-sm font-semibold text-slate-700 dark:text-slate-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                        <span>Beranda</span>
                        <span
                            class="nav-line absolute bottom-1 left-1/2 w-0 h-0.5 bg-primary-600 dark:bg-primary-400 rounded-full transition-all duration-300 group-hover:w-3/4 group-hover:left-[12.5%]"></span>
                    </a>
                    <a href="#jalur"
                        class="desktop-nav-link group relative px-4 py-2 text-sm font-semibold text-slate-700 dark:text-slate-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                        <span>Jalur</span>
                        <span
                            class="nav-line absolute bottom-1 left-1/2 w-0 h-0.5 bg-primary-600 dark:bg-primary-400 rounded-full transition-all duration-300 group-hover:w-3/4 group-hover:left-[12.5%]"></span>
                    </a>
                    <a href="#persyaratan"
                        class="desktop-nav-link group relative px-4 py-2 text-sm font-semibold text-slate-700 dark:text-slate-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                        <span>Persyaratan</span>
                        <span
                            class="nav-line absolute bottom-1 left-1/2 w-0 h-0.5 bg-primary-600 dark:bg-primary-400 rounded-full transition-all duration-300 group-hover:w-3/4 group-hover:left-[12.5%]"></span>
                    </a>
                    <a href="#alur"
                        class="desktop-nav-link group relative px-4 py-2 text-sm font-semibold text-slate-700 dark:text-slate-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                        <span>Alur</span>
                        <span
                            class="nav-line absolute bottom-1 left-1/2 w-0 h-0.5 bg-primary-600 dark:bg-primary-400 rounded-full transition-all duration-300 group-hover:w-3/4 group-hover:left-[12.5%]"></span>
                    </a>
                    <a href="#kontak"
                        class="desktop-nav-link group relative px-4 py-2 text-sm font-semibold text-slate-700 dark:text-slate-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                        <span>Kontak</span>
                        <span
                            class="nav-line absolute bottom-1 left-1/2 w-0 h-0.5 bg-primary-600 dark:bg-primary-400 rounded-full transition-all duration-300 group-hover:w-3/4 group-hover:left-[12.5%]"></span>
                    </a>
                    <a href="<?= base_url('Antrean'); ?>"
                        class="group relative px-4 py-2 text-sm font-semibold text-slate-700 dark:text-slate-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                        <span>Antrean</span>
                        <span
                            class="nav-line absolute bottom-1 left-1/2 w-0 h-0.5 bg-primary-600 dark:bg-primary-400 rounded-full transition-all duration-300 group-hover:w-3/4 group-hover:left-[12.5%]"></span>
                    </a>
                    <?php else: ?>
                    <!-- Sedang di dalam Halaman Antrean -->
                    <a href="<?= base_url('/'); ?>"
                        class="group relative px-4 py-2 text-sm font-semibold text-slate-700 dark:text-slate-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                        <span>Beranda</span>
                        <span
                            class="nav-line absolute bottom-1 left-1/2 w-0 h-0.5 bg-primary-600 dark:bg-primary-400 rounded-full transition-all duration-300 group-hover:w-3/4 group-hover:left-[12.5%]"></span>
                    </a>
                    <a href="<?= base_url('Antrean'); ?>"
                        class="active-menu group relative px-4 py-2 text-sm font-semibold text-slate-700 dark:text-slate-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                        <span>Antrean</span>
                        <span
                            class="nav-line absolute bottom-1 left-1/2 w-0 h-0.5 bg-primary-600 dark:bg-primary-400 rounded-full transition-all duration-300 group-hover:w-3/4 group-hover:left-[12.5%]"></span>
                    </a>
                    <?php endif; ?>

                    <div class="w-[1px] h-5 bg-slate-300 dark:bg-slate-600 mx-2"></div>

                    <!-- Dark Mode Toggle -->
                    <button id="theme-toggle" type="button"
                        class="text-slate-500 dark:text-amber-300 hover:bg-slate-100 dark:hover:bg-slate-700 rounded-full w-9 h-9 flex items-center justify-center transition-all hover:rotate-12">
                        <i id="theme-toggle-dark-icon" class="hidden fa-solid fa-moon text-lg"></i>
                        <i id="theme-toggle-light-icon" class="hidden fa-solid fa-sun text-lg"></i>
                    </button>
                </div>

                <!-- Menu Mobile Btn -->
                <div class="md:hidden flex items-center gap-2">
                    <button id="theme-toggle-mobile" type="button"
                        class="text-slate-500 dark:text-amber-300 bg-white/70 dark:bg-slate-800/70 backdrop-blur-xl rounded-full w-10 h-10 flex items-center justify-center border border-white/40 dark:border-slate-700/50 shadow-sm transition-transform hover:scale-105">
                        <i id="theme-toggle-dark-icon-mobile" class="hidden fa-solid fa-moon"></i>
                        <i id="theme-toggle-light-icon-mobile" class="hidden fa-solid fa-sun"></i>
                    </button>
                    <button id="mobile-menu-btn"
                        class="text-slate-800 dark:text-white bg-white/70 dark:bg-slate-800/70 backdrop-blur-xl rounded-full w-10 h-10 flex items-center justify-center border border-white/40 dark:border-slate-700/50 shadow-sm transition-transform hover:scale-105">
                        <i class="fa-solid fa-bars-staggered text-lg transition-transform duration-300"
                            id="mobile-menu-icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Panel -->
        <div id="mobile-menu"
            class="hidden absolute top-20 left-4 right-4 bg-white/85 dark:bg-slate-800/85 backdrop-blur-2xl rounded-2xl p-4 shadow-2xl border border-white/50 dark:border-slate-700/50 transform opacity-0 -translate-y-4 transition-all duration-300 origin-top">
            <div class="space-y-1">
                <?php if($active != 'Antrian'): ?>
                <a href="#beranda"
                    class="mobile-nav-link block px-4 py-3 rounded-xl text-base font-semibold text-slate-800 dark:text-slate-200 hover:bg-primary-50 dark:hover:bg-slate-700/50 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Beranda</a>
                <a href="#jalur"
                    class="mobile-nav-link block px-4 py-3 rounded-xl text-base font-semibold text-slate-800 dark:text-slate-200 hover:bg-primary-50 dark:hover:bg-slate-700/50 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Jalur
                    Pendaftaran</a>
                <a href="#persyaratan"
                    class="mobile-nav-link block px-4 py-3 rounded-xl text-base font-semibold text-slate-800 dark:text-slate-200 hover:bg-primary-50 dark:hover:bg-slate-700/50 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Persyaratan</a>
                <a href="#alur"
                    class="mobile-nav-link block px-4 py-3 rounded-xl text-base font-semibold text-slate-800 dark:text-slate-200 hover:bg-primary-50 dark:hover:bg-slate-700/50 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Alur
                    Pendaftaran</a>
                <a href="#kontak"
                    class="mobile-nav-link block px-4 py-3 rounded-xl text-base font-semibold text-slate-800 dark:text-slate-200 hover:bg-primary-50 dark:hover:bg-slate-700/50 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Kontak
                    Informasi</a>
                <a href="<?= base_url('Antrean'); ?>"
                    class="block px-4 py-3 rounded-xl text-base font-semibold text-slate-800 dark:text-slate-200 hover:bg-primary-50 dark:hover:bg-slate-700/50 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Antrean</a>
                <?php else: ?>
                <a href="<?= base_url('/'); ?>"
                    class="block px-4 py-3 rounded-xl text-base font-semibold text-slate-800 dark:text-slate-200 hover:bg-primary-50 dark:hover:bg-slate-700/50 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Beranda</a>
                <a href="<?= base_url('Antrean'); ?>"
                    class="active-mobile-menu block px-4 py-3 rounded-xl text-base font-semibold text-slate-800 dark:text-slate-200 hover:bg-primary-50 dark:hover:bg-slate-700/50 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Antrean</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('landingPage/chatBot'); ?>
    <footer class="bg-slate-900 dark:bg-black pt-12 sm:pt-16 pb-6 sm:pb-8 border-t border-slate-800 w-full mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6 sm:gap-8 text-center md:text-left">
                <div
                    class="flex flex-col sm:flex-row items-center gap-3 opacity-80 hover:opacity-100 transition-opacity">
                    <div
                        class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center text-white shrink-0 shadow-inner">
                        <img src="<?= base_url('Assets/'); ?>LandingPage/img/LOGO SMANSA.png" alt="" class="img-fluid">
                    </div>
                    <div>
                        <span class="block text-white font-bold text-lg">SMAN 1 Pekalongan</span>
                        <span class="block text-sm text-slate-400">Pendidikan Berkarakter</span>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <a href="#" aria-label="Facebook"
                        class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-blue-600 hover:text-white hover:-translate-y-1 transition-all duration-300 shadow-sm"><i
                            class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"
                        class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-pink-600 hover:text-white hover:-translate-y-1 transition-all duration-300 shadow-sm"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube"
                        class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-red-600 hover:text-white hover:-translate-y-1 transition-all duration-300 shadow-sm"><i
                            class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div
                class="mt-8 pt-6 sm:pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center text-slate-500 text-xs sm:text-sm gap-4">
                <p>© 2026 Tim IT SMAN 1 Pekalongan. Hak Cipta Dilindungi.</p>
                <p class="flex items-center">Dibuat dengan <i
                        class="fa-solid fa-heart text-red-500 mx-1.5 animate-pulse"></i> untuk Pendidikan.</p>
            </div>
        </div>
    </footer>
    <script src="<?= base_url('Assets/'); ?>src/plugins/sweetalert2/sweetalert2.all.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script type="text/javascript">
    // 3. Logic Dark Mode
    const themeToggleBtns = [document.getElementById('theme-toggle'), document.getElementById('theme-toggle-mobile')];
    const darkIcons = document.querySelectorAll('#theme-toggle-dark-icon, #theme-toggle-dark-icon-mobile');
    const lightIcons = document.querySelectorAll('#theme-toggle-light-icon, #theme-toggle-light-icon-mobile');

    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
        lightIcons.forEach(icon => icon.classList.remove('hidden'));
    } else {
        darkIcons.forEach(icon => icon.classList.remove('hidden'));
    }

    function toggleTheme() {
        darkIcons.forEach(icon => icon.classList.toggle('hidden'));
        lightIcons.forEach(icon => icon.classList.toggle('hidden'));
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    themeToggleBtns.forEach(btn => btn.addEventListener('click', toggleTheme));

    // 1. Navbar Effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.remove('bg-transparent', 'py-4');
            navbar.classList.add('bg-white/80', 'dark:bg-slate-900/80', 'backdrop-blur-xl', 'py-2', 'shadow-sm',
                'border-b', 'border-slate-200', 'dark:border-slate-800');
        } else {
            navbar.classList.add('bg-transparent', 'py-4');
            navbar.classList.remove('bg-white/80', 'dark:bg-slate-900/80', 'py-2', 'backdrop-blur-xl',
                'shadow-sm', 'border-b', 'border-slate-200', 'dark:border-slate-800');
        }
    });

    // 4. Mobile Menu Logic with Animation
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuIcon = document.getElementById('mobile-menu-icon');

    function toggleMobileMenu() {
        if (mobileMenu.classList.contains('hidden')) {
            // Tampilkan elemen dulu
            mobileMenu.classList.remove('hidden');
            // Ubah ikon jadi X
            mobileMenuIcon.classList.remove('fa-bars-staggered');
            mobileMenuIcon.classList.add('fa-xmark', 'rotate-90');

            // Kasih jeda kecil agar browser merender penghapusan 'hidden' sebelum animasi jalan
            setTimeout(() => {
                mobileMenu.classList.remove('opacity-0', '-translate-y-4');
                mobileMenu.classList.add('opacity-100', 'translate-y-0');
            }, 10);
        } else {
            // Mulai animasi menghilang
            mobileMenu.classList.add('opacity-0', '-translate-y-4');
            mobileMenu.classList.remove('opacity-100', 'translate-y-0');
            // Kembalikan ikon
            mobileMenuIcon.classList.remove('fa-xmark', 'rotate-90');
            mobileMenuIcon.classList.add('fa-bars-staggered');

            // Sembunyikan elemen setelah animasi selesai (300ms)
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
        }
    }

    mobileMenuBtn.addEventListener('click', toggleMobileMenu);

    // Tutup menu saat link di klik (dengan animasi)
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            if (!mobileMenu.classList.contains('hidden')) {
                toggleMobileMenu();
            }
        });
    });

    // ====== SCROLLSPY (Active Menu on Scroll) ======
    const sections = document.querySelectorAll('section[id]');

    function scrollActive() {
        const scrollY = window.pageYOffset;

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            // Kurangi offset 150px untuk mengakomodasi tinggi dari fixed navbar
            const sectionTop = current.offsetTop - 150;
            const sectionId = current.getAttribute('id');

            // Cek jika posisi scroll saat ini berada di dalam section tersebut
            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                // Aktifkan Desktop Menu
                document.querySelectorAll('.desktop-nav-link[href*="#' + sectionId + '"]').forEach(el => {
                    el.classList.add('active-menu');
                });
                // Aktifkan Mobile Menu
                document.querySelectorAll('.mobile-nav-link[href*="#' + sectionId + '"]').forEach(el => {
                    el.classList.add('active-mobile-menu');
                });
            } else {
                // Matikan Desktop Menu
                document.querySelectorAll('.desktop-nav-link[href*="#' + sectionId + '"]').forEach(el => {
                    el.classList.remove('active-menu');
                });
                // Matikan Mobile Menu
                document.querySelectorAll('.mobile-nav-link[href*="#' + sectionId + '"]').forEach(el => {
                    el.classList.remove('active-mobile-menu');
                });
            }
        });
    }

    // Tambahkan event listener saat user melakukan scroll
    window.addEventListener('scroll', scrollActive);
    // Jalankan fungsi ini sekali pada saat pertama halaman di-load
    window.addEventListener('load', scrollActive);

    function getSwall(status, message) {
        swal({
            title: message,
            type: status == '200' ? 'success' : 'error',
            showCancelButton: false,
            showConfirmButton: true,
            timer: 1500
        })
    }
    $(document).on('focusout', '.required', function() {
        const id = $(this).attr('id');
        if ($(this).val() == '') {
            $(this).addClass('border-rose-500');
            $(`#${id}-error`).html('Field ini tidak boleh kosong');
            $(`#${id}-error`).removeClass('hidden');
        } else {
            $(this).removeClass('border-rose-500');
            $(`#${id}-error`).html('');
            $(`#${id}-error`).addClass('hidden');
        }
    });

    // on keyup
    $(document).on('keyup', '.required', function() {
        const id = $(this).attr('id');
        if ($(this).val() == '') {
            $(this).addClass('border-rose-500');
            $(`#error${id}`).html('Field ini tidak boleh kosong');
            $(`#error${id}`).addClass('has-danger');
        } else {
            $(this).removeClass('border-rose-500');
            $(`#error${id}`).html('');
            $(`#error${id}`).removeClass('has-danger');
        }
    });

    // ==========================================
    // FUNGSI TOGGLE (BUKA/TUTUP CHATBOT)
    // Pastikan kode ini berada DI LUAR $(document).ready()
    // ==========================================

    const chatbotWindow = document.getElementById('chatbot-window');
    const chatbotLauncher = document.getElementById('chatbot-launcher');
    const chatbotTooltip = document.getElementById('chatbot-tooltip');

    // Fungsi ini akan dipanggil oleh atribut onclick="toggleChatbot()" di HTML
    window.toggleChatbot = function() {
        // Sembunyikan tooltip saat tombol diklik
        if (chatbotTooltip) {
            chatbotTooltip.classList.add('hidden');
        }

        // Cek apakah window chatbot sedang tersembunyi
        if (chatbotWindow.classList.contains('hidden')) {
            // Proses Membuka Chatbot
            chatbotWindow.classList.remove('hidden');
            chatbotLauncher.classList.add('active'); // Ubah ikon ke X

            // Sedikit delay agar transisi CSS berjalan mulus
            setTimeout(() => {
                chatbotWindow.classList.remove('opacity-0', 'translate-y-10');
                chatbotWindow.classList.add('opacity-100', 'translate-y-0');
                // Scroll ke paling bawah saat dibuka
                const chatBox = document.getElementById('chat-messages');
                if (chatBox) chatBox.scrollTop = chatBox.scrollHeight;

                // Fokuskan cursor ke input teks
                const chatInput = document.getElementById('chat-input');
                if (chatInput) chatInput.focus();
            }, 10);

        } else {
            // Proses Menutup Chatbot
            chatbotWindow.classList.add('opacity-0', 'translate-y-10');
            chatbotWindow.classList.remove('opacity-100', 'translate-y-0');
            chatbotLauncher.classList.remove('active'); // Kembalikan ikon balon chat

            // Tunggu transisi selesai (300ms) baru sembunyikan elemen sepenuhnya
            setTimeout(() => {
                chatbotTooltip.classList.remove('hidden');
                chatbotWindow.classList.add('hidden');
            }, 300);
        }
    };
    // ==========================================
    // LOGIKA CHATBOT AI, LOCAL STORAGE & TANGGAL
    // ==========================================

    const chatBox = document.getElementById('chat-messages');
    const chatForm = document.getElementById('chat-form');
    const chatInput = document.getElementById('chat-input');
    const chatSubmitBtn = document.getElementById('chat-submit-btn');
    const typingIndicator = document.getElementById('typing-indicator');
    const botStatus = document.getElementById('bot-status');

    const STORAGE_KEY = 'Spmb_Chat_History';
    let lastDateLabel = ""; // Menyimpan status tanggal terakhir yang di-render

    $(document).ready(function() {
        loadChatHistory();
    });

    // --- FUNGSI FORMAT WAKTU & TANGGAL ---

    // Dapatkan Timestamp Lengkap (ISO)
    function getCurrentTimestamp() {
        return new Date().toISOString();
    }

    // Format Jam (Misal: 10:00 AM)
    function formatTimeOnly(isoString) {
        if (!isoString) return new Date().toLocaleTimeString('id-ID', {
            hour: '2-digit',
            minute: '2-digit'
        });
        return new Date(isoString).toLocaleTimeString('id-ID', {
            hour: '2-digit',
            minute: '2-digit'
        });
    }

    // Format Label Tanggal (Hari Ini, Kemarin, Senin, 12 Mar)
    function getDateLabel(isoString) {
        if (!isoString) return "Hari Ini";
        const date = new Date(isoString);
        const today = new Date();
        const yesterday = new Date(today);
        yesterday.setDate(yesterday.getDate() - 1);

        const isSameDay = (d1, d2) => d1.getDate() === d2.getDate() && d1.getMonth() === d2.getMonth() && d1
            .getFullYear() === d2.getFullYear();

        if (isSameDay(date, today)) return "Hari Ini";
        if (isSameDay(date, yesterday)) return "Kemarin";

        // Jika dalam 7 hari terakhir, tampilkan nama hari (Senin, Selasa)
        const diffTime = Math.abs(today - date);
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
        if (diffDays <= 7) {
            return date.toLocaleDateString('id-ID', {
                weekday: 'long'
            });
        }
        // Jika lebih dari 7 hari, tampilkan tanggal lengkap
        return date.toLocaleDateString('id-ID', {
            day: 'numeric',
            month: 'short',
            year: 'numeric'
        });
    }

    // --- FUNGSI LOCAL STORAGE & RENDER ---

    function saveToHistory(role, text, timestamp) {
        let history = JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];
        history.push({
            role,
            text,
            timestamp
        });
        localStorage.setItem(STORAGE_KEY, JSON.stringify(history));
    }

    function loadChatHistory() {
        let history = JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];
        lastDateLabel = ""; // Reset label saat meload ulang

        if (history.length === 0) {
            let welcomeMsg =
                "Halo! 👋 Saya AI Assistant SPMB SMAN 1 Pekalongan.\nAda yang bisa saya bantu terkait jadwal, syarat, atau alur pendaftaran?";
            saveToHistory('bot', welcomeMsg, getCurrentTimestamp());
            history = JSON.parse(localStorage.getItem(STORAGE_KEY));
        }

        chatBox.innerHTML = '';

        history.forEach(chat => {
            // Cek dan tambahkan Pemisah Tanggal jika harinya berbeda
            let currentDateLabel = getDateLabel(chat.timestamp);
            if (currentDateLabel !== lastDateLabel) {
                renderDateDivider(currentDateLabel);
                lastDateLabel = currentDateLabel;
            }
            renderMessage(chat.role, chat.text, chat.timestamp, false);
        });
        scrollToBottom();
    }

    function renderDateDivider(label) {
        const divider = document.createElement('div');
        divider.className = 'flex justify-center my-4';
        divider.innerHTML =
            `<span class="px-4 py-1.5 bg-slate-200/70 dark:bg-slate-700/70 text-slate-500 dark:text-slate-400 text-[10px] font-bold uppercase tracking-widest rounded-full backdrop-blur-sm shadow-sm">${label}</span>`;
        chatBox.appendChild(divider);
    }

    // 3. Render HTML Bubble Chat ke Layar (DIPERBAIKI UNTUK RICH TEXT EDITOR)
    function renderMessage(role, text, timestamp, useTypewriter = false) {
        let msgDateLabel = getDateLabel(timestamp);
        if (msgDateLabel !== lastDateLabel) {
            renderDateDivider(msgDateLabel);
            lastDateLabel = msgDateLabel;
        }

        const msgDiv = document.createElement('div');
        const msgId = 'msg-' + Date.now() + '-' + Math.random().toString(36).substr(2, 9);
        const timeFormatted = formatTimeOnly(timestamp);

        // DETEKSI OTOMATIS: Apakah teks berisi tag HTML dari Editor?
        const isHTML = /<\/?[a-z][\s\S]*>/i.test(text);

        // Jika pesan mengandung HTML (Gambar/Teks Editor), matikan typewriter agar browser tidak hang & format tidak rusak
        if (isHTML) {
            useTypewriter = false;
        }

        // Class untuk body pesan. Jika HTML, gunakan chat-editor-content. Jika text biasa, gunakan whitespace-pre-wrap
        const bodyClass = isHTML ? "chat-editor-content" : "whitespace-pre-wrap";

        if (role === 'bot') {
            msgDiv.className = 'flex items-start gap-3';
            msgDiv.innerHTML = `
            <div class="w-8 h-8 rounded-full bg-primary-100 dark:bg-primary-900/50 text-primary-600 dark:text-primary-400 flex items-center justify-center shrink-0 mt-1 shadow-sm">
                <i class="fa-solid fa-robot text-sm"></i>
            </div>
            <div class="bg-white dark:bg-slate-700 p-3.5 rounded-2xl rounded-tl-none shadow-sm border border-slate-100 dark:border-slate-600 max-w-[85%] overflow-hidden">
                <div id="${msgId}" class="text-sm text-slate-700 dark:text-slate-200 leading-relaxed font-medium ${bodyClass}"></div>
                <span class="text-[10px] text-slate-400 mt-2 block">${timeFormatted}</span>
            </div>
        `;
        } else {
            msgDiv.className = 'flex items-start justify-end gap-3';
            msgDiv.innerHTML = `
            <div class="bg-primary-600 p-3.5 rounded-2xl rounded-tr-none shadow-sm max-w-[85%]">
                <div class="text-sm text-white leading-relaxed font-medium ${bodyClass}">${text}</div>
                <span class="text-[10px] text-primary-100 mt-2 block text-right">${timeFormatted}</span>
            </div>
        `;
        }

        chatBox.appendChild(msgDiv);

        if (role === 'bot') {
            const textElement = document.getElementById(msgId);
            if (useTypewriter) {
                typeWriterEffect(textElement, text, 0);
            } else {
                // Jika HTML, render langsung sebagai DOM HTML. 
                // Jika text biasa yang tak pakai typewriter (seperti load history), beri replace \n
                textElement.innerHTML = isHTML ? text : text.replace(/\n/g, '<br>');

                // Karena typewriter mati, kita perlu menyalakan ulang inputnya secara manual di sini
                toggleInputState(false);
            }

            // Cek jika HTML mengandung gambar, tunggu gambar dimuat lalu scroll lagi ke bawah
            if (isHTML && text.includes('<img')) {
                setTimeout(scrollToBottom, 200); // Beri waktu gambar me-render sebelum scroll
            }
        }
        scrollToBottom();
    }
    // ... (Fungsi typeWriterEffect & scrollToBottom biarkan sama seperti sebelumnya) ...
    function typeWriterEffect(element, text, index) {
        if (index < text.length) {
            if (text.charAt(index) === '\n') element.innerHTML += '<br>';
            else element.innerHTML += text.charAt(index);
            scrollToBottom();
            setTimeout(() => typeWriterEffect(element, text, index + 1), Math.floor(Math.random() * 20) + 10);
        } else {
            toggleInputState(false);
        }
    }

    function scrollToBottom() {
        chatBox.scrollTop = chatBox.scrollHeight;
    }

    // --- LOGIKA MODAL HAPUS CHAT ---

    window.clearChatHistory = function() {
        // Tampilkan Modal Custom alih-alih confirm()
        const modal = document.getElementById('clear-chat-modal');
        const content = document.getElementById('clear-chat-modal-content');
        modal.classList.remove('hidden');

        setTimeout(() => {
            content.classList.remove('scale-95', 'opacity-0');
            content.classList.add('scale-100', 'opacity-100');
        }, 10);
    };

    window.closeClearModal = function() {
        const modal = document.getElementById('clear-chat-modal');
        const content = document.getElementById('clear-chat-modal-content');

        content.classList.remove('scale-100', 'opacity-100');
        content.classList.add('scale-95', 'opacity-0');

        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    };

    window.confirmClearHistory = function() {
        localStorage.removeItem(STORAGE_KEY);
        chatBox.innerHTML = '';
        closeClearModal();

        // Berikan jeda sejenak agar modal tertutup halus, lalu sapa ulang
        setTimeout(() => {
            loadChatHistory();
            chatInput.focus();
        }, 350);
    };

    // ... (Sisa event listener form AJAX tetap dipertahankan) ...
    chatInput.addEventListener('input', function() {
        if (this.value.trim().length > 0) chatSubmitBtn.removeAttribute('disabled');
        else chatSubmitBtn.setAttribute('disabled', 'true');
    });

    function toggleInputState(isDisabled) {
        chatInput.disabled = isDisabled;
        if (isDisabled) {
            chatSubmitBtn.setAttribute('disabled', 'true');
            typingIndicator.classList.remove('hidden');
            botStatus.innerText = 'Sedang mengetik...';
            botStatus.classList.add('text-green-400', 'animate-pulse');
        } else {
            typingIndicator.classList.add('hidden');
            botStatus.innerText = 'Online - Siap Membantu';
            botStatus.classList.remove('text-green-400', 'animate-pulse');
            chatSubmitBtn.setAttribute('disabled', 'true');
            chatInput.focus();
        }
        scrollToBottom();
    }

    chatForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const messageText = chatInput.value.trim();
        if (messageText === '') return;

        const timestampNow = getCurrentTimestamp(); // Gunakan timestamp penuh
        renderMessage('user', messageText, timestampNow, false);
        saveToHistory('user', messageText, timestampNow);

        chatInput.value = '';
        toggleInputState(true);

        $.ajax({
            url: '<?= base_url('fetchChatResponse'); ?>',
            type: 'POST',
            data: {
                message: messageText
            },
            dataType: 'json',
            success: function(response) {
                let botReply = response.data.message || "Maaf, saya tidak mengerti maksud Anda.";
                let botTimestamp = getCurrentTimestamp();
                saveToHistory('bot', botReply, botTimestamp);
                renderMessage('bot', botReply, botTimestamp, true);
            },
            error: function(xhr, status, error) {
                let errorMsg =
                    "⚠️ Maaf, sistem sedang sibuk atau offline. Coba beberapa saat lagi.";
                let botTimestamp = getCurrentTimestamp();
                saveToHistory('bot', errorMsg, botTimestamp);
                renderMessage('bot', errorMsg, botTimestamp, true);
            }
        });
    });
    </script>

    <?= $this->renderSection('script'); ?>
</body>

</html>