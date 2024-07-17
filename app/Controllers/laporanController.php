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
            'title' => 'Laporan Antrean',
            'active' => 'laporan-antrean',
        ];
        return view('Admin/laporan/Antrean', $data);
    }

    public function ajaxLaporanAntrean()
    {    $db = db_connect();
        $builder = $db->table('antrian')->select('antrian.id_antrian, antrian.nama_siswa, antrian.nisn, antrian.asal_sekolah, antrian.alamat, antrian.no_tlp, antrian.jenis_kelamin, antrian.jalur_pendaftaran, antrian.kode_pendaftaran, antrian.qr_code, antrian.status_antrian, antrian.no_antrian, antrian.sesi_antrian, antrian.tanggal_antrian, antrian.created_at');
         return DataTable::of($builder)
        ->filter(function ($builder, $request) {
            
            if ($request->tanggal_antrian)
                $builder->where('tanggal_antrian', $request->tanggal_antrian);
        
        })
        ->toJson();
    }
}