<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ImportentLink extends BaseController
{
    public function disclaimer(): string
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/pages/Disclaimer') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
    public function privecyPolicy(): string
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/pages/PrivacyPolicy') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
    public function termsConditions(): string
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/pages/TermsConditions') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
}
