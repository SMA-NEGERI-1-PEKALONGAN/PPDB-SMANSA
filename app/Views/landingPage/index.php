<?= $this->extend('Templates/LandingPage') ?>

<?= $this->section('content') ?>

<!-- 2. Beranda (Hero Section) -->
<section id="beranda" class="relative min-h-screen flex items-center pt-32 pb-20 overflow-hidden">
    <!-- Background Animasi Glow -->
    <div class="absolute top-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
        <div
            class="absolute top-[-10%] left-[-10%] w-[30rem] h-[30rem] bg-primary-400 rounded-full mix-blend-multiply filter blur-[120px] opacity-40 dark:opacity-20 animate-blob">
        </div>
        <div
            class="absolute top-[20%] right-[-10%] w-[30rem] h-[30rem] bg-accent-400 rounded-full mix-blend-multiply filter blur-[120px] opacity-40 dark:opacity-20 animate-blob animation-delay-2000">
        </div>
        <div
            class="absolute bottom-[-20%] left-[20%] w-[30rem] h-[30rem] bg-pink-400 rounded-full mix-blend-multiply filter blur-[120px] opacity-40 dark:opacity-20 animate-blob animation-delay-4000">
        </div>
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgc3Ryb2tlPSIjOTRhM2I4IiBzdHJva2Utd2lkdGg9IjAuMiIgZmlsbD0ibm9uZSI+PHBhdGggZD0iTTAgMGg2MHY2MEgweiIvPjwvZz48L3N2Zz4=')] opacity-[0.05] dark:opacity-[0.02]">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">
            <!-- Konten Kiri (Teks) -->
            <div class="text-center lg:text-left reveal">
                <!-- Badge Diperbaiki: Warna lebih terang di dark mode -->
                <div
                    class="inline-flex items-center px-4 py-2 rounded-full glass border-white/50 dark:border-slate-700 shadow-sm mb-6 lg:mb-8 transform transition hover:scale-105">
                    <span
                        class="flex h-2.5 w-2.5 bg-green-500 rounded-full mr-3 shadow-[0_0_8px_#22c55e] animate-pulse"></span>
                    <!-- <span
                            class="flex h-2.5 w-2.5 bg-red-500 rounded-full mr-3 shadow-[0_0_8px_#ff0000] animate-pulse"></span> -->
                    <span class="text-sm font-bold text-primary-700 dark:text-primary-400">Pendaftaran Segera
                        Dibuka</span>
                </div>

                <!-- Judul Diperbaiki: Animated Gradient Text -->
                <h1
                    class="text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight text-slate-900 dark:text-white mb-6 leading-[1.1]">
                    <span class="block mb-2">Penerimaan Murid Baru</span>
                    <!-- Teks SPMB dengan efek animasi yang estetis -->
                    <span
                        class="block text-transparent bg-clip-text bg-gradient-to-r from-primary-600 via-accent-500 to-pink-500 animate-text-gradient animate-bg-text pb-2 drop-shadow-sm">SPMB
                        2026/2027</span>
                </h1>

                <p
                    class="mt-4 text-base md:text-lg lg:text-xl text-slate-600 dark:text-slate-300 mb-8 max-w-xl mx-auto lg:mx-0 font-medium leading-relaxed">
                    Selamat Datang di Portal Informasi Sistem Penerimaan Murid Baru <span
                        class="font-bold text-slate-900 dark:text-white relative inline-block"><span
                            class="relative z-10">SMAN 1 Pekalongan</span><span
                            class="absolute bottom-1 left-0 w-full h-2 bg-primary-200 dark:bg-primary-900/50 -z-0 rounded-full"></span></span>.
                </p>

                <div class="flex flex-wrap justify-center lg:justify-start gap-3 mb-10">
                    <span
                        class="px-4 py-1.5 glass rounded-lg text-xs md:text-sm font-bold text-slate-700 dark:text-slate-300 shadow-sm">#NoTitipNoJustif</span>
                    <span
                        class="px-4 py-1.5 glass rounded-lg text-xs md:text-sm font-bold text-slate-700 dark:text-slate-300 shadow-sm">#NgopeniNglakoniJateng</span>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <!-- Button diperbaiki saat hover mode gelap -->
                    <a href="#alur"
                        class="relative group px-8 py-4 bg-slate-900 dark:bg-primary-600 text-white font-bold rounded-2xl shadow-xl shadow-slate-900/20 dark:shadow-primary-600/20 hover:shadow-primary-500/40 transition-all duration-300 overflow-hidden text-center">
                        <div
                            class="absolute inset-0 w-full h-full bg-gradient-to-r from-primary-600 to-accent-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <span class="relative flex items-center justify-center gap-2 group-hover:text-white">Mulai
                            Pendaftaran <i
                                class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i></span>
                    </a>
                    <a href="#jalur"
                        class="px-8 py-4 glass text-slate-800 dark:text-white font-bold rounded-2xl hover:bg-white/50 dark:hover:bg-slate-800 transition-all duration-300 text-center flex items-center justify-center gap-2 group">
                        Pelajari Jalur <i
                            class="fa-solid fa-book-open text-primary-500 dark:text-primary-400 group-hover:rotate-12 transition-transform"></i>
                    </a>
                </div>
            </div>

            <!-- Konten Kanan (Visual) -->
            <div class="relative z-10 lg:pl-10 reveal reveal-delay-2 mt-8 lg:mt-0 animate-float">
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[110%] h-[110%] bg-gradient-to-tr from-primary-500/20 to-accent-500/20 rounded-full blur-3xl -z-10">
                </div>

                <div
                    class="relative rounded-[2.5rem] p-3 glass shadow-2xl border border-white/50 dark:border-slate-700/50">
                    <div class="relative rounded-3xl overflow-hidden group">
                        <div
                            class="absolute inset-0 bg-primary-900/10 group-hover:bg-transparent transition-colors duration-500 z-10">
                        </div>

                        <img src="<?= base_url('Assets/'); ?>Documents/images/spmb.png" alt="Murid SMAN 1 Pekalongan"
                            class="w-full h-auto object-cover object-center aspect-[4/3] transform group-hover:scale-105 transition-transform duration-700">
                    </div>

                    <!-- Floating Cards -->
                    <div class="absolute -bottom-6 -left-2 sm:-left-8 glass p-3 sm:p-4 rounded-2xl shadow-xl shadow-primary-500/10 flex items-center gap-3 sm:gap-4 animate-float"
                        style="animation-delay: 1s;">
                        <!-- <div
                                class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-gradient-to-br from-green-400 to-emerald-600 flex items-center justify-center text-white shadow-lg shadow-green-500/30">
                                <i class="fa-solid fa-file-circle-check text-lg sm:text-xl"></i>
                            </div> -->
                        <div
                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center text-white shadow-lg shadow-red-500/30">
                            <i class="fa-solid fa-user-graduate text-lg sm:text-xl"></i>
                        </div>
                        <div>
                            <p
                                class="text-[10px] sm:text-xs text-slate-500 dark:text-slate-400 font-bold uppercase tracking-wider">
                                SPMB</p>
                            <p class="text-slate-900 dark:text-white font-extrabold text-sm sm:text-lg">Belum Dibuka
                            </p>
                        </div>
                    </div>

                    <div class="absolute -top-6 -right-2 sm:-right-6 glass px-3 sm:px-4 py-2 sm:py-3 rounded-2xl shadow-xl flex items-center gap-2 sm:gap-3 animate-float"
                        style="animation-delay: 2s;">
                        <span class="relative flex h-2.5 w-2.5 sm:h-3 sm:w-3">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                            <span
                                class="relative inline-flex rounded-full h-2.5 w-2.5 sm:h-3 sm:w-3 bg-primary-500"></span>
                        </span>
                        <p class="text-xs sm:text-sm font-bold text-slate-800 dark:text-white">TA. 2026/2027</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

    <!-- Gelombang Bawah -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg class="relative block w-full h-[30px] sm:h-[50px] md:h-[100px]" data-name="Layer 1"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C-1,95.8,11.55,90.43,26.4,84.14,103.49,51.54,208.89,77.53,321.39,56.44Z"
                class="fill-white dark:fill-slate-900 transition-colors duration-500"></path>
        </svg>
    </div>
