<?php

namespace App\Controllers\Common;
use App\Models\Common\User;

use App\Controllers\BaseController;

class UserParameter extends BaseController
{
    public function index()
    {
        
	    $userModel = new User();
        /*if(session('logged_in')){
            echo (session('usr_name'));
            $user_infos = $userModel->user_info(session('usr_name'));
            print_r($user_infos);
        }*/
        return view('userparameter');
    }
}
