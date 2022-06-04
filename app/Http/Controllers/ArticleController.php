<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function home()
    {
        return view('home', ['articles' => Article::limit(6)->latest()->get()]);
    }

    public function articles()
    {
        return view('articles', ['articles' => Article::paginate(10)]);
    }

    public function article(Article $article)
    {
        return view('article', compact('article'));
    }
}
