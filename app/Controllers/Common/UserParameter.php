<?php

namespace App\Controllers\Common;
use App\Models\Common\User;

use App\Controllers\BaseController;

class UserParameter extends BaseController
{
    public function index()
    {
        $validation_rules = array(
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png,image/webp]',
                'max_size[file,1024]'
            ],
            'number' => [
                'label'  => 'Numero',
                'rules'  => 'min_length[4]|permit_empty|decimal'
			],
			'fullname' => [
                'label'  => 'Nom Complet',
                'rules'  => 'permit_empty|alpha'
            ],
            'email' => [
                'label'  => 'Email Adresse',
                'rules'  => 'valid_emails|permit_empty'
			],
            'adress' => [
                'label'  => 'Entrer votre Adresse',
                'rules'  => 'min_length[4]|permit_empty|alpha_numeric'
			]
        );

        if( $this->validate($validation_rules) === false )
        {
            $method = $this->request->getMethod();
            switch( $method ){
                case 'post':
                    echo view('userparameter', array('validation' => $this->validator));
                    break;
                case 'get':
                    $message = $this->session->getFlashdata('special_message');
                    echo view('userparameter', array('special_message' => $message));
                    break;
                default:
                    die('something is wrong here');
            }
            return;
        }
        
	    $userModel = new User();
        
        return view('userparameter');
    }
}
