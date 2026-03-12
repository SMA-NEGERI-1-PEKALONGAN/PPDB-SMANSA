<?= $this->extend('Templates/LandingPage') ?>

<?= $this->section('content') ?>
<style type="text/css">
/* --- STYLING GARIS TIKET --- */
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

/* --- PERBAIKAN TOTAL CSS CETAK (TIDAK KOSONG / BLANK) --- */
@media print {

    /* 1. Paksa browser untuk mencetak semua warna dan background */
    * {
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
    }

    /* 2. Sembunyikan SEMUA elemen bawaan website */
    body * {
        visibility: hidden;
    }

    /* 3. Tampilkan HANYA elemen yang ada di dalam id area-cetak-tiket */
    #area-cetak-tiket,
    #area-cetak-tiket * {
        visibility: visible;
    }

    /* 4. PERBAIKAN KOSONG: Cabut tiket dari posisinya dan letakkan di pojok kiri atas kertas */
    #area-cetak-tiket {
        position: absolute !important;
        left: 0 !important;
        top: 0 !important;
        transform: none !important;
        /* Mencegah tiket terlempar ke luar kertas */
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        padding: 10px !important;
        border: 1px solid #cbd5e1 !important;
        border-radius: 12px !important;
        background-color: #ffffff !important;
    }

    /* 5. Paksa layout tiket menjadi kolom kanan-kiri (Mencegah tampilan HP saat dicetak) */
    .print-row {
        display: flex !important;
        flex-direction: row !important;
    }

    .print-col-65 {
        width: 65% !important;
        padding: 25px !important;
    }

    .print-col-35 {
        width: 35% !important;
        padding: 25px !important;
        border-left: 2px dashed #cbd5e1 !important;
        border-top: none !important;
        background-color: #f8fafc !important;
    }

    /* 6. Atur Warna Teks Khusus Cetak (Mematikan Dark Mode di kertas) */
    #area-cetak-tiket p,
    #area-cetak-tiket h1,
    #area-cetak-tiket h2,
    #area-cetak-tiket span,
    #area-cetak-tiket div {
        color: #0f172a !important;
        /* Paksa teks menjadi gelap/hitam */
    }

    #area-cetak-tiket .text-primary-600 {
        color: #2563eb !important;
    }

    /* Aksen biru */
    #area-cetak-tiket .text-rose-500 {
        color: #e11d48 !important;
    }

    /* Aksen merah */
    #area-cetak-tiket .bg-primary-600 {
        background-color: #2563eb !important;
    }

    #area-cetak-tiket .bg-primary-600 * {
        color: #ffffff !important;
    }

    /* Teks putih di dalam icon biru */
    #area-cetak-tiket .text-slate-400 {
        color: #64748b !important;
    }

    /* 7. Matikan ornamen yang tidak perlu di kertas */
    .ticket-dashed {
        background-image: none !important;
    }

    .no-print {
        display: none !important;
    }
}
</style>
<div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
    <div
        class="absolute top-[-10%] left-[-10%] w-[40rem] h-[40rem] bg-primary-400 rounded-full mix-blend-multiply filter blur-[100px] opacity-20 dark:opacity-10">
    </div>
    <div
        class="absolute bottom-[-10%] right-[-10%] w-[40rem] h-[40rem] bg-accent-400 rounded-full mix-blend-multiply filter blur-[100px] opacity-20 dark:opacity-10">
    </div>
