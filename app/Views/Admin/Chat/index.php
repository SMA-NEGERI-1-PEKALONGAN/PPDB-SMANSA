<?= $this->extend('Templates/index'); ?>
<?= $this->section('content'); ?>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<div class="row">
    <div class="col-md-12">
        <div class="card-box mb-30">
            <div class="pd-20">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h4 class="text-blue h4">Master Chat Bot</h4>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addChatBot" type="button">
                            <i class="icon-copy fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="pb-20 table-responsive">
                    <table class="table hover multiple-select-row nowrap" id="tableChatBot">
                        <thead>
                            <tr>
                                <th class="table-plus">Judul</th>
                                <th>Pertanyaan</th>
                                <th>Star</th>
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

<!-- ======================================== chat ======================================== -->
<!-- modal addChatBot -->
<div class="modal fade" id="addChatBot" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Tambah Chat Bot
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="form_tambah_chat_bot">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control required" id="judul" name="judul"
                                placeholder="Masukan judul chat bot">
                            <div class="form-control-feedback " id="errorjudul"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pertanyaan" class="col-sm-2 col-form-label">Pertanyaan<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control required" id="pertanyaan" name="pertanyaan"
                                placeholder="Masukan pertanyaan chat bot" rows="3"></textarea>
                            <div class="form-control-feedback " id="errorpertanyaan"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jawaban" class="col-sm-2 col-form-label">Jawaban<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-10">
                            <div id="jawaban" style="min-height: 160px; max-height: 180px;"></div>
                            <div class="form-control-feedback " id="errorjawaban"></div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary" id="btn_tambah_chat_bot">
                        Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal edit -->
<div class="modal fade" id="editChatBot" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Edit Chat bot
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="form_edit_chat_bot">
                <div class="modal-body">
                    <input type="hidden" id="editid_chat_bot" name="id_chat_bot">
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control required" id="editjudul" name="judul"
                                placeholder="Masukan judul chat bot">
                            <div class="form-control-feedback " id="erroreditjudul"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pertanyaan" class="col-sm-2 col-form-label">Pertanyaan<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control required" id="editpertanyaan" name="pertanyaan"
                                placeholder="Masukan pertanyaan chat bot" rows="3"></textarea>
                            <div class="form-control-feedback " id="erroreditpertanyaan"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editawaban" class="col-sm-2 col-form-label">Jawaban<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-10">
                            <div id="editjawaban" style="min-height: 160px; max-height: 180px;"></div>
                            <div class="form-control-feedback " id="erroreditjawaban    "></div>
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary" id="btn_edit_chat_bot">
                            Edit
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content');?>

