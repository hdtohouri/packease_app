<?php namespace App\Controllers\Common;

use App\Controllers\BaseController;

class Landing_page extends BaseController
{
    public function index()
    {

        return view('landing_page');
    }
    
}