</div>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 pb-16 relative z-10">
    <div id="alert" style="display: none;"
        class="glass-panel bg-white/80 dark:bg-slate-800/80 backdrop-blur-xl rounded-[2rem] shadow-xl border border-white/60 dark:border-slate-700/50 p-6 sm:p-10 mb-8 mt-4 transform transition-all">

        <div class="flex items-center gap-4 mb-6 border-b border-slate-100 dark:border-slate-700/50 pb-6">
            <div
                class="w-12 h-12 rounded-2xl bg-gradient-to-br from-primary-400 to-primary-600 flex items-center justify-center text-white shadow-lg shrink-0">
                <i class="fa-solid fa-clock text-xl"></i>
            </div>
            <div>
                <h4 class="text-xl sm:text-2xl font-extrabold text-slate-900 dark:text-white">
                    Informasi Pendaftaran Antrean
                </h4>
            </div>
        </div>

        <div id="pesan"
            class="bg-blue-50 dark:bg-blue-900/20 border-l-4 border-blue-500 p-4 sm:p-5 rounded-r-xl mb-8 text-sm sm:text-base text-slate-700 dark:text-slate-300 font-medium leading-relaxed flex items-start gap-3">
            <i class="fa-solid fa-circle-info text-blue-500 mt-1 shrink-0"></i>
            <div class="pesan-content"></div>
        </div>

        <div id="countdown" style="display: none;" class="py-4 sm:py-6">
            <div class="max-w-4xl mx-auto">
                <div
                    class="bg-gradient-to-br from-primary-600 to-accent-600 rounded-[2.5rem] shadow-2xl shadow-primary-500/30 p-6 sm:p-10 md:p-12 text-center relative overflow-hidden group border border-white/20">

                    <div
                        class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 transition-transform duration-1000 group-hover:scale-150 pointer-events-none">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full blur-2xl translate-y-1/2 -translate-x-1/2 transition-transform duration-1000 group-hover:scale-150 pointer-events-none">
                    </div>

                    <p
                        class="mb-6 sm:mb-8 font-bold uppercase text-white/90 tracking-[0.2em] sm:tracking-[0.3em] text-xs sm:text-sm relative z-10 drop-shadow-md">
                        <i class="fa-solid fa-hourglass-half animate-pulse mr-2"></i> Menuju Pembukaan Antrean
                    </p>

                    <div id="clock-c" class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6 relative z-10">

                        <div
                            class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-4 sm:p-6 flex flex-col items-center justify-center hover:-translate-y-2 transition-all duration-300 shadow-lg hover:shadow-2xl hover:bg-white/20">
                            <span id="days"
                                class="text-4xl sm:text-5xl md:text-6xl font-black text-white font-mono tracking-tighter drop-shadow-lg">00</span>
                            <span
                                class="text-[10px] sm:text-xs text-primary-100 uppercase tracking-widest font-bold mt-2">Hari</span>
                        </div>

                        <div
                            class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-4 sm:p-6 flex flex-col items-center justify-center hover:-translate-y-2 transition-all duration-300 shadow-lg hover:shadow-2xl hover:bg-white/20">
                            <span id="hours"
                                class="text-4xl sm:text-5xl md:text-6xl font-black text-white font-mono tracking-tighter drop-shadow-lg">00</span>
                            <span
                                class="text-[10px] sm:text-xs text-primary-100 uppercase tracking-widest font-bold mt-2">Jam</span>
                        </div>

                        <div
                            class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-4 sm:p-6 flex flex-col items-center justify-center hover:-translate-y-2 transition-all duration-300 shadow-lg hover:shadow-2xl hover:bg-white/20">
                            <span id="minutes"
                                class="text-4xl sm:text-5xl md:text-6xl font-black text-white font-mono tracking-tighter drop-shadow-lg">00</span>
                            <span
                                class="text-[10px] sm:text-xs text-primary-100 uppercase tracking-widest font-bold mt-2">Menit</span>
                        </div>

                        <div
                            class="bg-white/20 backdrop-blur-md border border-white/40 rounded-2xl p-4 sm:p-6 flex flex-col items-center justify-center hover:-translate-y-2 transition-all duration-300 shadow-lg shadow-white/10 hover:shadow-2xl hover:bg-white/30">
                            <span id="seconds"
                                class="text-4xl sm:text-5xl md:text-6xl font-black text-white font-mono tracking-tighter drop-shadow-lg">00</span>
                            <span
                                class="text-[10px] sm:text-xs text-white uppercase tracking-widest font-bold mt-2 animate-pulse">Detik</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="antrian" style="display: none;"
        class="glass-panel bg-white/80 dark:bg-slate-800/80 rounded-[2rem] shadow-2xl border border-white/60 dark:border-slate-700/50 overflow-hidden">

        <div class="p-6 sm:p-10 border-b border-slate-200 dark:border-slate-700 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-primary-500/10 rounded-bl-full"></div>
            <div class="flex items-center gap-4 relative z-10">
                <div
                    class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary-400 to-primary-600 flex items-center justify-center text-white shadow-lg">
                    <i class="fa-solid fa-users-line text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white">Formulir Antrean
                    </h4>
                    <p class="text-sm sm:text-base text-slate-500 dark:text-slate-400">Silakan lengkapi data diri
                        Anda di bawah ini.</p>
                </div>
            </div>
        </div>

        <form id="form_tambah_antrian" class="p-6 sm:p-10">
            <div
                class="bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800 rounded-xl p-5 mb-8 flex gap-4 items-start">
                <i class="fa-solid fa-triangle-exclamation text-amber-500 text-2xl mt-1 shrink-0"></i>
                <div>
                    <h4 class="font-bold text-slate-900 dark:text-white mb-1">Perhatian!</h4>
                    <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                        Anda dapat melakukan pendaftaran antrean jika sudah melengkapi semua berkas dan telah
                        melakukan pengajuan akun di laman <a href="#"
                            class="text-primary-600 dark:text-primary-400 font-bold hover:underline">SPMB
                            Jateng</a>.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Nama Lengkap
                        Siswa <span class="text-rose-500">*</span></label>
                    <input type="text" id="nama_siswa" required
                        class="w-full px-4 py-3.5 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary-500 outline-none text-slate-700 dark:text-slate-200 transition-all required"
                        placeholder="Sesuai Ijazah/Akte">
                    <span id="nama_siswa-error" class="text-sm text-rose-500 mt-2 hidden"></span>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">NISN (10
                        Digit) <span class="text-rose-500">*</span></label>
                    <input type="text" id="nisn" maxlength="10" required
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        class="w-full px-4 py-3.5 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary-500 outline-none text-slate-700 dark:text-slate-200 transition-all font-mono tracking-widest required"
                        placeholder="0012345678">
                    <span id="nisn-error" class="text-sm text-rose-500 mt-2 hidden"></span>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Nomor Peserta
                        (Ajuan Akun) <span class="text-rose-500">*</span></label>
                    <input type="text" id="kode_pendaftaran" required
                        class="w-full px-4 py-3.5 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary-500 outline-none text-slate-700 dark:text-slate-200 transition-all font-mono required"
                        placeholder="Masukan nomor peserta">
                    <span id="kode_pendaftaran-error" class="text-sm text-rose-500 mt-2 hidden "></span>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Jenis Kelamin
                        <span class="text-rose-500">*</span></label>
                    <select id="jenis_kelamin" required
                        class="w-full px-4 py-3.5 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary-500 outline-none text-slate-700 dark:text-slate-200 transition-all required">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <span id="jenis_kelamin-error" class="text-sm text-rose-500 mt-2 hidden"></span>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Asal Sekolah
                        (SMP/MTs) <span class="text-rose-500">*</span></label>
                    <input type="text" id="asal_sekolah" required
                        class="w-full px-4 py-3.5 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary-500 outline-none text-slate-700 dark:text-slate-200 transition-all required"
                        placeholder="Contoh: SMPN 1 Pekalongan">
                    <span id="asal_sekolah-error" class="text-sm text-rose-500 mt-2 hidden"></span>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Jalur
                        Pendaftaran <span class="text-rose-500">*</span></label>
                    <select id="jalur_pendaftaran" required
                        class="w-full px-4 py-3.5 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary-500 outline-none text-slate-700 dark:text-slate-200 transition-all required">
                        <option value="">Pilih Jalur Pendaftaran</option>
                        <option value="Domisili">Domisili / Zonasi</option>
                        <option value="Afirmasi">Afirmasi</option>
                        <option value="Prestasi">Prestasi</option>
                        <option value="Mutasi">Mutasi / PTO</option>
                    </select>
                    <span id="jalur_pendaftaran-error" class="text-sm text-rose-500 mt-2 hidden"></span>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">No. Telp<span
                            class="text-rose-500">*</span></label>
                    <input type="text" id="no_tlp" maxlength="15" required
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        class="w-full px-4 py-3.5 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary-500 outline-none text-slate-700 dark:text-slate-200 transition-all font-mono tracking-widest required"
                        placeholder="089570244545">
                    <span id="no_tlp-error" class="text-sm text-rose-500 mt-2 hidden"></span>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Alamat
                        Lengkap <span class="text-rose-500">*</span></label>
                    <textarea id="alamat" rows="3" required
                        class="w-full px-4 py-3.5 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary-500 outline-none text-slate-700 dark:text-slate-200 transition-all required"
                        placeholder="Masukan alamat lengkap beserta RT/RW dan Kelurahan"></textarea>
                    <span id="alamat-error" class="text-sm text-rose-500 mt-2 hidden"></span>
                </div>
            </div>

            <div class="flex justify-end pt-6 border-t border-slate-200 dark:border-slate-700 mt-6">
                <button type="button"
                    class="w-full sm:w-auto px-8 py-3.5 bg-gradient-to-r from-primary-600 to-accent-600 hover:from-primary-700 hover:to-accent-700 text-white font-bold rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all flex items-center justify-center gap-2">
                    Lanjut Proses <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<div id="modal-sk" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6">
    <div class="absolute inset-0 bg-slate-900/70 backdrop-blur-sm transition-opacity" onclick="closeModalSK()">
    </div>

    <div
        class="relative w-full max-w-2xl max-h-[95vh] flex flex-col bg-white dark:bg-slate-800 rounded-2xl shadow-2xl overflow-hidden border border-slate-200 dark:border-slate-700">
        <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-primary-500 to-accent-500 z-10"></div>

        <div
            class="flex items-center justify-between p-5 sm:p-6 border-b border-slate-100 dark:border-slate-700 shrink-0 mt-1">
            <h4 class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white flex items-center gap-2">
                <i class="fa-solid fa-file-signature text-primary-500"></i> Syarat & Ketentuan
            </h4>
            <button type="button" onclick="closeModalSK()"
                class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-700 hover:bg-slate-200 dark:hover:bg-slate-600 flex items-center justify-center text-slate-500 dark:text-slate-300 transition-colors">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <form id="form_syarat_ketentuan" class="flex flex-col overflow-hidden h-full">
            <div class="p-0 flex-1 overflow-y-auto custom-scroll">

                <div
                    class="flex border-b border-slate-200 dark:border-slate-700 px-6 pt-4 sticky top-0 bg-white dark:bg-slate-800 z-10">
                    <button type="button" onclick="switchTab('tab-persyaratan')" id="btn-tab-persyaratan"
                        class="px-4 py-3 border-b-2 font-bold text-primary-600 border-primary-500 transition-colors outline-none">Ketentuan
                        Hadir</button>
                    <button type="button" onclick="switchTab('tab-berkas')" id="btn-tab-berkas"
                        class="px-4 py-3 border-b-2 font-bold text-slate-500 dark:text-slate-400 border-transparent hover:text-slate-700 dark:hover:text-slate-300 transition-colors outline-none">Berkas
                        Dokumen</button>
                </div>

                <div class="p-6">
                    <div id="tab-persyaratan" class="block space-y-4">
                        <div
                            class="bg-blue-50 dark:bg-blue-900/20 rounded-xl p-5 border border-blue-100 dark:border-blue-800/50">
                            <p class="font-bold text-slate-900 dark:text-white mb-4">Wajib diperhatikan saat datang
                                verifikasi:</p>
                            <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-300">
                                <li class="flex items-start gap-3"><i
                                        class="fa-solid fa-check text-green-500 mt-0.5 shrink-0"></i> Membawa
                                    seluruh berkas pendaftaran asli.</li>
                                <li class="flex items-start gap-3"><i
                                        class="fa-solid fa-check text-green-500 mt-0.5 shrink-0"></i> Menggunakan
                                    seragam SMP/MTs asal.</li>
                                <li class="flex items-start gap-3"><i
                                        class="fa-solid fa-check text-green-500 mt-0.5 shrink-0"></i> Sepatu dan
                                    kaos kaki tertutup.</li>
                            </ul>
                        </div>
                    </div>

                    <div id="tab-berkas" class="hidden space-y-3">
                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">Pastikan Anda membawa berkas
                            berikut:</p>
                        <div
                            class="p-4 bg-slate-50 dark:bg-slate-900/50 rounded-xl border border-slate-200 dark:border-slate-700 text-sm text-slate-600 dark:text-slate-300">
                            <ul class="list-decimal pl-5 space-y-2">
                                <li>Print Out Bukti Pengajuan Akun</li>
                                <li>Surat Pernyataan Kebenaran Dokumen</li>
                                <li>Buku Rapor SMP/sederajat</li>
                                <li>Surat Keterangan Nilai Rapor smt 1-5</li>
                                <li>Ijazah / SKL Asli</li>
                                <li>Akte Kelahiran Asli</li>
                                <li>Kartu Keluarga (KK) Asli</li>
                            </ul>
                        </div>
                    </div>

                    <div
                        class="mt-8 bg-slate-50 dark:bg-slate-900/80 p-4 rounded-xl border border-slate-200 dark:border-slate-700">
                        <label class="flex items-start gap-3 cursor-pointer group">
                            <input type="checkbox" id="syarat_check" required
                                class="mt-1 w-5 h-5 rounded border-slate-300 text-primary-600 cursor-pointer">
                            <span
                                class="text-sm text-slate-700 dark:text-slate-300 font-medium group-hover:text-slate-900 dark:group-hover:text-white transition-colors">
                                Saya menyatakan bersedia hadir dan mematuhi seluruh persyaratan serta memastikan
                                dokumen yang saya lampirkan adalah benar dan valid.
                            </span>
                        </label>
                    </div>
                </div>
            </div>

            <div
                class="p-5 border-t border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/80 flex justify-end gap-3 shrink-0">
                <button type="button" onclick="closeModalSK()"
                    class="px-5 py-2.5 rounded-xl font-bold text-slate-600 dark:text-slate-300 bg-slate-200 hover:bg-slate-300 dark:bg-slate-700 dark:hover:bg-slate-600 transition-colors">Batal</button>
                <button type="button" onclick="submitAntrean()"
                    class="px-6 py-2.5 rounded-xl font-bold text-white bg-primary-600 hover:bg-primary-700 transition-all flex items-center justify-center">
                    Kirim Data
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Modal 2: Hasil Cetak Antrean (Ticket Design) -->
<div id="modal-tiket" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6">
    <div class="absolute inset-0 bg-slate-900/80 backdrop-blur-md transition-opacity" onclick="closeModalTiket()"></div>

    <div
        class="relative w-full max-w-4xl max-h-[95vh] flex flex-col bg-slate-100 dark:bg-[#0f172a] rounded-[2rem] shadow-2xl overflow-hidden border border-slate-200 dark:border-slate-700">

        <!-- Header Modal (Tidak Ikut Dicetak) -->
        <div
            class="no-print flex items-center justify-between p-5 border-b border-slate-200 dark:border-slate-800 shrink-0 bg-white dark:bg-slate-900">
            <h4 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white"><i
                    class="fa-solid fa-ticket text-primary-500 mr-2"></i> Tiket Antrean Verifikasi</h4>
            <div class="flex items-center gap-3">
                <button onclick="window.print()"
                    class="px-4 py-2 bg-primary-600 hover:bg-primary-700 text-white text-sm font-bold rounded-lg shadow-md transition-colors flex items-center gap-2">
                    <i class="fa-solid fa-print"></i> <span class="hidden sm:inline">Cetak Tiket</span>
                </button>
                <a id="btn_print" target="_blank"
                    class="px-4 py-2 bg-slate-200 hover:bg-slate-300 dark:bg-slate-700 dark:hover:bg-slate-600 text-slate-700 dark:text-white text-sm font-bold rounded-lg shadow-sm transition-colors hidden md:flex items-center gap-2 cursor-pointer">
                    <i class="fa-solid fa-download"></i> Unduh PDF
                </a>
                <button type="button" onclick="closeModalTiket()"
                    class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500 hover:text-slate-800 dark:hover:text-white transition-colors">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>

        <!-- Area Scroll Modal -->
        <div class="p-4 sm:p-8 overflow-y-auto custom-scroll flex-1 w-full flex justify-center">

            <!-- KOTAK TIKET UTAMA (ID area-cetak-tiket ini yang akan ditarik oleh printer) -->
            <!-- Class 'print-row' mengunci posisi agar tidak turun jadi tampilan HP saat dicetak -->
            <div id="area-cetak-tiket"
                class="bg-white dark:bg-slate-800 w-full max-w-3xl rounded-2xl shadow-xl border border-slate-200 dark:border-slate-700 flex flex-col md:flex-row overflow-hidden relative print-row">

                <!-- Ornamen Plong Tiket (Hilang Saat Cetak) -->
                <div
                    class="no-print hidden md:block absolute top-0 left-[65%] -translate-x-3 w-6 h-3 bg-slate-100 dark:bg-[#0f172a] rounded-b-full z-10">
                </div>
                <div
                    class="no-print hidden md:block absolute bottom-0 left-[65%] -translate-x-3 w-6 h-3 bg-slate-100 dark:bg-[#0f172a] rounded-t-full z-10">
                </div>

                <!-- BAGIAN KIRI (Detail Siswa) -->
                <div class="w-full md:w-[65%] p-6 sm:p-8 print-col-65">
                    <div class="flex items-center gap-4 mb-6 border-b border-slate-100 dark:border-slate-700 pb-4">
                        <div
                            class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center text-white shrink-0">
                            <i class="fa-solid fa-school"></i>
                        </div>
                        <div>
                            <h2
                                class="text-xl font-black text-slate-900 dark:text-white tracking-tight leading-none uppercase">
                                Bukti Antrean PPDB</h2>
                            <p class="text-sm font-semibold text-slate-500 dark:text-slate-400">SMAN 1 Pekalongan - Th.
                                2026/2027</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-y-5 gap-x-4 mb-6">
                        <div class="col-span-2">
                            <p class="text-[10px] uppercase font-bold text-slate-400 mb-1">Nama Lengkap Siswa</p>
                            <p class="font-bold text-slate-900 dark:text-white text-base" id="tiket_nama">-</p>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase font-bold text-slate-400 mb-1">NISN</p>
                            <p class="font-bold text-slate-900 dark:text-white text-sm font-mono" id="tiket_nisn">-</p>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase font-bold text-slate-400 mb-1">Kode Pendaftaran</p>
                            <p class="font-bold text-slate-900 dark:text-white text-sm font-mono" id="tiket_kode">-</p>
                        </div>

                        <div class="col-span-2">
                            <p class="text-[10px] uppercase font-bold text-slate-400 mb-1">Asal Sekolah</p>
                            <p class="font-bold text-slate-900 dark:text-white text-sm" id="tiket_sekolah">-</p>
                        </div>
                        <div class="col-span-2">
                            <p class="text-[10px] uppercase font-bold text-slate-400 mb-1">Jalur Pilihan</p>
                            <span
                                class="inline-block px-3 py-1 bg-primary-100 dark:bg-primary-900/50 text-primary-700 dark:text-primary-300 border border-primary-200 dark:border-primary-800 rounded-lg text-xs font-bold uppercase"
                                id="tiket_jalur">-</span>
                        </div>
                    </div>

                    <div
                        class="bg-amber-50 dark:bg-amber-900/20 rounded-xl p-4 flex gap-3 items-start border border-amber-200 dark:border-amber-800/50">
                        <i class="fa-solid fa-circle-exclamation text-amber-500 mt-0.5 shrink-0"></i>
                        <div class="text-[11px] sm:text-xs text-amber-800 dark:text-amber-200 leading-relaxed">
                            <strong>Instruksi:</strong> Bawa tiket ini (dicetak/di-screenshot) dan seluruh berkas asli
                            saat datang ke sekolah. Harap hadir 15 menit sebelum sesi Anda dimulai.
                        </div>
                    </div>
                </div>

                <!-- BAGIAN KANAN (QR & Nomor Antrean) -->
                <div
                    class="w-full md:w-[35%] ticket-dashed bg-slate-50 dark:bg-slate-800/50 p-6 sm:p-8 flex flex-col items-center justify-center border-t md:border-t-0 md:border-l border-slate-200 dark:border-slate-700 print-col-35">
                    <p class="text-xs uppercase font-bold text-slate-500 tracking-widest mb-2 text-center">Nomor Antrean
                    </p>

                    <h1 class="text-6xl sm:text-7xl font-black text-primary-600 dark:text-primary-400 font-mono tracking-tighter mb-4 drop-shadow-sm"
                        id="cetakno_antrian">A012</h1>

                    <div class="bg-white p-2 rounded-xl shadow-sm border border-slate-200 mb-5">
                        <img src="" alt="QR Code" id="cetakqr_code" class="w-24 h-24 sm:w-28 sm:h-28 object-contain">
                    </div>

                    <div class="text-center w-full">
                        <div
                            class="bg-white dark:bg-slate-700 rounded-xl py-3 px-3 mb-3 shadow-sm border border-slate-200 dark:border-slate-600">
                            <p class="text-[10px] uppercase font-bold text-slate-400 mb-1">Jadwal Kehadiran</p>
                            <p class="font-bold text-slate-900 dark:text-white text-sm mb-0.5"
                                id="cetaktanggal_antrian">-</p>
                            <p class="font-extrabold text-rose-500 text-sm" id="cetaksesi_antrian">-</p>
                        </div>
                        <p class="text-[9px] text-slate-400">Waktu Cetak: <span id="created_at">-</span></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content');?>
