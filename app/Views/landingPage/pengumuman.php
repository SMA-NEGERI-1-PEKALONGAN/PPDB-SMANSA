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

<div class="content" id="background_content">
    <div class="pd-20 card-box mb-30 mt-4" id="alert" style="display: none;">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-black h4">
                    Informasi pengumuman
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

        <div class="row mb-3">
            <!-- alert-->
            <div class="col-md-12">
                <div class="alert alert-primary" role="alert">
                    <h4 class="alert-heading mb-1">Informasi</h4>
                    <p>
                        <span>Selamat bagi CPD yang telah lolos tahap seleksi SPMB TA 2025/2026 di SMA Negeri 1
                            Pekalongan</span> <span class="terompet">🎉</span>
                    </p>

                    <style>
                    .terompet {
                        font-size: 2rem;
                    }

                    @media (max-width: 924px) {
                        .terompet {
                            font-size: 1.2rem;
                        }
                    }
                    </style>
                    <hr>
                    <p class="mb-0 text-dark">Silahkan datang ke sekolah untuk daftar ulang pada tanggal dan sesi yang
                        telah
                        ditentukan.</p>
                </div>
            </div>
        </div>


        <div class="pb-20 table-responsive">
            <table class="table hover multiple-select-row nowrap" id="tableDataSiswa">
                <thead>
                    <tr>
                        <th>No Urut</th>
                        <th>No Peserta</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Asal Sekolah</th>
                        <th>Tanggal</th>
                        <th>Sesi</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
    <button id="btnPlay" class="btn btn-primary rounded-circle"
        style="position: fixed; bottom: 20px; right: 10px; z-index: 9998; ">
        <i class="fa fa-play"></i>
    </button>

    <audio id="mussic" src="<?= base_url('Assets/audio/finalCapter.mp3'); ?>" type="audio/mpeg" preload="auto"></audio>
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
                                    Ketentuan ketika melakukan Dafter Ulang:
                                </p>
                                <ul class="ml-3 mt-2">
                                    <li class="pb-2">1. Membawa berkas daftar ulang
                                    </li>
                                    <li class="pb-2">
                                        <p class="ml-3">
                                            <a id="btnBerkas">
                                                Lihat berkas</a>
                                        </p>
                                    </li class="pb-2">
                                    <li class="pb-2">2. Sudah mengisi formulir daftar ulang <span class="rq">*</span>

                                    </li>
                                    <li class="pb-2">
                                        <p class="ml-3">
                                            <a class="sub-link" href="<?= base_url('FORM-DU'); ?>" target="_blank">Lihat
                                                formulir daftar
                                                ulang </a>
                                        </p>
                                    </li class="pb-2">
                                    <li class="pb-2">3. Datang 30 menit sebelum sesi dimulai </li>
                                    <li class="pb-2">4. Mengenakan seragam sekolah asal atribut lengkap</li>
                                    <li class="pb-2">5. Potongan ramput rapi (CPD Putra) </li>
                                    <li class="pb-2">6. Mengenakan sepatu & kaos kaki </li>
                                    <li class="pb-2">7. Orang tua/wali yg mengantar berpakaian rapi </li>
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

                        .sub-link:hover {
                            color: #000;
                        }
                        </style>

                        <div class="tab-pane fade" id="berkas" role="tabpanel">
                            <div class="pd-20">
                                <p class="fw-bold">
                                    Berkas yang harus dibawa:
                                </p>
                                <ul class="ml-3 mt-2">

                                    <li class="pb-2">1. Bukti pendaftaran sekolah</li>
                                    <li class="pb-2">2. Surat ket. Lulus / Ijazah SMP</li>
                                    <li class="pb-2">3. Surat ket. nilai rapor semester 1-5</li>
                                    <li class="pb-2">4. Akte kelahiran(Asli)</li>
                                    <li class="pb-2">5. Kartu keluarga(Asli)</li>
                                    <li class="pb-2">6. Semua piagam/sertifikat penghargaan yang dimiliki</li>
                                    <li class="pb-2 rq">* Semua berkas diurutkan sesuai dengan urutan diatas dan
                                        dimasuakn
                                        dalam map
                                    </li>
                                    <li class="pb-2">Map hijau (CPD Putra) & map kuning (CPD Putri)</li>

                                </ul>
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
                <button type="submit" class="btn btn-primary" id="btn_sk">
                    Ya, Saya Setuju
                </button>
            </div>
            </form>
        </div>
    </div>


