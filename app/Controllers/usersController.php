<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function index()
    {
        //
    }

    public function ajaxDataTables()
    {
        $builder = $this->masterKategoriModel->getKategori($id = false);
        // dd($builder);
        return DataTable::of($builder)
            ->add('action', function ($row) {
                return '
                <div class="dropdown">
					<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown"> <i class="dw dw-more"></i></a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
							<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
							<button class="dropdown-item delete_kategori" id="'.$row->id_kategori.'"><i class="dw dw-delete-3"></i> Delete</button>
						</div>
				</div>
                ';
            }, 'last')
            ->toJson(true);
    }
}