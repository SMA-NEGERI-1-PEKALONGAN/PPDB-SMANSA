<?= $this->extend('Templates/index'); ?>
<?= $this->section('content'); ?>

<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4><?= $title;?></h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <?= $title;?>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <!-- <div class="dropdown">
                        <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            January 2018
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Export List</a>
                            <a class="dropdown-item" href="#">Policies</a>
                            <a class="dropdown-item" href="#">View Assets</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Kategori</h4>
                    </div>
                    <div class="pb-20">
                        <table class="data-table table hover multiple-select-row nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">Nama Kategori</th>
                                    <th>Kode Kategori</th>
                                    <th>Status</th>
                                    <th class="datatable-nosort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-plus">Gloria F. Mead</td>
                                    <td>25</td>
                                    <td>Sagittarius</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#" role="button" data-toggle="dropdown"> <i
                                                    class="dw dw-more"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                            </tbody>
                        </table>
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
                            <tbody>
                                <tr>
                                    <td class="table-plus">Gloria F. Mead</td>
                                    <td>25</td>
                                    <td>Sagittarius</td>
                                    <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>20</td>
                                    <td>Gemini</td>
                                    <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>25</td>
                                    <td>Gemini</td>
                                    <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>20</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>18</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content');?>

<?= $this->section('dataTables');?>

<script text="text/javascript">
// $("document").ready(function() {
//     $('#tableKategori').DataTable({
//         scrollCollapse: true,
//         autoWidth: false,
//         responsive: true,
//         columnDefs: [{
//             targets: "datatable-nosort",
//             orderable: false,
//         }],
//         "lengthMenu": [
//             [10, 25, 50, -1],
//             [10, 25, 50, "All"]
//         ],
//         "language": {
//             "info": "_START_-_END_ of _TOTAL_ entries",
//             searchPlaceholder: "Search",
//             paginate: {
//                 next: '<i class="ion-chevron-right"></i>',
//                 previous: '<i class="ion-chevron-left"></i>'
//             }
//         },
//     });
// });
</script>
<?= $this->endSection('dataTables');?>