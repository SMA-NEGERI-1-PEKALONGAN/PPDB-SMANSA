<?= $this->extend('Templates/index'); ?>
<?= $this->section('content'); ?>
<style>
.section {
    background-color: #ffffff;
    padding: 50px 30px;
    border: 1.5px solid #b2b2b2;
    border-radius: 0.25em;
}

#my-qr-reader {
    padding: 20px !important;
    border: 1.5px solid #b2b2b2 !important;
    border-radius: 8px;
}

#my-qr-reader img[alt="Info icon"] {
    display: none;
}

#my-qr-reader img[alt="Camera based scan"] {
    width: 100px !important;
    height: 100px !important;
}

button {
    padding: 10px 20px;
    border: 1px solid #b2b2b2;
    outline: none;
    border-radius: 0.25em;
    color: white;
    font-size: 15px;
    cursor: pointer;
    margin-top: 15px;
    margin-bottom: 10px;
    background-color: #008000ad;
    transition: 0.3s background-color;
}

button:hover {
    background-color: #008000;
}

#html5-qrcode-anchor-scan-type-change {
    text-decoration: none !important;
    color: #1d9bf0;

}

video {
    width: 100% !important;
    border: 1px solid #b2b2b2 !important;
    border-radius: 0.25em;
}
</style>
<div class="row mx-1">
    <div class="col-md-7">
        <div class="form-group row">
            <label for="barcodeInput" class="col-sm-4 col-form-label">Scan QR Codes</label></label>
            <input type="text" class="form-control" id="barcodeInput" placeholder="Scan QR Codes here..." autofocus>
        </div>
    </div>
    <div class="col-1"></div>
    <div class="col-md-4">
        <div class="form-group row">
            <label for="menu" class="col-sm-4 col-form-label">Menu</label></label>
            <select class="form-control" id="menu">
                <option value="1">Check In</option>
                <option value="2">Pemberkasan</option>
                <option value="3">Verifikasi</option>
            </select>
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-6 mx-auto">
        <div class="card-box mb-30">
            <div class="pd-20">
                <div class="row mb-4 mx-2">
                    <h4 class="text-blue h4">Scan QR Codes</h4>
                </div>
                <div class="pb-20">
                    <div id="my-qr-reader">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- detail antrian -->
<div class="modal fade" id="detailsAntrian" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Verifikasi Data
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body">

                <!-- add image -->
                <div class="form-group row">
                    <div class="col-sm-12 text-center">
                        <img src="" alt="" id="detailqr_code" class="img-thumbnail">
                    </div>
                </div>
                <!-- no antrian -->
                <div class="form-group row m-0">
                    <div class="col-sm-12 text-center">
                        <h2><span id="detailno_antrian" class="header_antrian"></span></h2><br>
                        <h6><span id="detailsesi_antrian"></span></h6>
                    </div>
                    <style>
                    .header_antrian {
                        font-size: 50px;
                        font-weight: bold;
                        font-family: Arial, sans-serif;
                    }
                    </style>
                </div>
                <hr>
                <div class="form-group row ">
                    <label for="jalur_pendaftaran" class="col-sm-4 col-form-label">Jalur Pendaftaran</label></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="detailjalur_pendaftaran" name="jalur_pendaftaran"
                            placeholder="Jalur Pendaftaran" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_siswa" class="col-sm-4 col-form-label">Nama Siswa</label></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="detailnama_siswa" name="nama_siswa"
                            placeholder="Nama" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kode_pendaftaran" class="col-sm-4 col-form-label">Kode Pendaftaran</label></label>
                    <div class="col-sm-8">
                        <!-- add button cliport -->
                        <input type="text" class="form-control" id="detailkode_pendaftaran" name="kode_pendaftaran"
                            placeholder="Kode Pendaftaran" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nisn" class="col-sm-4 col-form-label">Nisn</label></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="detailnisn" name="nisn" placeholder="NISN" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="detailjenis_kelamin" name="jenis_kelamin"
                            placeholder="Jenis Kelamin" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="asal_sekolah" class="col-sm-4 col-form-label">Asal Sekolah</label></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="detailasal_sekolah" name="asal_sekolah"
                            placeholder="Asal Sekolah" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-4 col-form-label">alamat</label></label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="detailalamat" name="alamat" placeholder="Alamat"
                            readonly></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_tlp" class="col-sm-4 col-form-label">No Tlp</label></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="detailno_tlp" name="no_tlp" placeholder="No Tlp"
                            readonly>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<?= $this->endSection('content');?>

