<?php namespace App\Controllers\Common;

use App\Controllers\BaseController;
use App\Models\Common\User;

class Logout extends BaseController
{
	public function index()
	{
	    $this->session->stop();
        $this->session->destroy();
        session()->remove('isLoggedIn');
	    return redirect()->to(base_url());
	}


}
