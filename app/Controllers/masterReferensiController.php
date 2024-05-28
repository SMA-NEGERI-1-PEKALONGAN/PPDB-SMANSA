<?php 

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use Hermawan\DataTables\DataTable;
use App\Models\masterReferensiModel;

class masterReferensiController extends BaseController
{
    protected $masterReferensiModel;

    public function __construct()
    {
        $this->masterReferensiModel = new masterReferensiModel();
    }

    public function index(){
        $data = [
            'title' => 'Master Referensi',
            'active' => 'Referensi',
        ];
        return view('Admin/masterReferensi/index', $data);
    }

    public function fetchKodeKategori($id = false)
    {
        $data = $this->masterReferensiModel->getReferensiByKodeKategori($id);
        if ($data) {
            return $this->response->setJSON([
                'error' => false,
                'data' => $data,
                'status' => '200'
            ]);
        } else {
            return $this->response->setJSON([
                'error' => true,
                'data' => 'Data tidak ditemukan',
                'status' => '404'
            ]);
        }

    }

    public function ajaxDataTables()
    {
        $builder = $this->masterReferensiModel->getReferensi();
        // dd($builder);
        return DataTable::of($builder)
            ->add('status_referensi', function ($row) {
                return '<div class="custom-control custom-switch"> <input type="checkbox" 
                '.($row->status_referensi == 1 ? 'checked' : '').' 
                class="custom-control-input switch-btn change_status_referensi" data-size="small" data-color="#0099ff" id="'.$row->id_referensi.'"> <label class="custom-control-label" for="'.$row->id_referensi.'"></label> </div>';
            })
            ->add('action', function ($row) {
                return '
                <div class="dropdown">
					<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown"> <i class="dw dw-more"></i></a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <button class="dropdown-item edit_referensi" id="'.$row->id_referensi.'"><i class="dw dw-edit2"></i> Edit</button>
							<button class="dropdown-item delete_referensi" id="'.$row->id_referensi.'"><i class="dw dw-delete-3"></i> Delete</button>
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
            'nama_referensi' => [
                'label' => 'Nama Referensi',
                 'rules' => 'required|is_unique[master_referensi.nama_referensi]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah ada',
                ],
            ],
            'kode_referensi' => [
                'label' => 'Kode Referensi',
                'rules' => 'required|is_unique[master_referensi.kode_referensi]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah ada',
                ],
            ],
            'kategori_id' => [
                'label' => 'Kategori',
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
            $nomor = $this->masterReferensiModel->where('kategori_id', $this->request->getPost('kategori_id'))->countAllResults() + 1;
            $data = [
                'nama_referensi' => $this->request->getPost('nama_referensi'),
                'kode_referensi' => $this->request->getPost('kode_referensi'),
                'kategori_id' => $this->request->getPost('kategori_id'),
                'status_referensi' => 1,
                'urutan' => $nomor,
            ];
            $this->masterReferensiModel->insert($data);
            return $this->response->setJSON([
                'error' => false,
                'data' => 'Data berhasil disimpan',
                'status' => '200'
            ]);
        }
    }

    public function edit()
    {
        $id = $this->request->getPost('id_referensi');
        $data = $this->masterReferensiModel->getReferensi($id)->first();
        return $this->response->setJSON([
            'error' => false,
            'data' => $data,
            'status' => '200'
        ]);
    }

    public function update()
    {
        $id = $this->request->getPost('editid_referensi');
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'editnama_referensi' => [
                'label' => 'Nama Referensi',
                'rules' => 'required|is_unique[master_referensi.nama_referensi,id_referensi,'.$id.']',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah ada',
                ],
            ],
            'editkode_referensi' => [
                'label' => 'Kode Referensi',
                'rules' => 'required|is_unique[master_referensi.kode_referensi,id_referensi,'.$id.']',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah ada',
                ],
            ],
            'editkategori_id' => [
                'label' => 'Kategori',
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
            $data = [
                'nama_referensi' => $this->request->getPost('editnama_referensi'),
                'kode_referensi' => $this->request->getPost('editkode_referensi'),
                'kategori_id' => $this->request->getPost('editkategori_id'),
            ];
            $this->masterReferensiModel->update($id, $data);
            return $this->response->setJSON([
                'error' => false,
                'data' => 'Data berhasil diupdate',
                'status' => '200'
            ]);
        }
    }

    public function destroy()
    {
        $id = $this->request->getPost('id_referensi');
        $this->masterReferensiModel->delete($id);
        return $this->response->setJSON([
            'error' => false,
            'data' => 'Data berhasil dihapus',
            'status' => '200'
        ]);
    }
    
}
?>