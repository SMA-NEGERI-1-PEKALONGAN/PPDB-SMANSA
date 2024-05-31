<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Hermawan\DataTables\DataTable;
use App\Models\antrianModel;


class antrianController extends BaseController
{
    protected $antrianModel;

    public function __construct()
    {
        $this->antrianModel = new antrianModel();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Antrian',
            'active' => 'Antrian',
        ];
        return view('Admin/Antrian/index', $data);
    }

    public function ajaxDataTables(){
    
        $builder = $this->antrianModel->getAntrian();
        
        // dd($builder);
        return DataTable::of($builder)
            ->add('action', function ($row) {
                return '
                <div class="dropdown">
					<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown"> <i class="dw dw-more"></i></a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <button class="dropdown-item view_user" id="'.$row->id_antrian.'"><i class="dw dw-eye"></i> View</a>
                            <button class="dropdown-item edit_user" id="'.$row->id_antrian.'"><i class="dw dw-edit2"></i> Edit</button>
                            <button class="dropdown-item reset_pass" id="'.$row->id_antrian.'"><i class="dw dw-refresh2"></i> Reset Password</button>
							<button class="dropdown-item delete_user" id="'.$row->id_antrian.'"><i class="dw dw-delete-3"></i> Delete</button>
						</div>
				</div>
                ';
            }, 'last')
            ->toJson(true);
    }

}
?>