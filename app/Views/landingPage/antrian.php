<?= $this->extend('Templates/LandingPage') ?>
<?= $this->section('content') ?>
<div class="pd-20 card-box mb-30  mt-4" id="antrian">
    <div class="clearfix">
        <h4 class="text-black h4">
            Form Antrean
        </h4>
        <p class="mb-30">

        </p>
    </div>
    <form id="form_tambah_antrian" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="nama_siswa">Nama Siswa<span class="rq">*</span></label>
                        <input type="text" class="form-control required" id="nama_siswa" name="nama_siswa"
                            placeholder="Masukan nama">
                        <div class="form-control-feedback " id="errornama_siswa"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="nisn">NISN<span class="rq">*</span></label>
                        <input type="text" class="form-control required" id="nisn" name="nisn"
                            placeholder="Masukan NSIN">
                        <div class="form-control-feedback" id="errornisn"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="kode_pendaftaran">Kode
                            Pendaftaran
                            PPDB<span class="rq">*</span></label></label>
                        <input type="text" class="form-control required" id="kode_pendaftaran" name="kode_pendaftaran"
                            placeholder="Masukan kode pendaftaran PPDB">
                        <div class="form-control-feedback " id="errorkode_pendaftaran"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis
                            Kelamin<span class="rq">*</span></label></label>
                        <select class="form-control required" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        <div class="form-control-feedback " id="errorjenis_kelamin"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="asal_sekolah">Asal
                            Sekolah<span class="rq">*</span></label></label>
                        <input type="text" class="form-control required" id="asal_sekolah" name="asal_sekolah"
                            placeholder="Masukan asal sekolah ">
                        <div class="form-control-feedback " id="errorasal_sekolah"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="jalur_pendaftaran">Jalur
                            Pendaftaran<span class="rq">*</span></label></label>
                        <select class="form-control required" id="jalur_pendaftaran" name="jalur_pendaftaran">
                            <option value="">Pilih Jalur Pendaftaran</option>
                            <option value="Zonasi">Zonasi</option>
                            <option value="Afirmasi">Afirmasi</option>
                            <option value="Perpindahan Orang Tua">Perpindahan Orang Tua
                            </option>
                            <option value="Prestasi">Prestasi</option>
                        </select>
                        <div class="form-control-feedback " id="errorjalur_pendaftaran">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="alamat">Alamat<span class="rq">*</span></label></label>
                        <textarea class="form-control required" id="alamat" name="alamat"
                            placeholder="Masukan alamat "></textarea>
                        <div class="form-control-feedback " id="erroralamat"></div>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="no_tlp">No telpon<span class="rq">*</span></label></label>
                        <input type="text" class="form-control required" id="no_tlp" name="no_tlp"
                            placeholder="Masukan no telpon ">
                        <div class="form-control-feedback " id="errorno_tlp"></div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="btn_tambah_antiran">
                    Simpan
                </button>
            </div>
    </form>
</div>

