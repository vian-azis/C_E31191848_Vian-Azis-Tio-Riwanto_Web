<?php

namespace App\Controllers;

class Testhelper extends BaseController
{

    public function index()
    {
        helper('html');
        return view('view_helper');
    }
}
