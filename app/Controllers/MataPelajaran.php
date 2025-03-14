<?php

namespace App\Controllers;

class MataPelajaran extends BaseController
{
    public function index(): string
    {
        return view('matapelajaran');
    }
}
