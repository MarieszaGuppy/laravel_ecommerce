<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class favoriteController extends Controller
{
    public function index()
    {

        $products = Product::where('kategori', 'baju')->limit(2)->get();

        return view('favorite', compact('products'));
    }
}
