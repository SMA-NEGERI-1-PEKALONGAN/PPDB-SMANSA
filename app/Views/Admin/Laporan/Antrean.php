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
                                    <input class="form-control" type="date" id="tgl_awal" name="tgl_awal">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-sm-12 col-md-12 col-form-label">Tanggal Akhir</label>
                                <div class="col-sm-12 col-md-12">
                                    <input class="form-control" type="date" id="tgl_akhir" name="tgl_akhir">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-12 col-md-12 col-form-label">Status</label>
                                <div class="col-sm-12 col-md-12">
                                    <select class="custom-select col-12" id="status_antrian" name="status_antrian">
                                        <option value="">Semua Antrean</option>
                                        <option value="0" id="status0">Tidak Aktif</option>
                                        <option value="1" id="status1">Check In</option>
                                        <option value="2" id="status2">Pemberkasan</option>
                                        <option value="3" id="status3">Selesai</option>
                                        <option value="4" id="status4">Bermasalah</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group mt-4 text-center">
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
                            <th class="table-plus">Kode Pendafatran</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>No Antrean</th>
                            <th>Status</th>
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


<script text="text/javascript">
// dataTables Laporan Antrean
function laporanAntrean() {
    $(document).ready(function() {

        $('#laporanAntrian').DataTable({
            processing: true,
            serverSide: true,
            // responsive: true,
            ajax: {
                url: '<?= base_url('Admin/Laporan/ajaxLaporanAntrean') ?>',
                type: 'POST',
                data: function(data) {
                    data.tgl_awal = $('#tgl_awal').val();
                    data.tgl_akhir = $('#tgl_akhir').val();
                    data.status_antrian = $('#status_antrian').val();
                }
            },
            columns: [{
                    data: 'nisn'
                },
                {
                    data: 'nama_siswa'
                },
                {
                    data: 'tanggal_antrian'
                },
                {
                    data: 'no_antrian'
                },
                {
                    data: 'status_antrian'
                },

            ],
            columnDefs: [{
                    targets: 0,
                    className: 'table-plus'
                },
                {
                    targets: 3,
                    render: function(data, type, row) {
                        if (data == 0) {
                            return '<span class="badge badge-danger">Tidak Aktif</span>';
                        } else if (data == 1) {
                            return '<span class="badge badge-primary">Check In</span>';
                        } else if (data == 2) {
                            return '<span class="badge badge-warning">Pemberkasan</span>';
                        } else if (data == 3) {
                            return '<span class="badge badge-success">Selesai</span>';
                        } else if (data == 4) {
                            return '<span class="badge badge-danger">Bermasalah</span>';
                        }
                    }
                }
            ],
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'print',
                    title: 'Data Antrian',
                    className: 'btn btn-primary',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    }
                },
                {
                    extend: 'excel',
                    title: 'Data Antrian',
                    className: 'btn btn-primary',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Data Antrian',
                    className: 'btn btn-primary',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    }
                },
                {
                    extend: 'csv',
                    title: 'Data Antrian',
                    className: 'btn btn-primary',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    }
                }
            ]
        });

    });
}

laporanAntrean();

$('#btn-reset').on('click', function() {
    $('#tgl_awal').val('');
    $('#tgl_akhir').val('');
    $('#status_antrian').val('');
    $('#laporanAntrian').DataTable().ajax.reload();
});

$('#btn-filter').on('click', function() {
    // $('#btn-filter').html(
    //     '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
    // );
    $('#laporanAntrian').DataTable().ajax.reload();
});
</script>

<?= $this->endSection('dataTables');?>s