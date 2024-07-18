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

class laporanController extends BaseController
{
    protected $antrianModel;

    public function __construct()
    {
        $this->antrianModel = new antrianModel();
    }

     // laporan Antrean
    public function LaporanAntrean(){
        $data = [
            'main_menu' => 'Laporan',
            'title' => 'Laporan Antrean',
            'active' => 'laporan-antrean',
        ];
        return view('Admin/laporan/Antrean', $data);
    }

    public function ajaxLaporanAntrean()
    {   $db = db_connect();
        $status_antrian = $this->request->getPost('status_antrian');
        $tgl_awal = $this->request->getPost('tgl_awal');
        $tgl_akhir = $this->request->getPost('tgl_akhir');
        $builder = $db->table('antrian')->select('antrian.id_antrian, antrian.nama_siswa, antrian.nisn, antrian.asal_sekolah, antrian.alamat, antrian.no_tlp, antrian.jenis_kelamin, antrian.jalur_pendaftaran, antrian.kode_pendaftaran, antrian.qr_code, antrian.status_antrian, antrian.no_antrian, antrian.sesi_antrian, antrian.tanggal_antrian, antrian.created_at');
        if($status_antrian != ''){
            $builder->where('status_antrian', $status_antrian);
        }
        if($tgl_awal != '' && $tgl_akhir != ''){
            $builder->where('tanggal_antrian >=', $tgl_awal);
            $builder->where('tanggal_antrian <=', $tgl_akhir);
        }
        // dd($builder);

        return DataTable::of($builder)
        
        ->toJson(true);
    }
}