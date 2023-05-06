<?php namespace App\Controllers\Common;

use App\Controllers\BaseController;
use App\Models\Common\User;
use App\Models\Common\CartModel;

class Marketplace extends BaseController
{
	public function index()
	{
		$userModel = new CartModel();
        $data['product_list'] = $userModel->get_product_list();
        return view('common_marketplace', $data);
	    //echo view("common_marketplace");
	}

	public function product_list()
	{
	    $userModel = new CartModel();
        $data['user_list'] = $userModel->get_product_list();
        return view('common_marketplace', $data);
	}
}
