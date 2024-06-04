<?php 

namespace App\Models;

use CodeIgniter\Model;


class notifikasiModel extends Model
{
    protected $table = 'notifikasi';
    protected $primaryKey = 'id_notifikasi';
    protected $allowedFields = ['id_notifikasi', 'nama_notifikasi', 'isi_notifikasi', 'status_notifikasi', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

    public function getNotifikasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_notifikasi' => $id])->first();
    }

    public function getNotifikasiActive()
    {
        return $this->where(['status_notifikasi' => '1'])->orderBy('created_at', 'DESC')->first();
    }
}
?>