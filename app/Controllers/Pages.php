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
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'type' => 'Rumah',
                    'alamat' => 'Jl. Paburan Kemang',
                    'kota' => 'Bogor'
                ],
                [
                    'type' => 'Kantor',
                    'alamat' => 'Jalan Hayam Wuruk no.2xx',
                    'kota' => 'Jakarta Pusat'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }


    //--------------------------------------------------------------------

}