</div>

<style>
#btnBerkas:hover {
    cursor: pointer;
}

.content {
    filter: blur(5px);
}
</style>
<?= $this->endSection('content') ?>

<?= $this->section('dataTables');?>

<script text="text/javascript">
function dataTablesDataSiswa() {
    $(document).ready(function() {
        $('#tableDataSiswa').DataTable({
            processing: true,
            serverSide: true,
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            ajax: "<?php echo base_url('DataTablesDataSiswa') ?>",
            "lengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            columns: [{
                    data: 'no_urut',
                    className: 'text-center',
                    searchable: false,
                    sortable: false,
                },
                {
                    data: 'nisn',
                    sortable: false,
                },
                {
                    data: 'nama_siswa',
                    sortable: false,
                },
                {
                    data: 'jenis_kelamin',
                    className: 'text-center',
                    searchable: false,
                    sortable: false,
                },
                {
                    data: 'asal_sekolah',
                    sortable: false,
                },
                {
                    data: 'tanggal',
                    sortable: false,
                    searchable: false,
                },
                {
                    data: 'sesi',
                    className: 'text-center',
                    sortable: false,
                    searchable: false,
                },
                {
                    data: 'waktu',
                    sortable: false,
                    searchable: false,
                },

            ],
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: false,
            }],
        });
    });
}

dataTablesDataSiswa();
</script>

<?= $this->endSection('dataTables');?>

<?= $this->section('script') ?>

<script src="https://cdn.jsdelivr.net/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>

<script>
$('#form_syarat_ketentuan').submit(function(e) {
    e.preventDefault();
    $('#Medium-modal').modal('hide');
    $('#background_content').removeClass('content');
    $('#btnPlay').css('display', 'block');
    $('#mussic').trigger('play');
    $('#btnPlay').html('<i class="fa fa-stop"></i>');
});

$('#btnPlay').html('<i class="fa fa-play"></i>');

$('#btnPlay').click(function() {
    let audio = $('#mussic');
    if (audio[0].paused) {
        audio.trigger('play');
        $('#btnPlay').html('<i class="fa fa-stop"></i>');
    } else {
        audio.trigger('pause');
        $('#btnPlay').html('<i class="fa fa-play"></i>');
    }
});

$('#mussic').on('ended', function() {
    $('#btnPlay').html('<i class="fa fa-play"></i>');
});




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
            $('#Medium-modal').modal({
                backdrop: 'static',
                keyboard: false
            });
            $('#Medium-modal').modal('show');
            // btn play music
            $('#btnPlay').removeClass('d-none');

            $('#background_content').addClass('content');
            $('#formDu').removeClass('d-none');

        } else {
            $('#Medium-modal').modal('hide');
            $("#clock-c").show();
            $("#countdown").show();
            $("#title-head").show();
            $("#form-search").hide();
            $("#alert").show();
            $('#btnPlay').addClass('d-none');
            $('#background_content').removeClass('content');
            $('#formDu').addClass('d-none');
        }
    });
}


function fetch_set_pengumuman() {
    $.ajax({
        url: '<?= base_url('fetchFilterPengumuman'); ?>',
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


fetch_set_pengumuman();


// btn link
$(document).on('click', '.btn_link', function(e) {
    e.preventDefault();
    let link = $(this).attr('id');
    window.open(link, '_blank');
});
</script>
<?= $this->endSection('script') ?>