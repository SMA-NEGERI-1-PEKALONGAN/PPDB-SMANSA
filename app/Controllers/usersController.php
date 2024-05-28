<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Hermawan\DataTables\DataTable;
use App\Models\usersModel;
use Ramsey\Uuid\Uuid;

class usersController extends BaseController
{
    protected $usersModel;
    
    public function __construct()
    {
        $this->userModel = new usersModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Users',
            'active' => 'Users',
        ];
        return view('Admin/Users/index', $data);
    }

    public function ajaxDataTables()
    {
        $builder = $this->userModel->getUser();
        // dd($builder);
        return DataTable::of($builder)
            ->add('action', function ($row) {
                return '
                <div class="dropdown">
					<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown"> <i class="dw dw-more"></i></a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
							<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
							<button class="dropdown-item delete_kategori" id="'.$row->id_user.'"><i class="dw dw-delete-3"></i> Delete</button>
						</div>
				</div>
                ';
            }, 'last')
            ->toJson(true);
    }

    public function store()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah ada',
                ],
            ],
            'role' => [
                'label' => 'Role',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ],
            ],
            'nama_user' => [
                'label' => 'Nama User',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ],
            ],
        ]);
        
        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'error' => true,
                'data' => $validation->getErrors(),
                'status' => '422'
            ]);
        } else {
            $uuid = Uuid::uuid4();
            $id_user = $uuid->toString();
            $data = [
                'id_user' => $id_user,
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('username'), PASSWORD_DEFAULT),
                'role' => $this->request->getPost('role'),
                'nama_user' => $this->request->getPost('nama_user'),
                'status_user' => '1',
            ];
            $this->userModel->insert($data);
            return $this->response->setJSON([
                'error' => false,
                'data' => 'Data berhasil disimpan',
                'status' => '200'
            ]);
        }
    }
}