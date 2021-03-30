<?php

namespace App\Controllers;

class Template extends BaseController
{

    function __construct()
    {
        
    }

    public function index()
    {
		return view('agency-template/index');
    }
}
