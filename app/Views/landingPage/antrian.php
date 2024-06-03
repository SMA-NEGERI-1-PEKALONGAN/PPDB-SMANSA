<?= $this->extend('Templates/LandingPage') ?>
<?= $this->section('content') ?>
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <h4 class="text-black h4">
            Form Antrian
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
                        <label for="alamat">alamat<span class="rq">*</span></label></label>
                        <textarea class="form-control required" id="alamat" name="alamat"
                            placeholder="Masukan alamat "></textarea>
                        <div class="form-control-feedback " id="erroralamat"></div>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="no_tlp">No telpon<span class="rq">*</span></label></label>
                        <input type="text" class="form-control required" id="no_tlp" name="no_tlp"
                            placeholder="Masukan no telpom ">
                        <div class="form-control-feedback " id="errorno_tlp"></div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="btn_tambah_antiran">
                    Tambah
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
                                <ul>
                                    <li>1. Membawa berkas pendaftaran
                                    </li>
                                    <li>
                                        <p class="ml-3">
                                            <a id="btnBerkas">
                                                Lihat berkas</a>
                                        </p>
                                    </li>
                                    <li>2. Mengenakan seragam sekolah asal </li>
                                </ul>
                            </div>
                        </div>

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