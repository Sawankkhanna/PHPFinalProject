<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Home/loginpage.php');
    }

    public function homepage()
    {

        return view('Homepage/homepage.php');
    }
}