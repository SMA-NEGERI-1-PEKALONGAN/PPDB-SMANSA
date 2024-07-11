<?php 

namespace App\Models;

use CodeIgniter\Model;

class dataSiswaModel extends Model
{
    protected $table = 'data_siswa';
    protected $primaryKey = 'id_data_siswa';
    protected $allowedFields = ['id_data_siswa', 'nama_siswa', 'nisn', 'jenis_kelamin', 'asal_sekolah','no_urut', 'tanggal', 'sesi', 'waktu', 'loket', 'created_at', 'updated_at'];
    protected $useTimestamps = true;


    public function getDataSiswa($id = false)
    {
        if($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['id_data_siswa' => $id]);
        }   
    }
}