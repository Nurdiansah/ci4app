<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Aplikasi'
            // test array
            // ,
            // 'test' => ['satu', 'dua', 'tiga']
        ];
        echo view('layout/header', $data);
        return view('pages/home');
        echo view('layout/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        echo view('layout/header', $data);
        return view('pages/about');
        echo view('layout/footer');
    }

    //--------------------------------------------------------------------

}
