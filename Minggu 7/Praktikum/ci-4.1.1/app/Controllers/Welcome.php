<?php

namespace App\Controllers;

class Welcome extends BaseController
{
	public function index()
	{
        return view('welcome_message');
	}

    public function profil()
	{
        return view('profil');
	}

    public function contact()
	{
        return view('contact');
	}
}
