<?php 

namespace App\Controllers;

use App\Controllers\BaseController;

class landingPageController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Landing Page',
            'active' => 'Landing Page',
        ];
        return view('landingPage/index', $data);
    }

    public function Antrian(){
        $data = [
            'title' => 'Antrian',
            'active' => 'Antrian',
        ];
        return view('landingPage/antrian', $data);
    }
}

?>