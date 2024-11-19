<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainPageController extends Controller
{
    
    public function homepage()
    {
        return view('homepage');
    }
    
    public function about()
    {
        return view('about');
    }

// product start
    public function product()
    {
        return view('product.store');
    }

    public function baju()
    {
        return view('product.baju');
    }

    public function sepatu()
    {
        return view('product.sepatu');
    }

    public function hoodie()
    {
        return view('product.hoodie');
    }

    public function topi()
    {
        return view('product.topi');
    }
// product end

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        return view('blog');
    }

}
