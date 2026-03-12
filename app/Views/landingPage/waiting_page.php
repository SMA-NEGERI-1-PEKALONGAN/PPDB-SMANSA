<!DOCTYPE html>
<html lang="id" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segera Hadir - SPMB SMAN 1 Pekalongan</title>

    <!-- Favicons -->
    <link href="<?= base_url('Assets/'); ?>LandingPage/img/LOGO SMANSA.png" rel="icon">
    <link href="<?= base_url('Assets/'); ?>LandingPage/img/LOGO SMANSA.png" rel="apple-touch-icon">
    <!-- FontAwesome & Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">


    <!-- Tailwind CSS (via CDN untuk preview) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Inter', 'sans-serif']
                },
                colors: {
                    primary: {
                        50: '#eff6ff',
                        100: '#dbeafe',
                        200: '#bfdbfe',
                        300: '#93c5fd',
                        400: '#60a5fa',
                        500: '#3b82f6',
                        600: '#2563eb',
                        700: '#1d4ed8',
                        800: '#1e40af',
                        900: '#1e3a8a'
                    },
                    accent: {
                        500: '#8b5cf6'
                    },
                },
                animation: {
                    'float': 'float 6s ease-in-out infinite',
                    'pulse-slow': 'pulse 8s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                },
                keyframes: {
                    float: {
                        '0%, 100%': {
                            transform: 'translateY(0)'
                        },
                        '50%': {
                            transform: 'translateY(-20px)'
                        },
                    }
                }
            }
        }
    }
    </script>
    <style>
    /* Menghilangkan panah pada input number di beberapa browser */
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .glass-panel {
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(24px);
    }
    </style>
</head>

