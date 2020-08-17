<?php

namespace App\Controllers;

use App\Models\KlubModel;

class Klub extends BaseController
{
    // properti
    protected $klubModel;

    public function __construct()
    {
        // instansiansi kelas model 
        $this->klubModel = new KlubModel();
    }

    public function index()
    {
        // $klub = $this->klubModel->findAll();


        $data = [
            'title' => 'CM | Klub',
            'klub' => $this->klubModel->getKlub()
        ];


        return view('klub/index', $data);
    }

    public function detail($id)
    {
        $id = base64_decode($id);
        $klub = $this->klubModel->getKlub($id);
        $data = [
            'title' => 'Detail Klub',
            'klub' => $klub
        ];

        return view('klub/detail', $data);
    }


    //--------------------------------------------------------------------

}
