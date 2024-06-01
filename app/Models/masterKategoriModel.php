<?php 

namespace App\Models;

use CodeIgniter\Model;

class masterKategoriModel extends Model
{
    protected $table = 'master_kategori';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['nama_kategori', 'kode_kategori', 'status_kategori ', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';


    public function getKategori($id = false)
    {
        if ($id == false) {
            return $this->select('id_kategori, nama_kategori, kode_kategori, status_kategori');
        }
        return $this->where(['id_kategori' => $id])->first();
    }

}

?>