<?php

namespace App\Controllers\Common;
use App\Models\Common\User;

use App\Controllers\BaseController;

class Pic_update extends BaseController
{
    public function index()
	{
	    echo view ('userparameter');
	}

    public function update_pic()
    {
        $validation_rules = array(
            'file' => [
                'is_image[file]',
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png,image/webp]',
                'max_size[file,1024]',
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
            return view('userparameter');
        }
        $userModel = new User();

        $profil_pic = $this->request->getFile('file');


        if (!empty($profil_pic)) {
            $newName = $profil_pic->getRandomName();
            $profil_pic->move('./uploads', $newName);
            $url = base_url().'uploads'.'/'.$newName;
            $data['pic_profil'] = $url;
        }
        
        $updated = $userModel->update_data(session('user_id'), $data);
       
        if ($updated) 
        { 
            $message = "<div class='alert alert-success' role='alert'>Mise à Jour éffectuée.</div>";
            echo view('userparameter', array('special_message' => $message));
            $this->session->set($data);
            
        }

        else
	    {
	        $message = "<div class='alert alert-danger' role='alert'>Erreur. Merci de reésayer</div>";
            echo view('userparameter', array('special_message' => $message));
            return;
        }
        
    }
}
