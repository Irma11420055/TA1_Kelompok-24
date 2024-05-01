<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::paginate(6);
        $articles->withPath(url()->current());
        return view('frontend.articles.index', compact('articles'));
    }

    public function show($article)
    {
        $article = Article::where('slug', $article)->first();
        if (!$article) {
            return redirect()->route('articles.index')->with('error', 'Data tidak ditemukan');
        }
        return view('frontend.articles.show', compact('article'));
    }
}