<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Syarat & Ketentuan
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <div class="tab">
                    <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#persyaratan" role="tab"
                                aria-selected="true" id="tabPersyaratan">Persyaratan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#berkas" role="tab" aria-selected="false"
                                id="tabBerkas">Berkas</a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="persyaratan" role="tabpanel">
                            <div class="pd-20">
                                <p class="fw-bold">
                                    Ketentuan ketika melakukan verifikasi berkas:
                                </p>
                                <ul class="ml-3">
                                    <li class="pb-2">1. Membawa berkas pendaftaran
                                    </li>
                                    <li class="pb-2">
                                        <p class="ml-3">
                                            <a id="btnBerkas">
                                                Lihat berkas</a>
                                        </p>
                                    </li class="pb-2">
                                    <li class="pb-2">2. Mengenakan seragam sekolah asal </li>
                                    <li class="pb-2">3. Potongan ramput rapi (CPD Putra) </li>
                                    <li class="pb-2">4. Mengenakan spatu & kaos kaki </li>
                                    <li class="pb-2">5. Orang tua/wali berpakaian rapi </li>
                                </ul>
                            </div>
                        </div>

                        <style>
                        .ml-3 {
                            margin-bottom: 0;
                        }

                        .pb-2 {
                            padding-bottom: 0.5rem;
                        }

                        .fw-bold {
                            font-weight: bold;
                        }
                        </style>

                        <div class="tab-pane fade" id="berkas" role="tabpanel">
                            <div class="pd-10">
                                <div class="faq-wrap">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header">
                                                <button class="btn btn-block collapsed" data-toggle="collapse"
                                                    data-target="#zonasi">
                                                    Zonasi
                                                </button>
                                            </div>
                                            <div id="zonasi" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod
                                                    high life
                                                    accusamus terry richardson ad squid. 3 wolf moon
                                                    officia
                                                    aute, non cupidatat skateboard dolor brunch. Food
                                                    truck
                                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                    tempor,
                                                    sunt aliqua put a bird on it squid single-origin
                                                    coffee
                                                    nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                    helvetica, craft beer labore wes anderson cred
                                                    nesciunt
                                                    sapiente ea proident. Ad vegan excepteur butcher
                                                    vice lomo.
                                                    Leggings occaecat craft beer farm-to-table, raw
                                                    denim
                                                    aesthetic synth nesciunt you probably haven't heard
                                                    of them
                                                    accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <button class="btn btn-block collapsed" data-toggle="collapse"
                                                    data-target="#Afirmasi">
                                                    Afirmasi
                                                </button>
                                            </div>
                                            <div id="Afirmasi" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod
                                                    high life
                                                    accusamus terry richardson ad squid. 3 wolf moon
                                                    officia
                                                    aute, non cupidatat skateboard dolor brunch. Food
                                                    truck
                                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                    tempor,
                                                    sunt aliqua put a bird on it squid single-origin
                                                    coffee
                                                    nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                    helvetica, craft beer labore wes anderson cred
                                                    nesciunt
                                                    sapiente ea proident. Ad vegan excepteur butcher
                                                    vice lomo.
                                                    Leggings occaecat craft beer farm-to-table, raw
                                                    denim
                                                    aesthetic synth nesciunt you probably haven't heard
                                                    of them
                                                    accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <button class="btn btn-block collapsed" data-toggle="collapse"
                                                    data-target="#pto">
                                                    Perpindahan Orang Tua
                                                </button>
                                            </div>
                                            <div id="pto" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod
                                                        high
                                                        life
                                                        accusamus terry richardson ad squid. 3 wolf moon
                                                        officia
                                                        aute, non cupidatat skateboard dolor brunch.
                                                        Food truck
                                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                        moon
                                                        tempor, sunt aliqua put a bird on it squid
                                                        single-origin
                                                        coffee nulla assumenda shoreditch et. Nihil anim
                                                        keffiyeh
                                                        helvetica, craft beer labore wes anderson cred
                                                        nesciunt
                                                        sapiente ea proident. Ad vegan excepteur butcher
                                                        vice
                                                        lomo. Leggings occaecat craft beer
                                                        farm-to-table, raw
                                                        denim aesthetic synth nesciunt you probably
                                                        haven't
                                                        heard
                                                        of them accusamus labore sustainable VHS.
                                                    </p>
                                                    <p class="mb-0">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod
                                                        high
                                                        life
                                                        accusamus terry richardson ad squid. 3 wolf moon
                                                        officia
                                                        aute, non cupidatat skateboard dolor brunch.
                                                        Food truck
                                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                        moon
                                                        tempor, sunt aliqua put a bird on it squid
                                                        single-origin
                                                        coffee nulla assumenda shoreditch et. Nihil anim
                                                        keffiyeh
                                                        helvetica, craft beer labore wes anderson cred
                                                        nesciunt
                                                        sapiente ea proident. Ad vegan excepteur butcher
                                                        vice
                                                        lomo. Leggings occaecat craft beer
                                                        farm-to-table, raw
                                                        denim aesthetic synth nesciunt you probably
                                                        haven't
                                                        heard
                                                        of them accusamus labore sustainable VHS.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <button class="btn btn-block collapsed" data-toggle="collapse"
                                                    data-target="#prestasi">
                                                    Prestasi
                                                </button>
                                            </div>
                                            <div id="prestasi" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod
                                                    high life
                                                    accusamus terry richardson ad squid. 3 wolf moon
                                                    officia
                                                    aute, non cupidatat skateboard dolor brunch. Food
                                                    truck
                                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                    tempor,
                                                    sunt aliqua put a bird on it squid single-origin
                                                    coffee
                                                    nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                    helvetica, craft beer labore wes anderson cred
                                                    nesciunt
                                                    sapiente ea proident. Ad vegan excepteur butcher
                                                    vice lomo.
                                                    Leggings occaecat craft beer farm-to-table, raw
                                                    denim
                                                    aesthetic synth nesciunt you probably haven't heard
                                                    of them
                                                    accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <form id="form_syarat_ketentuan">
                    <div class="form-group mt-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="syatKetentuan" name="syatKetentuan"
                                required title="Syarat & Ketentuan harus di centang">
                            <label class="custom-control-label" for="syatKetentuan">Saya setuju dengan
                                syarat &
                                ketentuan yang berlaku</label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary" id="btn_sk">
                    Kirim
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>

