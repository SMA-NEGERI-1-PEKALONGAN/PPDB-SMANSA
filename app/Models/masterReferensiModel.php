<?php 

namespace App\Models;

use CodeIgniter\Model;

class masterReferensiModel extends Model
{
    protected $table = 'master_referensi';
    protected $primaryKey = 'id_referensi';
    protected $allowedFields = ['nama_referensi', 'kode_referensi', 'kategori_id', 'status_referensi', 'urutan', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';


    public function getReferensi($id = false)
    {
        if ($id == false) {
            return $this->select('master_referensi.id_referensi, master_referensi.nama_referensi, master_referensi.kode_referensi, master_referensi.status_referensi, master_referensi.urutan, master_kategori.nama_kategori, master_referensi.kategori_id')
            ->join('master_kategori', 'master_kategori.id_kategori = master_referensi.kategori_id');
        }
        return $this->select('master_referensi.id_referensi, master_referensi.nama_referensi, master_referensi.kode_referensi, master_referensi.status_referensi, master_referensi.urutan, master_kategori.nama_kategori, master_referensi.kategori_id')
            ->join('master_kategori', 'master_kategori.id_kategori = master_referensi.kategori_id')
            ->where('master_referensi.id_referensi', $id);
    }

    public function getReferensiByKodeKategori($kode_kategori)
    {
        return $this->select('master_referensi.*, master_kategori.nama_kategori, master_kategori.kode_kategori')
            ->join('master_kategori', 'master_kategori.id_kategori = master_referensi.kategori_id')
            ->where('master_kategori.kode_kategori', $kode_kategori)
            ->orderBy('master_referensi.urutan', 'ASC')
            ->findAll();
    }
}
?>