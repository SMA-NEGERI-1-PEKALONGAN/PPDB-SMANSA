<?= $this->extend('Templates/index'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card-box mb-30">
            <div class="pd-20">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h4 class="text-blue h4">Data Antrian</h4>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addAntrian" type="button">
                            <i class="icon-copy fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="pb-20 table-responsive">
                    <table class="table hover multiple-select-row nowrap" id="tableAntrian">
                        <thead>
                            <tr>
                                <th class="table-plus">Kode Regristrasi</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addAntrian" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Tambah Antrian
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="form_tambah_antrian" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_siswa" class="col-sm-4 col-form-label">Nama Siswa<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="nama_siswa" name="nama_siswa"
                                placeholder="Masukan nama">
                            <div class="form-control-feedback " id="errornama_siswa"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nisn" class="col-sm-4 col-form-label">Nisn<span class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="nisn" name="nisn"
                                placeholder="Masukan NSIN">
                            <div class="form-control-feedback" id="errornisn"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <select class="form-control required" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            <div class="form-control-feedback " id="errorjenis_kelamin"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="kode_pendaftaran" class="col-sm-4 col-form-label">Kode Pendaftaran<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="kode_pendaftaran"
                                name="kode_pendaftaran" placeholder="Masukan kode pendaftaran ">
                            <div class="form-control-feedback " id="errorkode_pendaftaran"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="asal_sekolah" class="col-sm-4 col-form-label">Asal Sekolah<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="asal_sekolah" name="asal_sekolah"
                                placeholder="Masukan asal sekolah ">
                            <div class="form-control-feedback " id="errorasal_sekolah"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_tlp" class="col-sm-4 col-form-label">No telpon<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="no_tlp" name="no_tlp"
                                placeholder="Masukan no telpom ">
                            <div class="form-control-feedback " id="errorno_tlp"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-sm-4 col-form-label">alamat<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <textarea class="form-control required" id="alamat" name="alamat"
                                placeholder="Masukan alamat "></textarea>
                            <div class="form-control-feedback " id="erroralamat"></div>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="jalur_pendaftaran" class="col-sm-4 col-form-label">Jalur Pendaftaran<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <select class="form-control required" id="jalur_pendaftaran" name="jalur_pendaftaran">
                                <option value="">Pilih Jalur Pendaftaran</option>
                                <option value="Zonasi">Zonasi</option>
                                <option value="Afirmasi">Afirmasi</option>
                                <option value="Perpindahan Orang Tua">Perpindahan Orang Tua</option>
                                <option value="Prestasi">Prestasi</option>
                            </select>
                            <div class="form-control-feedback " id="errorjalur_pendaftaran"></div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary" id="btn_tambah_antiran">
                        Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- details -->
<div class="modal fade" id="detailsAntrian" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Detail Antrian
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
                    <label for="no_tlp" class="col-sm-4 col-form-label">No telpon</label></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="detailno_tlp" name="no_tlp" placeholder="No telpon"
                            readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-4 col-form-label">alamat</label></label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="detailalamat" name="alamat" placeholder="Alamat"
                            readonly></textarea>
                    </div>
                </div>
                <div class="form-group row ">
                    <label for="jalur_pendaftaran" class="col-sm-4 col-form-label">Jalur Pendaftaran</label></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="detailjalur_pendaftaran" name="jalur_pendaftaran"
                            placeholder="Jalur Pendaftaran" readonly>
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

<?= $this->endSection('content');?>

<?= $this->section('dataTables');?>

<script text="text/javascript">
// dataTables users
function dataTablesAntrian() {
    $(document).ready(function() {
        $('#tableAntrian').DataTable({
            processing: true,
            serverSide: true,
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            ajax: "<?php echo base_url('Admin/Antrian/DataTables') ?>",
            "lengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            columns: [{
                    data: 'nama_siswa',
                    class: 'table-plus'
                },
                {
                    data: 'kode_pendaftaran'
                },
                {
                    data: 'status_antrian',
                },
                {
                    data: 'action',
                    class: 'datatable-nosort'
                },

            ],
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: false,
            }],
        });
    });
}
dataTablesAntrian();


