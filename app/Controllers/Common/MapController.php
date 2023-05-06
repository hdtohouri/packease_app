<?php namespace App\Controllers\Common;

use App\Controllers\BaseController;
use App\Models\Common\User;

class MapController extends BaseController
{
	public function index()
	{
	    $data['api_key'] = 'AIzaSyCujtCrsQkuLxHgmVMzf_CTiUe6m-Kx0hk';
        return view('common_discover', $data);
	}


}
