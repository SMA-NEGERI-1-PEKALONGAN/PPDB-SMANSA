<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\antrianModel;
use App\Models\notifikasiModel;
use App\Models\masterReferensiModel;
use App\Models\aktifitasWebModel;
use CodeIgniter\HTTP\RequestInterface;

class landingPageController extends BaseController
{
    public function __construct()
    {
        $aktifitasWebModel = new aktifitasWebModel();
        // add data to aktifitas web
        $mac_address2 = exec('getmac');
        $mac_address = shell_exec('getmac');
        dd($mac_address2, $mac_address);
        $mac_address = explode(' ', $mac_address);
        $mac_address = str_replace('-', ':', $mac_address);
        $mac_address = $mac_address[0];
        // dd($mac_address);
        $aktifitasWeb = $aktifitasWebModel->getAktifitasWebByMac($mac_address, date('Y-m-d'));
        if(!$aktifitasWeb){
            $data_aktifitas = [
                'mac_address' => $mac_address,
                'created_at' => date('Y-m-d H:i:s')
            ];
            $aktifitasWebModel->insert($data_aktifitas);
        }
    }
    
    public function index()
    {
        $ip = $this->request->getIPAddress();
        $mac_address = exec("arp -n " . $ip);
        dd($mac_address2, $mac_address);
        $masterReferensiModel = new masterReferensiModel();
        $masterReferensi = $masterReferensiModel->getReferensiByKodeKategori('set_antrian');
        foreach($masterReferensi as $row){
            if ($row['nama_referensi'] == 'status_antrian') {
                $status_antrian = $row['kode_referensi'];
            }
        }

        
        $data = [
            'title' => 'SPMB SMANSA',
            'active' => 'Landing Page',
            'status_antrian' => $status_antrian,
        ];
        return view('landingPage/index', $data);
    }

    public function Antrian(){
        $masterReferensiModel = new masterReferensiModel();
        $masterReferensi = $masterReferensiModel->getReferensiByKodeKategori('set_antrian');
        foreach($masterReferensi as $row){
            if ($row['nama_referensi'] == 'status_antrian') {
                $status_antrian = $row['kode_referensi'];
            }
        }
        if($status_antrian == '0'){
            return redirect()->to('/');
        }
        $data = [
            'title' => 'Antrean - SPMB SMANSA',
            'active' => 'Antrian',
        ];
        return view('landingPage/antrian', $data);
    }

    public function Cari(){
        $data = [
            'title' => 'Cari - SPMB SMANSA',
            'active' => 'Cari',
        ];
        return view('landingPage/cari', $data);
    }

    public function Pengumuman(){
        $data = [
            'title' => 'Pengumuman - SPMB SMANSA',
            'active' => 'Pengumuman',
        ];
        return view('landingPage/pengumuman', $data);
    }
    
    public function Form(){
        $data = [
            'title' => 'FORM DU - SPMB SMANSA',
            'active' => 'Form-DU',
        ];
        return view('landingPage/FORM', $data);
    }
    
    public function search_antrian(){
        $keyword = $this->request->getVar('keyword');
        $antrianModel = new antrianModel();
        $antrian = $antrianModel->search($keyword)->get()->getRow();
        // dd($antrian);
        if($antrian){
            return $this->response->setJSON([
                'error' => false,
                'data' => $antrian,
                'status' => '200'
            ]);
        }else{
            return $this->response->setJSON([
                'error' => true,
                'data' => 'Data tidak ditemukan',
                'status' => '404'
            ]);
        }
    }

    public function Views(){
       
        $data = [
            'title' => 'Views - SPMB SMANSA',
            'active' => 'Views',
        ];
        return view('landingPage/view', $data);
    }