<?= $this->section('script');?>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>

<script type="text/javascript">
// --- 2. Tabs Logic Modal S&K ---
function switchTab(tabId) {
    $('#tab-persyaratan, #tab-berkas').addClass('hidden');
    $('#btn-tab-persyaratan, #btn-tab-berkas').attr('class',
        'px-4 py-3 border-b-2 font-bold text-slate-500 dark:text-slate-400 border-transparent hover:text-slate-700 dark:hover:text-slate-300 transition-colors outline-none'
    );

    $('#' + tabId).removeClass('hidden');
    $('#btn-' + tabId).attr('class',
        'px-4 py-3 border-b-2 font-bold text-primary-600 border-primary-500 transition-colors outline-none');
}

// --- 3. Logic Tutup Modal Manual Tailwind ---
function closeModalSK() {
    $('#modal-sk').addClass('hidden');
}

function closeModalTiket() {
    $('#modal-tiket').addClass('hidden');
    $('#form_tambah_antrian')[0].reset();
    $('#syarat_check').prop('checked', false);
}

// --- 4. Logic Sistem Antrean (Tersinkronisasi dengan Desain) ---
const listFields = ['nama_siswa', 'nisn', 'jenis_kelamin', 'kode_pendaftaran', 'asal_sekolah', 'no_tlp', 'alamat',
    'jalur_pendaftaran'
];
const dataAntrian = [];

