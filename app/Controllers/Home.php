<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function show()
	{
		$data['nama'] = 'Gilang Rahman Affandi';
		$data['npm'] = '1817051075';
		echo view('mahasiswa/index', $data);
	}

	//--------------------------------------------------------------------

}
