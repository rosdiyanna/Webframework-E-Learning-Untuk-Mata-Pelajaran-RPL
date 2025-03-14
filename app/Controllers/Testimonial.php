<?php

namespace App\Controllers;

class Testimonial extends BaseController
{
    public function index(): string
    {
        return view('testimonial');
    }
}
