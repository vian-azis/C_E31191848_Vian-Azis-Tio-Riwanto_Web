<?php

namespace App\Controllers;

class Demo_controller extends BaseController
{
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