</section>

<!-- 3. Jalur Pendaftaran (Section) -->
<section id="jalur" class="py-16 md:py-24 bg-white dark:bg-slate-900 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span
                class="text-primary-600 dark:text-primary-400 font-extrabold uppercase tracking-widest text-xs md:text-sm mb-2 block">Pilihan
                Penerimaan</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 dark:text-white mb-6">Jalur Pendaftaran
            </h2>
            <div class="w-16 md:w-24 h-1.5 bg-gradient-to-r from-primary-500 to-accent-500 mx-auto rounded-full mb-6">
            </div>
            <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base leading-relaxed p-4 glass rounded-2xl">
                Sesuai dengan Petunjuk Operasional Penyelenggaraan SPMB SMA Negeri Provinsi Jawa Tengah Tahun
                2026/2027.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            <!-- Infografis Kuota dengan Animasi Bar -->
            <div class="lg:col-span-4 relative order-2 lg:order-1 reveal reveal-delay-1">
                <div
                    class="sticky top-28 bg-slate-50 dark:bg-slate-800/40 rounded-[2rem] p-6 sm:p-8 border border-slate-200 dark:border-slate-700 text-center shadow-lg">
                    <div
                        class="absolute -top-6 -right-6 w-20 h-20 bg-primary-400 blur-2xl rounded-full opacity-20 pointer-events-none">
                    </div>
                    <h3 class="text-xl font-bold mb-8 text-slate-900 dark:text-white relative z-10">Kuota Penerimaan
                    </h3>

                    <div class="space-y-6 text-left relative z-10" id="progress-container">
                        <!-- Domisili -->
                        <div>
                            <div class="flex justify-between items-end mb-2">
                                <span
                                    class="font-bold text-slate-700 dark:text-slate-200 text-sm flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-blue-500"></div> Domisili / Zonasi
                                </span>
                                <span class="font-black text-blue-600 dark:text-blue-400">55%</span>
                            </div>
                            <div
                                class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-3 overflow-hidden shadow-inner">
                                <div class="progress-bar bg-gradient-to-r from-blue-400 to-blue-600 h-full rounded-full w-0 transition-all duration-1000 ease-out"
                                    data-width="55%"></div>
                            </div>
                        </div>
                        <!-- Prestasi -->
                        <div>
                            <div class="flex justify-between items-end mb-2">
                                <span
                                    class="font-bold text-slate-700 dark:text-slate-200 text-sm flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-green-500"></div> Prestasi
                                </span>
                                <span class="font-black text-green-600 dark:text-green-400">20%</span>
                            </div>
                            <div
                                class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-3 overflow-hidden shadow-inner">
                                <div class="progress-bar bg-gradient-to-r from-green-400 to-green-600 h-full rounded-full w-0 transition-all duration-1000 ease-out"
                                    data-width="20%"></div>
                            </div>
                        </div>
                        <!-- Afirmasi -->
                        <div>
                            <div class="flex justify-between items-end mb-2">
                                <span
                                    class="font-bold text-slate-700 dark:text-slate-200 text-sm flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-amber-500"></div> Afirmasi
                                </span>
                                <span class="font-black text-amber-600 dark:text-amber-400">20%</span>
                            </div>
                            <div
                                class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-3 overflow-hidden shadow-inner">
                                <div class="progress-bar bg-gradient-to-r from-amber-400 to-amber-600 h-full rounded-full w-0 transition-all duration-1000 ease-out"
                                    data-width="20%"></div>
                            </div>
                        </div>
                        <!-- Mutasi -->
                        <div>
                            <div class="flex justify-between items-end mb-2">
                                <span
                                    class="font-bold text-slate-700 dark:text-slate-200 text-sm flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-rose-500"></div> Mutasi Tugas
                                </span>
                                <span class="font-black text-rose-600 dark:text-rose-400">5%</span>
                            </div>
                            <div
                                class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-3 overflow-hidden shadow-inner">
                                <div class="progress-bar bg-gradient-to-r from-rose-400 to-rose-600 h-full rounded-full w-0 transition-all duration-1000 ease-out"
                                    data-width="5%"></div>
                            </div>
                        </div>
                    </div>
                    <button onclick="document.getElementById('modal-jalur').classList.remove('hidden')"
                        class="mt-10 w-full py-4 bg-gradient-to-r from-slate-900 to-slate-800 hover:from-black hover:to-black text-white dark:from-primary-600 dark:to-accent-600 dark:hover:from-primary-500 dark:hover:to-accent-500 font-bold rounded-xl transition-all shadow-lg hover:shadow-xl hover:-translate-y-1 relative overflow-hidden group">
                        <span
                            class="absolute top-0 left-0 w-full h-full bg-white/20 transform -skew-x-12 -translate-x-full group-hover:animate-[shimmer_1s_forwards]"></span>
                        <i class="fa-solid fa-expand mr-2"></i> Detail Aturan
                    </button>
                </div>
            </div>

            <!-- Kartu Jalur -->
            <div class="lg:col-span-8 order-1 lg:order-2 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div
                    class="bg-white dark:bg-slate-800 p-6 md:p-8 rounded-[2rem] shadow-sm border border-slate-100 dark:border-slate-700 hover:shadow-[0_10px_30px_rgba(59,130,246,0.15)] dark:hover:border-blue-500/50 transition-all duration-300 hover:-translate-y-1 group relative overflow-hidden reveal">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-blue-500/10 dark:bg-blue-500/5 rounded-bl-full -z-10 group-hover:scale-125 transition-transform duration-500">
                    </div>
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 rounded-2xl flex items-center justify-center text-xl md:text-2xl mb-4 md:mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <h4
                        class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                        Jalur Domisili</h4>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">Prioritas bagi calon Murid
                        yang berdomisili paling dekat dengan sekolah berdasarkan titik koordinat (Radius).</p>
                </div>

                <div
                    class="bg-white dark:bg-slate-800 p-6 md:p-8 rounded-[2rem] shadow-sm border border-slate-100 dark:border-slate-700 hover:shadow-[0_10px_30px_rgba(245,158,11,0.15)] dark:hover:border-amber-500/50 transition-all duration-300 hover:-translate-y-1 group relative overflow-hidden reveal reveal-delay-1">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-amber-500/10 dark:bg-amber-500/5 rounded-bl-full -z-10 group-hover:scale-125 transition-transform duration-500">
                    </div>
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 bg-amber-100 dark:bg-amber-900/50 text-amber-600 dark:text-amber-400 rounded-2xl flex items-center justify-center text-xl md:text-2xl mb-4 md:mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-hands-holding-child"></i>
                    </div>
                    <h4
                        class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white mb-2 group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">
                        Jalur Afirmasi</h4>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">Bagi peserta didik dari
                        keluarga tidak mampu (DTKS), anak nakes penanganan COVID, dan penyandang disabilitas.</p>
                </div>

                <div
                    class="bg-white dark:bg-slate-800 p-6 md:p-8 rounded-[2rem] shadow-sm border border-slate-100 dark:border-slate-700 hover:shadow-[0_10px_30px_rgba(34,197,94,0.15)] dark:hover:border-green-500/50 transition-all duration-300 hover:-translate-y-1 group relative overflow-hidden reveal reveal-delay-2">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-green-500/10 dark:bg-green-500/5 rounded-bl-full -z-10 group-hover:scale-125 transition-transform duration-500">
                    </div>
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 bg-green-100 dark:bg-green-900/50 text-green-600 dark:text-green-400 rounded-2xl flex items-center justify-center text-xl md:text-2xl mb-4 md:mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <h4
                        class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white mb-2 group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">
                        Jalur Prestasi</h4>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">Seleksi menggunakan nilai
                        Rapor SMP (Semester 1-5) ditambah bobot nilai prestasi/kejuaraan akademik & non-akademik.
                    </p>
                </div>

                <div
                    class="bg-white dark:bg-slate-800 p-6 md:p-8 rounded-[2rem] shadow-sm border border-slate-100 dark:border-slate-700 hover:shadow-[0_10px_30px_rgba(244,63,94,0.15)] dark:hover:border-rose-500/50 transition-all duration-300 hover:-translate-y-1 group relative overflow-hidden reveal reveal-delay-3">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-rose-500/10 dark:bg-rose-500/5 rounded-bl-full -z-10 group-hover:scale-125 transition-transform duration-500">
                    </div>
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 bg-rose-100 dark:bg-rose-900/50 text-rose-600 dark:text-rose-400 rounded-2xl flex items-center justify-center text-xl md:text-2xl mb-4 md:mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <h4
                        class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white mb-2 group-hover:text-rose-600 dark:group-hover:text-rose-400 transition-colors">
                        Jalur Mutasi</h4>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">Diperuntukkan bagi anak
                        yang mengikuti perpindahan tugas orang tua/wali dari luar daerah, dibuktikan dengan Surat
                        Pindah Tugas.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Persyaratan (Diperbaiki Responsivitas Mobile) -->
