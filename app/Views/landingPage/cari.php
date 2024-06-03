<?= $this->extend('Templates/LandingPage'); ?>
<?= $this->section('content'); ?>
<style>
p {
    margin-bottom: 0px;
}

h6 {
    margin-top: 0px;
}

@media (max-width: 840px) {

    /* h6 */
    h2 {
        font-size: 1.5rem;
    }
}

@media (max-width: 768px) {
    h2 {
        font-size: 1.2rem;
    }
}

@media (max-width: 576px) {
    h2 {
        font-size: 1.2rem;
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
}
</style>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Cari Data</h1>
            <form id="form_search">
                <div class="input-group mb-3">
                    <input type="text" class="form-control mx-2" placeholder="Masukkan nisn / kode pendaftaran"
                        name="keyword" required>
                    <button class="btn btn-outline-secondary" type="submit" id="btn_search">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container" style="display: none;" id="hasil">
    <div class="row align-items-center justify-content-center">
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
                    <div class="col-sm-2 text-center">
                        <img src="<?= base_url('Assets/'); ?>LOGO SMANSA.png" alt="foto"
                            class="img-thumbnail border-0 logo-antrian">
                    </div>
                    <div class="col-sm-10 align-self-center">
                        <h2 class="text-center">
                            KARTU ANTRIAN <span id="desktop-mode">VERIFIKASI BERKAS</span>
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
                            <div class="col-sm-4">
                                <h6 class="text-black">Alamat</h6>
                                <p class="text-muted" id="alamat"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 text-center">
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
                        <p class="text-muted ml-2">3. Kartu ini dapat dictak / discreenshot</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>

<?= $this->section('script'); ?>
<script>
$('#form_search').submit(function(e) {
    e.preventDefault();
    let keyword = $('[name="keyword"]').val();
    $('#btn_search').html(
        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
    ).attr('disabled', true);
    $.ajax({
        url: '<?= base_url('search'); ?>',
        type: 'POST',
        data: {
            keyword: keyword
        },
        success: function(response) {
            if (response.status == '200') {
                $('#hasil').css('display', 'block');
                $('#nama_siswa').text(response.data.nama_siswa);
                $('#nisn').text(response.data.nisn);
                $('#kode_pendaftaran').text(response.data.kode_pendaftaran);
                $('#asal_sekolah').text(response.data.asal_sekolah);
                $('#jalur_pendaftaran').text(response.data.jalur_pendaftaran);
                $('#alamat').text(response.data.alamat);
                $('#btn_search').html('<i class="bi bi-search"></i>').attr('disabled', false);
            } else {
                $('#btn_search').html('<i class="bi bi-search"></i>').attr('disabled', false);
                getSwall(response.status, response.data);
            }
        }
    });

});
</script>
<?= $this->endSection('script'); ?>