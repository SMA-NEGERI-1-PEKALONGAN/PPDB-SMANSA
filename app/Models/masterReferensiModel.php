<?php 

namespace App\Models;

use CodeIgniter\Model;

class masterReferensiModel extends Model
{
    protected $table = 'master_referensi';
    protected $primaryKey = 'id_referensi';
    protected $allowedFields = ['nama_referensi', 'kode_referensi', 'status_referensi', 'id_kategori', 'status_referensi', 'no_urut', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';


    public function getReferensi($id = false)
    {
        if ($id == false) {
            return $this->select('master_referensi.*, master_kategori.nama_kategori')
                        ->join('master_kategori', 'master_kategori.id_kategori = master_referensi.id_kategori');
        }
        return $this->select('master_referensi.*, master_kategori.nama_kategori')
                    ->join('master_kategori', 'master_kategori.id_kategori = master_referensi.id_kategori')
                    ->where(['id_referensi' => $id])->first();
    }
}
?>