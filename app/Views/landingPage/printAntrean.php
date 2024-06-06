<?= $this->extend('Templates/LandingPage'); ?>
<?= $this->section('content'); ?>
<style>
p {
    margin-bottom: 0px;
}

h6 {
    margin-top: 0px;
}

.header-antrean {
    font-size: 3rem !important;
}

@media (max-width: 840px) {

    /* h6 */
    h2 {
        font-size: 1.5rem;
    }

    .header-antrean {
        font-size: 2.5rem;
    }
}

@media (max-width: 768px) {
    h2 {
        font-size: 1.2rem;
    }

    .header-antrean {
        font-size: 2.3rem;
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

/* @media print */
@media print {

    @page {
        size: F4;
        margin: 0;
    }

    body {
        margin: 0;
    }

    .container {
        margin: 0;
    }

    .row {
        margin: 0;
    }

    .header-1 {
        font-size: 2rem;
    }

    .logo-antrian {
        width: 100px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .search {
        display: none;
    }

    .clearfix {
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

    .text-center {
        text-align: center;
    }

    .text-muted {
        color: #6c757d !important;
    }

    .text-black {
        color: #000 !important;
    }

    .text-secondary {
        color: #6c757d !important;
    }

    .font-700 {
        font-weight: 700 !important;
    }

    .font-15 {
        font-size: 30px !important;
    }

    .font-30 {
        font-size: 60px !important;
    }

    .weight-500 {
        font-weight: 500 !important;
    }

    .weight-700 {
        font-weight: 700 !important;
    }

    .footer {
        display: none;
    }

}
</style>

<script type="text/javascript">
window.addEventListener('load', function() {
    window.print(); // Open the print dialog
    // when window print close
    window.onafterprint = function() {
        // window.location.href = "<?= base_url('Antrean'); ?>";
        window.close();
    }
});
</script>
<div class="container" id="hasil">
    <div class="row align-items-center justify-content-center">
        <div class="col-12">
            <div class="pd-20 card-box mb-30 mt-4 mx-1">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <!-- <h4 class="text-black h4">Hasil</h4> -->
                    </div>
                    <!-- <div class="pull-right">
                        <button class="btn btn-primary" onclick="window.print()">
                            <i class="fa fa-print"></i>
                            </i> Cetak
                        </button>
                    </div> -->
                </div>
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
                                <p class="text-muted" id="nama_siswa">
                                    <?= $data->nama_siswa; ?>
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="text-black">NISN</h6>
                                <p class="text-muted" id="nisn">
                                    <?= $data->nisn; ?>
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="text-black">Kode Pendaftaran</h6>
                                <p class="text-muted" id="kode_pendaftaran">
                                    <?= $data->kode_pendaftaran; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <h6 class="text-black">Asal Sekolah</h6>
                                <p class="text-muted" id="asal_sekolah">
                                    <?= $data->asal_sekolah; ?>
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="text-black">Jalur</h6>
                                <p class="text-muted" id="jalur_pendaftaran">
                                    <?= $data->jalur_pendaftaran; ?>
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="text-black">Alamat</h6>
                                <p class="text-muted" id="alamat">
                                    <?= $data->alamat; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <h6 class="text-black">Tanggal Antrean</h6>
                                <p class="text-muted" id="tanggal_antrian">
                                    <?= $data->tanggal_antrian; ?>
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="text-black">Sesi Antrean</h6>
                                <p class="text-muted" id="sesi_antrian">
                                    <?= $data->sesi_antrian; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 text-center">
                        <img alt="foto" class="img-thumbnai border-0" id="qr_code"
                            src="<?= base_url('Assets/qr_code/'); ?><?= $data->qr_code; ?>">
                        <h6 class="text-black">No Antrean</h6>
                        <h2 class="text-muted fw-700 header-antrean" id="no_antrian">
                            <?= $data->no_antrian; ?>
                        </h2>
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
                        <p class="text-muted ml-2">4. Kartu ini dapat dicetak / discreenshot pada bagian QrCode</p>
                    </div>
                </div>
                <hr>
                <!-- link web and date search -->
                <div class="row">
                    <div class="col-12 align-self-end">
                        <p class="text-black text-right"><span class="tgl_cetak">Tanggal cetak :</span>
                            <?= date('Y-m-d H:i:s'); ?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>

<?= $this->section('script'); ?>
<script>
// when window print save name file
window.onbeforeprint = function() {
    document.title = 'Kartu Antrean ' + $('#nama_siswa').text();
}
</script>
<?= $this->endSection('script'); ?>