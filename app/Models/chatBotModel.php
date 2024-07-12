<?php 
namespace App\Models;

use CodeIgniter\Model;

class chatBotModel extends Model
{
    protected $table = 'chat_bot';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul','pertanyaan', 'jawaban', 'status_chat_bot', 'star_chat_bot', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';


    public function getChatBot($id = false)
    {
        if($id == false){
            return $this
            ->select('chat_bot.id_chat_bot, chat_bot.judul, chat_bot.pertanyaan, chat_bot.jawaban, chat_bot.status_chat_bot, chat_bot.star_chat_bot, chat_bot.created_at, chat_bot.updated_at');
        }
        return $this->where(['id' => $id])->first();
    }
}

?>