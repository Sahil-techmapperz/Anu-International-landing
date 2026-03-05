<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Anu International – Smart Packaging Solutions';
        return view('home', $data);
    }
}
