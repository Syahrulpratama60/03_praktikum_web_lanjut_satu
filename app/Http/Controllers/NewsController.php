<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newspertama()
    {
        return view('plus.newspertama');
    }
    public function newskedua($id)
    {
        return view('plus.newskedua');
    }
}