// PERBAIKAN COUNTDOWN
function set_clock(date_now, set_date, pesan) {
    function DateRange() {
        const date = set_date;
        $('#pesan .pesan-content').text(pesan); // Memasukkan teks ke div tanpa menghilangkan icon info
        return date;
    }

    $("#clock-c").countdown(DateRange(), function(event) {
        // JANGAN gunakan .html(), gunakan .text() untuk mengisi masing-masing ID kotak
        $('#days').text(event.strftime('%D'));
        $('#hours').text(event.strftime('%H'));
        $('#minutes').text(event.strftime('%M'));
        $('#seconds').text(event.strftime('%S'));

        if (event.elapsed) {
            // Waktu Habis -> Tampilkan Form Antrean
            $("#countdown").hide();
            $("#alert").hide();
            $("#antrian").fadeIn('slow'); // Efek transisi halus
        } else {
            // Waktu Masih Ada -> Tampilkan Countdown
            $("#countdown").show();
            $("#alert").show();
            $("#antrian").hide();
        }
    });
}

// Simulasi atau Panggilan AJAX asli
function fetch_set_antrean() {
    $.ajax({
        url: '<?= base_url('fetchFilterAntrean'); ?>',
        type: 'GET',
        success: function(response) {
            if (response.status == '200') {
                set_clock(response.data.dateTimeNow, response.data.dateTime, response.data.pesan);
            } else {
                if (typeof getSwall === "function") getSwall(response.status, response.data);
            }
        },
        error: function() {
            // Fallback untuk testing jika script PHP belum jalan
            console.log("Menjalankan mode simulasi countdown (AJAX gagal/tidak ada server)");
            let futureDate = new Date();
            futureDate.setDate(futureDate.getDate() + 2); // Set simulasi 2 hari ke depan
            set_clock(new Date(), futureDate, "Antrean pendaftaran SPMB akan segera dibuka.");
        }
    });
}

