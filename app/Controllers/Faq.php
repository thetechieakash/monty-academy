<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Faq extends BaseController
{
    public function index()
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/pages/faq') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
}