<?= $this->section('dataTables');?>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script text="text/javascript">
// dataTables chat
function dataTableschat() {
    $(document).ready(function() {
        $('#tableChatBot').DataTable({
            processing: true,
            serverSide: true,
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            ajax: "<?php echo base_url('Admin/chatBot/DataTables') ?>",
            "lengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            columns: [{
                    data: 'judul',
                    class: 'table-plus'
                },
                {
                    data: 'pertanyaan'
                },
                {
                    data: 'star',
                },
                {
                    data: 'status_chat_bot',
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
    dataTableschat();
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



// ======================================== chat ========================================


// add jawaban
var addJawaban = new Quill('#jawaban', {
    placeholder: 'Masukan jawaban chat bot',
    theme: 'snow',
    modules: {
        toolbar: [
            [{
                header: [1, 2, 3, 4, 5, 6, false]
            }],
            [{
                font: []
            }],
            ["bold", "italic"],

            ["link", "blockquote", "code-block", "image"],
            [{
                list: "ordered"
            }, {
                list: "bullet"
            }],
            [{
                script: "sub"
            }, {
                script: "super"
            }],
            [{
                color: []
            }, {
                background: []
            }],
            [{
                align: []
            }],
        ]
    },
});
addJawaban.on('text-change', function(delta, oldDelta, source) {
    document.querySelector("input[name='content']").value = addJawaban.root.innerHTML;
});

// edit jawaban
var editJawaban = new Quill('#editjawaban', {
    theme: 'snow',
    modules: {
        toolbar: [
            [{
                header: [1, 2, 3, 4, 5, 6, false]
            }],
            [{
                font: []
            }],
            ["bold", "italic"],
            ["link", "blockquote", "code-block", "image"],
            [{
                list: "ordered"
            }, {
                list: "bullet"
            }],
            [{
                script: "sub"
            }, {
                script: "super"
            }],
            [{
                color: []
            }, {
                background: []
            }],
            [{
                align: []
            }],

        ]
    },
});


// DATA
const chat = [
    'judul',
    'pertanyaan',
    'jawaban'
];


// tambah 
$(function() {
    $("#form_tambah_chat_bot").submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        if (!this.checkValidity()) {
            e.preventDefault();
            $(this).addClass('form-control-success');
        } else {
            $("#btn_tambah_chat_bot").attr("disabled", "disabled");
            $("#btn_tambah_chat_bot").html(
                '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
            );
            let jawaban = addJawaban.root.innerHTML;
            formData.append('jawaban', jawaban);

            $.ajax({
                url: '<?= base_url('Admin/chatBot/save') ?>',
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
                        $("#form_tambah_chat_bot")[0].reset();
                        $("#addChatBot").modal('hide');
                        $('#tableChatBot').DataTable().ajax.reload();
                        getSwall(response.status, response.data);
                        chat.forEach(function(item) {
                            $("#" + item).removeClass('form-control-danger');
                            $("#" + item).removeClass('form-control-success');
                            $("#error" + item).html('');
                            $("#error" + item).removeClass('has-danger');
                        });
                        addJawaban.root.innerHTML = '';
                    }
                    $("#btn_tambah_chat_bot").removeAttr("disabled");
                    $("#btn_tambah_chat_bot").html("Tambah");
                }
            });
        }
    });
});

// edit user
$(document).on('click', '.edit_chat_bot', function() {
    const id = $(this).attr('id');
    $.ajax({
        url: '<?= base_url('Admin/chatBot/edit') ?>',
        method: 'post',
        data: {
            id_chat_bot: id
        },
        dataType: 'json',
        success: function(response) {
            $('#editChatBot').modal('show');
            $.each(response.data, function(key, value) {
                $('#edit' + key).val(value);
            });
            editJawaban.root.innerHTML = response.data.jawaban;

        }
    });
});

// update chat bot
$(function() {
    $("#form_edit_chat_bot").submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        if (!this.checkValidity()) {
            e.preventDefault();
            $(this).addClass('form-control-success');
        } else {
            $("#btn_edit_chat_bot").attr("disabled", "disabled");
            $("#btn_edit_chat_bot").html(
                '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
            );
            let jawaban = editJawaban.root.innerHTML;
            formData.append('jawaban', jawaban);
            $.ajax({
                url: '<?= base_url('Admin/chatBot/update') ?>',
                method: 'post',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.error) {
                        alert(response.data);
                        // foeach error 
                        $.each(response.data, function(key, value) {
                            if (value != '') {
                                $("#edit" + key).addClass('form-control-danger');
                                $("#erroredit" + key).addClass('has-danger');
                                $("#erroredit" + key).html(value);
                            } else {
                                $("#edit" + key).removeClass('form-control-danger');
                                $("#edit" + key).addClass('form-control-success');
                                $("#erroredit" + key).html('');
                                $("#erroredit" + key).removeClass('has-danger');
                            }
                        });
                    } else {
                        $("#form_edit_chat_bot")[0].reset();
                        $("#editChatBot").modal('hide');
                        $('#tableChatBot').DataTable().ajax.reload();
                        getSwall(response.status, response.data);
                        chat.forEach(function(item) {
                            $("#edit" + item).removeClass('form-control-danger');
                            $("#edit" + item).removeClass('form-control-success');
                            $("#erroredit" + item).html('');
                            $("#erroredit" + item).removeClass('has-danger');
                        });
                    }
                    $("#btn_edit_chat_bot").removeAttr("disabled");
                    $("#btn_edit_chat_bot").html("Edit");
                }
            });
        }
    });
});

// delete chat bot
$(document).on('click', '.delete_chat_bot', function() {
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
                    url: '<?= base_url('Admin/chatBot/delete') ?>',
                    method: 'post',
                    data: {
                        id_chat_bot: id
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#tableChatBot').DataTable().ajax.reload();
                        getSwall(response.status, response.data);
                    }
                });
            }
        });
});

// view chat bot
$(document).on('click', '.view_user', function() {
    const id = $(this).attr('id');
    $.ajax({
        url: '<?= base_url('Admin/User/edit') ?>',
        method: 'post',
        data: {
            id_user: id
        },
        dataType: 'json',
        success: function(response) {
            $('#viewuser').modal('show');
            $.each(response.data, function(key, value) {
                $('#view' + key).val(value);
            });
        }
    });
});

// change status
$(document).on('click', '.change_status_chat_bot', function() {
    const id = $(this).attr('id');
    // alert(id);
    $.ajax({
        url: '<?= base_url('Admin/chatBot/changeStatus') ?>',
        method: 'post',
        data: {
            id_chat_bot: id
        },
        dataType: 'json',
        success: function(response) {
            // $('#tableChatBot').DataTable().ajax.reload();
            // getSwall(response.status, response.data);
            // getNotification(response.data, response.status);
        }
    });
});

// change star
$(document).on('click', '.change_star_chat_bot', function() {
    const id = $(this).attr('id');
    const id_chat = id.replace('star', '');
    // alert(id_chat);
    $.ajax({
        url: '<?= base_url('Admin/chatBot/changeStar') ?>',
        method: 'post',
        data: {
            id_chat_bot: id_chat
        },
        dataType: 'json',
        success: function(response) {
            $('#tableChatBot').DataTable().ajax.reload();
            // getSwall(response.status, response.data);
            // replace the star
            // if (response.data.star_chat_bot == '1') {
            //     $('#' + id).html('<i class="icon-copy fi-star text-yellow"></i>');
            // } else {
            //     $('#' + id).html('<i class="dw dw-star text-warning"></i>');
            // }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
});
</script>

<!-- switchery js -->
<script src="<?= base_url('Assets/'); ?>src/plugins/switchery/switchery.min.js"></script>
<script src="<?= base_url('Assets/'); ?>vendors/scripts/advanced-components.js"></script>
<?= $this->endSection('dataTables');?>