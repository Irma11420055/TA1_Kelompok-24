<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // book with highest rating

        $bestBooks = Book::with('category')
            ->withCount('reviews')
            ->get()
            ->sortByDesc('rating')
            ->take(5);
        return view('frontend.home.index', compact('bestBooks'));
    }
}
