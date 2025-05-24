<?= $this->extend('Templates/LandingPage') ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="<?= base_url('Assets/'); ?>css/style.css">
<style type="text/css">
p {
    margin-bottom: 0px;
}

h6 {
    margin-top: 0px;
}

.header-antrean {
    font-size: 3rem !important;
}

@media (max-width: 991px) {

    h2 {
        font-size: 1.5rem;
    }

    .search {
        margin-top: 50px;
    }

    .logo-antrian {
        width: 100px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    #desktop-mode {
        display: none;
    }

    .mb-3 {
        margin-bottom: 0 !important;
    }

    .col-sm-4 {
        margin-bottom: 10px;
    }

    .header-antrean {
        font-size: 2.3rem;
    }

    .tgl_cetak {
        display: none;
    }

    #btnBerkas:hover {
        cursor: pointer;
    }


}


@media (max-width: 576px) {
    h2 {
        font-size: 1.2rem;
    }

    .search {
        margin-top: 50px;
    }

    .logo-antrian {
        width: 100px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    #desktop-mode {
        display: none;
    }

    .mb-3 {
        margin-bottom: 0 !important;
    }

    .col-sm-4 {
        margin-bottom: 10px;
    }

    .header-antrean {
        font-size: 2rem;
    }

    .tgl_cetak {
        display: none;
    }
}
</style>

<?php 
    $macAddrs =  exec('getmac');
    $macAddrs = substr($macAddrs, 0, 17);
    $macAddrs = str_replace(' ', '', $macAddrs);
    echo $macAddrs;
 ?>
<div class="pd-20 card-box mb-30 mt-4" id="alert" style="display: none;">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-black h4">
                Informasi Pendaftaran Antrean
            </h4>
        </div>
    </div>
    <div class="alert alert-primary" role="alert" id="pesan"> </div>
    <div class="py-5" id="countdown" style="display: none;">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="rounded bg-gradient-4 text-white shadow py-5 text-center mb-5">
                    <p class="mb-0 font-weight-bold text-uppercase text-white"></p>
                    <div id="clock-c" class="countdown py-4 text-white"></div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- form -->
<div class="pd-20 card-box mb-30  mt-4" id="antrian" style="display: none;">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-black h4">
                Form Antrean
            </h4>
        </div>
        <div class="pull-right">
            <!-- <h4 class="text-black h4">
                <i class="fa fa-user mr-2"></i><span id="total_antrian"></span> / <span id="max_antrian"></span>
            </h4> -->
        </div>
    </div>

    <form id="form_tambah_antrian" enctype="multipart/form-data">
        <!-- <form action="<?= base_url('Admin/Antrian/save'); ?>" method="post" enctype="multipart/form-data"> -->

        <div class="modal-body">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading mb-2">Perhatian!</h4>
                        <p class="mb-2">
                            Anda dapat melakukan pedaftaran antrean jika sudah melengkapi semua berkas
                            yang telah ditentukan dan telah melakukan pengajuan akun di laman <a target="_blank"
                                href="https://spmb.jatengprov.go.id/"><b>SPMB Jateng</b></a>
                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="nama_siswa">Nama Siswa<span class="rq">*</span></label>
                        <input type="text" class="form-control required" id="nama_siswa" name="nama_siswa"
                            placeholder="Masukan nama">
                        <div class="form-control-feedback " id="errornama_siswa"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="nisn">NISN<span class="rq">*</span></label>
                        <input type="text" class="form-control required" id="nisn" name="nisn"
                            placeholder="Masukan NISN" maxlength="10" minlength="10"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        <div class="form-control-feedback" id="errornisn"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="kode_pendaftaran">Nomor pendaftraran
                            SPMB<span class="rq">*</span></label></label>
                        <input type="text" class="form-control required" id="kode_pendaftaran" name="kode_pendaftaran"
                            placeholder="Masukan nomor peserta SPMB">
                        <div class="form-control-feedback " id="errorkode_pendaftaran"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis
                            Kelamin<span class="rq">*</span></label></label>
                        <select class="form-control required" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        <div class="form-control-feedback " id="errorjenis_kelamin"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="asal_sekolah">Asal
                            Sekolah<span class="rq">*</span></label></label>
                        <input type="text" class="form-control required" id="asal_sekolah" name="asal_sekolah"
                            placeholder="Masukan asal sekolah ">
                        <div class="form-control-feedback " id="errorasal_sekolah"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="jalur_pendaftaran">Jalur
                            Pendaftaran<span class="rq">*</span></label></label>
                        <select class="form-control required" id="jalur_pendaftaran" name="jalur_pendaftaran">
                            <option value="">Pilih Jalur Pendaftaran</option>
                            <option value="Domisili">Domisili</option>
                            <option value="Afirmasi">Afirmasi</option>
                            <option value="Prestasi">Prestasi</option>
                            <option value="Mutasi">Mutasi
                            </option>
                        </select>
                        <div class="form-control-feedback " id="errorjalur_pendaftaran">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="alamat">Alamat<span class="rq">*</span></label></label>
                        <textarea class="form-control required" id="alamat" name="alamat"
                            placeholder="Masukan alamat "></textarea>
                        <div class="form-control-feedback " id="erroralamat"></div>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="no_tlp">No telpon<span class="rq">*</span></label></label>
                        <input type="text" class="form-control required" id="no_tlp" name="no_tlp"
                            placeholder="Masukan no telpon " maxlength="13" minlength="10"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        <div class="form-control-feedback " id="errorno_tlp"></div>
                    </div>
                </div>
            </div>
            <input type="hidden" class="form-control required" id="macAddress" name="macAddress"
                placeholder="Masukan MC Address " value="<?= $macAddrs; ?>">


            <div class="modal-footer">
                <!-- <button type="submit" class="btn btn-primary">
                    Simpan
                </button> -->
                <button type="submit" class="btn btn-primary" id="btn_tambah_antiran">
                    Simpan
                </button>
                <!-- button open modal-->
                <!-- <button type="button" class="btn btn-primary" id="btnBerkas" data-toggle="modal"
                    data-target="#Medium-modal">
                    Lihat Berkas
                </button> -->
            </div>
        </div>
    </form>
