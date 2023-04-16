<?php

namespace App\Controllers;

class Mainpage extends BaseController
{
    public function index()
    {
        return view('Homepage/homepage');
    }
}