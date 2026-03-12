<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Hermawan\DataTables\DataTable;
use App\Models\dataSiswaModel;
use Ramsey\Uuid\Uuid;

class dataSiswaController extends BaseController
{
    protected $dataSiswaModel;

    public function __construct()
    {
        $this->dataSiswaModel = new dataSiswaModel();
    }

    public function index()
    {
        $data = [
            'main_menu' => 'Siswa',
            'title' => 'Data Siswa',
            'active' => 'data_siswa',
        ];
        return view('Admin/dataSiswa/index', $data);
    }

    public function ajaxDataTables(){
    
        $builder = $this->dataSiswaModel->select('id_data_siswa, nama_siswa, nisn, jenis_kelamin, asal_sekolah, no_urut, tanggal, sesi, waktu, loket, created_at, updated_at');
        // dd($builder);
        
        return DataTable::of($builder)
            ->add('sesi', function ($row) {
                switch ($row->sesi) {
                    case 'Sesi 1':
                        return '<span class="badge badge-pill badge-primary">Sesi 1</span>';
                        break;
                    case 'Sesi 2':
                        return '<span class="badge badge-pill badge-success">Sesi 2</span>';
                        break;
                    case 'Sesi 3': 
                        return '<span class="badge badge-pill badge-warning">Sesi 3</span>';
                        break;
                    default:
                        return '<span class="badge badge-pill badge-danger">Sesi 4</span>';
                        break;
                }
            })
            ->add('action', function ($row) {
                return '
                <div class="dropdown">
					<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown"> <i class="dw dw-more"></i></a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <button class="dropdown-item detailsAntrian" id="'.$row->id_data_siswa.'"><i class="dw dw-eye"></i> View</a>
                            <button class="dropdown-item edit_antrian" id="'.$row->id_data_siswa.'"><i class="dw dw-edit2"></i> Edit</button>
							<button class="dropdown-item delete_antrian" id="'.$row->id_data_siswa.'"><i class="dw dw-delete-3"></i> Delete</button>
						</div>
				</div>
                ';
            }, 'last')
            ->toJson(true);
    }

    // import data siswa
    public function importSiswa()
    {
        $file_excel = $this->request->getFile('file');
        $validation = \Config\Services::validation();

        // Define validation rules
        $validation->setRules([
            'file' => [
                'rules' => 'uploaded[file]|ext_in[file,xls,xlsx,csv]',
                'errors' => [
                    'uploaded' => 'File tidak boleh kosong',
                    'required' => 'File tidak boleh kosong',
                    'ext_in' => 'File harus berupa xls, xlsx, csv'
                ]
            ]
        ]);

        // Validate the request data
        if (!$validation->run($this->request->getPost())) {
            return $this->response->setJSON([
                'error' => true,
                'data' => $validation->getErrors()
            ]);
        }

        // Initialize the PhpSpreadsheet reader based on the file extension
        $ext = $file_excel->getClientExtension();
        if ($ext == 'xls') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } elseif ($ext == 'xlsx') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        } elseif ($ext == 'csv') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        }

        $spreadsheet = $reader->load($file_excel);
        $data = $spreadsheet->getActiveSheet()->toArray();

        // add total data to process
        $total_data = count($data) - 1;
        
        foreach ($data as $x => $col) {
            if ($x == 0) {
                continue;
            }

            $data = [
                'id_data_siswa' => Uuid::uuid4()->toString(),
                'no_urut' => $col[0],
                'nisn' => $col[1],
                'nama_siswa' => $col[2],
                'jenis_kelamin' => $col[3],
                'asal_sekolah' => $col[4],
                'tanggal' => $col[5],
                'sesi' => $col[6],
                'waktu' => $col[7],
                'loket' => $col[8],
            ];

            $this->dataSiswaModel->insert($data);

            // add progress
            $progress = ($x / $total_data) * 100;
            $this->response->setJSON([
                'error' => false,
                'status' => '200',
                'progress' => $progress,
                'total_data' => $total_data
            ]);
        }

        return $this->response->setJSON([
            'error' => false,
            'status' => '200',
            'data' => 'Data berhasil diimport'
        ]);
        
        
    }

    public function deleteAll(){
        // delete all data
        $this->dataSiswaModel->truncate();
        return $this->response->setJSON([
            'error' => false,
            'status' => '200',
            'data' => 'Data berhasil dihapus'
        ]);
    }

}