function getSwall(status, message) {
    swal({
        title: message,
        type: status == '200' ? 'success' : 'error',
        showCancelButton: false,
        showConfirmButton: true,
        timer: 1500

    })
}

const listFields = ['nama_siswa', 'nisn', 'jenis_kelamin', 'kode_pendaftaran', 'asal_sekolah', 'no_tlp', 'alamat',
    'jalur_pendaftaran'
];

// tambah user
$("#form_tambah_antrian").submit(function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    if (!this.checkValidity()) {
        e.preventDefault();
        $(this).addClass('form-control-success');
    } else {
        $("#btn_tambah_antiran").attr("disabled", "disabled");
        $("#btn_tambah_antiran").html("Loading.....");
        $.ajax({
            url: '<?= base_url('Admin/Antrian/save') ?>',
            method: 'post',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
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
                    $("#btn_tambah_antiran").removeAttr("disabled");
                    $("#btn_tambah_antiran").html("Tambah");
                } else {
                    $("#form_tambah_antrian")[0].reset();
                    $("#addAntrian").modal('hide');
                    $('#tableAntrian').DataTable().ajax.reload();
                    getSwall(response.status, response.data);
                    listFields.forEach(function(item) {
                        $("#" + item).removeClass('form-control-danger');
                        $("#" + item).removeClass('form-control-success');
                        $("#error" + item).html('');
                        $("#error" + item).removeClass('has-danger');
                    });

                    $("#btn_tambah_antiran").removeAttr("disabled");
                    $("#btn_tambah_antiran").html("Tambah");
                }
            }
        });
    }
});

// details user
$(document).on('click', '.detailsAntrian', function() {
    var id = $(this).attr('id');
    $.ajax({
        url: '<?= base_url('Admin/Antrian/edit') ?>',
        method: 'post',
        data: {
            id: id
        },
        dataType: 'json',
        success: function(response) {
            $('#detailsAntrian').modal('show');
            listFields.forEach(function(item) {
                $("#detail" + item).val(response.data[item]);
            });
            $("#detailqr_code").attr('src', '<?= base_url('Assets/qr_code/') ?>' + response.data
                .qr_code);
            $("#detailno_antrian").html(response.data.no_antrian);
            $("#detailsesi_antrian").html(response.data.sesi_antrian);
        }
    });
});

// hapus user
$(document).on('click', '.delete_antrian', function() {
    var id = $(this).attr('id');
    swal({
            title: "Apakah anda yakin?",
            text: "Data yang dihapus tidak dapat dikembalikan!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ya, Hapus!",
            confirmButtonClass: "btn btn-success margin-5",
            cancelButtonText: "Batal",
        })
        .then((result) => {
            if (result.value) {
                $.ajax({
                    url: '<?= base_url('Admin/Antrian/delete') ?>',
                    method: 'post',
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#tableAntrian').DataTable().ajax.reload();
                        getSwall(response.status, response.data);
                    }
                });
            }
        });
});
// copy clipboard

// Function to handle barcode input
function handleBarcodeInput(event) {
    // Check if "Enter" key is pressed
    if (event.keyCode === 13) {
        // Get the value from the input field
        var barcode = document.getElementById("barcodeInput").value;

        // Do something with the barcode data, like sending it to the server or displaying it
        console.log("Barcode scanned:", barcode);

        // Clear the input field for the next scan
        document.getElementById("barcodeInput").value = "";
    }
}

// Attach event listener to input field
document.getElementById("barcodeInput").addEventListener("keypress", handleBarcodeInput);


// Get the value from the input field
var barcode = document.getElementById("barcodeInput").value;

// Do something with the barcode data, like sending it to the server or displaying it
console.log("Barcode scanned:", barcode);

document.getElementById("barcodeInput").value = "";
</script>

<?= $this->endSection('dataTables');?>s