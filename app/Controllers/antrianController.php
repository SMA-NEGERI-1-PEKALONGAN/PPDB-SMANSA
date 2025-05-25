<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Hermawan\DataTables\DataTable;
use App\Models\antrianModel;
use App\Models\notifikasiModel;
use App\Models\masterReferensiModel;   
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
            'main_menu' => 'Antrean',
            'title' => 'Data Antrean',
            'active' => 'Antrian',
        ];
        return view('Admin/Antrian/index', $data);
    }

    public function getResultAntrean(){
        $total_antrean = $this->antrianModel->findAll();
        return $this->response->setJSON([
            'error' => false,
            'data' => [
                'total_antrean' => count($total_antrean),
            ],
            'status' => '200'
        ]);
    }

    public function getStatistic(){
        $tanggalAwal = '2025-05-27';
        $tanggalAkhir = '2025-06-10'    ;
        $data_antrian = [];
        
        for ($i = strtotime($tanggalAwal); $i <= strtotime($tanggalAkhir); $i = strtotime("+1 day", $i)) {
            // dd(date('Y-m-d', $i));
            // convert tanggal to 27 JUN
            $tanggal = date('Y-m-d', $i);
            $nama_tanggal = date('d M', $i);
            // dd($tanggal, $nama_tanggal);
            $data_antrian[] = [
                'tanggal' => $tanggal,
                'nama_tanggal' => $nama_tanggal,
                'total' => count($this->antrianModel->where('tanggal_antrian', $tanggal)->findAll()),
                'gagal' => count($this->antrianModel->where('tanggal_antrian', $tanggal)->where('status_antrian !=', '3')->findAll()),
                'sukses' => count($this->antrianModel->where('tanggal_antrian', $tanggal)->where('status_antrian', '3')->findAll()),
            ];
        }
        // dd($data_antrian);
        
        return $this->response->setJSON([
            'error' => false,
            'data' => [
                'data_antrian' => $data_antrian,
            ],
            'status' => '200'
        ]);
    }

    public function ajaxDataTables(){
    
        $builder = $this->antrianModel->getAntrian();
        
        // dd($builder);
        return DataTable::of($builder)
            ->add('status_antrian', function ($row) {
                switch ($row->status_antrian) {
                    case '1':
                        return '<span class="badge badge-pill badge-primary">Check In</span>';
                        break;
                    case '2':
                        return '<span class="badge badge-pill badge-secondary">Pemberkasan</span>';
                        break;
                    case '3':
                        return '<s class="badge badge-pill badge-success">Selesai</span>';
                        break;
                    case '4':
                        return '<span class="badge badge-pill badge-warning">Bermasalah</span>';
                        break;
                    default:
                        return '<span class="badge badge-pill badge-danger">Tidak aktif</span>';
                        break;
                }
            })
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

    public function saveAntrian(){
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
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    // 'is_unique' => '{field} sudah terdaftar.'
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
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    // 'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'sesi_antrian' => [
                'label' => 'Sesi Antrian',
                'rules' => 'required',
                'errors' => [
                'required' => '{field} harus diisi.'
                ]
            ],
            'tanggal_antrian' => [
                'label' => 'Tanggal Antrian',
                'rules' => 'required',
                'errors' => [
                'required' => '{field} harus diisi.'
                ]
            ],
            'no_antrian' => [
                'label' => 'No Antrian',
                'rules' => 'required',
                'errors' => [
                'required' => '{field} harus diisi.'
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
                // dd($sesi);  
                $uuid = Uuid::uuid4();
                $id_antrian = str_replace('-', '', $uuid->toString());

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
                    'status_antrian' => '0',
                    'no_antrian' => $this->request->getPost('no_antrian'),
                    'sesi_antrian' => $this->request->getPost('sesi_antrian'),
                    'tanggal_antrian' => $this->request->getPost('tanggal_antrian'),
                    'created_at' => date('Y-m-d H:i:s'),
                    
                ];
                // dd($data);
                $this->antrianModel->insert($data);
                return $this->response->setJSON([
                    'error' => false,
                    'data' => 'Data berhasil disimpan',
                    'status' => '200'
                ]);
        }
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
                'rules' => 'required|min_length[10]|max_length[10]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'min_length' => '{field} harus 10 digit.',
                    'max_length' => '{field} harus 10 digit.',
                    // 'is_unique' => '{field} sudah terdaftar.'
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
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    // 'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            
          ]);
          
        if (!$validation->withRequest($this->request)->run()) {
                return $this->response->setJSON([
                    'error' => true,
                    'data' => $validation->getErrors(),
                    'status' => '422'
                ]);
        }else{
            $nisn = $this->request->getPost('nisn');
            $kode_pendaftaran = $this->request->getPost('kode_pendaftaran');
            $check_data = $this->antrianModel->like('nisn', $nisn)->orLike('kode_pendaftaran', $kode_pendaftaran)->where('status_antrian !=', '0')->first();
            // dd($check_data);
            if($check_data){
                return $this->response->setJSON([
                    'error' => true,
                    'data' => 'Data sudah terdaftar',
                    'status' => '406'
                ]);
            }
            
            $referensi = new masterReferensiModel();
            $data_referensi = $referensi->getReferensiByKodeKategori('set_antrian');
            // dd($data_referensi);
            
            foreach ($data_referensi as $row) {
                    
                if ($row['nama_referensi'] == 'max_antrian') {
                    $max_antrian = $row['kode_referensi'];
                }
                
                if ($row['nama_referensi'] == 'tanggal_antrian') {
                    $tanggal_mulai = $row['kode_referensi'];
                }
                if ($row['nama_referensi'] == 'tanggal_penutupan_antrian') {
                    $tanggal_penutupan_antrian = $row['kode_referensi'];
                }
                if ($row['nama_referensi'] == 'total_sesi') {
                    $total_sesi = $row['kode_referensi'];
                }   
                
                if ($row['nama_referensi'] == 'start_antrian') {
                    $start_antrian = str_replace('.', ':', $row['kode_referensi']) . ':00';
                }
                
                if ($row['nama_referensi'] == 'close_antrian') {
                    $close_antrian = str_replace('.', ':', $row['kode_referensi']) . ':00';
                } 

            }
            
            $tanggal_mulai = date('Y-m-d', strtotime($tanggal_mulai));
            $tanggal_penutupan_antrian = date('Y-m-d', strtotime($tanggal_penutupan_antrian));
            $tanggal_antrian = date('Y-m-d');
            
            // dd($day);
            $timeNow = date('H:i:s');
            // dd($tanggal_mulai);
            if($timeNow <= $close_antrian){
                $tanggal_antrian = $tanggal_antrian; 
            }else{
                $tanggal_antrian = date('Y-m-d', strtotime($tanggal_antrian . ' +1 day'));
            }
            // jika hari sabtu atau minggu day +1
            $day = date('D', strtotime($tanggal_antrian));
            if ($day == 'Sat') {
                $tanggal_antrian = date('Y-m-d', strtotime($tanggal_antrian . ' +2 day'));
            } elseif ($day == 'Sun') {
                $tanggal_antrian = date('Y-m-d', strtotime($tanggal_antrian . ' +1 day'));
            }
            $last_antrian = $this->antrianModel->getLastAntrian($tanggal_antrian);
            // dd($tanggal_antrian);
            // dd($last_antrian, $max_antrian);
            if($last_antrian){
                if($last_antrian['no_antrian'] >= $max_antrian){
                    $tanggal_antrian = date('Y-m-d', strtotime($tanggal_antrian . ' +1 day'));
                    $day = date('D', strtotime($tanggal_antrian));
                    if ($day == 'Sat') {
                        $tanggal_antrian = date('Y-m-d', strtotime($tanggal_antrian . ' +2 day'));
                    } elseif ($day == 'Sun') {
                        $tanggal_antrian = date('Y-m-d', strtotime($tanggal_antrian . ' +1 day'));
                    } 
                    
                    // dd($tanggal_antrian);
                    $last_antrian = $this->antrianModel->getLastAntrian($tanggal_antrian);
                    if($last_antrian){
                        if($last_antrian['no_antrian'] >= $max_antrian){
                            return $this->response->setJSON([
                                'error' => true,
                                'data' => 'Antrean sudah penuh, silahkan dapat mendaftar di hari berikutnya',
                                'status' => '406'
                            ]);
                        }
                    }
                }else{
                    $last_antrian = $this->antrianModel->getLastAntrian($tanggal_antrian);
                }
            }
            
            if($tanggal_antrian > $tanggal_penutupan_antrian){
                return $this->response->setJSON([
                    'error' => true,
                    'data' => 'Antrean sudah ditutup',
                    'status' => '406'
                ]);
            }
            // dd($tanggal_antrian, $tanggal_penutupan_antrian, $tanggal_mulai);
            // if($timeNow >= $start_antrian && $timeNow <= $close_antrian){

            if($tanggal_antrian >= $tanggal_mulai && $tanggal_antrian <= $tanggal_penutupan_antrian){
                if ($tanggal_mulai == $tanggal_antrian) {
                    if($timeNow < $start_antrian){
                        return $this->response->setJSON([
                            'error' => true,
                            'data' => 'Antrean belum dibuka',
                            'status' => '406'
                        ]);
                    }
                }
                for ($i=1; $i <= $total_sesi; $i++) { 
                    foreach ($data_referensi as $data) {
                        if ($data['nama_referensi'] == 'Sesi ' . $i) {
                            $dataSesi = explode(' - ', $data['kode_referensi']);
                            $sesi[$i] = "Sesi " . $i . " (" . $dataSesi[0] . " WIB)";
                        }
                    }
                }
                // dd($sesi);  
            
                $uuid = Uuid::uuid4();
                $id_antrian = str_replace('-', '', $uuid->toString());
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
                
                $last_antrian = $this->antrianModel->getLastAntrian($tanggal_antrian);
                if ($last_antrian) {
                    $no_antrian = $last_antrian['no_antrian'] + 1;
                    if ($no_antrian > $max_antrian) {
                        return $this->response->setJSON([
                            'error' => true,
                            'data' => 'Antrean sudah penuh, silahkan dapat mendaftar di hari berikutnya',
                            'status' => '406'
                        ]);
                    }
                } else {
                    $no_antrian = 1;
                }

                // dd($no_antrian);
        
                $sesi_antrian = $sesi[1];
                for ($i=1; $i <= $total_sesi; $i++) { 
                    if ($no_antrian > ($max_antrian / $total_sesi) * $i) {
                        $sesi_antrian = $sesi[$i + 1];
                    }
                }
                
                // dd($sesi_antrian);
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
                    'status_antrian' => '0',
                    'no_antrian' => $no_antrian,
                    'sesi_antrian' => $sesi_antrian,
                    'tanggal_antrian' => $tanggal_antrian,
                    'created_at' => date('Y-m-d H:i:s'),
                ];
                $this->antrianModel->insert($data);
                return $this->response->setJSON([
                    'error' => false,
                    'data' => 'Data berhasil disimpan',
                    'status' => '200'
                ]);
            } else {
                return $this->response->setJSON([
                    'error' => true,
                    'data' => 'Antrean belum dibuka',
                    'status' => '406'
                ]);
            }
        }
    }

    public function storeCopy(){
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
                'rules' => 'required|min_length[10]|max_length[10]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'min_length' => '{field} harus 10 digit.',
                    'max_length' => '{field} harus 10 digit.',
                    // 'is_unique' => '{field} sudah terdaftar.'
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
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    // 'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            
          ]);
          
        if (!$validation->withRequest($this->request)->run()) {
                return $this->response->setJSON([
                    'error' => true,
                    'data' => $validation->getErrors(),
                    'status' => '422'
                ]);
        }else{
            $nisn = $this->request->getPost('nisn');
            $kode_pendaftaran = $this->request->getPost('kode_pendaftaran');
            $check_data = $this->antrianModel->like('nisn', $nisn)->orLike('kode_pendaftaran', $kode_pendaftaran)->where('status_antrian !=', '0')->first();
            // dd($check_data);
            if($check_data){
                return $this->response->setJSON([
                    'error' => true,
                    'data' => 'Data sudah terdaftar',
                    'status' => '406'
                ]);
            }
            $referensi = new masterReferensiModel();
            $data_referensi = $referensi->getReferensiByKodeKategori('set_antrian');
            // dd($data_referensi);
            
            foreach ($data_referensi as $row) {
                    
                if ($row['nama_referensi'] == 'max_antrian') {
                    $max_antrian = $row['kode_referensi'];
                }
                
                if ($row['nama_referensi'] == 'tanggal_antrian') {
                    $tanggal_mulai = $row['kode_referensi'];
                }
                if ($row['nama_referensi'] == 'tanggal_penutupan_antrian') {
                    $tanggal_penutupan_antrian = $row['kode_referensi'];
                }
                if ($row['nama_referensi'] == 'total_sesi') {
                    $total_sesi = $row['kode_referensi'];
                }   
                
                if ($row['nama_referensi'] == 'start_antrian') {
                    $start_antrian = str_replace('.', ':', $row['kode_referensi']) . ':00';
                }
                
                if ($row['nama_referensi'] == 'close_antrian') {
                    $close_antrian = str_replace('.', ':', $row['kode_referensi']) . ':00';
                } 

            }
            
            $tanggal_mulai = date('Y-m-d', strtotime($tanggal_mulai));
            $tanggal_penutupan_antrian = date('Y-m-d', strtotime($tanggal_penutupan_antrian));
            $tanggal_antrian = date('Y-m-d');
            // jika hari sabtu atau minggu day +1
            $day = date('D', strtotime($tanggal_antrian));
            if ($day == 'Sat') {
                $tanggal_antrian = date('Y-m-d', strtotime($tanggal_antrian . ' +2 day'));
            } elseif ($day == 'Sun') {
                $tanggal_antrian = date('Y-m-d', strtotime($tanggal_antrian . ' +1 day'));
            }
            // dd($day);
            $timeNow = date('H:i:s');
            // dd($tanggal_mulai);
            if($timeNow >= $start_antrian && $timeNow <= $close_antrian){
                $tanggal_antrian = $tanggal_antrian; 
            }else{
                $tanggal_antrian = date('Y-m-d', strtotime($tanggal_antrian . ' +1 day'));
            }
            $last_antrian = $this->antrianModel->getLastAntrian($tanggal_antrian);
            // dd($tanggal_antrian);
            // dd($last_antrian, $max_antrian);
            if($last_antrian){
                if($last_antrian['no_antrian'] >= $max_antrian){
                    $selisih_hari = (strtotime($tanggal_penutupan_antrian) - strtotime($tanggal_antrian)) / (60 * 60 * 24);
                    // dd($selisih_hari);
                    for ($i=1; $i <= $selisih_hari; $i++) { 
                        $tanggal_antrian = date('Y-m-d', strtotime($tanggal_antrian . ' +1 day'));
                        $day = date('D', strtotime($tanggal_antrian));
                        if ($day == 'Sat') {
                            $tanggal_antrian = date('Y-m-d', strtotime($tanggal_antrian . ' +2 day'));
                        } elseif ($day == 'Sun') {
                            $tanggal_antrian = date('Y-m-d', strtotime($tanggal_antrian . ' +1 day'));
                        }
                        $last_antrian = $this->antrianModel->getLastAntrian($tanggal_antrian);
                        // dd($last_antrian, $tanggal_antrian);
                        if($last_antrian){
                            if($last_antrian['no_antrian'] >= $max_antrian){
                                $tanggal_antrian = date('Y-m-d', strtotime($tanggal_antrian . ' +1 day'));
                                break;
                            }else{
                                break;
                            }
                        }else{
                            break;
                        }
                    }
                    // dd($tanggal_antrian);
                    $last_antrian = $this->antrianModel->getLastAntrian($tanggal_antrian);
                    if($last_antrian){
                        if($last_antrian['no_antrian'] >= $max_antrian){
                            return $this->response->setJSON([
                                'error' => true,
                                'data' => 'Antrean sudah penuh',
                                'status' => '406'
                            ]);
                        }
                    }
                }else{
                    $last_antrian = $this->antrianModel->getLastAntrian($tanggal_antrian);
                }
            }
            
            if($tanggal_antrian > $tanggal_penutupan_antrian){
                return $this->response->setJSON([
                    'error' => true,
                    'data' => 'Antrean sudah ditutup',
                    'status' => '406'
                ]);
            }
            // dd($tanggal_antrian, $tanggal_penutupan_antrian, $tanggal_mulai);
            // if($timeNow >= $start_antrian && $timeNow <= $close_antrian){

            if($tanggal_antrian >= $tanggal_mulai && $tanggal_antrian <= $tanggal_penutupan_antrian){
                for ($i=1; $i <= $total_sesi; $i++) { 
                    foreach ($data_referensi as $data) {
                        if ($data['nama_referensi'] == 'Sesi ' . $i) {
                            $dataSesi = explode(' - ', $data['kode_referensi']);
                            $sesi[$i] = "Sesi " . $i . " (" . $dataSesi[0] . " WIB)";
                        }
                    }
                }
                    // dd($sesi);  

                if ($last_antrian) {
                    $no_antrian = $last_antrian['no_antrian'] + 1;
                    if ($no_antrian > $max_antrian) {
                        return $this->response->setJSON([
                            'error' => true,
                            'data' => 'Antrean sudah penuh',
                            'status' => '406'
                        ]);
                    }
                } else {
                    $no_antrian = 1;
                }

                // dd($no_antrian);
        
                $sesi_antrian = $sesi[1];
                for ($i=1; $i <= $total_sesi; $i++) { 
                    if ($no_antrian > ($max_antrian / $total_sesi) * $i) {
                        $sesi_antrian = $sesi[$i + 1];
                    }
                }
                // dd($sesi_antrian);
            
                $uuid = Uuid::uuid4();
                $id_antrian = str_replace('-', '', $uuid->toString());
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
                
                
                // dd($sesi_antrian);
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
                    'status_antrian' => '0',
                    'no_antrian' => $no_antrian,
                    'sesi_antrian' => $sesi_antrian,
                    'tanggal_antrian' => $tanggal_antrian,
                    'created_at' => date('Y-m-d H:i:s'),
                ];
                $this->antrianModel->insert($data);
                return $this->response->setJSON([
                    'error' => false,
                    'data' => 'Data berhasil disimpan',
                    'status' => '200'
                ]);
            } else {
                return $this->response->setJSON([
                    'error' => true,
                    'data' => 'Antrean belum dibuka',
                    'status' => '406'
                ]);
            }
        }
    }
    

    public function edit(){
        $id = $this->request->getPost('id');
        $data = $this->antrianModel->getAntrian($id);
        if($data){
            return $this->response->setJSON([
                'error' => false,
                'data' => $data,
                'status' => '200'
            ]);
        }else {
            return $this->response->setJSON([
                'error' => true,
                'data' => 'Data tidak ditemukan',
                'status' => '404'
            ]);
        }
    }

    public function update(){
        $id = $this->request->getPost('id');
        $data = $this->antrianModel->getAntrian($id);
        if($data){
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
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus diisi.',
                        // 'is_unique' => '{field} sudah terdaftar.'
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
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus diisi.',
                        // 'is_unique' => '{field} sudah terdaftar.'
                    ]
                ],
                'sesi_antrian' => [
                    'label' => 'Sesi Antrian',
                    'rules' => 'required',
                    'errors' => [
                    'required' => '{field} harus diisi.'
                    ]
                ],
                'tanggal_antrian' => [
                    'label' => 'Tanggal Antrian',
                    'rules' => 'required',
                    'errors' => [
                    'required' => '{field} harus diisi.'
                    ]
                ],
                'no_antrian' => [
                    'label' => 'No Antrian',
                    'rules' => 'required',
                    'errors' => [
                    'required' => '{field} harus diisi.'
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
                $data = [
                    'nama_siswa' => $this->request->getPost('nama_siswa'),
                    'nisn' => $this->request->getPost('nisn'),
                    'asal_sekolah' => $this->request->getPost('asal_sekolah'),
                    'alamat' => $this->request->getPost('alamat'),
                    'no_tlp' => $this->request->getPost('no_tlp'),
                    'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                    'jalur_pendaftaran' => $this->request->getPost('jalur_pendaftaran'),
                    'kode_pendaftaran' => $this->request->getPost('kode_pendaftaran'),
                    'sesi_antrian' => $this->request->getPost('sesi_antrian'),
                    'tanggal_antrian' => $this->request->getPost('tanggal_antrian'),
                    'no_antrian' => $this->request->getPost('no_antrian'),
                    'status_antrian' => $this->request->getPost('status_antrian'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
                $this->antrianModel->update($id, $data);
                return $this->response->setJSON([
                    'error' => false,
                    'data' => 'Data berhasil dirubah',
                    'status' => '200'
                ]);
            }
        }else {
            return $this->response->setJSON([
                'error' => true,
                'data' => 'Data tidak ditemukan',
                'status' => '404'
            ]);
        }
    }

    public function destroy(){
        $id = $this->request->getPost('id');
        // remove qr code
        $qr_code = $this->antrianModel->select('qr_code')->where('id_antrian', $id)->first();
        if ($qr_code['qr_code'] != 'default.png') {
            unlink('Assets/qr_code/' . $qr_code['qr_code']);
        }
        // remove data
        $this->antrianModel->delete($id);
        return $this->response->setJSON([
            'error' => false,
            'data' => 'Data berhasil dihapus',
            'status' => '200'
        ]);
    }

    public function scan(){
        $data = [
            'main_menu' => 'Antrean',
            'title' => 'Scan Antrean',
            'active' => 'Scan',
        ];
        return view('Admin/Antrian/scan_antrian', $data);
    }

    public function changeStatus(){
        $id = $this->request->getPost('id');
        $data = $this->antrianModel->getAntrian($id);
        if ($data->status_antrian == '0') {
            $this->antrianModel->update($id, ['status_antrian' => '1']);
            return $this->response->setJSON([
                'error' => false,
                'data' => 'Status berhasil diubah',
                'status' => '200'
            ]);
        } else {
            $this->antrianModel->update($id, ['status_antrian' => '0']);
            return $this->response->setJSON([
                'error' => false,
                'data' => 'Status berhasil diubah',
                'status' => '200'
            ]);
        }
    }
    
    public function checkIn(){
        // $id = '62d8c586b3cf4231855c6bd37b57cff4';
        $id = $this->request->getPost('id');
        // dd($id);
        $data = $this->antrianModel->getAntrian($id);
        $referensi = new masterReferensiModel();
        $timeNow = date('H:i:s');
        $data_referensi = $referensi->getReferensiByKodeKategori('set_antrian');
        $active = '';
        
    
        if($data){
            if($data_referensi){
                foreach ($data_referensi as $row) {
                    if ($row['nama_referensi'] == 'Sesi 1') {
                        $sesi1 = explode(' - ', $row['kode_referensi']);
                        $detail = $sesi1[0];
                        $sesi1[0] = str_replace('.', ':', $sesi1[0]) . ':00';
                        $sesi1[1] = str_replace('.', ':', $sesi1[1]) . ':00';

                        if ($timeNow >= $sesi1[0] && $timeNow <= $sesi1[1]) {
                            $active =  "Sesi 1 (" . $detail . " WIB)";
                            
                        }
                    }
                    if ($row['nama_referensi'] == 'Sesi 2') {
                        $sesi2 = explode(' - ', $row['kode_referensi']);
                        $detail = $sesi2[0];
                        $sesi2[0] = str_replace('.', ':', $sesi2[0]) . ':00';
                        $sesi2[1] = str_replace('.', ':', $sesi2[1]) . ':00';
                        if ($timeNow >= $sesi2[0] && $timeNow <= $sesi2[1]) {
                            $active = "Sesi 2 (" . $detail . " WIB)";
                            
                        }
                    }
                    if ($row['nama_referensi'] == 'Sesi 3') {
                        $sesi3 = explode(' - ', $row['kode_referensi']);
                        $detail = $sesi3[0];
                        $sesi3[0] = str_replace('.', ':', $sesi3[0]) . ':00';
                        $sesi3[1] = str_replace('.', ':', $sesi3[1]) . ':00';
                        if ($timeNow >= $sesi3[0] && $timeNow <= $sesi3[1]) {
                            $active = "Sesi 3 (" . $detail . " WIB)";
                            
                        }
                    }
                }
                // dd($active);
                
            } else {
                return $this->response->setJSON([
                    'error' => true,
                    'data' => 'Data referensi tidak ditemukan',
                    'status' => '404'
                ]);
            }
            if ($data['status_antrian'] == '0') {
                // dd($active, $data['sesi_antrian']);
                if($active == $data['sesi_antrian']){
                    $this->antrianModel->update($id, ['status_antrian' => '1']);
                    return $this->response->setJSON([
                        'error' => false,
                        'data' => 'Check in berhasil',
                        'status' => '200'
                    ]);
                } else {
                    return $this->response->setJSON([
                        'error' => true,
                        'data' => 'Check in diluar jadwal sesi',    
                        'status' => '422'
                    ]);
                }
            } else {
                return $this->response->setJSON([
                    'error' => true,
                    'data' => 'Anda sudah check in',
                    'status' => '422'
                ]);
            }
        }else {
            return $this->response->setJSON([
                'error' => true,
                'data' => 'Data tidak ditemukan',
                'status' => '404'
            ]);
        }
    }

    public function ubahAntrian(){
        $id = $this->request->getPost('id_antrian');
        $data = $this->antrianModel->getAntrian($id);
        if($data){
            $status = $this->request->getPost('status_antrian');
            $ket = $this->request->getPost('ket_antrian');
            $this->antrianModel->update($id, ['status_antrian' => $status, 'ket_antrian' => $ket]);
            return $this->response->setJSON([
                'error' => false,
                'data' => 'Data berhasil dirubah',
                'status' => '200'
            ]);
        }else {
            return $this->response->setJSON([
                'error' => true,
                'data' => 'Data tidak ditemukan',
                'status' => '404'
            ]);
        }
    }

    public function listAntrian(){
        $data = [
            'main_menu' => 'Antrean',
            'title' => 'List Antrean',
            'active' => 'List',
        ];
        return view('Admin/Antrian/list_antrian', $data);
    }

     public function ajaxListAntrian()
     {
        $nama_loket = session()->get('username');
        $tanggal = date('Y-m-d');
        $builder = $this->antrianModel->select('antrian.id_antrian, antrian.nama_siswa, antrian.nisn, antrian.asal_sekolah, antrian.alamat, antrian.no_tlp, antrian.jenis_kelamin, antrian.jalur_pendaftaran, antrian.kode_pendaftaran, antrian.qr_code, antrian.status_antrian, antrian.no_antrian, antrian.sesi_antrian, antrian.tanggal_antrian, antrian.created_at')
            ->where('tanggal_antrian', $tanggal)->where('status_antrian', '2')->where('loket', $nama_loket);
        
        // dd($builder);
        return DataTable::of($builder)
            ->add('status_antrian', function ($row) {
                switch ($row->status_antrian) {
                    case '1':
                        return '<span class="badge badge-pill badge-primary">Check In</span>';
                        break;
                    case '2':
                        return '<span class="badge badge-pill badge-secondary">Pemberkasan</span>';
                        break;
                    case '3':
                        return '<s class="badge badge-pill badge-success">Selesai</span>';
                        break;
                    case '4':
                        return '<span class="badge badge-pill badge-warning">Bermasalah</span>';
                        break;
                    default:
                        return '<span class="badge badge-pill badge-danger">Tidak aktif</span>';
                        break;
                }
            })
            ->add('action', function ($row) {
                return '
                    <button class="btn btn-info mr-2 detailsAntrian" id="'.$row->id_antrian.'"><i class="dw dw-eye"></i> View</a>
                    <button class="btn btn-warning mr-2 panggil_antrian" id="'.$row->id_antrian.'"><i class="icon-copy bi bi-megaphone"></i></button>
                ';
            }, 'last')
            ->toJson(true);
    }
    
    public function AjaxAntrianNotActive()
    {
        $tanggal = date('Y-m-d');
         $builder = $this->antrianModel->select('antrian.id_antrian, antrian.nama_siswa, antrian.nisn, antrian.asal_sekolah, antrian.alamat, antrian.no_tlp, antrian.jenis_kelamin, antrian.jalur_pendaftaran, antrian.kode_pendaftaran, antrian.qr_code, antrian.status_antrian, antrian.no_antrian, antrian.sesi_antrian, antrian.tanggal_antrian, antrian.created_at')->where('tanggal_antrian', $tanggal)->whereIn('status_antrian', ['0', '4']);
        
        // dd($builder);
        return DataTable::of($builder)
            ->add('status_antrian', function ($row) {
                switch ($row->status_antrian) {
                    case '1':
                        return '<span class="badge badge-pill badge-primary">Check In</span>';
                        break;
                    case '2':
                        return '<span class="badge badge-pill badge-secondary">Pemberkasan</span>';
                        break;
                    case '3':
                        return '<s class="badge badge-pill badge-success">Selesai</span>';
                        break;
                    case '4':
                        return '<span class="badge badge-pill badge-warning">Bermasalah</span>';
                        break;
                    default:
                        return '<span class="badge badge-pill badge-danger">Tidak aktif</span>';
                        break;
                }
            })
            ->add('action', function ($row) {
                return '
                    <button class="btn btn-info mr-2 detailsAntrian" id="'.$row->id_antrian.'"><i class="dw dw-eye"></i> View</a>
                    
                ';
            }, 'last')
            ->toJson(true);
    }

    public function AjaxAntrianBermasalah()
    {
        $tanggal = date('Y-m-d');
         $builder = $this->antrianModel->select('antrian.id_antrian, antrian.nama_siswa, antrian.nisn, antrian.asal_sekolah, antrian.alamat, antrian.no_tlp, antrian.jenis_kelamin, antrian.jalur_pendaftaran, antrian.kode_pendaftaran, antrian.qr_code, antrian.status_antrian, antrian.no_antrian, antrian.sesi_antrian, antrian.tanggal_antrian, antrian.created_at')->where('tanggal_antrian', $tanggal)->whereIn('status_antrian', ['0', '4']);
        
        // dd($builder);
        return DataTable::of($builder)
            ->add('status_antrian', function ($row) {
                switch ($row->status_antrian) {
                    case '1':
                        return '<span class="badge badge-pill badge-primary">Check In</span>';
                        break;
                    case '2':
                        return '<span class="badge badge-pill badge-secondary">Pemberkasan</span>';
                        break;
                    case '3':
                        return '<s class="badge badge-pill badge-success">Selesai</span>';
                        break;
                    case '4':
                        return '<span class="badge badge-pill badge-warning">Bermasalah</span>';
                        break;
                    default:
                        return '<span class="badge badge-pill badge-danger">Tidak aktif</span>';
                        break;
                }
            })
            ->add('action', function ($row) {
                return '
                    <button class="btn btn-info mr-2 detailsAntrian" id="'.$row->id_antrian.'"><i class="dw dw-eye"></i> View</a>
                    <button class="btn btn-warning mr-2 panggil_trouble" id="'.$row->id_antrian.'"><i class="icon-copy bi bi-megaphone"></i></button>
                ';
            }, 'last')
            ->toJson(true);
    }

    public function addNotifikasi(){
        $id = $this->request->getPost('id');
        $nama_loket = session()->get('nama_user');
        $data = $this->antrianModel->getAntrian($id);
        if($data){
            $notifikasiModel = new notifikasiModel();
            $data_notifikasi = [
                'nama_notifikasi' => 'Pemberkasan Antrian',
                'isi_notifikasi' => 'Nomor antrean, ' . $data['no_antrian'] . ', silahkan menuju ke ' . $nama_loket,
                'status_notifikasi' => '1',
                'created_at' => date('Y-m-d H:i:s')
            ];
            $notifikasiModel->insert($data_notifikasi);
            return $this->response->setJSON([
                'error' => false,
                'data' => 'Notifikasi berhasil dikirim',
                'status' => '200'
            ]);
        }else {
            return $this->response->setJSON([
                'error' => true,
                'data' => 'Data tidak ditemukan',
                'status' => '404'
            ]);
        }
    }

    public function nextAntrian(){
        $tanggal = date('Y-m-d');
        $nama_loket = session()->get('nama_user');
        $id_loket = session()->get('username');
        $activeAntrian = $this->antrianModel->getActiveAntrian($tanggal);
        if ($activeAntrian) {
            // update satus dan loket
            $this->antrianModel->update($activeAntrian['id_antrian'], ['status_antrian' => '2', 'loket' => $id_loket]);
            // add data notifikasi
            $notifikasiModel = new notifikasiModel();
            $data_notifikasi = [
                'nama_notifikasi' => 'Antrean',
                'isi_notifikasi' => 'Nomor antrean, ' . $activeAntrian['no_antrian'] . ', silahkan menuju ke ' . $nama_loket,
                'status_notifikasi' => '1',
                'created_at' => date('Y-m-d H:i:s')
            ];
            $notifikasiModel->insert($data_notifikasi);
            return $this->response->setJSON([
                'error' => false,
                'data' => 'Antrian berhasil dipanggil',
                'status' => '200'
            ]);
        } else {
            return $this->response->setJSON([
                'error' => true,
                'data' => 'Antrian habis',
                'status' => '404'
            ]);
        }
    }

    
}
?>