</div>

<!-- Syarat dan Ketentuan -->
<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Syarat & Ketentuan
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <div class="tab">
                    <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#persyaratan" role="tab"
                                aria-selected="true" id="tabPersyaratan">Persyaratan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#berkas" role="tab" aria-selected="false"
                                id="tabBerkas">Berkas</a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="persyaratan" role="tabpanel">
                            <div class="pd-20">
                                <p class="fw-bold">
                                    Ketentuan ketika melakukan verifikasi berkas:
                                </p>
                                <ul class="ml-3">
                                    <li class="pb-2 text-danger">1. Membawa berkas pendaftaran
                                    </li>
                                    <li class="pb-2">
                                        <p class="ml-3">
                                            <a id="btnBerkas">
                                                Lihat berkas</a>
                                        </p>
                                    </li class="pb-2">
                                    <li class="pb-2">2. Mengenakan seragam sekolah asal </li>
                                    <li class="pb-2">3. Potongan ramput rapi (CPD Putra) </li>
                                    <li class="pb-2">4. Mengenakan spatu & kaos kaki </li>
                                    <li class="pb-2">5. Orang tua/wali yg mengantar berpakaian rapi </li>
                                </ul>
                            </div>
                        </div>

                        <style>
                        .ml-3 {
                            margin-bottom: 0;
                        }

                        .pb-2 {
                            padding-bottom: 0.5rem;
                        }

                        .fw-bold {
                            font-weight: bold;
                        }


                        .sub-link {
                            cursor: pointer;
                        }
                        </style>

                        <div class="tab-pane fade" id="berkas" role="tabpanel">
                            <div class="pd-10">
                                <div class="faq-wrap">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header">
                                                <button class="btn btn-block collapsed" data-toggle="collapse"
                                                    data-target="#Domisili">
                                                    Domisili
                                                </button>
                                            </div>
                                            <div id="Domisili" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <ul class="ml-3">
                                                        <li class="pb-2">1. Print Out Bukti Pengajuan Akun</li>
                                                        <li class="pb-2">2. Surat Pernyataan Kebenaran Dokumen
                                                        </li>
                                                        <li class="pb-2">3. Buku Rapor SMP/sederajat</li>
                                                        <li class="pb-2">4. Surat Keterangan Nilai Rapor semester 1 - 5
                                                            SMP/sederajat</li>
                                                        <li class="mb-2">5. Ijazah SMP/sederajat
                                                        </li>
                                                        <li class="pb-2">6. Akte Kelahiran</li>
                                                        <li class="pb-2">7. Kartu Keluarga</li>
                                                        <li class="pb-2">8. Piagam prestasi/penghargaan (bagi yang
                                                            memiliki)</li>
                                                        <hr>
                                                        <li class="pb-2">
                                                            <a class="sub-link btn_link"
                                                                id="<?= base_url('/'); ?>">Lihat detail persayaratan</a>

                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <button class="btn btn-block collapsed" data-toggle="collapse"
                                                    data-target="#Afirmasi">
                                                    Afirmasi
                                                </button>
                                            </div>
                                            <div id="Afirmasi" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <ul class="ml-3">
                                                        <li class="pb-2">1. Print Out Bukti Pengajuan Akun</li>
                                                        <li class="pb-2">2. Surat Pernyataan Kebenaran Dokumen
                                                        </li>
                                                        <li class="pb-2">3. Buku Rapor SMP/sederajat</li>
                                                        <li class="pb-2">4. Surat Keterangan Nilai Rapor semester 1 - 5
                                                            SMP/sederajat</li>
                                                        <li class="mb-2">5. Ijazah SMP/sederajat
                                                        </li>
                                                        <li class="pb-2">6. Akte Kelahiran</li>
                                                        <li class="pb-2">7. Kartu Keluarga</li>
                                                        <li class="pb-2">8. Piagam prestasi/penghargaan (bagi yang
                                                            memiliki)</li>
                                                        <li class="pb-2">9. Surat EMIS(bagi CPD pondok pesantren)
                                                        </li>
                                                        <li class="pb-2">10. Surat Keterangan DTKS (bagi yang memiliki)
                                                            yang
                                                            sudah di verifikasi dan divaliditasi pada DT Jateng</li>
                                                        <li class="pb-2">11. Surat Pernyataan calon murid yang tidak
                                                            terdata aktif
                                                            dalam Dapodik pada satuan Pendidikan lainnya (untuk
                                                            calon murid ATS)</li>
                                                        <hr>
                                                        <li class="pb-2">
                                                            <a class="sub-link btn_link"
                                                                id="<?= base_url('/'); ?>">Lihat detail persayaratan</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <button class="btn btn-block collapsed" data-toggle="collapse"
                                                    data-target="#prestasi">
                                                    Prestasi
                                                </button>
                                            </div>
                                            <div id="prestasi" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <ul class="ml-3">
                                                        <li class="pb-2">1. Print Out Bukti Pengajuan Akun</li>
                                                        <li class="pb-2">2. Surat Pernyataan Kebenaran Dokumen
                                                        </li>
                                                        <li class="pb-2">3. Buku Rapor SMP/sederajat</li>
                                                        <li class="pb-2">4. Surat Keterangan Nilai Rapor semester 1
                                                            - 5
                                                            SMP/sederajat</li>
                                                        <li class="mb-2">5. Ijazah SMP/sederajat
                                                        </li>
                                                        <li class="pb-2">6. Akte Kelahiran</li>
                                                        <li class="pb-2">7. Kartu Keluarga</li>
                                                        <li class="pb-2">8. Piagam Prestasi tertinggi yang dimiliki
                                                            (paling lama kurun
                                                            waktu 3 tahun)
                                                        </li>
                                                        <hr>
                                                        <li class="pb-2">
                                                            <a class="sub-link btn_link"
                                                                id="<?= base_url('/'); ?>">Lihat detail
                                                                persayaratan</a>
                                                        </li>
                                                    </ul>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <button class="btn btn-block collapsed" data-toggle="collapse"
                                                    data-target="#pto">
                                                    Mutasi
                                                </button>
                                            </div>

                                            <div id="pto" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <ul class="ml-3">
                                                        <li class="pb-2">1. Print Out Bukti Pengajuan Akun</li>
                                                        <li class="pb-2">2. Surat Pernyataan Kebenaran Dokumen
                                                        </li>
                                                        <li class="pb-2">3. Buku Rapor SMP/sederajat</li>
                                                        <li class="pb-2">4. Surat Keterangan Nilai Rapor semester 1 - 5
                                                            SMP/sederajat</li>
                                                        <li class="mb-2">5. Ijazah SMP/sederajat
                                                        </li>
                                                        <li class="pb-2">6. Akte Kelahiran</li>
                                                        <li class="pb-2">7. Kartu Keluarga</li>
                                                        <li class="pb-2">8. Piagam Prestasi tertinggi yang dimiliki
                                                            (paling lama kurun
                                                            waktu 3 tahun)
                                                        </li>
                                                        <li class="pb-2">9. Surat pernyataan dari Kepala Sekolah (Anak
                                                            Guru)
                                                        </li>
                                                        <li class="pb-2">10. Surat penugasan dari Instansi paling lama 1
                                                            tahun
                                                            (perpindahan kerja Ortu)
                                                        </li>
                                                        <li class="pb-2">11. Surat Keterangan Domisili oleh Lurah
                                                            diketahui oleh Camat
                                                        </li>
                                                        <hr>
                                                        <li class="pb-2">
                                                            <a class="sub-link btn_link"
                                                                id="<?= base_url('/'); ?>">Lihat detail persayaratan</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <form id="form_syarat_ketentuan">
                    <div class="form-group mt-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="syatKetentuan" name="syatKetentuan"
                                required title="Syarat & Ketentuan harus di centang">
                            <label class="custom-control-label" for="syatKetentuan">Saya setuju dengan
                                syarat &
                                ketentuan yang berlaku</label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary" id="btn_sk">
                    Kirim
                </button>

            </div>
            </form>
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Hasil Antrean
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <!-- <h4 class="text-black h4">Hasil</h4> -->
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary text-white" target="_blank" id="btn_print">
                            <i class="fa fa-print"></i>
                            </i> Cetak
                        </a>
                    </div>
                </div>
                <div class="cetaks">
                    <div class="row border-1">
                        <div class="col-sm-2 text-center">
                            <img src="<?= base_url('Assets/'); ?>LOGO SMANSA.png" alt="foto"
                                class="img-thumbnail border-0 logo-antrian">
                        </div>
                        <div class="col-sm-10 align-self-center">
                            <h2 class="text-center header-1">
                                KARTU ANTREAN <span id="desktop-mode">VERIFIKASI BERKAS</span>
                            </h2>
                            <h2 class="text-center header-1">SMA Negeri 1 Pekalongan</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <h6 class="text-black">Nama</h6>
                                    <p class="text-muted" id="cetaknama_siswa"></p>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="text-black">NISN</h6>
                                    <p class="text-muted" id="cetaknisn"></p>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="text-black">Kode Pendaftaran</h6>
                                    <p class="text-muted" id="cetakkode_pendaftaran"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <h6 class="text-black">Asal Sekolah</h6>
                                    <p class="text-muted" id="cetakasal_sekolah"></p>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="text-black">Jalur</h6>
                                    <p class="text-muted" id="cetakjalur_pendaftaran"></p>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="text-black">Alamat</h6>
                                    <p class="text-muted" id="cetakalamat"></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <h6 class="text-black">Tanggal Antrean</h6>
                                    <p class="" style="color: red; font-weight: 700;" id="cetaktanggal_antrian"></p>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="text-black">Sesi Antrean</h6>
                                    <p class="text-muted" id="cetaksesi_antrian"></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2 text-center">
                            <img src="" alt="foto" class="img-thumbnai border-0" id="cetakqr_code">
                            <h6 class="text-black">No Antrean</h6>
                            <h2 class="text-muted fw-700 header-antrean" id="cetakno_antrian"></h2>
                        </div>
                    </div>
                    <hr>
                    <!-- ketentuan -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h6 class="text-black">Ketentuan :</h6>
                            <p class="text-muted ml-2">1. Kartu ini berlaku sebagai kartu antrean
                                verifikasi berkas
                            </p>
                            <p class="text-muted ml-2">2. Kartu ini tidak dapat dipindah tangankan</p>
                            <p class="text-muted ml-2">3. Kartu ini berlaku selama proses verifikasi
                                berkas</p>
                            <p class="text-muted ml-2">4. Kartu ini dapat dicetak / discreenshot pada
                                bagian QrCode
                            </p>
                        </div>
                    </div>
                    <hr>
                    <!-- link web and date search -->
                    <div class="row">
                        <div class="col-12 align-self-end">
                            <p class="text-black text-right"><span class="tgl_cetak">Tanggal cetak
                                    : <span id="created_at"></span></span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>

