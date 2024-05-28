<?php 

namespace App\Controllers;

use App\Models\masterReferensiModel;
use Hermawan\DataTables\DataTable;
use CodeIgniter\HTTP\RequestInterface;

class masterReferensiController extends BaseController
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
            'active' => 'Referensi',
        ];
        return view('Admin/masterReferensi/index', $data);
    }

    public function ajaxDataTables()
    {
        $builder = $this->masterReferensiModel->getReferensi($id = false);
        // dd($builder);
        return DataTable::of($builder)
            ->add('action', function ($row) {
                return '
                <div class="dropdown">
					<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown"> <i class="dw dw-more"></i></a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
							<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
							<button class="dropdown-item delete_referensi" id="'.$row->id_referensi.'"><i class="dw dw-delete-3"></i> Delete</button>
						</div>
				</div>
                ';
            }, 'last')
            ->toJson(true);
    }


}
?>