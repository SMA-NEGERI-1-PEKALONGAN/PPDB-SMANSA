<?php 

namespace App\Models;

use CodeIgniter\Model;

class antrianModel extends Model
{
    protected $table = 'antrian';
    protected $primaryKey = 'id_antrian';
    protected $allowedFields = ['id_antrian', 'kode_pendaftaran', 'nama_siswa', 'nisn', 'status_antrian', 'asal_sekolah', 'alamat', 'no_tlp', 'jenis_kelamin', 'jalur_pendaftaran','qr_code', 'tanggal_antrian','sesi_antrian', 'no_antrian', 'created_at', 'updated_at', 'loket', 'ket_antrian' ];
    protected $useTimestamps = true;
    // protected $updatedField = 'updated_at';

    public function getAntrian($id = false)
    {
        if ($id == false) {
            return $this->select('antrian.id_antrian, antrian.kode_pendaftaran, antrian.nama_siswa, antrian.nisn, antrian.status_antrian, antrian.asal_sekolah, antrian.alamat, antrian.no_tlp, antrian.jenis_kelamin, antrian.jalur_pendaftaran, antrian.qr_code, antrian.tanggal_antrian,antrian.no_antrian, antrian.sesi_antrian, antrian.created_at, antrian.updated_at');
        }
        return $this->where(['id_antrian' => $id])->first();
    }

    public function getActiveAntrian($tanggal)
    {
        return $this
        ->where('tanggal_antrian', $tanggal)
        ->where('status_antrian', '1')
        ->orderBy('no_antrian', 'ASC')
        ->first();
    }

    public function getLastAntrian($tanggal)
    {
        return $this
       ->where('tanggal_antrian', $tanggal)
        ->orderBy('no_antrian', 'DESC')
        ->first();
    }

    public function search($keyword)
    {
        return $this->table('antrian')->where('kode_pendaftaran', $keyword)->orWhere('nisn', $keyword)->orderBy('created_at', 'DESC')->limit(1);
    }

    public function getAntrianByDate($tanggal)
    {
        return $this
        ->where('tanggal_antrian', $tanggal)
        ->orderBy('no_antrian', 'DESC')
        ->findAll();
    }

      
}
?>