fetch_set_antrean();

// Validasi & Menampilkan Modal S&K
$('#form_tambah_antrian button').click(function(e) {
    e.preventDefault();
    let formData = new FormData();
    let status = true;

    listFields.forEach((field) => {
        let val = $(`#${field}`).val();
        // Perbaikan sinkronisasi ID error -> ID di HTML adalah "field-error"
        if (val == '' || val == null) {
            $(`#${field}`).addClass('border-rose-500'); // Class error Tailwind
            $(`#${field}-error`).html('Field ini wajib diisi').removeClass('hidden');
            status = false;
        } else {
            $(`#${field}`).removeClass('border-rose-500');
            $(`#${field}-error`).html('').addClass('hidden');
            formData.append(field, val);
        }
    });

    if (status) {
        $('#modal-sk').removeClass('hidden'); // Membuka Modal ala Tailwind
        dataAntrian.push(formData);
    } else {
        // Scroll ke atas sedikit jika ada error
        $('html, body').animate({
            scrollTop: $('#antrian').offset().top - 100
        }, 500);
    }
});

function getResultAntrean(key) {
    $.ajax({
        url: '<?= base_url('search_antrian'); ?>',
        type: 'POST',
        data: {
            keyword: key
        },
        success: function(response) {
            if (response.status == '200') {
                setTimeout(() => {
                    $('#modal-tiket').removeClass('hidden'); // Membuka Modal Tiket Tailwind
                }, 1000);

                $('#btn_print').attr('href', '<?= base_url('printAntrean/'); ?>' + response.data
                    .kode_pendaftaran);

                // Isi Data Tiket
                $('#tiket_nama').text(response.data.nama_siswa);
                $('#tiket_nisn').text(response.data.nisn);
                $('#tiket_kode').text(response.data.kode_pendaftaran);
                $('#tiket_sekolah').text(response.data.asal_sekolah);
                $('#tiket_jalur').text(response.data.jalur_pendaftaran);

                // Format Tanggal
                let date = new Date(response.data.tanggal_antrian);
                let options = {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                };
                $('#cetaktanggal_antrian').text(date.toLocaleDateString('id-ID', options));
                $('#cetaksesi_antrian').text(response.data.sesi_antrian);

                // Data QR & Nomor
                $('.text-6xl.font-black').text(response.data.no_antrian); // Target angka H1 besar
                $("#cetakqr_code").attr('src', '<?= base_url('Assets/qr_code/') ?>' + response.data
                    .qr_code);

            } else {
                if (typeof getSwall === "function") getSwall(response.status, response.data);
            }
        }
    });
}

