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
                                <th class="table-plus">Nama</th>
                                <th>Kode</th>
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
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h4 class="text-blue h4">Master Referensi</h4>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addReferensi"
                            type="button">
                            <i class="icon-copy fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="pb-20 table-responsive">
                    <table class="table hover multiple-select-row nowrap" id="tableReferensi">
                        <thead>
                            <tr>
                                <th class="table-plus">Nama Referensi</th>
                                <th>Kode Referensi</th>
                                <th>Nama Kategori</th>
                                <th>Urutan</th>
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

<!-- ======================================== KATEGORI ======================================== -->
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
                        <label for="nama_kategori" class="col-sm-4 col-form-label">Nama <span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="nama_kategori" name="nama_kategori">
                            <div class="form-control-feedback " id="errornama_kategori"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_kategori" class="col-sm-4 col-form-label">Kode<span
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

<!-- modal edit -->
<div class="modal fade" id="editKategori" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Edit Kategori
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="form_edit_kategori">
                <div class="modal-body">
                    <div class="form-group row">
                        <input type="hidden" class="form-control required" id="editid_kategori" name="editid_kategori">
                        <label for="nama_kategori" class="col-sm-4 col-form-label">Nama <span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="editnama_kategori"
                                name="editnama_kategori">
                            <div class="form-control-feedback " id="erroreditnama_kategori"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_kategori" class="col-sm-4 col-form-label">Kode<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="editkode_kategori"
                                name="editkode_kategori">
                            <div class="form-control-feedback " id="erroreditkode_kategori"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary" id="btn_edit_kategori">
                        Edit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ======================================== END KATEGORI ======================================== -->



<!-- ======================================== REFERENSI ======================================== -->
<div class="modal fade" id="addReferensi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Tambah Referensi
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="form_tambah_referensi">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_referensi" class="col-sm-4 col-form-label">Nama <span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="nama_referensi" name="nama_referensi">
                            <div class="form-control-feedback " id="errornama_referensi"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_referensi" class="col-sm-4 col-form-label">Kode<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="kode_referensi" name="kode_referensi">
                            <div class="form-control-feedback " id="errorkode_referensi"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori_id" class="col-sm-4 col-form-label">Kategori<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <select class="form-control required" id="kategori_id" name="kategori_id">

                            </select>
                            <div class="form-control-feedback " id="errorkategori_id"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary" id="btn_tambah_referensi">
                        Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal edit -->
<div class="modal fade" id="editreferensi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Edit Referensi
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="form_edit_referensi">
                <div class="modal-body">
                    <div class="form-group row">
                        <input type="hidden" class="form-control required" id="editid_referensi"
                            name="editid_referensi">
                        <label for="nama_referensi" class="col-sm-4 col-form-label">Nama <span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="editnama_referensi"
                                name="editnama_referensi">
                            <div class="form-control-feedback " id="erroreditnama_referensi"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_referensi" class="col-sm-4 col-form-label">Kode<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="editkode_referensi"
                                name="editkode_referensi">
                            <div class="form-control-feedback " id="erroreditkode_referensi"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori_id" class="col-sm-4 col-form-label">Kategori<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <select class="form-control required" id="editkategori_id" name="editkategori_id">

                            </select>
                            <div class="form-control-feedback " id="erroreditkategori_id"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary" id="btn_edit_referensi">
                        Edit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ======================================== END REFERENSI ======================================== -->

<?= $this->endSection('content');?>

<?= $this->section('dataTables');?>

<script text="text/javascript">
// dataTables Kategori


