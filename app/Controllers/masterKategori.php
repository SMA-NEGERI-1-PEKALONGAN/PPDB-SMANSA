<?php 

namespace App\Controllers;
use App\Models\masterKategoriModel;

class masterKategori extends BaseController
{
    protected $masterKategoriModel;

    public function __construct()
    {
        $this->masterKategoriModel = new masterKategoriModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Master Kategori',
            'active' => 'masterKategori',
            'kategori' => $this->masterKategoriModel->getKategori()->getResult()
        ];
        return view('masterKategori/index', $data);
    }

}
?>