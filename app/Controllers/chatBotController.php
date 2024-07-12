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
            'title' => 'chatBot',
            'active' => 'chatBot',
        ];
        return view('Admin/Chat/index', $data);
    }

    public function ajaxDataTables()
    {
        $builder = $this->chatBotModel->getChatBot();
        // dd($builder);    
        return DataTable::of($builder)
         ->add('star', function ($row) {
                return '<div class="star-rating">
                <span class="fa fa-star '.($row->star_chat_bot == 1 ? 'yellow' : '').' star_chat_bot" id="'.$row->id_chat_bot.'"></span>
                </div>';
            })
            ->add('action', function ($row) {
                return '
                <div class="dropdown">
					<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown"> <i class="dw dw-more"></i></a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <button class="dropdown-item view_chatBot" id="'.$row->id_chat_bot.'"><i class="dw dw-eye"></i> View</a>
                            <button class="dropdown-item edit_chatBot" id="'.$row->id_chat_bot.'"><i class="dw dw-edit2"></i> Edit</button>
							<button class="dropdown-item delete_chatBot" id="'.$row->id_chat_bot.'"><i class="dw dw-delete-3"></i> Delete</button>
						</div>
				</div>
                ';
            }, 'last')
            ->toJson(true);
    }
}