function dataTablesKategori() {
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
                    data: 'status_kategori',
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

// dataTables Referensi
function dataTableReferensi() {
    $(document).ready(function() {
        $('#tableReferensi').DataTable({
            processing: true,
            serverSide: true,
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            ajax: "<?php echo base_url('Admin/Referensi/DataTables') ?>",
            "lengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            columns: [{
                    data: 'nama_referensi',
                    class: 'table-plus'
                },
                {
                    data: 'kode_referensi'
                },
                {
                    data: 'nama_kategori'
                },
                {
                    data: 'urutan'
                },
                {
                    data: 'status_referensi',
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
    dataTablesKategori();
    dataTableReferensi();
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

// ======================================== Kategori ========================================

// DATA
const Kategori = [
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
                url: '<?= base_url('Admin/Kategori/save') ?>',
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
                        getSwall(response.status, response.data);
                        Kategori.forEach(function(item) {
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

// edit kategori
$(document).on('click', '.edit_kategori', function() {
    const id = $(this).attr('id');
    $.ajax({
        url: '<?= base_url('Admin/Kategori/edit') ?>',
        method: 'post',
        data: {
            id_kategori: id
        },
        dataType: 'json',
        success: function(response) {
            $('#editKategori').modal('show');
            $.each(response.data, function(key, value) {
                $('#edit' + key).val(value);
            });
        }
    });
});

// update kategori
$(function() {
    $("#form_edit_kategori").submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        if (!this.checkValidity()) {
            e.preventDefault();
            $(this).addClass('form-control-success');
        } else {
            $("#btn_edit_kategori").attr("disabled", "disabled");
            $("#btn_edit_kategori").html("Loading.....");
            $.ajax({
                url: '<?= base_url('Admin/Kategori/update') ?>',
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
                                $("#" + key).addClass('has-danger');
                                $("#error" + key).html(value);
                            } else {
                                $("#" + key).removeClass('form-control-danger');
                                $("#" + key).addClass('form-control-success');
                                $("#error" + key).html('');
                                $("#error" + key).removeClass('has-danger');
                            }
                        });
                    } else {
                        $("#form_edit_kategori")[0].reset();
                        $("#editKategori").modal('hide');
                        $('#tableKategori').DataTable().ajax.reload();
                        getSwall(response.status, response.data);
                        Kategori.forEach(function(item) {
                            $("#" + item).removeClass('form-control-danger');
                            $("#" + item).removeClass('form-control-success');
                            $("#error" + item).html('');
                            $("#error" + item).removeClass('has-danger');
                        });
                    }
                    $("#btn_edit_kategori").removeAttr("disabled");
                    $("#btn_edit_kategori").html("Edit");
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
            confirmButtonClass: "btn btn-success margin-5",
            cancelButtonText: "Batal",
        })
        .then((result) => {
            if (result.value) {
                $.ajax({
                    url: '<?= base_url('Admin/Kategori/delete') ?>',
                    method: 'post',
                    data: {
                        id_kategori: id
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#tableKategori').DataTable().ajax.reload();
                        $('#tableReferensi').DataTable().ajax.reload();
                        getSwall(response.status, response.data);
                    }
                });
            }
        });
});

// ======================================== END Kategori ========================================


// ======================================== Referensi ========================================
// DATA
const Referensi = [
    'nama_referensi',
    'kode_referensi',
    'kategori_id'
];

// whe add referensi modal show
$('#addReferensi').on('show.bs.modal', function() {
    $.ajax({
        url: '<?= base_url('Admin/Kategori/fetch') ?>',
        method: 'get',
        dataType: 'json',
        success: function(response) {
            $('#kategori_id').html('');
            $('#kategori_id').append('<option value="">Pilih Kategori</option>');
            $.each(response.data, function(key, value) {
                $('#kategori_id').append('<option value="' + value.id_kategori + '">' +
                    value.nama_kategori +
                    '</option>');
            });
        }
    });
});

// tambah referensi
$(function() {
    $("#form_tambah_referensi").submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        if (!this.checkValidity()) {
            e.preventDefault();
            $(this).addClass('form-control-success');
        } else {
            $("#btn_tambah_referensi").attr("disabled", "disabled");
            $("#btn_tambah_referensi").html("Loading.....");
            $.ajax({
                url: '<?= base_url('Admin/Referensi/save') ?>',
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
                        $("#form_tambah_referensi")[0].reset();
                        $("#addReferensi").modal('hide');
                        $('#tableReferensi').DataTable().ajax.reload();
                        getSwall(response.status, response.data);
                        Referensi.forEach(function(item) {
                            $("#" + item).removeClass('form-control-danger');
                            $("#" + item).removeClass('form-control-success');
                            $("#error" + item).html('');
                            $("#error" + item).removeClass('has-danger');
                        });
                    }
                    $("#btn_tambah_referensi").removeAttr("disabled");
                    $("#btn_tambah_referensi").html("Tambah");
                }
            });
        }
    });
});

// edit referensi
$(document).on('click', '.edit_referensi', function() {
    const id = $(this).attr('id');
    $.ajax({
        url: '<?= base_url('Admin/Referensi/edit') ?>',
        method: 'post',
        data: {
            id_referensi: id
        },
        dataType: 'json',
        success: function(response) {
            $('#editreferensi').modal('show');
            $.each(response.data, function(key, value) {
                $('#edit' + key).val(value);
            });
            let dataKategori = response.data.kategori_id;

            $.ajax({
                url: '<?= base_url('Admin/Kategori/fetch') ?>',
                method: 'get',
                dataType: 'json',
                success: function(response) {
                    $('#editkategori_id').html('');
                    $('#editkategori_id').append(
                        '<option value="">Pilih Kategori</option>');
                    $.each(response.data, function(key, value) {
                        $('#editkategori_id').append('<option value="' + value
                            .id_kategori + '" ' + (dataKategori == value
                                .id_kategori ?
                                'selected' : '') + '>' +
                            value.nama_kategori +
                            '</option>');
                    });
                    $('#editkategori_id').val(dataKategori);
                }
            });
        }
    });
});

// update referensi
$(function() {
    $("#form_edit_referensi").submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        if (!this.checkValidity()) {
            e.preventDefault();
            $(this).addClass('form-control-success');
        } else {
            $("#btn_edit_referensi").attr("disabled", "disabled");
            $("#btn_edit_referensi").html("Loading.....");
            $.ajax({
                url: '<?= base_url('Admin/Referensi/update') ?>',
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
                                $("#" + key).addClass('has-danger');
                                $("#error" + key).html(value);
                            } else {
                                $("#" + key).removeClass('form-control-danger');
                                $("#" + key).addClass('form-control-success');
                                $("#error" + key).html('');
                                $("#error" + key).removeClass('has-danger');
                            }
                        });
                    } else {
                        $("#form_edit_referensi")[0].reset();
                        $("#editreferensi").modal('hide');
                        $('#tableReferensi').DataTable().ajax.reload();
                        getSwall(response.status, response.data);
                        Referensi.forEach(function(item) {
                            $("#" + item).removeClass('form-control-danger');
                            $("#" + item).removeClass('form-control-success');
                            $("#error" + item).html('');
                            $("#error" + item).removeClass('has-danger');
                        });
                    }
                    $("#btn_edit_referensi").removeAttr("disabled");
                    $("#btn_edit_referensi").html("Edit");
                }
            });
        }
    });
});

// delete referensi
$(document).on('click', '.delete_referensi', function() {
    const id = $(this).attr('id');
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
                    url: '<?= base_url('Admin/Referensi/delete') ?>',
                    method: 'post',
                    data: {
                        id_referensi: id
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#tableReferensi').DataTable().ajax.reload();
                        getSwall(response.status, response.data);
                    }
                });
            }
        });
});
</script>


<?= $this->endSection('dataTables');?>