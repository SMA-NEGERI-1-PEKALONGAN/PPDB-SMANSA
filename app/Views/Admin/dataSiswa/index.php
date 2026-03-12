<?= $this->extend('Templates/index'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card-box mb-30">
            <div class="pd-20">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h4 class="text-blue h4">Master Data Siswa</h4>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#importDataSiswa"
                            type="button">
                            <i class="icon-copy fa fa-upload" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="btn btn-danger" id="hapusDataSiswa" type="button">
                            <i class="icon-copy fa fa-trash" aria-hidden="true"></i>
                        </a>

                    </div>
                </div>
                <div class="pb-20 table-responsive">
                    <table class="table hover multiple-select-row nowrap" id="tableDataSiswa">
                        <thead>
                            <tr>
                                <th class="t">No Urut</th>
                                <th>No Peserta</th>
                                <th class="">Nama Siswa</th>
                                <th>JK</th>
                                <th>Asal Sekolah</th>
                                <th>Tanggal</th>
                                <th>Sesi</th>
                                <th>Waktu</th>
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

<!-- modal import data siswa -->
<div class="modal fade" id="importDataSiswa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Import Data Siswa
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

                            <small class="text-danger">* File Excel harus sesuai dengan template yang telah disediakan
                                <a href="#" id="downloadTemplate">Download Template</a>
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
// dataTables data siswa
function dataTablesDataSiswa() {
    $(document).ready(function() {
        $('#tableDataSiswa').DataTable({
            processing: true,
            serverSide: true,
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            ajax: "<?php echo base_url('Admin/DataSiswa/DataTables') ?>",
            "lengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            columns: [{
                    data: 'no_urut'
                },
                {
                    data: 'nisn'
                },
                {
                    data: 'nama_siswa'
                },
                {
                    data: 'jenis_kelamin'
                },
                {
                    data: 'asal_sekolah'
                },
                {
                    data: 'tanggal'
                },
                {
                    data: 'sesi'
                },
                {
                    data: 'waktu'
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

$(document).ready(function() {
    dataTablesDataSiswa();
});

function getSwall(status, message) {
    swal({
        title: message,
        type: status == '200' ? 'success' : 'error',
        showCancelButton: false,
        showConfirmButton: true,
        timer: 1500

    })
}

// import data siswa
$('#form_import').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: '<?= base_url('Admin/DataSiswa/Import') ?>',
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
                getSwall('200', response.data);
                $('#importDataSiswa').modal('hide');
                $('#tableDataSiswa').DataTable().ajax.reload();
                $('#form_import')[0].reset();
                $('#progressBar').width('0%');
                $('#progressBar').html('0%');
                $('#btn_tambah_user').removeAttr('disabled');
                $('#btn_tambah_user').html('Import');
                $('#file').removeClass('form-control-danger');
                $('#errorfile').removeClass('has-danger');
                $('#errorfile').html('');
            }
        },
    });
});

// hapus data siswa
$('#hapusDataSiswa').click(function() {
    swal({
            title: "Apakah Anda Yakin?",
            text: "Data Siswa yang dihapus tidak dapat dikembalikan!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Batal",
            closeOnConfirm: false,
            closeOnCancel: true
        })
        .then((result) => {
            if (result.value) {
                $.ajax({
                    url: '<?= base_url('Admin/DataSiswa/deleteAll') ?>',
                    method: 'post',
                    dataType: 'json',
                    success: function(response) {
                        getSwall('200', response.data);
                        $('#tableDataSiswa').DataTable().ajax.reload();
                    }
                });
            }

        });
});

// download template
$('#downloadTemplate').click(function() {
    window.location.href = '<?= base_url('Assets/Template/TEMPLATE IMPORT DITRIMA.xlsx') ?>';
});
</script>



<!-- switchery js -->
<script src="<?= base_url('Assets/'); ?>src/plugins/switchery/switchery.min.js"></script>
<script src="<?= base_url('Assets/'); ?>vendors/scripts/advanced-components.js"></script>
<?= $this->endSection('dataTables');?>