<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function productspertama()
    {
        return view('product.productpertama');
    }
    public function productskedua()
    {
        return view('product.productkedua');
    }
    public function productsketiga()
    {
        return view('product.productketiga');
    }
    public function productskeempat()
    {
        return view('product.productkeempat');
    }
}