<?php namespace App\Controllers\Common;

use App\Controllers\BaseController;
use App\Models\Common\User;

class Admin extends BaseController
{
	public function index()
	{
		$validation_rules = array(
            'UserName' => ['label'  => "Nom d'utilisateur", 'rules'  => 'required'],
            'UserPwd' => ['label'  => 'Mot de passe', 'rules'  => 'required']
        );

	    if( $this->validate($validation_rules) === false )
        {
            $method = $this->request->getMethod();
            switch( $method ){
                case 'post':
                    echo view('admin_area', array('validation' => $this->validator));
                    break;
                case 'get':
                    $message = $this->session->getFlashdata('special_message');
                    echo view('admin_area', array('special_message' => $message));
                    break;
                default:
                    die('something is wrong here');
            }
            return;
        }

	    $form_user_name = $this->request->getPost('UserName',FILTER_SANITIZE_STRING);
	    $form_pwd = $this->request->getPost('UserPwd');
	    $login_manager = new User();

        /*Admin panel : admin 
         password: 1111*/

        $user_details = $login_manager->admin_permissions($form_user_name, $form_pwd);
        if (!$form_user_name || !password_verify($form_pwd, $user_details)) 
        {
            $message = "<div class='alert alert-danger' role='alert'>Nom d'utilisateur ou Mot de passe invalide veuillez réessayer</div>";
            echo view('admin_area', array('special_message' => $message));
            return;
            
        }else{
            $data = [
                'usr_name'=>$form_user_name,
                'usr_secret'=>$form_pwd,
                'logged_in' => true,
            ];

            $this->session->set($data);
            return redirect()->to(base_url('common/dashboard'));
        }

	    echo view('admin_area');
	}

	


}
