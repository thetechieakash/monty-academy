<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/popup') .
            view('fronts/templates/popupsucess') .
            view('fronts/templates/header') .
            view('fronts/pages/Home') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
}
