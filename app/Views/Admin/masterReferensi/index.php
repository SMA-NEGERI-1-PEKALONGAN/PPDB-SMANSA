<?= $this->extend('Templates/index'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-md-6">
        <div class="card-box mb-30">
            <div class="pd-20">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h4 class="text-blue h4">Master Kategori</h4>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addKategori"
                            type="button">
                            <i class="icon-copy fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="pb-20 table-responsive">
                    <table class="table hover multiple-select-row nowrap" id="tableKategori">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Nama Kategori</th>
                                <th>Kode Kategori</th>
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
    <div class="col-md-6">
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Referensi</h4>
            </div>
            <div class="pb-20">
                <table class="data-table table hover multiple-select-row nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Name</th>
                            <th>Age</th>
                            <th>Office</th>
                            <th>Address</th>
                            <th>Start Date</th>
                            <th>Salart</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- modal addKategori -->
<div class="modal fade" id="addKategori" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Tambah Katgori
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="form_tambah_kategori">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_kategori" class="col-sm-4 col-form-label">Nama Kategori <span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="nama_kategori" name="nama_kategori">
                            <div class="form-control-feedback " id="errornama_kategori"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_kategori" class="col-sm-4 col-form-label">Kode Kategori <span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="kode_kategori" name="kode_kategori">
                            <div class="form-control-feedback " id="errorkode_kategori"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary" id="btn_tambah_kategori">
                        Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content');?>

<?= $this->section('dataTables');?>

<script text="text/javascript">
// dataTables Kategori
function dataTablesHakAkses() {
    $(document).ready(function() {
        $('#tableKategori').DataTable({
            processing: true,
            serverSide: true,
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            ajax: "<?php echo base_url('Admin/Kategori/DataTables') ?>",
            "lengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            columns: [{
                    data: 'nama_kategori',
                    class: 'table-plus'
                },
                {
                    data: 'kode_kategori'
                },
                {
                    data: 'status_kategori'
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
    dataTablesHakAkses();
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


// validasi
const addKategori = [
    'nama_kategori',
    'kode_kategori'
];

// tambah kategori
$(function() {
    $("#form_tambah_kategori").submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        if (!this.checkValidity()) {
            e.preventDefault();
            $(this).addClass('form-control-success');
        } else {
            $("#btn_tambah_kategori").attr("disabled", "disabled");
            $("#btn_tambah_kategori").html("Loading.....");
            $.ajax({
                url: '<?= base_url('Admin/Kategori/saveKategori') ?>',
                method: 'post',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.error) {
                        // foeach error 
                        $.each(response.data, function(key, value) {
                            if (value != '') {
                                $("#" + key).addClass('form-control-danger');
                                $("#error" + key).html(value);
                                $("#error" + key).addClass('has-danger');
                            } else {
                                $("#" + key).removeClass('form-control-danger');
                                $("#" + key).addClass('form-control-success');
                                $("#error" + key).html('');
                                $("#error" + key).removeClass('has-danger');
                            }
                        });
                    } else {
                        $("#form_tambah_kategori")[0].reset();
                        $("#addKategori").modal('hide');
                        $('#tableKategori').DataTable().ajax.reload();
                        getSwall(response.status, 'Data berhasil disimpan');
                        addKategori.forEach(function(item) {
                            $("#" + item).removeClass('form-control-danger');
                            $("#" + item).removeClass('form-control-success');
                            $("#error" + item).html('');
                            $("#error" + item).removeClass('has-danger');
                        });
                    }
                    $("#btn_tambah_kategori").removeAttr("disabled");
                    $("#btn_tambah_kategori").html("Tambah");
                }
            });
        }
    });
});

// delete kategori
$(document).on('click', '.delete_kategori', function() {
    const id = $(this).attr('id');
    swal({
        title: "Apakah anda yakin?",
        text: "Data yang dihapus tidak dapat dikembalikan!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ya, Hapus!",
        cancelButtonText: "Batal",
        closeOnConfirm: false,
        closeOnCancel: false
    }).then(function() {
        $.ajax({
            url: '<?= base_url('Admin/Kategori/deleteKategori') ?>',
            method: 'post',
            data: {
                id_kategori: id
            },
            dataType: 'json',
            success: function(response) {
                $('#tableKategori').DataTable().ajax.reload();
                getSwall(response.status, 'Data berhasil dihapus');
            }
        });
    });
});
</script>
<?= $this->endSection('dataTables');?>