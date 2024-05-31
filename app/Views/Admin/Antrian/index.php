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
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addUser" type="button">
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

<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
            <form id="form_tambah_user">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_siswa" class="col-sm-4 col-form-label">nama_siswa<span
                                class="rq">*</span></label></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" id="nama_siswa" name="nama_siswa"
                                placeholder="Masukan nama">
                            <div class="form-control-feedback " id="errornama"></div>
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
                        <label for="kode_pendaftaran" class="col-sm-4 col-form-label">Kode Pendaftarab<span
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
</script>

<?= $this->endSection('dataTables');?>s