<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // index
    public function index()
    {
        $title = "Welcome to my homepage!";
        $description = "Created by Joe";

        $data = [
            'product1' => 'iPhone',
            'product2' => 'iPad',
        ];

        return view('products.index', [
            'data' => $data
        ]);
    }

    //product detail
    public function show($name)
    {
        $data = [
            'iphone' => 'iPhone',
            'ipad' => 'iPad',
        ];
        return view('products.index', [
            // if ___ is not found then give user message 'product __ does not exist.'
            'products' => $data[$name] ?? 'Product ' . $name . ' does not exist.'
        ]);
    }
}
