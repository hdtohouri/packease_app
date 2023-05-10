<?php namespace App\Controllers\Common;

use App\Controllers\BaseController;
use App\Models\Common\User;

class Customizations extends BaseController
{
	public function index()
	{
	    return view('common_customizations');
	}


}