<section id="persyaratan" class="py-16 md:py-24 bg-slate-50 dark:bg-[#0B1120] relative">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-12 md:mb-16 reveal">
            <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 dark:text-white mb-4">Persyaratan Dokumen
            </h2>
            <div class="w-16 md:w-24 h-1.5 bg-gradient-to-r from-primary-500 to-accent-500 mx-auto rounded-full mb-6">
            </div>
            <p class="text-sm md:text-lg text-slate-600 dark:text-slate-400">Siapkan dokumen asli berikut sebelum
                melakukan pendaftaran.</p>
        </div>

        <!-- Syarat Umum - Diperbaiki Flexbox & Spacing untuk Mobile -->
        <div
            class="bg-white dark:bg-slate-800/80 backdrop-blur-md rounded-[2rem] shadow-xl border border-slate-100 dark:border-slate-700 p-6 md:p-10 mb-8 md:mb-10 reveal reveal-delay-1">
            <div
                class="flex flex-col sm:flex-row items-center gap-4 sm:gap-5 mb-6 md:mb-8 border-b border-slate-100 dark:border-slate-700 pb-6 text-center sm:text-left">
                <div
                    class="w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-gradient-to-br from-primary-400 to-primary-600 flex items-center justify-center text-white shadow-lg shrink-0">
                    <i class="fa-solid fa-folder-open text-xl md:text-2xl"></i>
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white">Syarat Umum (Semua Jalur)
                </h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-4">
                <!-- Item List Diperbaiki strukturnya agar tidak meluber -->
                <div
                    class="flex items-start gap-3 md:gap-4 p-3 md:p-4 bg-slate-50 dark:bg-slate-900/50 rounded-xl border border-slate-100 dark:border-slate-800 w-full">
                    <div
                        class="mt-0.5 md:mt-1 bg-green-100 dark:bg-green-900/40 w-6 h-6 md:w-7 md:h-7 rounded-full flex items-center justify-center text-green-600 dark:text-green-400 shrink-0">
                        <i class="fa-solid fa-check text-[10px] md:text-sm"></i>
                    </div>
                    <div class="flex-1 break-words"><span
                            class="text-sm md:text-base text-slate-700 dark:text-slate-300 font-medium leading-tight">Buku
                            Rapor SMP/Mts Sederajat (Semester 1-5).</span></div>
                </div>
                <div
                    class="flex items-start gap-3 md:gap-4 p-3 md:p-4 bg-slate-50 dark:bg-slate-900/50 rounded-xl border border-slate-100 dark:border-slate-800 w-full">
                    <div
                        class="mt-0.5 md:mt-1 bg-green-100 dark:bg-green-900/40 w-6 h-6 md:w-7 md:h-7 rounded-full flex items-center justify-center text-green-600 dark:text-green-400 shrink-0">
                        <i class="fa-solid fa-check text-[10px] md:text-sm"></i>
                    </div>
                    <div class="flex-1 break-words"><span
                            class="text-sm md:text-base text-slate-700 dark:text-slate-300 font-medium leading-tight">Surat
                            Keterangan Nilai Rapor (SKL).</span></div>
                </div>
                <div
                    class="flex items-start gap-3 md:gap-4 p-3 md:p-4 bg-slate-50 dark:bg-slate-900/50 rounded-xl border border-slate-100 dark:border-slate-800 w-full">
                    <div
                        class="mt-0.5 md:mt-1 bg-green-100 dark:bg-green-900/40 w-6 h-6 md:w-7 md:h-7 rounded-full flex items-center justify-center text-green-600 dark:text-green-400 shrink-0">
                        <i class="fa-solid fa-check text-[10px] md:text-sm"></i>
                    </div>
                    <div class="flex-1 break-words"><span
                            class="text-sm md:text-base text-slate-700 dark:text-slate-300 font-medium leading-tight">Ijazah
                            SMP / Surat Keterangan Lulus Asli.</span></div>
                </div>
                <div
                    class="flex items-start gap-3 md:gap-4 p-3 md:p-4 bg-slate-50 dark:bg-slate-900/50 rounded-xl border border-slate-100 dark:border-slate-800 w-full">
                    <div
                        class="mt-0.5 md:mt-1 bg-green-100 dark:bg-green-900/40 w-6 h-6 md:w-7 md:h-7 rounded-full flex items-center justify-center text-green-600 dark:text-green-400 shrink-0">
                        <i class="fa-solid fa-check text-[10px] md:text-sm"></i>
                    </div>
                    <div class="flex-1 break-words"><span
                            class="text-sm md:text-base text-slate-700 dark:text-slate-300 font-medium leading-tight">Akta
                            Kelahiran asli (Maks. usia 21 th).</span></div>
                </div>
                <div
                    class="flex items-start gap-3 md:gap-4 p-3 md:p-4 bg-slate-50 dark:bg-slate-900/50 rounded-xl border border-slate-100 dark:border-slate-800 w-full sm:col-span-2">
                    <div
                        class="mt-0.5 md:mt-1 bg-green-100 dark:bg-green-900/40 w-6 h-6 md:w-7 md:h-7 rounded-full flex items-center justify-center text-green-600 dark:text-green-400 shrink-0">
                        <i class="fa-solid fa-check text-[10px] md:text-sm"></i>
                    </div>
                    <div class="flex-1 break-words"><span
                            class="text-sm md:text-base text-slate-700 dark:text-slate-300 font-medium leading-tight">Kartu
                            Keluarga (KK) yang diterbitkan min. 1 tahun sebelum pendaftaran.</span></div>
                </div>
            </div>
        </div>

        <div class="space-y-4 reveal reveal-delay-2">
            <h3
                class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4 sm:mb-6 ml-1 sm:ml-2 flex items-center gap-2">
                <span class="w-1.5 sm:w-2 h-5 sm:h-6 bg-accent-500 rounded-full shrink-0"></span> Syarat Tambahan
                Berdasarkan Jalur
            </h3>

            <details
                class="group bg-white dark:bg-slate-800 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700 overflow-hidden transition-all duration-300">
                <summary
                    class="flex items-center justify-between p-4 sm:p-6 cursor-pointer bg-white dark:bg-slate-800 group-hover:bg-slate-50 dark:group-hover:bg-slate-700/50 transition-colors relative outline-none">
                    <div class="flex items-center gap-3 sm:gap-4 pr-4">
                        <div
                            class="w-10 h-10 rounded-full shrink-0 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 flex items-center justify-center">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <span class="font-bold text-base sm:text-lg text-slate-900 dark:text-white leading-tight">1.
                            Dokumen Jalur Domisili (Zonasi)</span>
                    </div>
                    <div
                        class="w-8 h-8 rounded-full shrink-0 border-2 border-slate-200 dark:border-slate-600 flex items-center justify-center group-open:rotate-180 transition-transform duration-300 group-open:border-primary-500 group-open:text-primary-500 text-slate-400">
                        <i class="fa-solid fa-chevron-down text-sm"></i>
                    </div>
                </summary>
                <div
                    class="p-4 sm:p-6 bg-slate-50 dark:bg-slate-900/50 border-t border-slate-100 dark:border-slate-700 text-slate-600 dark:text-slate-300">
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-arrow-right text-primary-500 mt-1 text-sm shrink-0"></i>
                            <span class="text-sm sm:text-base leading-relaxed">Kartu Keluarga (KK) asli calon
                                peserta didik.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-arrow-right text-primary-500 mt-1 text-sm shrink-0"></i>
                            <span class="text-sm sm:text-base leading-relaxed">Surat Keterangan Domisili dari RT/RW
                                dilegalisir Lurah/Kades (Khusus yang tidak punya KK karena bencana
                                alam/sosial).</span>
                        </li>
                    </ul>
                </div>
            </details>

            <details
                class="group bg-white dark:bg-slate-800 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700 overflow-hidden transition-all duration-300">
                <summary
                    class="flex items-center justify-between p-4 sm:p-6 cursor-pointer bg-white dark:bg-slate-800 group-hover:bg-slate-50 dark:group-hover:bg-slate-700/50 transition-colors relative outline-none">
                    <div class="flex items-center gap-3 sm:gap-4 pr-4">
                        <div
                            class="w-10 h-10 rounded-full shrink-0 bg-amber-100 dark:bg-amber-900/30 text-amber-600 dark:text-amber-400 flex items-center justify-center">
                            <i class="fa-solid fa-hands-holding-child"></i>
                        </div>
                        <span class="font-bold text-base sm:text-lg text-slate-900 dark:text-white leading-tight">2.
                            Dokumen Jalur Afirmasi</span>
                    </div>
                    <div
                        class="w-8 h-8 rounded-full shrink-0 border-2 border-slate-200 dark:border-slate-600 flex items-center justify-center group-open:rotate-180 transition-transform duration-300 group-open:border-primary-500 group-open:text-primary-500 text-slate-400">
                        <i class="fa-solid fa-chevron-down text-sm"></i>
                    </div>
                </summary>
                <div
                    class="p-4 sm:p-6 bg-slate-50 dark:bg-slate-900/50 border-t border-slate-100 dark:border-slate-700 text-slate-600 dark:text-slate-300">
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-arrow-right text-primary-500 mt-1 text-sm shrink-0"></i>
                            <span class="text-sm sm:text-base leading-relaxed">Bukti terdaftar dalam Data Terpadu
                                Kesejahteraan Sosial (DTKS) Kemensos RI.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-arrow-right text-primary-500 mt-1 text-sm shrink-0"></i>
                            <span class="text-sm sm:text-base leading-relaxed">Anak Panti: Surat Keterangan dari
                                Pengurus Panti Asuhan.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-arrow-right text-primary-500 mt-1 text-sm shrink-0"></i>
                            <span class="text-sm sm:text-base leading-relaxed">Disabilitas: Surat Keterangan dari
                                Psikolog/Dokter Spesialis/Kepala Sekolah asal.</span>
                        </li>
                    </ul>
                </div>
            </details>

            <details
                class="group bg-white dark:bg-slate-800 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700 overflow-hidden transition-all duration-300">
                <summary
                    class="flex items-center justify-between p-4 sm:p-6 cursor-pointer bg-white dark:bg-slate-800 group-hover:bg-slate-50 dark:group-hover:bg-slate-700/50 transition-colors relative outline-none">
                    <div class="flex items-center gap-3 sm:gap-4 pr-4">
                        <div
                            class="w-10 h-10 rounded-full shrink-0 bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 flex items-center justify-center">
                            <i class="fa-solid fa-trophy"></i>
                        </div>
                        <span class="font-bold text-base sm:text-lg text-slate-900 dark:text-white leading-tight">3.
                            Dokumen Jalur Prestasi</span>
                    </div>
                    <div
                        class="w-8 h-8 rounded-full shrink-0 border-2 border-slate-200 dark:border-slate-600 flex items-center justify-center group-open:rotate-180 transition-transform duration-300 group-open:border-primary-500 group-open:text-primary-500 text-slate-400">
                        <i class="fa-solid fa-chevron-down text-sm"></i>
                    </div>
                </summary>
                <div
                    class="p-4 sm:p-6 bg-slate-50 dark:bg-slate-900/50 border-t border-slate-100 dark:border-slate-700 text-slate-600 dark:text-slate-300">
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-arrow-right text-primary-500 mt-1 text-sm shrink-0"></i>
                            <span class="text-sm sm:text-base leading-relaxed">Sertifikat Piagam Prestasi tertinggi
                                (Akademik/Non Akademik) berjenjang (Juara 1-3 Kab/Prov/Nas/Int).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-arrow-right text-primary-500 mt-1 text-sm shrink-0"></i>
                            <span class="text-sm sm:text-base leading-relaxed">Surat Keterangan Prestasi asli dari
                                Kepala Sekolah asal.</span>
                        </li>
                    </ul>
                </div>
            </details>
        </div>
    </div>