    public function getAllDataAntrian(){
        $antrianModel = new antrianModel();
        $tanggal = date('Y-m-d');

        $masterData = $antrianModel->getAntrianByDate($tanggal);

        $totalAntrian = count($masterData);
        $antrianActive = 0 ;
        $sisa_antrian = 0;
        $antrianNow  = 0;
        $loket1 = 0;
        $loket2 = 0;
        $loket3 = 0;
        $loket4 = 0;

        foreach($masterData as $data){
            if($data['status_antrian'] == '1'){
                $antrianActive++;
            }
            if($data['status_antrian'] == '0'){
                $sisa_antrian++;
            }
            if($antrianNow  == 0){
                if($data['status_antrian'] == '2'){
                    $antrianNow  = $data['no_antrian'];
                }
            }
            if($loket1 == 0){
                if($data['loket'] == 'loket1' && $data['status_antrian'] == '2'){
                    $loket1 = $data['no_antrian'];
                }
            }
            if($loket2 == 0){
                if($data['loket'] == 'loket2' && $data['status_antrian'] == '2'){
                    $loket2 = $data['no_antrian'];
                }
            }
            if($loket3 == 0){
                if($data['loket'] == 'loket3' && $data['status_antrian'] == '2'){
                    $loket3 = $data['no_antrian'];
                }
            }
            if($loket4 == 0){
                if($data['loket'] == 'loket4' && $data['status_antrian'] == '2'){
                    $loket4 = $data['no_antrian'];
                }
            }
        }
        
        

        $data = [
            'totalAntrian' => $totalAntrian,
            'antrianActive' => $antrianActive,
            'antrianNow' => $antrianNow,
            'sisa_antrian' => $sisa_antrian,
            'loket1' => $loket1,
            'loket2' => $loket2,
            'loket3' => $loket3,
            'loket4' => $loket4,
        ];

        // dd($data);
       
        return $this->response->setJSON([
            'error' => false,
            'data' => $data,
            'status' => '200'
        ]);
    }

    public function fect_total_antrian(){
        $antrianModel = new antrianModel();
        $masterReferensiModel = new masterReferensiModel();
        $tanggal = date('Y-m-d');

        $masterData = $antrianModel->getAntrianByDate($tanggal);

        $masterReferensi = $masterReferensiModel->getReferensiByKodeKategori('set_antrian');

        foreach($masterReferensi as $row){
             if ($row['nama_referensi'] == 'max_antrian') {
                $max_antrian = $row['kode_referensi'];
             }
             if ($row['nama_referensi'] == 'status_antrian') {
                $status_antrian = $row['kode_referensi'];
             }
             if($row['nama_referensi'] == 'tanggal_antrian'){
                $tanggalActive = $row['kode_referensi'];
             }
        }
        $data =[
            'totalAntrian' => count($masterData),
            'tanggalActive' => $tanggalActive,
            'max_antrian' => $max_antrian,
            'status_antrian' => $status_antrian,
        ];
        
        return $this->response->setJSON([
            'error' => false,
            'data' => $data,
            'status' => '200'
        ]);
    }
    
    public function fetchNotifikasi(){
        $notifikasiModel = new notifikasiModel();
        $notifikasi = $notifikasiModel->getNotifikasiActive();
        if($notifikasi){
            return $this->response->setJSON([
                'error' => false,
                'data' => $notifikasi,
                'status' => '200'
            ]);
        }else{
            return $this->response->setJSON([
                'error' => true,
                'data' => 'Data tidak ditemukan',
                'status' => '404'
            ]);
        }
    }

    public function updateNotifikasi(){
        $notifikasiModel = new notifikasiModel();
        $id = $this->request->getPost('id');
        $data = [
            'status_notifikasi' => '0'
        ];
        $notifikasiModel->update($id, $data);
        return $this->response->setJSON([
            'error' => false,
            'data' => 'Data berhasil diupdate',
            'status' => '200'
        ]);
    }

    public function printAntrean($id){
        // $kode_pendaftaran = $this->request->getPost('kode_pendaftaran');
        $antrianModel = new antrianModel();
        $antrian = $antrianModel->search($id)->get()->getRow();
        // dd($antrian);
        $data = [
            'title' => 'Cetak Antrean',
            'active' => 'printAntrean',
            'data' => $antrian
        ];
        return view('landingPage/printAntrean', $data);
    }

