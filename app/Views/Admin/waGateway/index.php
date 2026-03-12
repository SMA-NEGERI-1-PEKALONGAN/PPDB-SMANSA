<?= $this->extend('Templates/index'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4 text-center mb-4">WhatsApp Gateway</h4>
                <!-- card to load qr code -->
                <div class="card">
                    <div class="card-body">
                        <div class="row" id="qrCode" style="display: none;">
                            <div class="col-md-12">
                                <div id="qr_codes" class="qr_codes mt-2">

                                </div>

                                <!-- <div class="spinner-border text-primary mx-auto d-block load-qrcode" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div> -->

                                <style>
                                .qr_codes {
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    height: 100%;
                                }

                                @media (max-width: 768px) {
                                    .text_btn {
                                        display: none;
                                    }

                                    .status_gateway {
                                        margin-top: 20px;
                                    }
                                }
                                </style>

                            </div>
                        </div>
                        <div class="row mt-3" id="statusGateway" style="display: none;">
                            <div class="col-md-6">
                                <div class="text-center mb-3">
                                    <h5 class="text-center">Informasi</h5>
                                    <div class="form-group row mt-4">
                                        <label for="phone_number" class="col-sm-4 col-form-label">Nomor whatsapp</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="phone_number"
                                                name="phone_number" placeholder="Phone Number" value="" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="api_key" class="col-sm-4 col-form-label">API Key</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="api_key" name="api_key"
                                                placeholder="API Key" value="" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-center status_gateway">
                                <i class="fa fa-check-circle text-success" style="font-size: 50px;"></i>
                                <p class="text-success">Connected</p>
                                <button class="btn btn-danger mx-auto my-4 stopWaGateway">
                                    <i class="fa fa-power-off"></i> <span class="text_btn">
                                        Stop
                                        <span>
                                </button>
                                <button class="btn btn-success mx-auto my-4" data-toggle="modal"
                                    data-target="#sendMessage" type="button">
                                    <i class="fa fa-paper-plane"> </i> <span class="text_btn">
                                        Test
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-success mx-auto my-4 d-none" id="startWaGateway">Start
                                </button>
                                <button class="btn btn-primary  mx-auto d-none my-4" id="generateQR">
                                    Generate QR Code
                                </button>
                                <button class="btn btn-danger mx-auto d-none my-4 stopWaGateway" id="stopWaGateway">
                                    <i class="fa fa-power-off"></i> <span class="text_btn">
                                        Stop
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-black h4 text-center mb-4">Kirim Wa</h4>
                <div class="text-right mb-3">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#importDataSiswa"
                        type="button">
                        <i class="icon-copy fa fa-upload" aria-hidden="true"></i> Import Pesan
                    </a>
                </div>
                <div class="col-12">
                    <table class="table stripe hover nowrap" id="tableDataSiswa" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Whatsapp</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data will be loaded here via AJAX -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- modal sendMessage -->
<div class="modal fade" id="sendMessage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Send message
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="formSendMessage">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="phoneNumber" class="col-sm-4 col-form-label">Nomor whatsapp</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber"
                                placeholder="Phone Number" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="message" class="col-sm-4 col-form-label">Pesan</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btnSendMessage">
                            Kirim Pesan
                        </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Batal
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal import data siswa -->
<div class="modal fade" id="importDataSiswa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Import Data Pesan
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="form_import">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="file" class="col-sm-4 col-form-label">File Excel</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="file" name="file" required>
                            <div class="form-control-feedback mb-4" id="errorfile"></div>

                            <small class="text-danger">* File Excel harus sesuai dengan template yang telah
                                disediakan
                                <a href="<?= base_url('Assets/Template/FORMAT_PESAN_BROADCAST.xlsx') ?>">Download
                                    Template</a></small>
                            </small>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label for="file" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <a href="<?= base_url('Assets/Template/TemplateDataSiswa.xlsx') ?>" class="btn btn-success"
                                download>
                                <i class="fa fa-download"></i> Download Template
                            </a>
                        </div>
                    </div> -->
                    <!-- <div class="form-group row">
                        <label for="file" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar" id="progressBar" role="progressbar" style="width: 0%"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary" id="btn_tambah_user">
                        Import
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection('content');?>


<?= $this->section('dataTables');?>
<script text="text/javascript">
function getSwall(status, message) {
    swal({
        title: message,
        type: status == '200' ? 'success' : 'error',
        showCancelButton: false,
        showConfirmButton: true,
        timer: 1500

    })
}


// start wa gateway
function startWaGateway() {
    $.ajax({
        url: '<?= base_url('Admin/waGateway/startWaGateway') ?>',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.status == '200') {
                $('#startWaGateway').html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
                );
                setTimeout(function() {
                    getStatus();
                    $('#startWaGateway').html('Start');
                }, 10000);
            } else {
                $('#startWaGateway').html('Start');
                getSwall(response.status, response.message);
            }
        },
        error: function(response) {

            $('#startWaGateway').html('Start');
            getSwall('error', 'Server Error');
        }
    });
}