</section>

<!-- 5. Alur Pendaftaran (Ditambah Tombol (i) & Animasi) -->
<section id="alur" class="py-16 md:py-24 bg-white dark:bg-[#0f172a] relative overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 md:mb-20 reveal">
            <div
                class="inline-flex items-center justify-center p-3.5 bg-gradient-to-br from-primary-500 to-accent-600 text-white rounded-2xl mb-4 md:mb-6 shadow-lg">
                <i class="fa-solid fa-route text-xl md:text-2xl"></i>
            </div>
            <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 dark:text-white mb-4">Roadmap Pendaftaran
            </h2>
            <div class="w-16 md:w-24 h-1.5 bg-gradient-to-r from-primary-500 to-accent-500 mx-auto rounded-full mb-6">
            </div>
            <p class="text-sm md:text-lg text-slate-600 dark:text-slate-400">Klik ikon (i) pada setiap tahapan untuk
                melihat petunjuk lengkap.</p>
        </div>

        <!-- Timeline -->
        <div class="relative max-w-4xl mx-auto py-4">
            <div class="timeline-line hidden md:block origin-top scale-y-0 transition-transform duration-1000"
                id="timeline-line"></div>
            <div
                class="absolute left-[38px] top-0 bottom-0 w-1 bg-gradient-to-b from-primary-500 via-accent-500 to-pink-500 rounded-full md:hidden shadow-[0_0_10px_rgba(139,92,246,0.5)]">
            </div>

            <!-- Step 1 -->
            <div class="relative z-10 mb-16 flex flex-col md:flex-row items-center w-full reveal">
                <div class="md:w-1/2 flex justify-end md:pr-14 w-full mb-6 md:mb-0 relative">
                    <div
                        class="bg-white dark:bg-slate-800 p-6 sm:p-8 rounded-[2rem] border border-slate-100 dark:border-slate-700 shadow-xl w-full md:w-[95%] md:text-right relative ml-20 md:ml-0 group hover:border-primary-500 transition-colors">
                        <h4 class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white mb-2">Pengumuman
                            SPMB</h4>
                        <div
                            class="inline-block px-3 md:px-4 py-1.5 bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-300 rounded-lg font-bold text-xs md:text-sm mb-4">
                            15 Juni 2026</div>
                        <p class="text-slate-600 dark:text-slate-400 mb-2 text-sm">Informasi resmi mengenai kuota,
                            zonasi, dan persyaratan dirilis.</p>

                        <!-- Tombol Info (Berdenyut/Bergetar) -->
                        <button onclick="openModal('info-step-1')"
                            class="absolute top-4 right-4 md:-right-6 md:top-auto md:bottom-6 w-8 h-8 rounded-full bg-primary-100 dark:bg-primary-900/80 text-primary-600 dark:text-primary-400 flex items-center justify-center animate-ring-pulse hover:bg-primary-500 hover:text-white transition-colors z-10"
                            title="Ketentuan Pengumuman">
                            <i class="fa-solid fa-info text-sm"></i>
                        </button>
                    </div>
                </div>
                <div
                    class="absolute left-6 md:left-1/2 transform -translate-x-1/2 w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-gradient-to-br from-primary-400 to-primary-600 border-4 border-white dark:border-[#0f172a] flex items-center justify-center text-white font-bold text-xl shadow-[0_0_20px_rgba(59,130,246,0.5)] z-20">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <div class="md:w-1/2 md:pl-14 w-full hidden md:block"></div>
            </div>

            <!-- Step 2 -->
            <div class="relative z-10 mb-16 flex flex-col md:flex-row items-center w-full reveal reveal-delay-1">
                <div class="md:w-1/2 md:pr-14 w-full hidden md:block"></div>
                <div
                    class="absolute left-6 md:left-1/2 transform -translate-x-1/2 w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-gradient-to-br from-accent-400 to-accent-600 border-4 border-white dark:border-[#0f172a] flex items-center justify-center text-white font-bold text-xl shadow-[0_0_20px_rgba(139,92,246,0.5)] z-20">
                    <i class="fa-solid fa-file-shield"></i>
                </div>
                <div class="md:w-1/2 flex justify-start md:pl-14 w-full mb-6 md:mb-0 relative">
                    <div
                        class="bg-white dark:bg-slate-800 p-6 sm:p-8 rounded-[2rem] border border-slate-100 dark:border-slate-700 shadow-xl w-full md:w-[95%] text-left relative ml-20 md:ml-0 group hover:border-accent-500 transition-colors">
                        <h4 class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white mb-2">Verifikasi
                            Berkas</h4>
                        <div
                            class="inline-block px-3 md:px-4 py-1.5 bg-accent-50 dark:bg-accent-900/30 text-accent-600 dark:text-accent-400 rounded-lg font-bold text-xs md:text-sm mb-4">
                            26 Mei - 10 Juni</div>
                        <p class="text-slate-600 dark:text-slate-400 mb-2 text-sm">Pembuatan akun SPMB online dan
                            validasi data dokumen asli di sekolah.</p>

                        <!-- Tombol Info (Berdenyut/Bergetar) -->
                        <button onclick="openModal('info-step-2')"
                            class="absolute top-4 right-4 md:-left-6 md:top-auto md:bottom-6 w-8 h-8 rounded-full bg-accent-100 dark:bg-accent-900/80 text-accent-600 dark:text-accent-400 flex items-center justify-center animate-ring-pulse hover:bg-accent-500 hover:text-white transition-colors z-10"
                            title="Detail Verifikasi">
                            <i class="fa-solid fa-info text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative z-10 mb-16 flex flex-col md:flex-row items-center w-full reveal reveal-delay-2">
                <div class="md:w-1/2 flex justify-end md:pr-14 w-full mb-6 md:mb-0 relative">
                    <div
                        class="bg-white dark:bg-slate-800 p-6 sm:p-8 rounded-[2rem] border border-slate-100 dark:border-slate-700 shadow-xl w-full md:w-[95%] md:text-right relative ml-20 md:ml-0 group hover:border-pink-500 transition-colors">
                        <h4 class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white mb-2">Pilih Sekolah
                        </h4>
                        <div
                            class="inline-block px-3 md:px-4 py-1.5 bg-pink-50 dark:bg-pink-900/30 text-pink-600 dark:text-pink-400 rounded-lg font-bold text-xs md:text-sm mb-4">
                            12 - 17 Juni 2026</div>
                        <p class="text-slate-600 dark:text-slate-400 mb-2 text-sm">Masa pendaftaran online,
                            pemilihan jalur, sekolah tujuan, dan pantau jurnal harian.</p>

                        <!-- Tombol Info -->
                        <button onclick="openModal('info-step-3')"
                            class="absolute top-4 right-4 md:-right-6 md:top-auto md:bottom-6 w-8 h-8 rounded-full bg-pink-100 dark:bg-pink-900/80 text-pink-600 dark:text-pink-400 flex items-center justify-center animate-ring-pulse hover:bg-pink-500 hover:text-white transition-colors z-10"
                            title="Cara Mendaftar">
                            <i class="fa-solid fa-info text-sm"></i>
                        </button>
                    </div>
                </div>
                <div
                    class="absolute left-6 md:left-1/2 transform -translate-x-1/2 w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-gradient-to-br from-pink-400 to-rose-600 border-4 border-white dark:border-[#0f172a] flex items-center justify-center text-white font-bold text-xl shadow-[0_0_20px_rgba(244,63,94,0.5)] z-20">
                    <i class="fa-solid fa-hand-pointer"></i>
                </div>
                <div class="md:w-1/2 md:pl-14 w-full hidden md:block"></div>
            </div>
        </div>
    </div>
