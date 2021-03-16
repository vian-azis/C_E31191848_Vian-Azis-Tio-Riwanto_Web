<?php

namespace App\Controllers;

class Kode extends BaseController
{
	public function hello($var)
	{
		if (isset($var)) {
			switch (strtolower($var)) {
				case 'php':
					return view('content_4/phpview');
					break;
				case 'python':
					return view('content_4/pythonview');
					break;
				case 'cpp':
					return view('content_4/cppview');
					break;
				case 'java':
					return view('content_4/javaview');
					break;
				default:
					echo 'Input URI Salah';
			}
		} else {
			echo 'Input URI Salah';
		}
	}
}
