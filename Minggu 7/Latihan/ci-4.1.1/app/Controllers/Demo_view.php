<?php

namespace App\Controllers;

class Demo_view extends BaseController
{
	public function index()
	{
		echo view('template/headerview');
		echo view('content_1/contentview');
		echo view('template/footerview');
	}
}
