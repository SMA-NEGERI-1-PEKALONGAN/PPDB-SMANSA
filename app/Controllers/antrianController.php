<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Hermawan\DataTables\DataTable;
use App\Models\antrianModel;
use Ramsey\Uuid\Uuid;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\LabelAlignment;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode;

class antrianController extends BaseController
{
    protected $antrianModel;

    public function __construct()
    {
        $this->antrianModel = new antrianModel();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Antrian',
            'active' => 'Antrian',
        ];
        return view('Admin/Antrian/index', $data);
    }

    public function ajaxDataTables(){
    
        $builder = $this->antrianModel->getAntrian();
        
        // dd($builder);
        return DataTable::of($builder)
            ->add('action', function ($row) {
                return '
                <div class="dropdown">
					<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown"> <i class="dw dw-more"></i></a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <button class="dropdown-item detailsAntrian" id="'.$row->id_antrian.'"><i class="dw dw-eye"></i> View</a>
                            <button class="dropdown-item edit_antrian" id="'.$row->id_antrian.'"><i class="dw dw-edit2"></i> Edit</button>
							<button class="dropdown-item delete_antrian" id="'.$row->id_antrian.'"><i class="dw dw-delete-3"></i> Delete</button>
						</div>
				</div>
                ';
            }, 'last')
            ->toJson(true);
    }

    public function store(){
         $validation =  \Config\Services::validation();
          $validation->setRules([
            'nama_siswa' => [
                'label' => 'Nama Siswa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.',
                ]
            ],
            'nisn' => [
                'label' => 'NISN',
                'rules' => 'required|is_unique[antrian.nisn]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'asal_sekolah' => [
                'label' => 'Asal Sekolah',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'no_tlp' => [
                'label' => 'No. Telepon',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'jenis_kelamin' => [
                'label' => 'Jenis Kelamin',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'jalur_pendaftaran' => [
                'label' => 'Jalur Pendaftaran',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'kode_pendaftaran' => [
                'label' => 'Kode Pendaftaran',
                'rules' => 'required|is_unique[antrian.kode_pendaftaran]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
          ]);
          
            if (!$validation->withRequest($this->request)->run()) {
                return $this->response->setJSON([
                    'error' => true,
                    'data' => $validation->getErrors(),
                    'status' => '422'
                ]);
            } else {
                $uuid = Uuid::uuid4();
                $id_antrian = $uuid->toString();

                $result = Builder::create()
                    ->writer(new PngWriter())
                    ->writerOptions([])
                    ->data($id_antrian)
                    ->encoding(new Encoding('UTF-8'))
                    ->errorCorrectionLevel(ErrorCorrectionLevel::High)
                    ->size(300)
                    ->margin(10)
                    ->roundBlockSizeMode(RoundBlockSizeMode::Margin)
                    ->logoPath('Assets/LOGO SMANSA.png')
                    ->logoResizeToWidth(50)
                    ->logoPunchoutBackground(true)
                    // ->labelText('This is the label')
                    // ->labelFont(new NotoSans(20))
                    // ->labelAlignment(LabelAlignment::Center)
                    ->validateResult(false)
                    ->build();
                    
                $result->saveToFile('Assets/qr_code/' . $id_antrian . '.png');

                $data = [
                    'id_antrian' => $id_antrian,
                    'nama_siswa' => $this->request->getPost('nama_siswa'),
                    'nisn' => $this->request->getPost('nisn'),
                    'asal_sekolah' => $this->request->getPost('asal_sekolah'),
                    'alamat' => $this->request->getPost('alamat'),
                    'no_tlp' => $this->request->getPost('no_tlp'),
                    'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                    'jalur_pendaftaran' => $this->request->getPost('jalur_pendaftaran'),
                    'kode_pendaftaran' => $this->request->getPost('kode_pendaftaran'),
                    'qr_code' => $id_antrian . '.png',
                    'status_antrian' => '1',
                    'tanggal_antrian' => date('Y-m-d H:i:s'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
                $this->antrianModel->insert($data);
                return $this->response->setJSON([
                    'error' => false,
                    'data' => 'Data berhasil disimpan',
                    'status' => '200'
                ]);
            }
    }

    public function edit(){
        $id = $this->request->getPost('id');
        $data = $this->antrianModel->getAntrian($id);
        return $this->response->setJSON([
            'error' => false,
            'data' => $data,
            'status' => '200'
        ]);
    }

    public function destroy(){
        $id = $this->request->getPost('id');
        // remove qr code
        $qr_code = $this->antrianModel->select('qr_code')->where('id_antrian', $id)->first();
        if ($qr_code->qr_code != 'default.png') {
            unlink('Assets/qr_code/' . $qr_code->qr_code);
        }
        // remove data
        $this->antrianModel->delete($id);
        return $this->response->setJSON([
            'error' => false,
            'data' => 'Data berhasil dihapus',
            'status' => '200'
        ]);
    }

}
?>