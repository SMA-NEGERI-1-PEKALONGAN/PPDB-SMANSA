<?php 
namespace App\Models;

use CodeIgniter\Model;

class chatBotModel extends Model
{
    protected $table = 'chat_bot';
    protected $primaryKey = 'id_chat_bot';
    protected $allowedFields = ['id_chat_bot','judul','pertanyaan', 'jawaban', 'status_chat_bot', 'star_chat_bot', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';


    public function getChatBot($id_chat_bot = false)
    {
        if($id_chat_bot == false){
            return $this
            ->select('chat_bot.id_chat_bot, chat_bot.judul, chat_bot.pertanyaan, chat_bot.jawaban, chat_bot.status_chat_bot, chat_bot.star_chat_bot, chat_bot.created_at, chat_bot.updated_at');
        }
        return $this->where(['id_chat_bot' => $id_chat_bot])->first();
    }

    // get star chat bot
    public function getStarChatBot()
    {
        return $this->where(['star_chat_bot' => '1'])->findAll();
    }

    public function getResponse($pertanyaan)
    {
        $data = $this->like('pertanyaan', $pertanyaan)->first();
    }
}

?>