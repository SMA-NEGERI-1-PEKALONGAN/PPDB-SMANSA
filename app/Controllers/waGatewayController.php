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
        $response = $client->request('POST', 'http://localhost:3000/startClient');
        $response = json_decode($response->getBody());
        return $this->response->setJSON($response);
    }
    public function getStatus()
    {
        // get data from http://localhost:3000/getStatus
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'http://localhost:3000/getStatus');
        $response = json_decode($response->getBody());
        return $this->response->setJSON($response); 
    }

    public function getBarCode()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'http://localhost:3000/getQrCode');
        $response = json_decode($response->getBody());
        return $this->response->setJSON($response);
    }

    public function stopWaGateway()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('POST', 'http://localhost:3000/stopClient');
        $response = json_decode($response->getBody());
        return $this->response->setJSON($response);
    }

    public function sendMessage()
    {
        $client = \Config\Services::curlrequest();

        // get token
        $responseApi = $client->request('GET', 'http://localhost:3000/getStatus');  
        $responseApi = json_decode($responseApi->getBody());
        $token = $responseApi->data->apiKey;
        
        $data = [
            'phoneNumber' => $this->request->getPost('phoneNumber'),
            'message' => $this->request->getPost('message'),
            'token' => $token
        ];


         $response = $client->request('POST', 'http://localhost:3000/sendMessage', [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'json' => $data,
            
        ]);
        $response = json_decode($response->getBody());
        return $this->response->setJSON($response);
    }
}

?>