// get status
function getStatus() {
    $.ajax({
        url: '<?= base_url('Admin/waGateway/getStatus') ?>',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if (response.status == '200') {
                if (response.data) {
                    $('#phone_number').val(response.data.phoneNumber);
                    $('#api_key').val(response.data.apiKey);
                    $('#statusGateway').show();
                    $('#qrCode').hide();
                    $('#startWaGateway').addClass('d-none');
                    $('#startWaGateway').removeClass('d-block');
                    $('#generateQR').addClass('d-none');
                    $('#stopWaGateway').addClass('d-none');
                } else {
                    $('#qrCode').show();
                    $('#statusGateway').hide();
                    $('#startWaGateway').removeClass('d-block');
                    $('#startWaGateway').addClass('d-none');
                    $('#generateQR').removeClass('d-none');
                    $('#stopWaGateway').removeClass('d-none');
                }
            } else {
                $('#statusGateway').hide();
                $('#generateQR').addClass('d-none');
                $('#qrCode').hide();
                $('#startWaGateway').removeClass('d-none');
                $('#startWaGateway').addClass('d-block');
                $('#stopWaGateway').addClass('d-none');
            }
        },
        error: function(response) {
            $('#statusGateway').hide();
            $('#generateQR').addClass('d-none');
            $('#qrCode').hide();
            $('#startWaGateway').removeClass('d-none');
            $('#startWaGateway').addClass('d-block');
            $('#stopWaGateway').addClass('d-none');
        }

    });
}

$(document).ready(function() {
    getStatus();
});

// set time out status
setInterval(function() {
    getStatus();
}, 5000);

// Generate the QR code
const generateQRCode = (url) => {
    const qrcode = new QRCode("qr_codes", {
        text: url,
        width: 256,
        height: 256,
    });
};

// send get barcode
function getBarCode() {
    $.ajax({
        url: '<?= base_url('Admin/waGateway/getBarCode') ?>',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if (response.status == '200') {
                $('#generateQR').html('Generate QR Code');
                $('#qr_codes').html('');
                generateQRCode(response.data);
                // alert(response.data);
            } else {
                getSwall(response.status, response.message);
                $('#generateQR').html('Generate QR Code');
            }
        }
    });
}

// stop wa gateway
$('.stopWaGateway').click(function() {
    $.ajax({
        url: '<?= base_url('Admin/waGateway/stopWaGateway') ?>',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.status == '200') {
                getSwall(response.status, response.message);
                getStatus();
                $('#qr_codes').html('');
            } else {
                getSwall(response.status, response.message);
            }
        }
    });
});


// send message
$('#formSendMessage').submit(function(e) {
    e.preventDefault();
    $('#btnSendMessage').html(
        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
    );
    const formData = new FormData(this);
    $.ajax({
        url: '<?= base_url('Admin/waGateway/sendMessage') ?>',
        type: 'POST',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(response) {
            if (response.status == '200') {
                getSwall(response.status, response.message);
                $('#sendMessage').modal('hide');
                $('#btnSendMessage').html('Kirim Pesan');
                $('#formSendMessage').trigger('reset');
            } else {
                $('#btnSendMessage').html('Kirim Pesan');
                getSwall(response.status, response.message);
            }
        }
    });
});

$('#startWaGateway').click(function() {
    $('#startWaGateway').html(
        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
    );
    startWaGateway();
});
$('#generateQR').click(function() {
    $('#generateQR').html(
        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
    );
    getBarCode();
});



// import data siswa
$('#form_import').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: '<?= base_url('Admin/waGateway/sendMessageToAll') ?>',
        type: 'POST',
        data: formData,
        dataType: 'json',
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {
            $('#btn_tambah_user').attr('disabled', 'disabled');
            $('#btn_tambah_user').html('<i class="fa fa-spin fa-spinner"></i>');
        },
        // xhr: function() {
        //     var xhr = new window.XMLHttpRequest();
        //     xhr.upload.addEventListener("progress", function(evt) {
        //         if (evt.lengthComputable) {
        //             var percentComplete = ((evt.loaded / evt.total) * 100);
        //             $('#progressBar').width(percentComplete + '%');
        //             $('#progressBar').html(percentComplete + '%');
        //         }
        //     }, false);
        //     return xhr;
        // },
        success: function(response) {
            if (response.error) {
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
                $('#btn_tambah_user').removeAttr('disabled');
                $('#btn_tambah_user').html('Import');
            } else {
                getSwall('200', 'Data berhasil dikirim');
                $('#importDataSiswa').modal('hide');
                $('#form_import')[0].reset();
                $('#progressBar').width('0%');
                $('#progressBar').html('0%');
                $('#btn_tambah_user').removeAttr('disabled');
                $('#btn_tambah_user').html('Import');
                $('#file').removeClass('form-control-danger');
                $('#errorfile').removeClass('has-danger');
                $('#errorfile').html('');
                // apend data to table tbody tableDataSiswa
                $('#tableDataSiswa tbody').empty();
                $.each(response.data.result, function(index, value) {
                    $('#tableDataSiswa tbody').append(
                        '<tr><td>' + (index + 1) + '</td><td>' + value.data +
                        '</td><td>' +
                        value.status + '</td></tr>'
                    );
                });
            }
        },
        error: function(response) {
            $('#btn_tambah_user').removeAttr('disabled');
            $('#btn_tambah_user').html('Import');
            getSwall('error', 'Terjadi kesalahan saat mengimport data');
        }
    });
});
</script>

<script type="text/javascript">

</script>

<?= $this->endSection('dataTables');?>