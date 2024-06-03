<?php 

namespace App\Controllers;

use App\Controllers\BaseController;

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
}

?>