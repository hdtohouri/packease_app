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
                'rules'  => 'permit_empty|min_length[4]'
			],
			'fullname' => [
                'label'  => 'Nom Complet',
                'rules'  => 'permit_empty|alpha'
            ],
            'email' => [
                'label'  => 'Email Adresse',
                'rules'  => 'permit_empty|valid_emails'
            ],
            'adress' => [
                'label'  => 'Entrer votre Adresse',
                'rules'  => 'permit_empty|alpha_numeric_punct'
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
        $user_number = $this->request->getPost('numero',FILTER_SANITIZE_NUMBER_INT);
        $user_email= $this->request->getPost('email_address',FILTER_SANITIZE_EMAIL);
        $user_fullname = $this->request->getPost('full_name',FILTER_SANITIZE_STRING);
        $user_adress = $this->request->getPost('adress',FILTER_SANITIZE_STRING);

        $newName = $profil_pic->getRandomName();
        $profil_pic->move('./uploads', $newName);
        $url = base_url().'uploads'.'/'.$newName;
        $data = [
            'pic_profil' => $url,
            'numero' => $user_number,
            'full_name' => $user_fullname,
            'email_address' => $user_email,
            'adresse' => $user_adress
        ];

        $updated = $userModel->update_data(session('user id'), $data);
       
        if (is_null($updated)) 
        { 
            $message = "<div class='alert alert-danger' role='alert'>Erreur. Merci de reésayer</div>";
            echo view('update_user_data', array('special_message' => $message));
            return;
            
        }

        else
	    {
	        $message = "<div class='alert alert-success' role='alert'>Mise à Jour éffectuée.</div>";
            echo view('update_user_data', array('special_message' => $message));
        }
        
    }
}

