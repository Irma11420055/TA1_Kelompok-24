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

        $bestBooks = Book::withCount('reviews')
            ->get()
            ->sortByDesc('rating')
            ->take(4);
        return view('frontend.home.index', compact('bestBooks'));
    }
}