// Submit ke Database dari Modal S&K
function submitAntrean() {
    const isChecked = $('#syarat_check').is(':checked');
    if (!isChecked) {
        alert("Anda harus menyetujui syarat dan ketentuan.");
        return;
    }

    $("#btn-submit-sk").html('<i class="fa-solid fa-spinner fa-spin mr-2"></i> Memproses...').attr('disabled', true);

    $.ajax({
        url: '<?= base_url('Admin/Antrian/save'); ?>',
        type: 'POST',
        data: dataAntrian[0],
        contentType: false,
        processData: false,
        success: function(response) {
            if (response.error) {
                if (response.status != '406') {
                    $.each(response.data, function(key, value) {
                        if (value != '') {
                            $("#" + key).addClass('border-rose-500');
                            $("#" + key + "-error").html(value).removeClass('hidden');
                        }
                    });
                } else {
                    if (typeof getSwall === "function") getSwall(response.status, response.data);
                }
                dataAntrian.pop();
                $('#modal-sk').addClass('hidden'); // Tutup modal
                $("#btn-submit-sk").html("Kirim Data").removeAttr("disabled");
            } else {
                if (typeof getSwall === "function") getSwall(response.status,
                    'Antrean berhasil ditambahkan');

                // Bersihkan form
                listFields.forEach(function(item) {
                    $("#" + item).removeClass('border-rose-500');
                    $("#" + item + "-error").html('').addClass('hidden');
                });
                $('#syarat_check').prop('checked', false);
                $("#form_tambah_antrian")[0].reset();

                $('#modal-sk').addClass('hidden'); // Tutup modal S&K
                $("#btn-submit-sk").html("Kirim Data").removeAttr("disabled");

                // Tampilkan Hasil Tiket
                getResultAntrean(dataAntrian[0].get('kode_pendaftaran'));
                dataAntrian.pop();
                fetch_set_antrean();
            }
        }
    });
}
</script>
<?= $this->endSection('script');?>