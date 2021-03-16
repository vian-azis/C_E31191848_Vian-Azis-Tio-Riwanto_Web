<?php

namespace App\Controllers;

class Kode1 extends BaseController
{
	public function index()
	{
		return view('content_4/phpview');
	}

	public function hello_python()
	{
		return view('content_4/pythonview');
	}

	public function hello_cpp()
	{
		return view('content_4/cppview');
	}

	public function hello_java()
	{
		return view('content_4/javaview');
	}

	public function _remap($var)
	{
		if (isset($var)) {
			switch (strtolower($var)) {
				case 'python':
					return $this->hello_python();
					break;
				case 'cpp':
					return $this->hello_cpp();
					break;
				case 'java':
					return $this->hello_java();
					break;
				default:
				return $this->index();
			}
		} else {
			return $this->index();
		}
	}
}
