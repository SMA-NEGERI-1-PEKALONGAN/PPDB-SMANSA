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
                        Total Antrian
                    </div>
                </div>
                <div class="widget-icon">
                    <div class="icon" data-color="#00eccf">
                        <i class="icon-copy ti-user"></i>
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
                        Antrian Aktif
                    </div>
                </div>
                <div class="widget-icon">
                    <div class="icon" data-color="#ff5b5b">
                        <i class="icon-copy ti-user"></i>
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
                    <div class="font-15 text-secondary weight-500">Antrian tidak aktif</div>
                </div>
                <div class="widget-icon">
                    <div class="icon" data-color="#09cc06">
                        <i class="icon-copy ti-user"></i>
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
                        Antrian saat ini
                    </div>
                </div>
                <div class="widget-icon">
                    <div class="icon">
                        <i class="icon-copy ti-user"></i>
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
            <div id="loket1" class="nomor_antrian mb-4"> 0</div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-30">
        <div class="card-box pd-20 height-100-p">
            <h2 class="h4 mb-20">Loket 2</h2>
            <div id="loket2" class="nomor_antrian mb-4"> 0</div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-30">
        <div class="card-box pd-20 height-100-p">
            <h2 class="h4 mb-20">Loket 3</h2>
            <div id="loket3" class="nomor_antrian mb-4"> 0</div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-30">
        <div class="card-box pd-20 height-100-p">
            <h2 class="h4 mb-20">Loket 4</h2>
            <div id="loket4" class="nomor_antrian mb-4"> 0</div>
        </div>
    </div>
</div>

<!-- load file audio bell antrian -->
<audio id="bel" src="<?= base_url('Assets/audio/bell.mp3'); ?>"></audio>

<!-- btn play -->
<button id="play" class="btn btn-primary">Play</button>


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
                $('#antrian_now').html(response.data.antrianNow);
                $('#sisa_antrian').html(response.data.sisa_antrian);
                $('#loket1').html(response.data.loket1);
                $('#loket2').html(response.data.loket2);
                $('#loket3').html(response.data.loket3);
                $('#loket4').html(response.data.loket4);
            }
        }
    });
}


// when click next button play audio bell
let play = document.getElementById('play');
let bell = document.getElementById('bel');

function playAudio() {
    // bell.pause();
    bell.currentTime = 0;
    bell.play();

    // set delay antara suara bell dengan suara nomor antrian
    durasi_bell = bell.duration * 770;

    // mainkan suara nomor antrian
    setTimeout(function() {
        responsiveVoice.speak("Nomor antrian 1", "Indonesian Male");
    }, durasi_bell);



}

play.addEventListener('click', playAudio);
// jika play selesai maka play button akan muncul kembali
bell.addEventListener('ended', function() {
    // document.getElementById('play').classList.remove('hidden');
    // document.getElementById('pause').classList.add('hidden');
});
// get data every 1 second
setInterval(function() {
    getData();
}, 1000);
</script>


<?= $this->endSection('script')?>