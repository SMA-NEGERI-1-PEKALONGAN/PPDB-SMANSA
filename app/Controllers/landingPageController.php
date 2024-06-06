<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\antrianModel;
use App\Models\notifikasiModel;
use App\Models\masterReferensiModel;
use CodeIgniter\HTTP\RequestInterface;

class landingPageController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'PPDB SMANSA',
            'active' => 'Landing Page',
        ];
        return view('landingPage/index', $data);
    }

    public function Antrian(){
        $data = [
            'title' => 'Antrian - PPDB SMANSA',
            'active' => 'Antrian',
        ];
        return view('landingPage/antrian', $data);
    }

    public function Cari(){
        $data = [
            'title' => 'Cari - PPDB SMANSA',
            'active' => 'Cari',
        ];
        return view('landingPage/cari', $data);
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
            'title' => 'Views - PPDB SMANSA',
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
}

?>