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
			'userfile' => [
				'permit_empty',
                'is_image[userfile]',
                'uploaded[userfile]',
                'mime_in[userfile,image/jpg,image/jpeg,image/png,image/webp]',
                'max_size[userfile,1024]',
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
		$product_pic = $this->request->getFile('userfile');
		
		echo $company_name;
		echo $sender_name;
		echo $company_website;
		echo $sender_email;
		echo $product_name;
		echo $product_pic;
		/*if (!empty($product_pic)) {
            $newName = $profil_pic->getRandomName();
            $product_pic->move('./uploads', $newName);
            $url = base_url().'uploads'.'/'.$newName;
        }*/
	    //return view('common_customizations');
	}


}
