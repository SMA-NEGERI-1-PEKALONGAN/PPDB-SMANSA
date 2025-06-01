<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\LabelAlignment;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode;


class waGatewayController extends BaseController
{
    
    public function index()
    {
        $data = [
            'main_menu' => 'WA Gateway',
            'title' => 'Setting',
            'active' => 'waGateway',
        ];
        return view('Admin/waGateway/index', $data);
    }

    public function startWaGateway()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('POST', 'http://wagateway.sman1pekalongan.sch.id/startClient');
        $response = json_decode($response->getBody());
        return $this->response->setJSON($response);
    }
    public function getStatus()
    {
        // get data from http://wagateway.sman1pekalongan.sch.id/getStatus
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'http://wagateway.sman1pekalongan.sch.id/getStatus');
        $response = json_decode($response->getBody());
        return $this->response->setJSON($response); 
    }

    public function getBarCode()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'http://wagateway.sman1pekalongan.sch.id/getQrCode');
        $response = json_decode($response->getBody());
        return $this->response->setJSON($response);
    }

    public function stopWaGateway()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('POST', 'http://wagateway.sman1pekalongan.sch.id/stopClient');
        $response = json_decode($response->getBody());
        return $this->response->setJSON($response);
    }

    public function sendMessage()
    {
        $client = \Config\Services::curlrequest();

        // get token
        $responseApi = $client->request('GET', 'http://wagateway.sman1pekalongan.sch.id/getStatus');  
        $responseApi = json_decode($responseApi->getBody());
        $token = $responseApi->data->apiKey;
        
        $data = [
            'phoneNumber' => $this->request->getPost('phoneNumber'),
            'message' => $this->request->getPost('message'),
            'token' => $token
        ];


         $response = $client->request('POST', 'http://wagateway.sman1pekalongan.sch.id/sendMessage', [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'json' => $data,
            
        ]);
        
        $response = json_decode($response->getBody());
        return $this->response->setJSON($response);
    }

    public function sendMessageToAll()
    {
        $client = \Config\Services::curlrequest();

        // get token
        $responseApi = $client->request('GET', 'http://wagateway.sman1pekalongan.sch.id/getStatus');  
        $responseApi = json_decode($responseApi->getBody());
        $token = $responseApi->data->apiKey;

        $file_excel = $this->request->getFile('file');
        $validation = \Config\Services::validation();

        // Define validation rules
        $validation->setRules([
            'file' => [
                'rules' => 'uploaded[file]|ext_in[file,xls,xlsx,csv]',
                'errors' => [
                    'uploaded' => 'File tidak boleh kosong',
                    'required' => 'File tidak boleh kosong',
                    'ext_in' => 'File harus berupa xls, xlsx, csv'
                ]
            ]
        ]);

        // Validate the request data
        if (!$validation->run($this->request->getPost())) {
            return $this->response->setJSON([
                'error' => true,
                'data' => $validation->getErrors()
            ]);
        }

        // Initialize the PhpSpreadsheet reader based on the file extension
        $ext = $file_excel->getClientExtension();
        if ($ext == 'xls') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } elseif ($ext == 'xlsx') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        } elseif ($ext == 'csv') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        }

        $spreadsheet = $reader->load($file_excel);
        $data = $spreadsheet->getActiveSheet()->toArray();

        // add total data to process
        $no = 0;
        $success = 0;
        $failed = 0;
        $result = [];
        foreach ($data as $x => $col) {

            if ($x < 2) {
                continue;
            }
            
            $no++;

            $phoneNumber = $col[2];
            $message = $col[3];
            if (empty($phoneNumber) || empty($message)) {
                $failed++;
                $result[] = [
                    'no' => $no,
                    'data' => 'Baris ke-' . $no . ' ' . $phoneNumber ,
                    'status' => 'Failed',
                ];
                continue;
            }
            $data = [
                'phoneNumber' => $phoneNumber,
                'message' => $message,
                'token' => $token
            ];
    
    
             $response = $client->request('POST', 'http://wagateway.sman1pekalongan.sch.id/sendMessage', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $data,
                
            ]);
            
            $response = json_decode($response->getBody());
            if ($response->status == '200') {
                $success++;
                $result[] = [
                    'no' => $no,
                    'data' => 'Baris ke-' . $no . ' ' . $phoneNumber,
                    'status' => 'Success',
                ];
            } else {
                $failed++;
                $result[] = [
                    'no' => $no,
                    'data' => 'Baris ke-' . $no . ' ' . $phoneNumber,
                    'status' => 'Failed',
                ];
            }
        }
        return $this->response->setJSON([
            'error' => false,
            'data' => [
                'total_data' => $no,
                'success' => $success,
                'failed' => $failed,
                'result' => $result
            ]
        ]);
    }
}

?>