<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Hermawan\DataTables\DataTable;
use App\Models\chatBotModel;
use Ramsey\Uuid\Uuid;

class chatBotController extends BaseController
{
    protected $chatBotModel;
    
    public function __construct()
    {
        $this->chatBotModel = new chatBotModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Chat Bot',
            'active' => 'chatBot',
        ];
        return view('Admin/Chat/index', $data);
    }

    public function ajaxDataTables()
    {
        $builder = $this->chatBotModel->getChatBot();
        // dd($builder);    
        return DataTable::of($builder)
            ->edit('status_chat_bot', function ($row) {
                return '<div class="custom-control custom-switch"> <input type="checkbox" 
                '.($row->status_chat_bot == 1 ? 'checked' : '').' 
                class="custom-control-input switch-btn change_status_chat_bot" data-size="small" data-color="#0099ff" id="'.$row->id_chat_bot.'"> <label class="custom-control-label" for="'.$row->id_chat_bot.'"></label> </div>';
            })
            ->add('star', function ($row) {
            return '<button class="btn btn-small change_star_chat_bot" id="star'.$row->id_chat_bot.'">
            '.($row->star_chat_bot == 1 ? '<i class="icon-copy fi-star text-yellow"></i>' : '<i class="dw dw-star text-warning"></i>').'</button>';
            })
            ->add('action', function ($row) {
                return '
                <div class="dropdown">
					<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown"> <i class="dw dw-more"></i></a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <button class="dropdown-item edit_chat_bot" id="'.$row->id_chat_bot.'"><i class="dw dw-edit2"></i> Edit</button>
							<button class="dropdown-item delete_chat_bot" id="'.$row->id_chat_bot.'"><i class="dw dw-delete-3"></i> Delete</button>
						</div>
				</div>
                ';
            }, 'last')
            ->toJson(true);
    }

    public function store(){
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'judul' => [
                'label' => 'Judul',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'pertanyaan' => [
                'label' => 'Pertanyaan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
        ]);
        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'error' => true,
                'data' => $validation->getErrors(),
                'status' => '400'
            ]);
        }
        $data = [
            'id_chat_bot' => Uuid::uuid4()->toString(),
            'judul' => $this->request->getPost('judul'),
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'jawaban' => $this->request->getPost('jawaban'),
            'star_chat_bot' => 0,
            'status_chat_bot' => 1,
        ];
        $this->chatBotModel->insert($data);
        return $this->response->setJSON([
            'error' => false,
            'data' => 'Data berhasil disimpan',
            'status' => '200'
        ]);
    }

    public function edit(){
        $id = $this->request->getPost('id_chat_bot');
        $data = $this->chatBotModel->find($id);
        return $this->response->setJSON([
            'error' => false,
            'data' => $data,
            'status' => '200'
        ]);
    }

    public function update(){
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'judul' => [
                'label' => 'Judul',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'pertanyaan' => [
                'label' => 'Pertanyaan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
        ]);
        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'error' => true,
                'data' => $validation->getErrors(),
                'status' => '400'
            ]);
        }
        $id = $this->request->getPost('id_chat_bot');
        $data = [
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'jawaban' => $this->request->getPost('jawaban'),
        ];
        $this->chatBotModel->update($id, $data);
        return $this->response->setJSON([
            'error' => false,
            'data' => 'Data berhasil diubah',
            'status' => '200'
        ]);
    }

    public function destroy(){
        $id = $this->request->getPost('id_chat_bot');
        $this->chatBotModel->delete($id);
        return $this->response->setJSON([
            'error' => false,
            'data' => 'Data berhasil dihapus',
            'status' => '200'
        ]);
    }

    public function changeStatus(){
        $id = $this->request->getPost('id_chat_bot');
        $data = $this->chatBotModel->find($id);
        $status = $data['status_chat_bot'] == 1 ? 0 : 1;
        $this->chatBotModel->update($id, ['status_chat_bot' => $status]);
        return $this->response->setJSON([
            'error' => false,
            'data' => 'Data berhasil diubah',
            'status' => '200'
        ]);
    }

    public function changeStar(){
        $id = $this->request->getPost('id_chat_bot');
        $data = $this->chatBotModel->find($id);
        $star = $data['star_chat_bot'] == 1 ? '0' : '1';
        $this->chatBotModel->update($id, ['star_chat_bot' => $star]);
        return $this->response->setJSON([
            'error' => false,
            'data' => $star,
            'status' => '200'
        ]);
    }


    public function fetchResponse(){
    $pertanyaan = $this->request->getPost('pertanyaan');
    $data = $this->chatBotModel->getResponse($pertanyaan);

    if($data){
        if($data['status_chat_bot'] == 1){
            return $this->response->setJSON([
                'error' => false,
                'data' => $data['jawaban'],
                'status' => '200'
            ]);
        } else {
            $getStar = $this->chatBotModel->getStarChatBot();
            if($getStar){
                $message = 'Maaf, mimin tidak mengerti pertanyaan kamu.';
                return $this->response->setJSON([
                    'error' => false,
                    'data' => [
                        'message' => $message,
                        'star_message' => $getStar
                    ],
                    'status' => '200'
                ]);
            } else {
                return $this->response->setJSON([
                    'error' => false,
                    'data' => [
                        'message' => 'Maaf, mimin tidak mengerti pertanyaan kamu.'
                    ],
                    'status' => '200'
                ]);
            }
        } 
    } else {    
        // Cari pertanyaan yang hampir sama di database
        $allQuestions = $this->chatBotModel->where('status_chat_bot', 1)->findAll();
        $closestMatch = $this->findClosestQuestion($pertanyaan, $allQuestions);

        if($closestMatch != null){
            return $this->response->setJSON([
                'error' => false,
                'data' => [
                    'message' => $closestMatch
                ],
                'status' => '200'
            ]);
        } else {
            $getStar = $this->chatBotModel->getStarChatBot();
            if($getStar){
                $message = 'Maaf, mimin tidak mengerti pertanyaan kamu.';
                return $this->response->setJSON([
                    'error' => false,
                    'data' => [
                        'message' => $message,
                        'star_message' => $getStar
                    ],
                    'status' => '200'
                ]);
            } else {
                return $this->response->setJSON([
                    'error' => false,
                    'data' => [
                        'message' => 'Maaf, mimin tidak mengerti pertanyaan kamu.'
                    ],
                    'status' => '200'
                ]);
            }
        }
    }
}


private function findClosestQuestion($inputQuestion, $allQuestions) {
    // Inisialisasi variabel
    $closest = null;
    // Inisialisasi variabel untuk menyimpan persentase kemiripan tertinggi
    $highestSimilarity = 0;

    foreach ($allQuestions as $question) {
        // split $question['pertanyaan'] dengan | sebagai delimiter
        $questionParts = explode('|', $question['pertanyaan']);
        
        foreach ($questionParts as $questionPart) {
            // Menghitung persentase kemiripan
            similar_text($inputQuestion, $questionPart, $similarity);
            
            // Jika persentase kemiripan lebih besar dari $highestSimilarity
            if ($similarity > $highestSimilarity) {
                // Set $highestSimilarity dengan $similarity
                $highestSimilarity = $similarity;
                // Set $closest dengan $question['pertanyaan']
                $closest = $question['jawaban'];
            }
        }
    }


    // jika $highestSimilarity lebih besar dari 60
    if ($highestSimilarity > 50) {
        return $closest;
    } else {
        return null;
    }
}


    
}