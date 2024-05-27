<?php 

namespace App\Controllers;

use App\Models\masterReferensiModel;

class masterReferensi extends BaseController
{
    protected $masterReferensiModel;

    public function __construct()
    {
        $this->masterReferensiModel = new masterReferensiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Master Referensi',
            'active' => 'masterReferensi',
        ];
        return view('Admin/masterReferensi/index', $data);
    }

}
?>