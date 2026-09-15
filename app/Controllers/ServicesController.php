<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ServicesController extends BaseController
{
    public function index()
    {
        return view('pages/services');
    }
}
