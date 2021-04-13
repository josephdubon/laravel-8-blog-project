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
//        $name = 'Joe';
        $name = [
            'Joe',
            'Jon',
            'Jessi'
        ];
        return view('about')->with('name', $name);
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
