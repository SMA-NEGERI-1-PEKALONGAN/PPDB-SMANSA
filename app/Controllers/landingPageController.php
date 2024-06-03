<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AntrianModel;
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
        $antrian = $antrianModel->search($keyword);

        if($antrian){
            return $this->response->setJSON([
                'error' => false,
                'data' => $antrian,
                'status' => '200'
            ]);
        }else{
            return $this->response->setJSON([
                'error' => true,
                'message' => 'Data tidak ditemukan',
                'status' => '404'
            ]);
        }
    }
}

?>