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
            /*'category' => [
                'rules'  => 'required'
            ],*/
           'price' => [
                'label'  => 'Product Price',
                'rules'  => 'required|alpha_numeric_punct'
            ],
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png,image/webp]',
                'max_size[file,1024]'
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
                    $this->view_data['validation'] = $this->validator;
                    break;
                case 'get':
                    $this->view_data['special_message'] = $this->session->getFlashdata('special_message');
                    break;
                default:
                    die('something is wrong here');
            }

            return view('admin_add_product');
        
        }
        $form_manager = new CartModel();
            
        //Fetch category in my db
        /*$categories = $form_manager->db->table('category')->get()->getResult();
        $info['categories'] = $categories;
        print_r($info);*/
    
            $prod_price= $this->request->getPost('price',FILTER_SANITIZE_NUMBER_FLOAT);
			$file = $this->request->getFile('file');
            $prod_description = $this->request->getPost('description',FILTER_SANITIZE_STRING);
			$prod_status = $this->request->getPost('status',FILTER_SANITIZE_NUMBER_INT);
            //$prod_category = $this->request->getPost('category',FILTER_SANITIZE_STRING);
			
            $newName = $file->getRandomName();
            $file->move('./uploads', $newName);
            $url = base_url().'uploads'.'/'.$newName;

        $data = [
            'price'=>$prod_price,
            'image'=>$url,
            'description'=>$prod_description,
			'status'=>$prod_status,
            //'id_category'=>$prod_category,
        ];	
	   
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

    public function list_message()
	{
	    $userModel = new User();
        $data['message_list'] = $userModel->get_message();
        return view('admin_list_message', $data);
	}


}
