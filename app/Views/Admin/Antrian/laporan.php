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
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">tanggal_antrian</label>
                            <div class="col-sm-12 col-md-9">
                                <select class="custom-select col-12" id="tanggal_antrian">
                                    <option value="">Pilih Tanggal</option>
                                    <option value="2021-09-01">2021-09-01</option>
                                    <option value="2021-09-02">2021-09-02</option>
                                    <option value="2021-09-03">2021-09-03</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-20 table-responsive">
                    <table class="table hover multiple-select-row nowrap" id="laporanAntrian">
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



<?= $this->endSection('content');?>

<?= $this->section('dataTables');?>
<!-- buttons for Export datatable -->
<!-- <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="src/plugins/datatables/js/vfs_fonts.js"></script> -->

<!-- dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ], -->
<script text="text/javascript">
// dataTables users


$(document).ready(function() {
    table = $('#laporanAntrian').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '<?= base_url('Admin/Antrian/ajaxLaporan') ?>',
            data: function(d) {
                d.tanggal_antrian = $('#tanggal_antrian').val();
            }
        },
    });

    $('#tanggal_antrian').change(function(event) {
        table.ajax.reload();
        // alert('ok'); 
    });
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


<?= $this->endSection('dataTables');?>s