<body
    class="bg-slate-50 dark:bg-[#080d1a] font-sans antialiased text-slate-600 dark:text-slate-300 min-h-[100dvh] flex flex-col items-center justify-center relative overflow-x-hidden transition-colors duration-500 py-8 sm:py-12">

    <!-- Efek Latar Belakang Blur (Ambient Glow) -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div
            class="absolute -top-[20%] -left-[10%] w-[70vw] h-[70vw] sm:w-[50vw] sm:h-[50vw] bg-gradient-to-br from-primary-500/20 to-accent-500/20 blur-[80px] sm:blur-[120px] rounded-full animate-pulse-slow">
        </div>
        <div
            class="absolute -bottom-[20%] -right-[10%] w-[70vw] h-[70vw] sm:w-[50vw] sm:h-[50vw] bg-gradient-to-tl from-pink-500/20 to-blue-500/20 blur-[80px] sm:blur-[120px] rounded-full animate-pulse-slow delay-1000">
        </div>
    </div>

    <!-- Tombol Toggle Tema (Kanan Atas) -->
    <button onclick="toggleTheme()"
        class="fixed top-4 right-4 sm:top-6 sm:right-6 z-50 w-10 h-10 sm:w-12 sm:h-12 bg-white/80 dark:bg-slate-800/80 backdrop-blur-md rounded-full shadow-lg border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-300 hover:scale-110 transition-all focus:outline-none">
        <i id="theme-icon" class="fa-solid fa-moon text-lg sm:text-xl"></i>
    </button>

    <!-- Kontainer Utama -->
    <main class="relative z-10 w-full max-w-4xl px-4 sm:px-6 lg:px-8 mt-auto mb-auto">
        <div
            class="glass-panel bg-white/80 dark:bg-slate-800/80 rounded-[2rem] sm:rounded-[3rem] shadow-2xl border border-white/60 dark:border-slate-700/50 p-6 sm:p-10 md:p-14 text-center overflow-hidden relative transform transition-all">

            <!-- Header Glow Border -->
            <div
                class="absolute top-0 left-0 w-full h-1.5 sm:h-2 bg-gradient-to-r from-primary-500 via-accent-500 to-pink-500">
            </div>

            <!-- Ikon Mengambang -->
            <div
                class="mx-auto w-16 h-16 sm:w-24 sm:h-24 bg-gradient-to-br from-primary-500 to-accent-500 rounded-[1.2rem] sm:rounded-[2rem] flex items-center justify-center text-white text-3xl sm:text-5xl shadow-xl shadow-primary-500/30 animate-float mb-6 sm:mb-10 rotate-3">
                <i class="fa-solid fa-rocket"></i>
            </div>

            <!-- Tipografi -->
            <span
                class="px-3 py-1 sm:px-4 sm:py-1.5 bg-slate-100 dark:bg-slate-900/50 text-slate-600 dark:text-slate-400 rounded-full font-bold text-[10px] sm:text-sm uppercase tracking-widest mb-4 inline-block border border-slate-200 dark:border-slate-700">Dalam
                Pengembangan</span>
            <h1
                class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white mb-3 sm:mb-6 leading-tight">
                Website Segera <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-primary-500 to-pink-500">Mengudara</span>
            </h1>
            <p
                class="text-slate-600 dark:text-slate-400 text-sm sm:text-base md:text-lg mb-8 sm:mb-14 max-w-2xl mx-auto leading-relaxed">
                Kami sedang meracik pengalaman terbaik untuk Portal SPMB SMAN 1 Pekalongan. Persiapkan dokumen Anda,
                sistem akan dibuka dalam:
            </p>

            <!-- Hitung Mundur (Countdown) - Sangat responsif di Mobile -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 md:gap-6 max-w-3xl mx-auto mb-8 sm:mb-14">
                <!-- Kotak Hari -->
                <div
                    class="bg-slate-50 dark:bg-slate-900/60 border border-slate-200 dark:border-slate-700/80 rounded-2xl p-3 sm:p-6 flex flex-col items-center justify-center group hover:-translate-y-1 transition-transform">
                    <span id="days"
                        class="text-3xl sm:text-5xl md:text-6xl font-black text-slate-900 dark:text-white font-mono tracking-tighter">00</span>
                    <span
                        class="text-[10px] sm:text-xs text-slate-500 dark:text-slate-400 uppercase tracking-widest font-bold mt-1 sm:mt-2">Hari</span>
                </div>
                <!-- Kotak Jam -->
                <div
                    class="bg-slate-50 dark:bg-slate-900/60 border border-slate-200 dark:border-slate-700/80 rounded-2xl p-3 sm:p-6 flex flex-col items-center justify-center group hover:-translate-y-1 transition-transform">
                    <span id="hours"
                        class="text-3xl sm:text-5xl md:text-6xl font-black text-slate-900 dark:text-white font-mono tracking-tighter">00</span>
                    <span
                        class="text-[10px] sm:text-xs text-slate-500 dark:text-slate-400 uppercase tracking-widest font-bold mt-1 sm:mt-2">Jam</span>
                </div>
                <!-- Kotak Menit -->
                <div
                    class="bg-slate-50 dark:bg-slate-900/60 border border-slate-200 dark:border-slate-700/80 rounded-2xl p-3 sm:p-6 flex flex-col items-center justify-center group hover:-translate-y-1 transition-transform">
                    <span id="minutes"
                        class="text-3xl sm:text-5xl md:text-6xl font-black text-slate-900 dark:text-white font-mono tracking-tighter">00</span>
                    <span
                        class="text-[10px] sm:text-xs text-slate-500 dark:text-slate-400 uppercase tracking-widest font-bold mt-1 sm:mt-2">Menit</span>
                </div>
                <!-- Kotak Detik -->
                <div
                    class="bg-primary-50 dark:bg-primary-900/20 border border-primary-200 dark:border-primary-800/50 rounded-2xl p-3 sm:p-6 flex flex-col items-center justify-center group hover:-translate-y-1 transition-transform shadow-inner">
                    <span id="seconds"
                        class="text-3xl sm:text-5xl md:text-6xl font-black text-primary-600 dark:text-primary-400 font-mono tracking-tighter">00</span>
                    <span
                        class="text-[10px] sm:text-xs text-primary-600 dark:text-primary-400 uppercase tracking-widest font-bold mt-1 sm:mt-2">Detik</span>
                </div>
            </div>

            <!-- Interaktif Aksi (Berlangganan & Kontak) -->
            <!-- <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 max-w-xl mx-auto">
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fa-regular fa-envelope text-slate-400"></i>
                    </div>
                    <input type="email" placeholder="Masukkan email Anda..."
                        class="w-full pl-11 pr-4 py-3 sm:py-4 bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-600 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-transparent outline-none text-slate-700 dark:text-slate-200 transition-all text-sm sm:text-base shadow-sm">
                </div>
                <button type="button"
                    class="w-full sm:w-auto shrink-0 px-6 sm:px-8 py-3 sm:py-4 bg-slate-900 hover:bg-black text-white dark:bg-primary-500 dark:hover:bg-primary-600 font-bold rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-0.5 text-sm sm:text-base flex items-center justify-center gap-2">
                    Beritahu Saya <i class="fa-solid fa-bell"></i>
                </button>
            </div> -->

            <!-- Footer dalam card -->
            <div
                class="mt-8 sm:mt-12 pt-6 sm:pt-8 border-t border-slate-200 dark:border-slate-700/50 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs sm:text-sm text-slate-500 dark:text-slate-400">
                <div class="flex items-center gap-2">
                    <img src="<?= base_url('Assets/'); ?>LandingPage/img/LOGO SMANSA.png" alt="" class="img-fluid"
                        width="24">
                    <span>Tim IT SMAN 1 Pekalongan</span>
                </div>
                <div class="flex gap-4">
                    <a href="https://www.instagram.com/sma1pekalongan/" target="_blank"
                        class="hover:text-primary-500 transition-colors"><i
                            class="fa-brands fa-instagram text-base sm:text-lg"></i></a>
                    <a href="https://www.facebook.com/sman1pekalongan/?locale=id_ID" target="_blank"
                        class="hover:text-blue-500 transition-colors"><i
                            class="fa-brands fa-facebook text-base sm:text-lg"></i></a>
                    <a href="https://www.youtube.com/@sman1pekalongan" target="_blank"
                        class="hover:text-red-500 transition-colors"><i
                            class="fa-brands fa-youtube text-base sm:text-lg"></i></a>
                    <a href="https://www.sman1pekalongan.sch.id" target="_blank"
                        class="hover:text-red-500 transition-colors"><i
                            class="fa-solid fa-globe text-base sm:text-lg"></i></a>

                </div>
            </div>

        </div>
    </main>

    <script>
    // --- 1. Logika Toggle Dark Mode ---
    const html = document.documentElement;
    const themeIcon = document.getElementById('theme-icon');

    function toggleTheme() {
        if (html.classList.contains('dark')) {
            html.classList.remove('dark');
            themeIcon.classList.remove('fa-sun');
            themeIcon.classList.add('fa-moon');
        } else {
            html.classList.add('dark');
            themeIcon.classList.remove('fa-moon');
            themeIcon.classList.add('fa-sun');
        }
    }

    // Set icon awal berdasarkan class default
    if (html.classList.contains('dark')) {
        themeIcon.classList.remove('fa-moon');
        themeIcon.classList.add('fa-sun');
    }

    // --- 2. Logika Countdown Timer ---
    // Atur target tanggal rilis (misal: 14 hari dari hari ini)
    const targetDate = new Date();
    targetDate.setFullYear(2026, 4, 1); // 1 Mei 2026
    targetDate.setHours(8, 0, 0, 0); // Jam 08:00 Pagi

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = targetDate.getTime() - now;

        if (distance < 0) {
            // Jika waktu habis
            document.getElementById("days").innerText = "00";
            document.getElementById("hours").innerText = "00";
            document.getElementById("minutes").innerText = "00";
            document.getElementById("seconds").innerText = "00";
            return;
        }

        // Perhitungan waktu
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Tampilkan dengan format 2 digit (contoh: 09, bukan 9)
        document.getElementById("days").innerText = days.toString().padStart(2, '0');
        document.getElementById("hours").innerText = hours.toString().padStart(2, '0');
        document.getElementById("minutes").innerText = minutes.toString().padStart(2, '0');
        document.getElementById("seconds").innerText = seconds.toString().padStart(2, '0');
    }

    // Jalankan fungsi setiap 1 detik
    setInterval(updateCountdown, 1000);
    updateCountdown(); // Panggil sekali langsung saat muat
    </script>
</body>

</html>