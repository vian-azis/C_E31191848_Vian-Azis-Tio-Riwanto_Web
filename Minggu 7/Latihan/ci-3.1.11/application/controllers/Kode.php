<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kode extends CI_Controller {
	public function hello($var)
	{
		if (isset($var)) {
			switch (strtolower($var)) {
				case 'php':
					$this->load->view('content_4/phpview');
					break;
				case 'python':
					$this->load->view('content_4/pythonview');
					break;
				case 'cpp':
					$this->load->view('content_4/cppview');
					break;
				case 'java':
					$this->load->view('content_4/javaview');
					break;
				default:
					echo 'Input URI Salah';
			}
		} else {
			echo 'Input URI Salah';
		}
	}
}
