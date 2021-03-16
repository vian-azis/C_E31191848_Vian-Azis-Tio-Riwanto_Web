<?php

namespace App\Controllers;

class Demo_view3 extends BaseController
{
	public function __construct()
	{

	}
	
	public function index()
	{
        return view('content_3/demoview');
	}
}
