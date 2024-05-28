<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home',
            'active' => 'Home',
        ];
        return view('Templates/index', $data);
    }
}