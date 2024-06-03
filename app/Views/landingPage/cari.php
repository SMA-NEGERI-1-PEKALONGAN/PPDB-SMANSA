<?= $this->extend('Templates/LandingPage'); ?>
<?= $this->section('content'); ?>
<style>
p {
    margin-bottom: 0px;
}

h6 {
    margin-top: 0px;
}
</style>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Cari Data</h1>
            <form action="<?= base_url('cari'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control mx-2" placeholder="Masukkan Kode nisn atau kode pendaftaran"
                        name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" id="btn_search">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row align-items-center justify-content-center" id="hasil">
        <div class="col-12">
            <div class="pd-20 card-box mb-30 mt-4 mx-1">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-black h4">Hasil</h4>
                    </div>
                    <div class="pull-right">
                        <a href="<?= base_url('cetak'); ?>" class="btn btn-outline-secondary">
                            <i class="fa fa-print"></i>
                        </a>
                    </div>
                </div>
                <div class="row border-1">
                    <div class="col-sm-2">
                        <img src="<?= base_url('Assets/'); ?>LOGO SMANSA.png" alt="foto" class="img-thumbnail border-0">
                    </div>
                    <div class="col-sm-10 align-self-center">
                        <h2 class="text-center">
                            KARTU ANTRIAN VERIFIKASI BERKAS
                        </h2>
                        <h2 class="text-center">SMA Negeri 1 Pekalongan</h2>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-10">
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <h6 class="text-black">Nama</h6>
                                <p class="text-muted" id="nama_siswa"></p>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="text-black">Kode Pendaftaran</h6>
                                <p class="text-muted" id="nisn">asdasdasd</p>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="text-black">Kode Pendaftaran</h6>
                                <p class="text-muted" id="kode_pendaftaran"></p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <h6 class="text-black">Asal Sekolah</h6>
                                <p class="text-muted" id="asal_sekolah"></p>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="text-black">Jalur</h6>
                                <p class="text-muted" id="jalur_pendaftaran"></p>
                            </div>
                            <div class="col-sm-4 ">
                                <h6 class="text-black" id="alamat">Alamat</h6>
                                <p class="text-muted"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <img src="<?= base_url('Assets/qr_code/4c03177952d34abbb12d9e287275248e.png') ?>" alt="foto"
                            class="img-thumbnai border-0">
                    </div>
                </div>
                <hr>
                <!-- ketentuan -->
                <div class="row">
                    <div class="col-sm-12">
                        <h6 class="text-black">Ketentuan :</h6>
                        <p class="text-muted ml-2">1. Kartu ini berlaku sebagai kartu antrian verifikasi berkas</p>
                        <p class="text-muted ml-2">2. Kartu ini tidak dapat dipindah tangankan</p>
                        <p class="text-muted ml-2">3. Kartu ini berlaku selama proses verifikasi berkas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>