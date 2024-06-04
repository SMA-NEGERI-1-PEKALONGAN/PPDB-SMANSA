<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AntrianModel;
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

    public function search(){
        $keyword = $this->request->getVar('keyword');
        $antrianModel = new AntrianModel();
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

    public function view(){
       
        $data = [
            'title' => 'Views - PPDB SMANSA',
            'active' => 'Views',
        ];
        return view('landingPage/view', $data);
    }

    public function fetchAntrian(){
        $antrianModel = new AntrianModel();
        $tanggal = date('Y-m-d');
        //total antrian
        $totalAntrian = $antrianModel->where('tanggal_antrian', $tanggal)->countAllResults();
        // antrian aktif
        $antrianActive = $antrianModel->where('status_antrian', '1')->where('tanggal_antrian', $tanggal)->countAllResults();
        // antrian saat ini 
        $antrianNow = $antrianModel->select('no_antrian')->orderBy('no_antrian', 'DESC')->where('status_antrian', '2')->where('tanggal_antrian', $tanggal)->first();
        // sisa antrian
        $sisa_antrian = $antrianModel->where('status_antrian', '0')->where('tanggal_antrian', $tanggal)->countAllResults();
        // loket 1
        $loket1 = $antrianModel->select('no_antrian')->orderBy('no_antrian', 'DESC')->where('status_antrian', '2')->where('tanggal_antrian', $tanggal)->where('loket', 'loket1')->first();
        // loket 2 
        $loket2 = $antrianModel->select('no_antrian')->orderBy('no_antrian', 'DESC')->where('status_antrian', '2')->where('tanggal_antrian', $tanggal)->where('loket', 'loket2')->first();
        // loket 3
        $loket3 = $antrianModel->select('no_antrian')->orderBy('no_antrian', 'DESC')->where('status_antrian', '2')->where('tanggal_antrian', $tanggal)->where('loket', 'loket3')->first();
        // loket 4
        $loket4 = $antrianModel->select('no_antrian')->orderBy('no_antrian', 'DESC')->where('status_antrian', '2')->where('tanggal_antrian', $tanggal)->where('loket', 'loket4')->first();

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
}

?>