<?php namespace App\Controllers\Common;

use App\Controllers\BaseController;
use App\Models\Common\User;
use App\Models\Common\CartModel;

class Products extends BaseController
{
    
    function index(){

        $productModel = new CartModel();
        $data = [
            'name' => 'Product 1',
            'price' => '10.99',
            'image' => 'img/1.png',
            'description' => 'description',
            'status' => '1',
        ];
        
        $productModel->save($data);
        
        echo view("common_marketplace", $data);
    }
    
}

