<?php namespace App\Controllers\Common;

use App\Controllers\BaseController;
use App\Models\Common\User;

class Panier extends BaseController
{
	public function index()
	{
        return view('panier');
	}


}
