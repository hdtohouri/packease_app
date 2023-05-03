<?php namespace App\Controllers\Common;

use App\Controllers\BaseController;
use App\Models\Common\User;
use App\Models\Common\CartModel;

class Dashboard extends BaseController
{
	public function index()
	{
	    echo view ('admin_dashboard');
	}

	public function add_product()
	{
		$validation_rules = array(
            'name' => [
                'label'  => 'Product Name',
                'rules'  => 'required|min_length[3]'
            ],
            'price' => [
                'label'  => 'Product Price',
                'rules'  => 'required|alpha_numeric_punct'
            ],
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png]',
                'max_size[file,1024]',
            ],
            'description' => [
                'label'  => 'Product Description',
                'rules'  => 'required|min_length[4]'
			],
			'status' => [
                'label'  => 'Product Status',
                'rules'  => 'required|numeric'
            ]
        );
        
	    if( $this->validate($validation_rules) === false )
        {
            $method = $this->request->getMethod();
            switch( $method ){
                case 'post':
                    echo view('admin_add_product', array('validation' => $this->validator));
                    break;
                case 'get':
                    $message = $this->session->getFlashdata('special_message');
                    echo view('admin_add_product', array('special_message' => $message));
                    break;
                default:
                    die('something is wrong here');
            }
            return;
        }
		
            $prod_name = $this->request->getPost('name',FILTER_SANITIZE_STRING);
            $prod_price= $this->request->getPost('price',FILTER_SANITIZE_NUMBER_FLOAT);
			$file = $this->request->getFile('file');
            $prod_description = $this->request->getPost('description',FILTER_SANITIZE_STRING);
			$prod_status = $this->request->getPost('status',FILTER_SANITIZE_NUMBER_INT);
			
            $newName = $file->getRandomName();
            $file->move('./uploads', $newName);

        $data = [
            'name'=>$prod_name,
            'price'=>$prod_price,
            'image'=>$file,
            'description'=>$prod_description,
			'status'=>$prod_status,
        ];	

	    $form_manager = new CartModel();

	    $user_details = $form_manager->insert_in_db($data);

        if( is_null($user_details) )
	    {
	        $message = "<div class='alert alert-danger' role='alert'>Le produit n'a pas été ajouté. Merci de reésayer</div>";
            echo view('admin_add_product', array('special_message' => $message));
            return;
        }
        else {
            $message = "<div class='alert alert-success' role='alert'>Le produit a bien été ajouté.</div>";
            echo view('admin_add_product', array('special_message' => $message));
        }

	}

    public function list_user()
	{
	    $userModel = new User();
        $data['user_list'] = $userModel->get_list();
        return view('admin_list_users', $data);
	}


}
