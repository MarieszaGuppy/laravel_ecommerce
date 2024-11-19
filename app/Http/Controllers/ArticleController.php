<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $articles = Article::query();

        if (request('category') !== null) {
            $articles->where('category', request('category'));
        }

        // Filter berdasarkan pencarian judul
        if (request('search')) {
            $articles->where('title', 'like', '%' . request('search') . '%');
        }

        $articleCount = Article::count();
        return view('blog', compact('articleCount'), ['articles' => $articles->latest()->paginate(5)]);
    }

    public function create(): View
    {
        return view('blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'title' => ['required', 'min:5'],
            'image' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
            'slug' => ['required', 'min:5'],
            'author' => ['required', 'min:5'],
            'category' => ['required'],
            'body' => ['required', 'min:10'],
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/articles', $image->hashName());

        //create user
        Article::create([
            'title' => $request->title,
            'image' => $image->hashName(),
            'author' => $request->author,
            'category_id' => $request->category,
            'slug' => $request->slug,
            'body' => $request->body
        ]);

        return redirect()->route('blog')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('blog', compact('article'));
    }
}
