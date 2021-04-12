<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // index
    public function index()
    {
        print_r(route('products'));

        return view('products.index');
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
