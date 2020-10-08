<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//echo 'home';
		return view('welcome_message');
	}

	public function inicial()
	{
		echo 'inicial';
		//return view('welcome_message');
	}	

	//--------------------------------------------------------------------

}
