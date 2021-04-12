<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // for index view
    public function index()
    {
        return view('index');
    }

    // for about view
    public function about()
    {
        return view('about');
    }


    // for portfolio view
    public function portfolio()
    {
        return view('portfolio');
    }

    // for contact view
    public function contact()
    {
        return view('contact');
    }

}