</section>

<div id="modal-jalur" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6">
    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity"
        onclick="document.getElementById('modal-jalur').classList.add('hidden')"></div>

    <div
        class="relative w-full max-w-2xl max-h-[95vh] flex flex-col bg-white dark:bg-slate-800 rounded-2xl sm:rounded-3xl shadow-2xl transform transition-all overflow-hidden border border-slate-200 dark:border-slate-700">

        <div
            class="absolute top-0 left-0 w-full h-1.5 sm:h-2 bg-gradient-to-r from-primary-500 via-accent-500 to-pink-500 z-10">
        </div>

        <div
            class="flex items-center justify-between p-4 sm:p-6 md:p-8 border-b border-slate-100 dark:border-slate-700/50 shrink-0 mt-1.5 sm:mt-2">
            <h3
                class="text-xl sm:text-2xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2 sm:gap-3 pr-4">
                <i class="fa-solid fa-circle-info text-primary-500 shrink-0"></i>
                <span class="leading-tight">Ketentuan Jalur SPMB</span>
            </h3>
            <button type="button" onclick="document.getElementById('modal-jalur').classList.add('hidden')"
                class="w-8 h-8 sm:w-10 sm:h-10 shrink-0 bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600 rounded-full flex items-center justify-center text-slate-500 dark:text-slate-300 transition-colors focus:outline-none focus:ring-2 focus:ring-primary-500">
                <i class="fa-solid fa-xmark text-base sm:text-lg"></i>
            </button>
        </div>

        <div class="p-4 sm:p-6 md:p-8 space-y-5 sm:space-y-6 overflow-y-auto custom-scrollbar">
            <p
                class="text-slate-600 dark:text-slate-300 font-medium text-base sm:text-lg border-l-4 border-primary-500 pl-3 sm:pl-4">
                Rincian ketetapan kuota berdasarkan regulasi SPMB Jawa Tengah:</p>

            <div class="grid gap-3 sm:gap-4">
                <div
                    class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-xl border border-blue-100 dark:border-blue-800/50 flex gap-3 sm:gap-4 items-start">
                    <div class="mt-0.5 shrink-0"><i
                            class="fa-solid fa-check-circle text-blue-500 text-lg sm:text-xl"></i></div>
                    <div>
                        <strong class="text-slate-900 dark:text-white block mb-1 text-sm sm:text-base">Jalur
                            Domisili (Zonasi) - Min. 55%</strong>
                        <span class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Jarak
                            terdekat domisili ke sekolah menjadi prioritas utama.</span>
                    </div>
                </div>

                <div
                    class="bg-amber-50 dark:bg-amber-900/20 p-4 rounded-xl border border-amber-100 dark:border-amber-800/50 flex gap-3 sm:gap-4 items-start">
                    <div class="mt-0.5 shrink-0"><i
                            class="fa-solid fa-check-circle text-amber-500 text-lg sm:text-xl"></i></div>
                    <div>
                        <strong class="text-slate-900 dark:text-white block mb-1 text-sm sm:text-base">Jalur
                            Afirmasi - Min. 20%</strong>
                        <span class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Wajib
                            terdata di DTKS Dinas Sosial atau memiliki surat keterangan disabilitas/anak
                            nakes.</span>
                    </div>
                </div>

                <div
                    class="bg-green-50 dark:bg-green-900/20 p-4 rounded-xl border border-green-100 dark:border-green-800/50 flex gap-3 sm:gap-4 items-start">
                    <div class="mt-0.5 shrink-0"><i
                            class="fa-solid fa-check-circle text-green-500 text-lg sm:text-xl"></i></div>
                    <div>
                        <strong class="text-slate-900 dark:text-white block mb-1 text-sm sm:text-base">Jalur
                            Prestasi - Maks. 20%</strong>
                        <span class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Seleksi
                            menggunakan nilai akhir (Gabungan nilai rapor dan bobot kejuaraan).</span>
                    </div>
                </div>
            </div>

            <div
                class="bg-red-50 dark:bg-rose-900/20 p-4 rounded-xl border border-red-200 dark:border-rose-800 flex items-start sm:items-center gap-3">
                <i
                    class="fa-solid fa-triangle-exclamation text-red-500 text-xl sm:text-2xl shrink-0 mt-0.5 sm:mt-0"></i>
                <p class="text-xs sm:text-sm text-red-800 dark:text-rose-200 font-semibold leading-relaxed">Penting:
                    Calon peserta didik hanya dapat memilih 1 (satu) jalur pendaftaran dalam wilayah zonasi yang
                    sama.</p>
            </div>
        </div>

        <div
            class="p-4 sm:p-6 bg-slate-50 dark:bg-slate-800/80 border-t border-slate-100 dark:border-slate-700/50 shrink-0 flex justify-end">
            <button type="button" onclick="document.getElementById('modal-jalur').classList.add('hidden')"
                class="w-full sm:w-auto px-6 py-2.5 sm:py-3 bg-slate-900 hover:bg-black text-white dark:bg-white dark:text-slate-900 dark:hover:bg-slate-200 font-bold rounded-xl transition-colors focus:outline-none focus:ring-2 focus:ring-slate-500 dark:focus:ring-white focus:ring-offset-2 dark:focus:ring-offset-slate-800 text-sm sm:text-base">
                Saya Mengerti
            </button>
        </div>
    </div>
