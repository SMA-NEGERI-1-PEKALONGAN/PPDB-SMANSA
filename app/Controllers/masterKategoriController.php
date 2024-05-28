<?php 

namespace App\Controllers;
use App\Models\masterKategoriModel;
use Hermawan\DataTables\DataTable;
use CodeIgniter\HTTP\RequestInterface;
class masterKategoriController extends BaseController
{
    protected $masterKategoriModel;

    public function __construct()
    {
        $this->masterKategoriModel = new masterKategoriModel();
    }

    public function ajaxDataTables()
    {
        $builder = $this->masterKategoriModel->getKategori($id = false);
        // dd($builder);
        return DataTable::of($builder)
            ->add('status_kategori', function ($row) {
                return '<input type="checkbox" checked class="switch-btn" data-size="small" data-color="#0099ff" />';
            })
            ->add('action', function ($row) {
                return '
                <div class="dropdown">
					<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown"> <i class="dw dw-more"></i></a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
							<button class="dropdown-item edit_kategori" id="'.$row->id_kategori.'" type="button"><i class="dw dw-edit2"></i> Edit</button>
							<button class="dropdown-item delete_kategori" id="'.$row->id_kategori.'" type="button"><i class="dw dw-delete-3"></i> Delete</button>
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
            'nama_kategori' => [
                'label' => 'Nama Kategori',
                'rules' => 'required|is_unique[master_kategori.nama_kategori]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah ada',
                ]
            ],
            'kode_kategori' => [
                'label' => 'Kode Kategori',
                'rules' => 'required|is_unique[master_kategori.kode_kategori]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah ada',
                ]
            ],
        ]);

       if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'error' => true,
                'data' => $validation->getErrors(),
                'status' => '422'
            ]);
        } else {
            $this->masterKategoriModel->insert([
                'nama_kategori' => $this->request->getPost('nama_kategori'),
                'kode_kategori' => $this->request->getPost('kode_kategori'),
                'status' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ]);
            return $this->response->setJSON([
                'error' => false,
                'data' => 'Data berhasil ditambahkan',
                'status' => '200'
            ]);
        }
    }

    public function edit()
    {
        $id = $this->request->getPost('id_kategori');
        $data = $this->masterKategoriModel->find($id);
        return $this->response->setJSON([
            'error' => false,
            'data' => $data,
            'status' => '200'
        ]);
    }

    public function update()
    {
        $id = $this->request->getPost('editid_kategori');
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'editnama_kategori' => [
                'label' => 'Nama Kategori',
                'rules' => 'required|is_unique[master_kategori.nama_kategori,id_kategori,' . $id . ']',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah ada',
                ]
            ],
            'editkode_kategori' => [
                'label' => 'Kode Kategori',
                'rules' => 'required|is_unique[master_kategori.kode_kategori,id_kategori,' . $id . ']',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah ada',
                ]
            ],
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'error' => true,
                'data' => $validation->getErrors(),
                'status' => '422'
            ]);
        } else {
            $this->masterKategoriModel->update($id, [
                'nama_kategori' => $this->request->getPost('editnama_kategori'),
                'kode_kategori' => $this->request->getPost('editkode_kategori'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            return $this->response->setJSON([
                'error' => false,
                'data' => 'Data berhasil diubah',
                'status' => '200'
            ]);
        }
    }

    public function destroy()
    {
        
        $id = $this->request->getPost('id_kategori');
        $this->masterKategoriModel->delete($id);
        return $this->response->setJSON([
            'error' => false,
            'data' => 'Data berhasil dihapus',
            'status' => '200'
        ]);
    }

}
?>