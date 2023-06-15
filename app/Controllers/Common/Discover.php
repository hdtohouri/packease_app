<?php namespace App\Controllers\Common;

use App\Controllers\BaseController;
use App\Models\Common\User;

class Discover extends BaseController
{
	public function index()
	{
	    echo view("common_discover");
	}


}
