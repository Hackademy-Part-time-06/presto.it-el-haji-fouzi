<?php

namespace App\Http\Controllers;



use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function index()
    {

        return view('index');


    }


    public function create()
    {
        $tags = Tag::all();
        return view('articles.create', compact('tags'));


    }
    public function store(Request $request)
    {


       $article= Auth::user()->articles()->create(
        [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'body' => $request->input('body'),
            'img' => $request->file('img')->store("public/img"),
            'category_id' => $request->input('category_id'),
        ]
    );
            //  $selectedTags = $request->input('tags');
            //  foreach ($selectedTags as $tagId){
            //     $article->tags()->attach($tagId);
             

        return redirect()->route('homepage')->with('message', 'Articolo caricato correttamente');
    }








    public function show(Article $article)
    {
        Return view('articles.show',compact('article'));
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
    public function articlesForCategory(Category $category)
    {
        $articles = Article::where('category_id', $category->id)->orderBy('created_at', 'DESC')->get();
        return view('articles.category', compact('articles', 'category'));
    }

}
