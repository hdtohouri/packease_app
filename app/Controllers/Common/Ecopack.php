<?php

namespace App\Controllers\Common;

use App\Controllers\BaseController;

class Ecopack extends BaseController
{
    public function index()
    {
        return view('common_ecopack');
    }
}
