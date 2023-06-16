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
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png,image/webp]',
                'max_size[file,1024]'
            ],
            'number' => [
                'label'  => 'Numero',
                'rules'  => 'min_length[4]|decimal'
			],
			'fullname' => [
                'label'  => 'Nom Complet',
                'rules'  => 'alpha'
            ],
            'email' => [
                'label'  => 'Email Adresse',
                'rules'  => 'valid_emails'
			],
            'adress' => [
                'label'  => 'Entrer votre Adresse',
                'rules'  => 'min_length[4]|alpha_numeric'
			],
        );
        
        if( $this->validate($validation_rules) === false )
        {
            $method = $this->request->getMethod();
            switch( $method ){
                case 'post':
                    $this->view_data['validation'] = $this->validator;
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
        echo $profil_pic ;
        /*$user_number = $this->request->getPost('number',FILTER_SANITIZE_NUMBER_INT);
        $user_email= $this->request->getPost('email_address',FILTER_SANITIZE_EMAIL);
        $user_fullname = $this->request->getPost('fullname',FILTER_SANITIZE_STRING);
        $user_adress = $this->request->getPost('adress',FILTER_SANITIZE_STRING);*/

        $newName = $profil_pic->getRandomName();
        $profil_pic->move('./uploads', $newName);
        $url = base_url().'uploads'.'/'.$newName;

        /*if (!empty($profil_pic)) 
        { 
            $userModel->update_data($id, ['file' => $profil_pic]);
            $message = "<div class='alert alert-success' role='alert'>Mise à Jour éffectuée.</div>";
            echo view('update_user_data', array('special_message' => $message));
        }

        elseif (!empty($user_number)) 
        { 
            $userModel->update_data($id, ['number' => $user_number]);
            $message = "<div class='alert alert-success' role='alert'>Mise à Jour éffectuée.</div>";
            echo view('update_user_data', array('special_message' => $message));
        }

        elseif (!empty($user_email)) 
        { 
            $userModel->update_data($id, ['email_address' => $user_email]);
            $message = "<div class='alert alert-success' role='alert'>Mise à Jour éffectuée.</div>";
            echo view('update_user_data', array('special_message' => $message));
        }

        elseif (!empty($user_fullname)) 
        { 
            $userModel->update_data($id, ['fullname' => $user_fullname]);
            $message = "<div class='alert alert-success' role='alert'>Mise à Jour éffectuée.</div>";
            echo view('update_user_data', array('special_message' => $message));
        }

        elseif (!empty($user_adress)) 
        { 
            $userModel->update_data($id, ['adress' => $user_adress]);
            $message = "<div class='alert alert-success' role='alert'>Mise à Jour éffectuée.</div>";
            echo view('update_user_data', array('special_message' => $message));
       
        else
	    {
	        $message = "<div class='alert alert-danger' role='alert'>Erreur. Merci de reésayer</div>";
            echo view('update_user_data', array('special_message' => $message));
            return;
        }
        

	    $user_details = $userModel->update(session('user id'),$data);
        var_dump($user_details); }*/

        
       
        
        //return view('update_user_data');
    }
}
/*
$userModel = new User();
        $profil_pic = $this->request->getFile('file');

        $newName = $profil_pic->getRandomName();
        $profil_pic->move('./uploads', $newName);
        $url = base_url().'uploads'.'/'.$newName;
        
        $userModel = new User();
        if (!empty($profil_pic)) 
        {
           
            $userModel->update_data($id, ['file' => $profil_pic]);
        }*/