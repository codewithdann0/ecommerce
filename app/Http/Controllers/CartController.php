<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        
        return view('cart.index');
    }

    public function show()
    {
        return view('products.show', compact('product'));
    }
}