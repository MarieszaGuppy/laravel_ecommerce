<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class mainPageController extends Controller
{
    
    public function homepage()
    {

        $hoodie = Product::where('kategori', 'hoodie')->limit(2)->get();
        $baju = Product::where('kategori', 'baju')->limit(2)->get();

        return view('homepage', compact('hoodie', 'baju'));
    }
    
    public function about()
    {
        return view('about');
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
