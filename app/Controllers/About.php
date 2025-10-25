<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class About extends BaseController
{
    public function about()
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/pages/about') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
    public function faq()
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/pages/faq') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
    public function montessori()
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/pages/montessori') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
}
