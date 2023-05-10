<?php

namespace App\Controllers\Common;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class ProductController extends Controller
{
    public function index()
    {
        // Load the products model
        $model = new ProductModel();

        // Get all products
        $data['products'] = $model->findAll();

        // Load the view with the products data
        echo view('product_view', $data);
    }

    public function fetch_products()
    {
        // Get the category from the request data
        $category = $this->request->getPost('category');

        // Load the products model
        $model = new ProductModel();

        // Get products based on the selected category
        if ($category == 'all') {
            $data['products'] = $model->findAll();
        } else {
            $data['products'] = $model->where('category', $category)->findAll();
        }

        // Return the products data as JSON
        return $this->response->setJSON([
            'status' => 'success',
            'data' => $data['products']
        ]);
    }
}
