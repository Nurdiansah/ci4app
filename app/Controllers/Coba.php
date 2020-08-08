<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Ini Controler Coba Method index";
    }

    public function About($nama = '')
    {
        echo "Nama Saya $nama";
    }

    //--------------------------------------------------------------------

}
