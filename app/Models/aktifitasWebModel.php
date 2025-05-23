<?php 

namespace App\Models;

use CodeIgniter\Model;

class aktifitasWebModel extends Model
{
    protected $table = 'aktifitas_web';
    protected $primaryKey = 'id_antrian';
    protected $allowedFields = ['id_aktifitas_web','mac_address', 'created_at','created_at' ];
    protected $useTimestamps = true;

    public function getAktifitasWeb($id = false)
    {
        if ($id == false) {
            return $this->select('aktifitas_web.id_aktifitas_web, aktifitas_web.mac_address, aktifitas_web.created_at');
        }
        return $this->where(['id_aktifitas_web' => $id])->first();
    }

    public function getAktifitasWebByMac($mac, $tanggal)
    {
        return $this
        ->where('mac_address', $mac)
        ->like('created_at', $tanggal)
        ->orderBy('created_at', 'DESC')
        ->first();
    }

}
    // protected $updatedField = 'updated_at';