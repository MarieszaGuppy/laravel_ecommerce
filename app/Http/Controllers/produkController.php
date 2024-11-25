<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class produkController extends Controller
{
    public function product()
    {
        return view('product.store');
    }

    public function baju()
    {

        $products = Product::where('kategori', 'baju')->get();

        return view('product.baju', compact('products'));
    }

    public function sepatu()
    {

        $products = Product::where('kategori', 'sepatu')->get();

        return view('product.sepatu', compact('products'));
    }

    public function hoodie()
    {

        $products = Product::where('kategori', 'hoodie')->get();

        return view('product.hoodie', compact('products'));
    }

    public function topi()
    {

        $products = Product::where('kategori', 'topi')->get();

        return view('product.topi', compact('products'));
    }

    public function detail(Product $product)
    {

        $baju = Product::where('kategori', 'baju')->where('id', '!=', $product->id)->inRandomOrder()->limit(4)->get();
        $sepatu = Product::where('kategori', 'sepatu')->where('id', '!=', $product->id)->inRandomOrder()->limit(4)->get();
        $hoodie = Product::where('kategori', 'hoodie')->where('id', '!=', $product->id)->inRandomOrder()->limit(4)->get();
        $topi = Product::where('kategori', 'topi')->where('id', '!=', $product->id)->inRandomOrder()->limit(4)->get();


        return view('product.detailProduct', compact('product', 'baju', 'sepatu', 'hoodie', 'topi'));
    }
}
