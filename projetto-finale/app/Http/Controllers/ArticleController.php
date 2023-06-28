<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function index()
    {
    }


    public function create()
    {


        return view('articles.create');
    }


    public function store(Request $request)
    {
        Auth::user()->articles()->create(
            [
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'body' => $request->input('body'),
                'img' => $request->file('img')->store("public/imag"),
                'category_id' => $request->input('category_id'),
            ]
        );
        return redirect()->route('homepage')->with('message', 'Articolo caricato correttamente');
    }






    public function show(Article $article)
    {
    }


    public function edit(Article $article)
    {
    }


    public function update(Request $request, Article $article)
    {
    }


    public function destroy(Article $article)
    {
    }
}