    public function getDataFormAntrean(){
        $masterReferensiModel = new masterReferensiModel();
        $masterReferensi = $masterReferensiModel->getReferensiByKodeKategori('set_antrian');

        foreach($masterReferensi as $row){
            if ($row['nama_referensi'] == 'start_antrian') {
                $start_antrian = str_replace('.', ':', $row['kode_referensi']) . ':00';
            }
            if ($row['nama_referensi'] == 'close_antrian') {
                $close_antrian = str_replace('.', ':', $row['kode_referensi']) . ':00';
            }
            if ($row['nama_referensi'] == 'status_antrian') {
                $status_antrian = $row['kode_referensi'];
            }
            if($row['nama_referensi'] == 'tanggal_antrian'){
                $tanggal_antrian = $row['kode_referensi'];
            }
        }

        $dateNow = date('Y-m-d');
        $timeNow = date('H:i:s');
        $pesan = '';
        $dateTimeNow  = $dateNow . ' ' . $timeNow;
         
        if(strtotime($dateNow) < strtotime($tanggal_antrian)){
            $dateTime = $tanggal_antrian . ' ' . $start_antrian;
            
            $pesan = 'Pendaftaran antrean dapat dilakukan pada tanggal ' . date('d F Y', strtotime($tanggal_antrian)) . ' pukul ' . $start_antrian . ' WIB';

            // $pesan = 'Pengumuman datapat dilihat pada tanggal ' . date('d F Y', strtotime($tanggal_antrian)) . ' pukul ' . $start_antrian . ' WIB';
            
        }else{
            // + 1 hari
            // if(strtotime($timeNow) < strtotime($close_antrian)){
            //     $dateTime = date('Y-m-d', strtotime($dateNow . ' +1 day')) . ' ' . $start_antrian;
            // }else{
                $dateTime = $dateNow . ' ' . $start_antrian;
            // }

            // $pesan = 'Pendaftaran antrean dapat dilakukan pada tanggal setiap hari senin s.d. jumat pukul ' . $start_antrian . ' WIB s.d ' . $close_antrian . ' WIB';

        }
        

        $data =[
            'start_antrian' => $start_antrian, 
            'close_antrian' => $close_antrian,
            'status_antrian' => $status_antrian,
            'tanggal_antrian' => $tanggal_antrian,
            'dateTime' => $dateTime,
            'dateTimeNow' => $dateTimeNow,
            'pesan' => $pesan
        ];
        
        return $this->response->setJSON([
            'error' => false,
            'data' => $data,
            'status' => '200'
        ]);
    }

    public function getDataPengumuman(){
        $masterReferensiModel = new masterReferensiModel();
        $masterReferensi = $masterReferensiModel->getReferensiByKodeKategori('set_antrian');

        foreach($masterReferensi as $row){
            if ($row['nama_referensi'] == 'start_antrian') {
                $start_antrian = str_replace('.', ':', $row['kode_referensi']) . ':00';
            }
            if ($row['nama_referensi'] == 'close_antrian') {
                $close_antrian = str_replace('.', ':', $row['kode_referensi']) . ':00';
            }
            if ($row['nama_referensi'] == 'status_antrian') {
                $status_antrian = $row['kode_referensi'];
            }
            if($row['nama_referensi'] == 'tanggal_antrian'){
                $tanggal_antrian = $row['kode_referensi'];
            }
        }

        $dateNow = date('Y-m-d');
        $timeNow = date('H:i:s');
        $pesan = '';
        $dateTimeNow  = $dateNow . ' ' . $timeNow;

        $pesan = 'Pengumuman dapat dilihat pada tanggal ' . date('d F Y', strtotime($tanggal_antrian)) . ' pukul ' . $start_antrian . ' WIB';

        $dateTime = $tanggal_antrian . ' ' . $start_antrian;

        $data =[
            'start_antrian' => $start_antrian, 
            'close_antrian' => $close_antrian,
            'status_antrian' => $status_antrian,
            'tanggal_antrian' => $tanggal_antrian,
            'dateTime' => $dateTime,
            'dateTimeNow' => $dateTimeNow,
            'pesan' => $pesan
        ];
        
        return $this->response->setJSON([
            'error' => false,
            'data' => $data,
            'status' => '200'
        ]);
    }
}

?>