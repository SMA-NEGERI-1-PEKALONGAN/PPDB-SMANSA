<?= $this->extend('Templates/index'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card-box mb-30">
            <div class="pd-20">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h4 class="text-blue h4">Data Antrian</h4>
                    </div>
                    <div class="col-sm-6 text-right">
                        <!-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addAntrian" type="button">
                            <i class="icon-copy fa fa-plus" aria-hidden="true"></i>
                        </a> -->
                    </div>
                </div>
                <form id="form_laporan">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-sm-12 col-md-12 col-form-label">Tanggal Awal</label>
                                <div class="col-sm-12 col-md-12">
                                    <input class="form-control" type="date" id="tgl_awal">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-sm-12 col-md-12 col-form-label">Tanggal Akhir</label>
                                <div class="col-sm-12 col-md-12">
                                    <input class="form-control" type="date" id="tgl_akhir">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-12 col-md-12 col-form-label">Status</label>
                                <div class="col-sm-12 col-md-12">
                                    <select class="custom-select col-12" id="status">
                                        <option value="">Semua Antrean</option>
                                        <option value="0">Tidak aktif</option>
                                        <option value="2">Pemberkasan</option>
                                        <option value="3">Selesai</option>
                                        <option value="4">Bermasalah</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <div class="form-group mt-4">
                                <button class="btn btn-primary" id="btn-filter" type="button">
                                    <i class="icon-copy fa fa-search" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-secondary" id="btn-reset" type="button">
                                    <i class="icon-copy fa fa-refresh" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
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


$('#btn-filter').on('click', function() {
    $('#btn-filter').html(
        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
        );
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