<?= $this->section('script') ?>

<script src="https://cdn.jsdelivr.net/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>

<script>
const listFields = ['nama_siswa', 'nisn', 'jenis_kelamin', 'kode_pendaftaran', 'asal_sekolah', 'no_tlp',
    'alamat', 'jalur_pendaftaran'
];

const dataAntrian = [];

function set_clock(date_now, set_date, pesan) {

    function DateRange() {

        const date = set_date;

        $('#pesan').text(pesan);

        return date;

    }

    $("#clock-c").countdown(DateRange(), function(event) {
        var $this = $(this).html(
            event.strftime(
                "" +
                '<span class="h1 font-weight-bold">%D</span> Day%!d' +
                '<span class="h1 font-weight-bold">%H</span> Hr' +
                '<span class="h1 font-weight-bold">%M</span> Min' +
                '<span class="h1 font-weight-bold">%S</span> Sec'
            )
        );
        if (event.elapsed) {
            $("#clock-c").hide();
            $("#countdown").hide();
            $("#title-head").hide();
            $("#antrian").show();
        } else {
            $("#clock-c").show();
            $("#countdown").show();
            $("#title-head").show();
            $("#form-search").hide();
            $("#alert").show();
        }
    });
}


function fetch_set_antrean() {
    $.ajax({
        url: '<?= base_url('fetchFilterAntrean'); ?>',
        type: 'GET',
        success: function(response) {
            if (response.status == '200') {
                set_clock(response.data.dateTimeNow, response.data.dateTime, response.data.pesan);
                // $('#total_antrian').text(response.data.total_antrian);
                // $('#max_antrian').text(response.data.max_antrian);
            } else {
                getSwall(response.status, response.data);
            }
        }
    })
}



