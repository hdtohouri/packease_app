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
                    $this->view_data['validation'] = $this->validator;
                    break;
                case 'get':
                    $this->view_data['special_message'] = $this->session->getFlashdata('special_message');
                    break;
                default:
                    die('something is wrong here');
            }

            return view('userparameter');
        
        }
        
	    $userModel = new User();
        $profil_pic = $this->request->getFile('file');
        $user_number = $this->request->getPost('number',FILTER_SANITIZE_NUMBER_INT);
        $user_email= $this->request->getPost('email',FILTER_SANITIZE_EMAIL);
        $user_fullname = $this->request->getPost('fullname',FILTER_SANITIZE_STRING);
        $user_adress = $this->request->getPost('adress',FILTER_SANITIZE_STRING);

        $newName = $profil_pic->getRandomName();
        $profil_pic->move('./uploads', $newName);
        $url = base_url().'uploads'.'/'.$newName;

        $data = [
            'full_name'=>$user_fullname,
            'email_address'=>$user_email,
            'numero'=>$user_number,
            'adresse'=>$user_adress,
            'pic_profil'=>$profil_pic,
        ];

	    $user_details = $userModel->update(session('user id'),$data);
        var_dump($user_details);

        if( is_null($user_details) )
	    {
	        $message = "<div class='alert alert-danger' role='alert'>Erreur. Merci de reésayer</div>";
            echo view('userparameter', array('special_message' => $message));
            return;
        }
        else {
            $message = "<div class='alert alert-success' role='alert'>Mise à Jour éffectuée.</div>";
            echo view('userparameter', array('special_message' => $message));
        }
        
        //return view('userparameter');
    }
}
