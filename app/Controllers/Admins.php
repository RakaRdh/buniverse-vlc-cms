<?php namespace App\Controllers;

class Admins extends BaseController
{
	public function index()
	{
		// dd($data);
		return view('admins/home');
	}

	//--------------------------------------------------------------------

}