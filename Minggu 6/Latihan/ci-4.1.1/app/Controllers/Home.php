<?php

namespace App\Controllers;

use App\Models\Home as modelHome;

class Home extends BaseController
{
	public function index()
	{
        $objekModel = new modelHome();

        $data['info'] = $objekModel->getData();

        return view('welcome_message', $data); //file view
	}
}
