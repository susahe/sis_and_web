<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        return view('web_site/mit_web_index');
    }
}
