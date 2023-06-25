<?php namespace App\Controllers\Common;

use App\Controllers\BaseController;

class Landing_page extends BaseController
{
    public function index()
    {
    
        $api_key = getEnv('API_KEY');
        $data['api_key'] = $api_key;
        return view('landing_page', $data);
    }
    
}