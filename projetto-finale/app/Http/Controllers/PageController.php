<?php

namespace App\Http\Controllers;






use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Mail\RequestRoleMail;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller

{

    public function searchArticle(Request $request)
    {
        $key = $request->input('key');
        $articles = Article::search($key)->where('is_accepted', true)->get();

        return view('articles.index', compact('articles', 'key'));
    }

    public function homepage()
    {
        $articles = Article::where('is_accepted',true)->orderBy('created_at', 'desc')->take(6)->get();
        return view('homepage',compact('articles'));

    }

    public function home()
    {
        $articles = Article::orderBy('created_at', 'desc')->take(6)->get();
        return view('homepage', compact('articles'));
    }


    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function workwithus()
    {
        return view('workWithUs');
    }
    public function sendRoleRequest(Request $request)
    {
        $user = Auth::user();
        $role = $request->input('role');
        $email = $request->input('email');
        $presentation = $request->input('presentation');
        $requestMail = new RequestRoleMail(compact('role','email', 'presentation'));

      Mail::to($request->user())->send($requestMail);
        switch ($role){
            case 'admin':
                $user->is_admin = NULL;
                break;
            case 'revisor':
                $user->is_revisor = NULL;
                break;
            case 'writer':
                $user->is_writer = NULL;
                break;
        }
         $user->update();

        return redirect()->route('homepage')->with('message', 'Grazie per averci contattato');
    }

    public function articles_by_category(Category $category)
    {
        $articles = Article::where('category_id', $category->id)-where('is_accepted',true)->orderBy('created_at','DESC')->get();
          return view('articles.category',compact('articles','category'));
    }



    //
}
