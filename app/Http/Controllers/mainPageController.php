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

    public function product()
    {
        return view('store');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        return view('blog');
    }

}
