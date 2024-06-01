<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard',
            'active' => 'Dashboard',
        ];
        return view('Templates/index', $data);
    }
}