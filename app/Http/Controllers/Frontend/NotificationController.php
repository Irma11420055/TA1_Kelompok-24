<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class NotificationController extends Controller
{
    public function index(Request $request)
    {
        // get latest articles
        $articles = Article::latest()->paginate(6);
        $articles->withPath(url()->current());

        return view('frontend.notifications.articles', compact('articles'));
    }

    public function book(Request $request)
    {
        // get latest books
        $books = Article::latest()->paginate(6);
        $books->withPath(url()->current());

        return view('frontend.notifications.books', compact('books'));
    }

    public function compactDisks(Request $request)
    {
        // get latest compact disks
        $compactDisks = Article::latest()->paginate(6);
        $compactDisks->withPath(url()->current());

        return view('frontend.notifications.compact-disks', compact('compactDisks'));
    }
}