</div>

<!-- Modal Informasi Roadmap -->
<div id="modal-timeline" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-4">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-slate-900/70 backdrop-blur-sm transition-opacity" onclick="closeModal()"></div>
    <!-- Modal Content (Akan diisi via JS) -->
    <div class="relative w-full max-w-2xl bg-white dark:bg-slate-800 rounded-3xl shadow-2xl transform transition-all overflow-hidden border border-slate-200 dark:border-slate-700 max-h-[90vh] flex flex-col"
        id="modal-timeline-content">
        <!-- Isi modal dinamis akan di-inject di sini -->
    </div>
</div>

<!-- 6. Footer Minimalis -->
<section id="kontak"
    class="relative bg-slate-50 dark:bg-[#080d1a] border-t border-slate-200 dark:border-slate-800 pt-16 sm:pt-20 flex flex-col justify-between">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 sm:mb-20 relative z-10 w-full">
        <div
            class="bg-white dark:bg-slate-800/80 backdrop-blur-xl rounded-3xl sm:rounded-[3rem] p-6 sm:p-8 md:p-12 shadow-2xl border border-slate-100 dark:border-slate-700 reveal">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                <div class="order-2 lg:order-1">
                    <span
                        class="px-4 py-1.5 bg-primary-50 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 rounded-full font-bold text-xs uppercase tracking-widest mb-4 sm:mb-6 inline-block border border-primary-100 dark:border-primary-800">Pusat
                        Bantuan</span>
                    <h2
                        class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white mb-4 sm:mb-6 leading-tight">
                        Hubungi Kami</h2>
                    <p class="text-slate-600 dark:text-slate-400 mb-8 sm:mb-10 text-base sm:text-lg">Punya kendala
                        teknis atau pertanyaan seputar SPMB? Tim Helpdesk kami siap membantu Anda.</p>

                    <div class="space-y-4 sm:space-y-6">
                        <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer"
                            class="flex items-center gap-4 sm:gap-6 group cursor-pointer p-3 -m-3 rounded-2xl hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                            <div
                                class="w-14 h-14 sm:w-16 sm:h-16 bg-green-50 dark:bg-green-900/20 text-green-500 rounded-2xl flex items-center justify-center text-2xl sm:text-3xl shrink-0 group-hover:scale-110 group-hover:bg-green-500 group-hover:text-white transition-all duration-300 shadow-sm">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <div>
                                <p
                                    class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm font-semibold uppercase tracking-wider mb-1">
                                    Helpdesk Resmi</p>
                                <h4
                                    class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white group-hover:text-green-500 transition-colors">
                                    +62 812-3456-7890</h4>
                            </div>
                        </a>

                        <a href="mailto:info@sman1pekalongan.sch.id"
                            class="flex items-center gap-4 sm:gap-6 group cursor-pointer p-3 -m-3 rounded-2xl hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                            <div
                                class="w-14 h-14 sm:w-16 sm:h-16 bg-blue-50 dark:bg-blue-900/20 text-blue-500 rounded-2xl flex items-center justify-center text-xl sm:text-2xl shrink-0 group-hover:scale-110 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300 shadow-sm">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="break-all sm:break-normal">
                                <p
                                    class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm font-semibold uppercase tracking-wider mb-1">
                                    Email Sekolah</p>
                                <h4
                                    class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white group-hover:text-blue-500 transition-colors">
                                    info@sman1pekalongan.sch.id</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div
                    class="relative h-[250px] sm:h-[350px] md:h-[400px] w-full rounded-2xl sm:rounded-[2rem] overflow-hidden shadow-xl sm:shadow-2xl border-4 border-white dark:border-slate-700 group order-1 lg:order-2">
                    <div
                        class="absolute inset-0 bg-primary-500/10 group-hover:bg-transparent transition-colors z-10 pointer-events-none">
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.201385412586!2d109.67140811529125!3d-6.88339309502446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70243444654763%3A0xc3f8ec473b1ff08a!2sSMA%20Negeri%201%20Pekalongan!5e0!3m2!1sen!2sid!4v1682348576301!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0; filter: grayscale(20%);" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        class="transition-all duration-500 group-hover:filter-none">
                    </iframe>
                </div>
            </div>
        </div>
    </div>


