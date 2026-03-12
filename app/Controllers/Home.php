<?php

namespace App\Controllers;
use App\Models\aktifitasWebModel;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'main_menu' => 'Dashboard',
            'title' => 'Dashboard',
            'active' => 'Dashboard',
        ];
        if(session()->get('role') == 'Administrator'){
            return view('Admin/DashboardAdmin', $data);
        } else {
            return view('Admin/Dashboard', $data);
        }
    }

    public function getGrafikAktifitasWeb($bulan)
    {
        $aktifitasWebModel = new aktifitasWebModel();
        $data_aktifitas = $aktifitasWebModel->getGrafikAktifitasWeb($bulan, date('Y')); // ambil data aktifitas web berdasarkan bulan dan tahun saat ini
        $jumlahHari = cal_days_in_month(CAL_GREGORIAN, $bulan, date('Y')); // hitung jumlah hari dalam bulan tersebut
        $data = [];
        for ($i = 1; $i <= $jumlahHari; $i++) { // loop untuk setiap hari dalam bulan
            $tanggal = date('Y-m-d', strtotime(date('Y') . '-' . $bulan . '-' . $i)); // format tanggal menjadi 'Y-m-d'
            $data[$tanggal] = [// buat array untuk setiap tanggal
                'tanggal' => $tanggal,
                'jumlah' => 0
            ];
            foreach ($data_aktifitas as $item) { // periksa apakah tanggal pada data aktifitas sama dengan tanggal yang sedang di loop
                if ($item['tanggal'] === $tanggal) {
                    $data[$tanggal]['jumlah'] = (int)$item['jumlah'];
                    break;
                }
            }
        }
       
        $data = array_values($data);
        return $this->response->setJSON([
            'error' => false,
            'data' => $data,
            'bulan' => $bulan,
            'tahun' => date('Y')
        ]);
    }
}