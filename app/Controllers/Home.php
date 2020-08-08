<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
		// echo "Hello Word";
	}

	public function coba()
	{
		echo "$this->nama";
	}

	//--------------------------------------------------------------------

}
