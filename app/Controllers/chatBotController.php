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
            'main_menu' => 'Chat Bot',
            'title' => 'List pertanyaan',
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

    public function importChatBot()
    {
        $file_excel = $this->request->getFile('file');
        $validation = \Config\Services::validation();

        // Validasi ekstensi file
        $validation->setRules([
            'file' => [
                'rules' => 'uploaded[file]|ext_in[file,xls,xlsx,csv]',
                'errors' => [
                    'uploaded' => 'File tidak boleh kosong',
                    'required' => 'File tidak boleh kosong',
                    'ext_in'   => 'File harus berupa xls, xlsx, csv'
                ]
            ]
        ]);

        if (!$validation->run($this->request->getPost())) {
            return $this->response->setJSON([
                'error'  => true,
                'data'   => $validation->getErrors(),
                'status' => '400'
            ]);
        }

        // Inisialisasi Reader berdasarkan ekstensi file
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

        // Hitung total data untuk progress (dikurangi 1 baris header)
        $total_data = count($data) - 1;
        
        foreach ($data as $x => $col) {
            // Lewati baris pertama (Header)
            if ($x == 0) {
                continue;
            }

            // Validasi baris kosong (jika judul kosong, lewati)
            if (empty(trim($col[0]))) {
                continue;
            }

            $chatData = [
                'id_chat_bot'     => Uuid::uuid4()->toString(),
                'judul'           => $col[0], // Kolom A: Judul
                'pertanyaan'      => $col[1], // Kolom B: Pertanyaan (variasi dengan | )
                'jawaban'         => $col[2], // Kolom C: Jawaban
                'star_chat_bot'   => 0,       // Default 0 (tidak di-star)
                'status_chat_bot' => 1,       // Default 1 (Aktif)
            ];

            // Insert ke database menggunakan model chatbot Anda
            $this->chatBotModel->insert($chatData);

            /* * Catatan: Jika Anda menggunakan progress bar di frontend (AJAX), 
             * PHP standar tidak akan mengirim response JSON satu-persatu di dalam loop.
             * Response akan dikirim sekaligus setelah loop selesai.
             */
        }

        return $this->response->setJSON([
            'error'      => false,
            'status'     => '200',
            'total_data' => $total_data,
            'data'       => 'Kamus Chatbot berhasil diimport'
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


    public function fetchResponse()
    {
        $pertanyaan = trim($this->request->getPost('message'));
        
        // 1. Fast-Path: Cek apakah ada jawaban persis di database
        $data = $this->chatBotModel->getResponse($pertanyaan);
        if ($data && $data['status_chat_bot'] == 1) {
            return $this->response->setJSON([
                'error'  => false,
                'data'   => ['message' => $data['jawaban']],
                'status' => '200'
            ]);
        } 
        
        // 2. AI Search (NLP Hybrid Match)
        $allQuestions = $this->chatBotModel->where('status_chat_bot', 1)->findAll();
        $closestMatch = $this->findClosestQuestion($pertanyaan, $allQuestions);

        if ($closestMatch != null) {
            return $this->response->setJSON([
                'error'  => false,
                'data'   => ['message' => $closestMatch],
                'status' => '200'
            ]);
        }

        // 3. Fallback (Tidak Mengerti)
        $getStar = $this->chatBotModel->getStarChatBot();
        $fallbackData = ['message' => 'Maaf, mimin tidak mengerti pertanyaan kamu. Coba gunakan kata kunci lain (contoh: "Syarat", "Jadwal", "Zonasi").'];
        
        if ($getStar) {
            $fallbackData['star_message'] = $getStar;
        }

        return $this->response->setJSON([
            'error'  => false,
            'data'   => $fallbackData,
            'status' => '200'
        ]);
    }

    // =========================================================================
    // AI ENGINE: LOGIKA PENCARIAN & NLP
    // =========================================================================

    private function findClosestQuestion($inputQuestion, $allQuestions) 
    {
        $closest = null;
        $highestSimilarity = 0;
        
        // Bersihkan input user dari kata-kata tidak penting (Stopwords)
        $inputClean = $this->cleanText($inputQuestion);

        foreach ($allQuestions as $question) {
            $questionParts = explode('|', $question['pertanyaan']);
            
            foreach ($questionParts as $questionPart) {
                // Bersihkan data pertanyaan dari DB
                $partClean = $this->cleanText($questionPart);

                // Hitung skor kecerdasan (Hybrid Score)
                $score = $this->calculateNlpScore($inputClean, $partClean);
                
                if ($score > $highestSimilarity) {
                    $highestSimilarity = $score;
                    $closest = $question['jawaban'];
                }
            }
        }

        // Threshold ditetapkan di 45 (karena metode NLP lebih ketat & akurat)
        if ($highestSimilarity >= 45) {
            return $closest;
        } 
        
        return null;
    }

    /**
     * Text Preprocessing (Membersihkan teks dari simbol dan kata pelengkap)
     */
    private function cleanText($text) 
    {
        // 1. Lowercase
        $text = strtolower(trim($text));
        
        // 2. Hapus tanda baca (sisakan huruf, angka, dan spasi)
        $text = preg_replace('/[^\w\s]/', '', $text);
        
        // 3. Hapus Stopwords (Kata sapaan/pelengkap bahasa Indonesia)
        // Anda bisa menambahkan kata lain ke dalam array ini
        $fillers = [
            '\bhalo\b', '\bhai\b', '\bmin\b', '\bmimin\b', '\badmin\b', 
            '\bsaya\b', '\bmau\b', '\btanya\b', '\btolong\b', '\bdong\b', 
            '\bmohon\b', '\bkak\b', '\bapa\b', '\bapakah\b', '\bya\b', '\bsih\b'
        ];
        $text = preg_replace('/' . implode('|', $fillers) . '/i', '', $text);
        
        // 4. Hapus spasi ganda yang tersisa
        return trim(preg_replace('/\s+/', ' ', $text));
    }

    /**
     * Hitung Skor Kemiripan (Gabungan pencocokan Kata & Karakter Typo)
     */
    private function calculateNlpScore($input, $dbQuestion) 
    {
        if (empty($input) || empty($dbQuestion)) return 0;

        // 1. Fuzzy Match (Skor karakter keseluruhan - mengatasi typo)
        similar_text($input, $dbQuestion, $charSimilarity);

        // 2. Tokenization & Word Match (Bedah per-kata)
        $inputWords = explode(' ', $input);
        $dbWords = explode(' ', $dbQuestion);
        $matchCount = 0;

        foreach ($dbWords as $dw) {
            foreach ($inputWords as $iw) {
                // Cek apakah katanya SAMA PERSIS, atau TYPO sedikit (jarak levenshtein <= 1)
                // Contoh levenshtein: "jadwal" dan "jadawl" berjarak 1 langkah -> Dianggap sama
                if ($dw == $iw || levenshtein($dw, $iw) <= 1) {
                    $matchCount++;
                    break; 
                }
            }
        }

        // Hitung persentase kecocokan kata kunci
        $wordMatchScore = ($matchCount / count($dbWords)) * 100;

        // 3. Weighted Score (Skor Akhir)
        // Kita beri bobot 70% untuk kecocokan KATA, dan 30% untuk kemiripan STRING
        $finalScore = ($wordMatchScore * 0.70) + ($charSimilarity * 0.30);

        return $finalScore;
    }


    
}