</section>
<?= $this->endSection('content') ?>
<?= $this->section('script') ?>
<script>
// 2. Animasi Scroll Reveal & Progress Bar
const revealElements = document.querySelectorAll('.reveal');
const progressBars = document.querySelectorAll('.progress-bar');
const timelineLine = document.getElementById('timeline-line');

const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
            // Jika yang di-scroll adalah container progress bar
            if (entry.target.id === 'progress-container') {
                progressBars.forEach(bar => {
                    bar.style.width = bar.getAttribute('data-width');
                });
            }
            // Animasi garis timeline ditarik ke bawah
            if (entry.target.closest('#alur')) {
                if (timelineLine) timelineLine.style.transform = 'scaleY(1)';
            }
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px"
});

revealElements.forEach(el => revealObserver.observe(el));

// Progress bar container khusus di observe
const progContainer = document.getElementById('progress-container');
if (progContainer) revealObserver.observe(progContainer);

// 5. Logic Modal Roadmap Dinamis
const modalTimeline = document.getElementById('modal-timeline');
const modalContent = document.getElementById('modal-timeline-content');

const modalData = {
    'info-step-2': `
                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-accent-400 to-accent-600"></div>
                <div class="flex items-center justify-between p-5 md:p-6 border-b border-slate-100 dark:border-slate-700/50">
                    <h3 class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-accent-100 dark:bg-accent-900/50 text-accent-600 dark:text-accent-400 flex items-center justify-center"><i class="fa-solid fa-file-shield"></i></div>
                        Verifikasi Berkas
                    </h3>
                    <button type="button" onclick="closeModal()" class="w-8 h-8 bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600 rounded-full flex items-center justify-center text-slate-500 dark:text-slate-300 transition-colors">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                
                <div class="p-5 md:p-6 overflow-y-auto custom-scroll">
                    <div class="space-y-6">
                        <!-- Langkah 1 -->
                        <div class="bg-blue-50 dark:bg-blue-900/20 rounded-xl p-4 border border-blue-100 dark:border-blue-800">
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2 flex items-center gap-2"><span class="w-6 h-6 rounded-full bg-blue-500 text-white text-xs flex items-center justify-center">1</span> Pendaftaran Akun Mandiri</h4>
                            <p class="text-sm text-slate-600 dark:text-slate-300 ml-8 mb-3">CMB melakukan pendaftaran akun pada laman SPMB Jateng Prov secara mandiri dari rumah.</p>
                            <a href="#" class="ml-8 text-xs font-bold px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg inline-flex items-center gap-2 transition-colors"><i class="fa-solid fa-link"></i> Link SPMB Jateng</a>
                        </div>

                        <!-- Langkah 2 -->
                        <div class="bg-amber-50 dark:bg-amber-900/20 rounded-xl p-4 border border-amber-100 dark:border-amber-800">
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2 flex items-center gap-2"><span class="w-6 h-6 rounded-full bg-amber-500 text-white text-xs flex items-center justify-center">2</span> Verifikasi Fisik di Sekolah</h4>
                            <p class="text-sm text-slate-600 dark:text-slate-300 ml-8 mb-3">CMB melakukan verifikasi berkas di SMAN 1 Pekalongan dengan ketentuan berikut:</p>
                            
                            <ul class="ml-8 space-y-2 text-sm text-slate-700 dark:text-slate-300 font-medium">
                                <li class="flex items-start gap-2"><i class="fa-solid fa-caret-right text-amber-500 mt-1"></i> Melakukan pendaftaran antrean secara online. <a href="#" class="text-blue-500 hover:underline inline-flex items-center gap-1"><i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i> Link antrean</a></li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-caret-right text-amber-500 mt-1"></i> Membawa seluruh berkas asli. <a href="#persyaratan" onclick="closeModal()" class="text-blue-500 hover:underline">Lihat Persyaratan</a></li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-caret-right text-amber-500 mt-1"></i> CMB wajib mengenakan <strong>seragam sekolah asal</strong>.</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-caret-right text-amber-500 mt-1"></i> Potongan rambut rapi (Khusus CMB Putra).</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-caret-right text-amber-500 mt-1"></i> Wajib mengenakan sepatu & kaos kaki.</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-caret-right text-amber-500 mt-1"></i> Orang tua/wali yang mengantar wajib berpakaian rapi dan sopan.</li>
                            </ul>
                        </div>

                        <!-- Info Dokumen PDF Simulasi -->
                        <div class="border border-slate-200 dark:border-slate-700 rounded-xl p-4 flex items-center justify-between group hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors">
                            <div class="flex items-center gap-4">
                                <i class="fa-solid fa-file-pdf text-rose-500 text-3xl"></i>
                                <div>
                                    <p class="font-bold text-slate-900 dark:text-white text-sm">Juknis_Verifikasi_SPMB.pdf</p>
                                    <p class="text-xs text-slate-500">2.4 MB • Petunjuk Operasional</p>
                                </div>
                            </div>
                            <button class="px-3 py-1.5 bg-slate-100 dark:bg-slate-600 text-slate-700 dark:text-white rounded-lg text-xs font-bold group-hover:bg-rose-500 group-hover:text-white transition-colors">Lihat PDF</button>
                        </div>
                    </div>
                </div>
                
                <div class="p-4 md:p-5 bg-slate-50 dark:bg-slate-800/80 border-t border-slate-100 dark:border-slate-700/50 flex justify-end">
                    <button type="button" onclick="closeModal()" class="px-6 py-2.5 bg-slate-900 hover:bg-black text-white dark:bg-white dark:text-slate-900 dark:hover:bg-slate-200 font-bold rounded-xl transition-colors text-sm">Tutup</button>
                </div>
            `
};

function openModal(stepId) {
    // Default content jika belum diset detailnya
    let content = modalData[stepId] ||
        `<div class="p-8 text-center"><p class="dark:text-white">Detail informasi untuk tahapan ini akan segera diperbarui.</p><button onclick="closeModal()" class="mt-4 px-4 py-2 bg-primary-500 text-white rounded-lg">Tutup</button></div>`;

    modalContent.innerHTML = content;
    modalTimeline.classList.remove('hidden');
}

function closeModal() {
    modalTimeline.classList.add('hidden');
}
</script>
<?= $this->endSection('script') ?>