fetch_set_antrean();

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

function getResultAntrean(key) {
    $.ajax({
        url: '<?= base_url('search_antrian '); ?>',
        type: 'POST',
        data: {
            keyword: key
        },
        success: function(response) {
            if (response.status == '200') {
                setTimeout(() => {
                    $('#bd-example-modal-lg').modal('show');
                }, 1500);
                $('#btn_print').attr('href', '<?= base_url('printAntrean/'); ?>' + response.data
                    .kode_pendaftaran);
                $('#cetaknama_siswa').text(response.data.nama_siswa);
                $('#cetaknisn').text(response.data.nisn);
                $('#cetakkode_pendaftaran').text(response.data.kode_pendaftaran);
                $('#cetakasal_sekolah').text(response.data.asal_sekolah);
                $('#cetakjalur_pendaftaran').text(response.data.jalur_pendaftaran);
                $('#cetakalamat').text(response.data.alamat);
                let date = new Date(response.data.tanggal_antrian);
                let options = {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                };
                $('#cetaktanggal_antrian').text(date.toLocaleDateString('id-ID', options));
                $('#cetaksesi_antrian').text(response.data.sesi_antrian);
                $('#cetakno_antrian').text(response.data.no_antrian);
                $('#cetakbtn_search').html('<i class="bi bi-search"></i>').attr('disabled', false);
                $("#cetakqr_code").attr('src', '<?= base_url('Assets/qr_code/') ?>' + response.data
                    .qr_code);
                $('#created_at').text(response.data.created_at);
            } else {
                $('#btn_search').html('<i class="bi bi-search"></i>').attr('disabled', false);
                getSwall(response.status, response.data);
            }
        }
    });
}

