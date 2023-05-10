<?php namespace App\Controllers\Common;

use App\Controllers\BaseController;

class Landing_page extends BaseController
{
    public function index()
    {
    
	    $data['api_key'] = 'AIzaSyCujtCrsQkuLxHgmVMzf_CTiUe6m-Kx0hk';
        return view('landing_page', $data);
    }
    
}