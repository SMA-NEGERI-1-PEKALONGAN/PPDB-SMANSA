<?= $this->extend('Templates/index'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card-box mb-30">
            <div class="pd-20">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h4 class="text-blue h4">Master users</h4>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addUser" type="button">
                            <i class="icon-copy fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="pb-20 table-responsive">
                    <table class="table hover multiple-select-row nowrap" id="tableUsers">
                        <thead>
                            <tr>
                                <th class="table-plus">Nama</th>
                                <th>Role</th>
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

<!-- ======================================== users ======================================== -->
<!-- modal addUser -->
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Tambah User
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="form_tambah_user">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_user" class="col-sm-4 col-form-label">Nama User<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="nama_user" name="nama_user">
                            <div class="form-control-feedback " id="errornama_user"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-4 col-form-label">Username<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="username" name="username">
                            <div class="form-control-feedback " id="errorusername"></div>
                        </div>
                    </div>
                    <!-- select -->
                    <div class="form-group row">
                        <label for="role" class="col-sm-4 col-form-label">Role<span class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <select class="form-control required" id="role" name="role">

                            </select>
                            <div class="form-control-feedback " id="errorrole"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary" id="btn_tambah_user">
                        Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal edit -->
<div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Edit users
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="form_edit_users">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="editnama_user" class="col-sm-4 col-form-label">Nama User<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="editnama_user" name="nama_user">
                            <div class="form-control-feedback " id="erroreditnama_user"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editusername" class="col-sm-4 col-form-label">Username<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="editusername" name="username">
                            <div class="form-control-feedback " id="erroreditusername"></div>
                        </div>
                    </div>
                    <!-- select -->
                    <div class="form-group row">
                        <label for="editrole" class="col-sm-4 col-form-label">Role<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <select class="form-control required" id="editrole" name="role">

                            </select>
                            <div class="form-control-feedback " id="erroreditrole"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary" id="btn_edit_users">
                        Edit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ======================================== END users ======================================== -->


<?= $this->endSection('content');?>

<?= $this->section('dataTables');?>

<script text="text/javascript">
// dataTables users
function dataTablesUsers() {
    $(document).ready(function() {
        $('#tableUsers').DataTable({
            processing: true,
            serverSide: true,
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            ajax: "<?php echo base_url('Admin/User/DataTables') ?>",
            "lengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            columns: [{
                    data: 'nama_user',
                    class: 'table-plus'
                },
                {
                    data: 'role'
                },
                {
                    data: 'status_user',
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
    dataTablesUsers();
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

// ======================================== users ========================================

// DATA
const users = [
    'nama_users',
    'username',
    'role'
];

// whe add user modal show
$('#addUser').on('show.bs.modal', function() {
    $.ajax({
        url: '<?= base_url('Admin/Referensi/fetchKodeKategori/ROLE') ?>',
        method: 'get',
        dataType: 'json',
        success: function(response) {
            $('#role').html('');
            $('#role').append('<option value="">Pilih Role</option>');
            $.each(response.data, function(key, value) {
                $('#role').append('<option value="' + value.nama_referensi + '">' + value
                    .nama_referensi +
                    '</option>');
            });
        }
    });
});

// tambah 
$(function() {
    $("#form_tambah_user").submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        if (!this.checkValidity()) {
            e.preventDefault();
            $(this).addClass('form-control-success');
        } else {
            $("#btn_tambah_user").attr("disabled", "disabled");
            $("#btn_tambah_user").html("Loading.....");
            $.ajax({
                url: '<?= base_url('Admin/User/save') ?>',
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
                                $("#error" + key).addClass('has-danger');
                                $("#error" + key).html(value);
                            } else {
                                $("#" + key).removeClass('form-control-danger');
                                $("#" + key).addClass('form-control-success');
                                $("#error" + key).html('');
                                $("#error" + key).removeClass('has-danger');
                            }
                        });
                    } else {
                        $("#form_tambah_user")[0].reset();
                        $("#addUser").modal('hide');
                        $('#tableUsers').DataTable().ajax.reload();
                        getSwall(response.status, response.data);
                        users.forEach(function(item) {
                            $("#" + item).removeClass('form-control-danger');
                            $("#" + item).removeClass('form-control-success');
                            $("#error" + item).html('');
                            $("#error" + item).removeClass('has-danger');
                        });
                    }
                    $("#btn_tambah_user").removeAttr("disabled");
                    $("#btn_tambah_user").html("Tambah");
                }
            });
        }
    });
});

// edit user
$(document).on('click', '.edit_user', function() {
    const id = $(this).attr('id');
    $.ajax({
        url: '<?= base_url('Admin/user/edit') ?>',
        method: 'post',
        data: {
            id_user: id
        },
        dataType: 'json',
        success: function(response) {
            $('#edituser').modal('show');
            $.each(response.data, function(key, value) {
                $('#edit' + key).val(value);
            });
            let datausers = response.data.users_id;

            $.ajax({
                url: '<?= base_url('Admin/users/fetch') ?>',
                method: 'get',
                dataType: 'json',
                success: function(response) {
                    $('#editusers_id').html('');
                    $('#editusers_id').append(
                        '<option value="">Pilih users</option>');
                    $.each(response.data, function(key, value) {
                        $('#editusers_id').append('<option value="' + value
                            .id_users + '" ' + (datausers == value
                                .id_users ?
                                'selected' : '') + '>' +
                            value.nama_users +
                            '</option>');
                    });
                    $('#editusers_id').val(datausers);
                }
            });
        }
    });
});

// update user
$(function() {
    $("#form_edit_user").submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        if (!this.checkValidity()) {
            e.preventDefault();
            $(this).addClass('form-control-success');
        } else {
            $("#btn_edit_user").attr("disabled", "disabled");
            $("#btn_edit_user").html("Loading.....");
            $.ajax({
                url: '<?= base_url('Admin/user/update') ?>',
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
                        $("#form_edit_user")[0].reset();
                        $("#edituser").modal('hide');
                        $('#tableuser').DataTable().ajax.reload();
                        getSwall(response.status, response.data);
                        user.forEach(function(item) {
                            $("#" + item).removeClass('form-control-danger');
                            $("#" + item).removeClass('form-control-success');
                            $("#error" + item).html('');
                            $("#error" + item).removeClass('has-danger');
                        });
                    }
                    $("#btn_edit_user").removeAttr("disabled");
                    $("#btn_edit_user").html("Edit");
                }
            });
        }
    });
});

// delete user
$(document).on('click', '.delete_user', function() {
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
                    url: '<?= base_url('Admin/user/delete') ?>',
                    method: 'post',
                    data: {
                        id_user: id
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#tableuser').DataTable().ajax.reload();
                        getSwall(response.status, response.data);
                    }
                });
            }
        });
});
</script>

<!-- switchery js -->
<script src="<?= base_url('Assets/'); ?>src/plugins/switchery/switchery.min.js"></script>
<script src="<?= base_url('Assets/'); ?>vendors/scripts/advanced-components.js"></script>
<?= $this->endSection('dataTables');?>