<?php

namespace App\Controllers\Common;
use App\Models\Common\User;

use App\Controllers\BaseController;

class UserParameter extends BaseController
{
    public function index()
	{
	    echo view ('userparameter');
	}

    public function update_data()
    {
        $validation_rules = array(
            'number' => [
                'label'  => 'Numero',
                'rules'  => 'permit_empty|exact_length[13]'
			],
			'fullname' => [
                'label'  => 'Nom Complet',
                'rules'  => 'alpha_space'
            ],
            'email' => [
                'label'  => 'Email Adresse',
                'rules'  => 'permit_empty|valid_emails'
            ],
            'adress' => [
                'label'  => 'Entrer votre Adresse',
                'rules'  => 'permit_empty|alpha_space'
            ],
        );
        if( $this->validate($validation_rules) === false )
        {
            $method = $this->request->getMethod();
            switch( $method ){
                case 'post':
                    $this->view_data['validation'] =  $this->validator;
                    break;
                case 'get':
                    $this->view_data['special_message'] = $this->session->getFlashdata('special_message');
                    break;
                default:
                    die('something is wrong here');
            }
            return view('update_user_data');
        }
        $userModel = new User();

        $profil_pic = $this->request->getFile('file');  
        $user_number = $this->request->getPost('number',FILTER_SANITIZE_NUMBER_INT);
        $user_email= $this->request->getPost('email',FILTER_SANITIZE_EMAIL);
        $user_fullname = $this->request->getPost('fullname',FILTER_SANITIZE_STRING);
        $user_adress = $this->request->getPost('adress',FILTER_SANITIZE_STRING);

        $data = [];

        if (!empty($user_number)) {
            $data['numero'] = $user_number;
        }
        
        if (!empty($user_fullname)) {
            $data['full_name'] = $user_fullname;
        }
        
        if (!empty($user_email)) {
            $data['email_address'] = $user_email;
        }
        
        if (!empty($user_adress)) {
            $data['adresse'] = $user_adress;
        }
        
        $updated = $userModel->update_data(session('user_id'), $data);
       
        if ($updated) 
        { 
            $message = "<div class='alert alert-success' role='alert'>Mise à Jour éffectuée.</div>";
            echo view('update_user_data', array('special_message' => $message));
            $this->session->set($data);  
        }

        else
	    {
            $message = "<div class='alert alert-danger' role='alert'>Erreur. Merci de reésayer</div>";
            echo view('update_user_data', array('special_message' => $message));
            return;
        }
        
    }
}
