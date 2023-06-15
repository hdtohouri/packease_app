<?php namespace App\Controllers\Common;

use App\Controllers\BaseController;
use App\Models\Common\User;
use App\Models\Common\CartModel;
use Mpdf\Mpdf;

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

	public function pdf()
	{
		// set the path to the PDF file
		$path = ROOTPATH . 'public/pdf/catalogue.pdf';

		// set the headers for the download
		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; filename="catalogue.pdf"');
	
		// output the PDF file
		readfile($path);

		
	}
}
