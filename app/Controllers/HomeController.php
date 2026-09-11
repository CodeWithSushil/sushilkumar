<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HomeController extends BaseController
{
    public function index()
    {
      return 
        view('include/header') .
        view('home') .
        view('include/footer');
    }
}
