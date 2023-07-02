<?php namespace App\Controllers\Common;

use App\Controllers\BaseController;
use App\Models\Common\User;

class Customizations extends BaseController
{
	public function index()
	{
		$validation_rules = array(
            'company' => [
                'label'  => 'Company Name',
                'rules'  => 'required|min_length[3]'
            ],
            'name' => [
                'label'  => 'name',
                'rules'  => 'required'
            ],
            'url' => [
                'label'  => "Your company Website url",
                'rules'  => 'permit_empty'
            ],
            'email' => [
                'label'  => 'Your email',
                'rules'  => 'required|valid_emails'
			],
			'product' => [
                'label'  => 'Name of Product to be packed',
                'rules'  => 'required|min_length[4]'
            ],
			'file' => [
				'permit_empty',
                'is_image[file]',
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png,image/webp]',
                'max_size[file,1024]',
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
            return view('common_customizations');
        }
        
		$company_name = $this->request->getPost('company',FILTER_SANITIZE_STRING);
		$sender_name= $this->request->getPost('name',FILTER_SANITIZE_STRING);
		$company_website = $this->request->getPost('url');
		$sender_email= $this->request->getPost('email',FILTER_SANITIZE_EMAIL);
		$product_name = $this->request->getPost('product',FILTER_SANITIZE_STRING);
		$product_pic = $this->request->getFile('file');

		if (!empty($product_pic)) {
            $newName = $product_pic->getRandomName();
            $product_pic->move('./uploads', $newName);
            $url = base_url().'uploads'.'/'.$newName;
        }

        $data = [
            'company_name'=>$company_name,
            'sender_name'=>$sender_name,
            'website_url'=>$company_website,
            'sender_email'=>$sender_email,
            'produc_to_pack'=>$product_name,
            'produc_image'=>$url,
        ];

        $userModel = new User();
        $update_message = $userModel->message($data);

        if( is_null($update_message) )
	    {
	        $message = "<div class='alert alert-danger' role='alert'>Une erreur est survenue. Merci de reésayer</div>";
            echo view('common_customizations', array('special_message' => $message));
            return;
        }
        else {
            $message = "<div class='alert alert-success' role='alert'>Votre message a bien été pris en compte</div>";
            echo view('common_customizations', array('special_message' => $message));
            return;
        }
	}


}
