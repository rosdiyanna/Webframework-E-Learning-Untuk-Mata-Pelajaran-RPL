<?php

namespace App\Controllers;

class error extends BaseController
{
    public function index(): string
    {
        return view('errors/html/error_404');
    }
}