<?= $this->section('dataTables');?>
<script>
// notification
function getSwall(status, message) {
    swal({
        title: message,
        type: status == '200' ? 'success' : 'error',
        showCancelButton: false,
        showConfirmButton: true,
        timer: 1500,
        allowOutsideClick: false
    })
}



const listFields = ['nama_siswa', 'nisn', 'jenis_kelamin', 'kode_pendaftaran', 'asal_sekolah', 'no_tlp', 'alamat',
    'jalur_pendaftaran'
];
// get selected menu
var selectedMenu = document.getElementById('menu').value;

document.getElementById('menu').addEventListener('change', function() {
    selectedMenu = document.getElementById('menu').value;
});

// ceck in antrian
function checkInAntrian(id) {
    $.ajax({
        url: '<?= base_url('Admin/Antrian/checkIn'); ?>',
        type: 'post',
        data: {
            id: id
        },
        success: function(response) {
            getSwall(response.status, response.data);
        },
    });
}

// get data 
function getDetailAntrian(id) {
    $.ajax({
        url: '<?= base_url('Admin/Antrian/edit') ?>',
        method: 'post',
        data: {
            id: id
        },
        success: function(response) {
            if (response.status == '200') {
                $('#detailsAntrian').modal('show');
                listFields.forEach(function(item) {
                    $("#detail" + item).val(response.data[item]);
                });
                $("#detailqr_code").attr('src', '<?= base_url('Assets/qr_code/') ?>' + response.data
                    .qr_code);
                $("#detailno_antrian").html(response.data.no_antrian);
                $("#detailsesi_antrian").html(response.data.sesi_antrian);
            } else {
                getSwall(response.status, response.data);
            }

        },
    });
}


// script.js file
const result = document.getElementById("qr-result");

function domReady(fn) {
    if (
        document.readyState === "complete" ||
        document.readyState === "interactive"
    ) {
        setTimeout(fn, 1000);
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
}


domReady(function() {

    // If found you qr code
    function onScanSuccess(decodeText, decodeResult) {
        textContent = decodeText;

        id_barcode = textContent.toString();
        if (selectedMenu == '1') {
            checkInAntrian(id_barcode);
        } else if (selectedMenu == '2') {
            getDetailAntrian(id_barcode);
        } else if (selectedMenu == '3') {
            getDetailAntrian(id_barcode);
        }

        // timer for next scan
        setTimeout(() => {
            htmlscanner.start();
        }, 10000);
    }

    let htmlscanner = new Html5QrcodeScanner(
        "my-qr-reader", {
            fps: 10,
            qrbos: 250
        }
    );

    htmlscanner.render(onScanSuccess);


});



function handleBarcodeInput(event) {
    // Check if "Enter" key is pressed
    if (event.keyCode === 13) {

        const barcode = event.target.value;
        // alert(barcode);

        const barcodeString = barcode.toString();
        // alert(selectedMenu);
        if (selectedMenu == '1') {
            checkInAntrian(barcodeString);
        } else if (selectedMenu == '2') {
            getDetailAntrian(barcodeString);
        } else if (selectedMenu == '3') {
            getDetailAntrian(barcodeString);
        }

        // Clear the input field
        event.target.value = "";

    }
}

document.getElementById("barcodeInput").addEventListener("keypress", handleBarcodeInput);
</script>


<?= $this->endSection('dataTables'); ?>