$('#form_syarat_ketentuan').submit(function(e) {
    e.preventDefault();
    $("#btn_sk").attr("disabled", "disabled");
    $("#btn_sk").html(
        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
    ).attr('disabled', true);
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
                } else {
                    getSwall(response.status, response.data);
                    $("#btn_sk").removeAttr("disabled");
                    $("#btn_sk").html("Kirim");
                }
                dataAntrian.pop();
                fetch_set_antrean();
                $('#Medium-modal').modal('hide');
                $("#btn_sk").removeAttr("disabled");
                $("#btn_sk").html("Tambah");
            } else {
                getSwall(response.status, 'Antrean berhasil ditambahkan');
                // alert(dataAntrian[0].get('kode_pendaftaran'));
                listFields.forEach(function(item) {
                    $("#" + item).removeClass('form-control-danger');
                    $("#" + item).removeClass('form-control-success');
                    $("#error" + item).html('');
                    $("#error" + item).removeClass('has-danger');
                });
                fetch_set_antrean();
                $('#syatKetentuan').prop('checked', false);
                $("#form_tambah_antrian")[0].reset();
                $('#Medium-modal').modal('hide');
                $("#btn_sk").removeAttr("disabled");
                $("#btn_sk").html("Kirim");
                getResultAntrean(dataAntrian[0].get('kode_pendaftaran'));
                dataAntrian.pop();
            }
        } //end success
    }) //end ajax
});

// btn link
$(document).on('click', '.btn_link', function(e) {
    e.preventDefault();
    let link = $(this).attr('id');
    window.open(link, '_blank');
});
</script>
<?= $this->endSection('script') ?>