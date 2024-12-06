<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class SiteController{
    public function index()
    {
        return view('site/landingPage'); 
    }

    public function mostraListaPost()
    {
        return view('site/listadeposts');
    }
}