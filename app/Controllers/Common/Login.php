<?php namespace App\Controllers\Common;

use App\Controllers\BaseController;
use App\Models\Common\User;

class Login extends BaseController
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
                    echo view('login_screen', array('validation' => $this->validator));
                    break;
                case 'get':
                    $message = $this->session->getFlashdata('special_message');
                    echo view('login_screen', array('special_message' => $message));
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
         /*user panel : henoc 
         password: 22222*/

        $user_details = $login_manager->get_permissions($form_user_name, $form_pwd);
        
        if (is_null($user_details)) 
        {
            $message = "<div class='alert alert-danger' role='alert'>Nom d'utilisateur ou Mot de passe invalide veuillez réessayer</div>";
            echo view('login_screen', array('special_message' => $message));
            return;
            
        }else{ 
            
            $data = [
                'user_id' =>  $user_details['user_details']['id_usr'],
                'user_name' =>  $user_details['user_details']['usr_name'],
                'full_name' =>  $user_details['user_details']['full_name'],
                'logged_in' => true,
                'adresse' =>  $user_details['user_details']['adresse'],
                'email_address' =>  $user_details['user_details']['email_address'],
                'numero' =>  $user_details['user_details']['numero'],
                'pic_profil' =>  $user_details['user_details']['pic_profil']
            ];
           

            $this->session->set($data);
            return redirect()->to(base_url(''));
        }
    
	}
    
    public function register()
	{
        $validation_rules = array(
            'Name' => [
                'label'  => 'Nom',
                'rules'  => 'required|min_length[3]'
            ],
            'email' => [
                'label'  => 'Saisir votre email',
                'rules'  => 'required|is_unique[utilisateurs_internes.email_address]|valid_emails'
            ],
            'UserName' => [
                'label'  => "Nom d'utilisateur",
                'rules'  => 'required|min_length[3]|max_length[10]'
            ],
            'UserPwd' => [
                'label'  => 'Mot de passe',
                'rules'  => 'required|min_length[4]|max_length[10]'
            ]
        );
        
	    if( $this->validate($validation_rules) === false )
        {
            $method = $this->request->getMethod();
            switch( $method ){
                case 'post':
                    echo view('inscription_screen', array('validation' => $this->validator));
                    break;
                case 'get':
                    $message = $this->session->getFlashdata('special_message');
                    echo view('inscription_screen', array('special_message' => $message));
                    break;
                default:
                    die('something is wrong here');
            }
            return;
        }

            $form_name = $this->request->getPost('Name',FILTER_SANITIZE_STRING);
            $form_email= $this->request->getPost('email',FILTER_SANITIZE_EMAIL);
            $form_user_name = $this->request->getPost('UserName',FILTER_SANITIZE_STRING);
            $form_pwd = strtoupper(sha1($this->request->getPost('UserPwd')));
            
    

        $data = [
            'full_name'=>$form_name,
            'email_address'=>$form_email,
            'usr_name'=>$form_user_name,
            'usr_secret'=>$form_pwd,
        ];
	  
	    $form_manager = new User();

	    $user_details = $form_manager->insert_in_db($data);

        if( is_null($user_details) )
	    {
	        $message = "<div class='alert alert-danger' role='alert'>L'inscription n'a pas été éffecutée. Merci de reésayer</div>";
            echo view('inscription_screen', array('special_message' => $message));
            return;
        }
        else {
            $message = "<div class='alert alert-success' role='alert'>Votre inscription a bien été pris en compte</div>";
            echo view('inscription_screen', array('special_message' => $message));
            return;
            $this->session->set($data);
            return redirect()->to(base_url('inscription_screen'));
        }

       
	}

    public function forgotten_password()
    {   
         $validation_rules = array(
        'email' => ['label'  => "Saisir adresse email", 'rules'  => 'required|valid_email'],
        );
        if( $this->validate($validation_rules) === false )
        {
            $method = $this->request->getMethod();
            switch( $method ){
                case 'post':
                    echo view('common_forgotten_password', array('validation' => $this->validator));
                    break;
                case 'get':
                    $message = $this->session->getFlashdata('special_message');
                    echo view('common_forgotten_password', array('special_message' => $message));
                    break;
                default:
                    die('something is wrong here');
            }
            return;
        }
        
        $user_email = $this->request->getPost('email',FILTER_SANITIZE_EMAIL);
        $user_model = new User();
        $userID = $user_model->verifyEmail($user_email);
        if ($userID > 0) 
        {   
            $name = $user_model->retrievePassword($user_email); 
            $email = \Config\Services::email();

            $fromEmail = getenv('EMAIL_FROM');
            $fromName = getenv('EMAIL_FROM_NAME');
            $email->setFrom($fromEmail , $fromName);
            $email->setTo($user_email);    
            $code = bin2hex(random_bytes(3));   
            $token = bin2hex(random_bytes(30));
            $email->setSubject('Demande de récuperation de mot de passe');
            $message = '<html><body>';
            $message .= '<h2>Demande de récuperation de mot de passe</h2>';
            $message .= '<p>Bonjour <b>'.$name['row']['full_name'].'</b>,</p>';
            $message .= '<p>Une demande de récuperation de mot de passe a été demandé pour votre compte.</p>';
            $message .= '<p>Le code pour vous connecter à votre compte est <b>'.$code.'</b></p>'; 
            $message .= '<p>Une fois connecté vous pourrez changer votre mot de passe.</p>'; 
            $message .= '<p>Cliquez sur le bouton pour terminer la procédure.</p>'; 
            $message .= '<a href= "'.base_url().'/common/login/reset_password/'.$token.'">Se Connecter</a>';
            $message .= "<p>Contactez le service technique de Packease, si vous n'êtes pas à l'origine de cette demande.,</p>";
            $message .= '</body></html>';
            $email->setMessage($message);
            
            if($email->send()){
                $message = "<div class='alert alert-success' role='alert'>Le code pour vous conecter vous à été envoyé par mail. Il est valide pour 10 min</div>";
                echo view('common_forgotten_password', array('special_message' => $message));
                $user_model->updatetoken($token, $userID, $code);
                return;
                }
            else{
                $message = "<div class='alert alert-danger' role='alert'>Une erreur est survenue, Veuillez réessayer</div>";
                echo view('common_forgotten_password', array('special_message' => $message));
                return;
            }
        } else {
            $message = "<div class='alert alert-danger' role='alert'>Adresse Email non reconnu</div>";
            echo view('common_forgotten_password', array('special_message' => $message));
            return;
        }
        redirect()->to(current_url());
    }

    public function reset_password($token = null)
    {  
        $validation_rules = array(
            'code' => [
            'label'  => 'Saisir le code reçu par mail',
            'rules'  => 'required|exact_length[6]'
             ],
        );
       
        $user_model = new User();
        
        if(!empty($token)){
            if($update_time = $user_model->verifyToken($token)){
                if($expiration= $user_model->checkExpireDate($update_time)){
                    if ($this->validate($validation_rules) === false) {
                        $method = $this->request->getMethod();
                        
                        switch ($method) {
                            case 'post':
                                echo view('common_reset_password', [
                                    'token' => $token,
                                    'validation' => $this->validator
                                ]);
                                break;
                            case 'get':
                                $message = $this->session->getFlashdata('special_message');
                                echo view('common_reset_password', [
                                    'token' => $token,
                                    'special_message' => $message
                                ]);
                                break;
                            default:
                                die('something is wrong here');
                        }
                        
                        return;
                    }

                    $code = $this->request->getPost('code');
                    $connexion = $user_model->get_connected_with_code($code);
                    if(is_null($connexion)){
                    $message = "<div class='alert alert-danger' role='alert'>Code invalide veuillez réessayer</div>";
                        echo view('common_reset_password', array('special_message' => $message));
                        return;
                    }
                    else{ 
                        
                        $data = [
                            'user_id' =>  $connexion['user_details']['id_usr'],
                            'user_name' =>  $connexion['user_details']['usr_name'],
                            'full_name' =>  $connexion['user_details']['full_name'],
                            'logged_in' => true,
                            'adresse' =>  $connexion['user_details']['adresse'],
                            'email_address' =>  $connexion['user_details']['email_address'],
                            'numero' =>  $connexion['user_details']['numero'],
                            'pic_profil' =>  $connexion['user_details']['pic_profil']
                        ];
                    

                        $this->session->set($data);
                        return redirect()->to(base_url(''));
                    }
                }else{
                    $message = "<div class='alert alert-danger' role='alert'>Le lien de réinitialisation du mot de passe a expiré </div>";
                    return view('common_reset_password', array('error_message' => $message));
                }
            }else{
                $message = "<div class='alert alert-danger' role='alert'>Erreur, Utilisateur non reconnu</div>";
                return view('common_reset_password', array('error_message' => $message));
            }
        }else{
            $message = "<div class='alert alert-danger' role='alert'>Accès non authorisé</div>";
            return view('common_reset_password', array('error_message' => $message));
        }
    }

    public function update_password()
    {
        $validation_rules = array(
            'password1' => [
                'label'  => 'Entrer le nouveau password',
                'rules'  => 'required|min_length[5]'
			],
			'password2' => [
                'label'  => 'Ressaisir le nouveau password',
                'rules'  => 'required|matches[password1]'
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
            return view('common_update_password');
        }

        $userModel = new User();
         
        $newpassword = $this->request->getPost('password1',FILTER_SANITIZE_STRING);
        $password_updated = $userModel->update_user_password(session('user_id'), $newpassword);
        if (is_null($password_updated)) 
        { 
            $message = "<div class='alert alert-danger' role='alert'>Erreur. Merci de reésayer</div>";
            echo view('common_update_password', array('special_message' => $message));
            return;
            
        }

        else
	    {
	        $message = "<div class='alert alert-success' role='alert'>Mise à Jour éffectuée.</div>";
            echo view('common_update_password', array('special_message' => $message));
        }
    }

}


