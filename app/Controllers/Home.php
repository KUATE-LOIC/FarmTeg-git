<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function index1(): string
    {
        // return view('index');
        return view('login');
    }
}
