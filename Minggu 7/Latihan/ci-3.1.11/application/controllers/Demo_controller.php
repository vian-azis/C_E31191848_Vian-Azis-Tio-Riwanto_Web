<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo_controller extends CI_Controller {
        public function index()
        {
                echo "<h2>Demo Controller</h2>";
                echo "<br><p>Function yang dipanggil adalah index</p>";
        }

        public function aksi()
        {
                echo "<h2>Demo Controller</h2>";
                echo "<br><p>Function yang dipanggil adalah aksi</p>";
        }
}