<?= $this->section('script') ?>
<script>
const listFields = ['nama_siswa', 'nisn', 'jenis_kelamin', 'kode_pendaftaran', 'asal_sekolah', 'no_tlp',
    'alamat', 'jalur_pendaftaran'
];
const dataAntrian = [];
$('#btn_tambah_antiran').click(function(e) {
    e.preventDefault();
    let formData = new FormData();
    let status = true;
    listFields.forEach((field) => {
        if ($(`#${field}`).val() == '') {
            $(`#${field}`).addClass('form-control-danger');
            $(`#error${field}`).html('Field ini tidak boleh kosong');
            $(`#error${field}`).addClass('has-danger');
            status = false;
        } else {
            $(`#${field}`).addClass('form-control-success');
            $(`#${field}`).removeClass('form-control-danger');
            $(`#error${field}`).html('');
            $(`#error${field}`).removeClass('has-danger');
            formData.append(field, $(`#${field}`).val());
        }
    });

    if (status) {
        $('#Medium-modal').modal('show');
        dataAntrian.push(formData);
    }
});

$('#form_syarat_ketentuan').submit(function(e) {
    e.preventDefault();
    $("#btn_sk").attr("disabled", "disabled");
    $("#btn_sk").html(
        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
    ).attr('disabled', true);
    $.ajax({
        url: '<?= base_url('Admin/Antrian/save'); ?>',
        type: 'POST',
        data: dataAntrian[0],
        contentType: false,
        processData: false,
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
                dataAntrian.pop();
                $('#Medium-modal').modal('hide');
                $("#btn_sk").removeAttr("disabled");
                $("#btn_sk").html("Tambah");
            } else {
                getSwall(response.status, 'Antrian berhasil ditambahkan');
                listFields.forEach(function(item) {
                    $("#" + item).removeClass('form-control-danger');
                    $("#" + item).removeClass('form-control-success');
                    $("#error" + item).html('');
                    $("#error" + item).removeClass('has-danger');
                });
                $('#syatKetentuan').prop('checked', false);
                $("#form_tambah_antrian")[0].reset();
                $('#Medium-modal').modal('hide');
                $("#btn_sk").removeAttr("disabled");
                $("#btn_sk").html("Kirim");
            }
        } //end success
    }) //end ajax
});
</script>
<?= $this->endSection('script') ?>