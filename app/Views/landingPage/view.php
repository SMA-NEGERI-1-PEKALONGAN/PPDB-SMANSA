<?= $this->extend('Templates/LandingPage'); ?>
<?= $this->section('content'); ?>

<style>
.nomor_antrian {
    font-size: 70px;
    font-weight: bold;
    text-align: center;
}
</style>
<div class="row pb-10">
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <div class="weight-700 font-30 text-dark" id="total_antrian"></div>
                    <div class="font-15 text-secondary weight-500">
                        Total Antrean
                    </div>
                </div>
                <div class="widget-icon">
                    <div class="icon" data-color="#00eccf">
                        <i class="icon-copy fa fa-users" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <div class="weight-700 font-30 text-dark" id="antrian_active"></div>
                    <div class="font-15 text-secondary weight-500">
                        Antrean Aktif
                    </div>
                </div>
                <div class="widget-icon" data-color="#09cc06">
                    <div class="icon">
                        <i class="icon-copy fa fa-user-plus" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <div class="weight-700 font-30 text-dark" id="sisa_antrian"></div>
                    <div class="font-15 text-secondary weight-500">Antrean tidak aktif</div>
                </div>
                <div class="widget-icon">
                    <div class="icon" data-color="#ff5b5b">
                        <i class="icon-copy fa fa-user-times" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <div class="weight-700 font-30 text-dark" id="antrian_now"></div>
                    <div class="font-15  text-secondary weight-500">
                        Antrean saat ini
                    </div>
                </div>
                <div class="widget-icon">
                    <div class="icon">
                        <i class="icon-copy fa fa-user" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row mt-4">
    <div class="col-lg-6 col-md-6 mb-30">
        <div class="card-box pd-20 height-100-p">
            <h2 class="h4 mb-20">Loket 1</h2>
            <div id="loket1" class="nomor_antrian mb-4">0</div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-30">
        <div class="card-box pd-20 height-100-p">
            <h2 class="h4 mb-20">Loket 2</h2>
            <div id="loket2" class="nomor_antrian mb-4">0</div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-30">
        <div class="card-box pd-20 height-100-p">
            <h2 class="h4 mb-20">Loket 3</h2>
            <div id="loket3" class="nomor_antrian mb-4">0</div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-30">
        <div class="card-box pd-20 height-100-p">
            <h2 class="h4 mb-20">Loket 4</h2>
            <div id="loket4" class="nomor_antrian mb-4">0</div>
        </div>
    </div>
</div>

<!-- load file audio bell antrian -->
<audio id="bel" src="<?= base_url('Assets/audio/bell.mp3'); ?>" type="audio/mpeg" preload="auto"></audio>
</audio>

<?= $this->endSection('content')?>

<?= $this->section('script')?>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=jQZ2zcdq">
</script>
<script>
$(document).ready(function() {
    fetchAntrian();
});

function fetchAntrian() {
    $.ajax({
        url: '<?= base_url('fetchAntrian') ?>',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if (response.error == false) {
                $('#total_antrian').html(response.data.totalAntrian);
                $('#antrian_active').html(response.data.antrianActive);
                $('#antrian_now').html(response.data.antrianNow.no_antrian);
                $('#sisa_antrian').html(response.data.sisa_antrian);
                $('#loket1').html(response.data.loket1.no_antrian);
                $('#loket2').html(response.data.loket2.no_antrian);
                $('#loket3').html(response.data.loket3.no_antrian);
                $('#loket4').html(response.data.loket4.no_antrian);
            }
        }
    });
}

function fetchNotifikasi() {
    $.ajax({
        url: '<?= base_url('fetchNotifikasi') ?>',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if (response.status == '200') {
                let msg = response.data.isi_notifikasi;
                playAudio(msg);
                fetchAntrian();
                updateNotifikasi(response.data.id_notifikasi);
            } else {
                setTimeout(function() {
                    fetchNotifikasi();
                    fetchAntrian();
                }, 1000);
            }
        }
    });
}


function updateNotifikasi(id) {
    $.ajax({
        url: '<?= base_url('updateNotifikasi') ?>',
        type: 'POST',
        data: {
            id: id
        },
        dataType: 'json',
        success: function(response) {
            if (response.status == '200') {
                // alert('Data berhasil diupdate');s
            }
        }
    });
}

setTimeout(function() {
    fetchNotifikasi();
    fetchAntrian();
}, 1000);

// when click next button play audio bell
let play = document.getElementById('play');
let bell = document.getElementById('bel');

function playAudio(msg) {
    // alert(msg);
    // bell.pause();
    bell.play();

    durasi_bell = bell.duration * 700;

    setTimeout(function() {
        responsiveVoice.speak(msg,
            "Indonesian Male", {
                rate: 0.9,
                pitch: 1,
                volume: 1,
            });
    }, durasi_bell);

    setTimeout(function() {
        fetchNotifikasi();
    }, 10000);

}
</script>


<?= $this->endSection('script')?>