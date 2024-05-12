<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Lending;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $books = Book::latest()
            ->groupBy('slug')
            ->paginate(6);

        $books->withPath(url()->current());

        $bestBooks = Book::groupBy('slug')
            ->withCount('reviews')
            ->get()
            ->sortByDesc('rating')
            ->take(4);
        return view('frontend.books.index', compact('books', 'bestBooks'));
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $book = Book::where('slug', $slug)->first();
        if (!$book) {
            return redirect()->route('books.index')->with('error', 'Data tidak ditemukan');
        }

        $book = Book::where('slug', $slug)->get();
        // find available book by status
        $book = $book->where('status', '1')->first();
        if (!$book) {
            $book = Book::where('slug', $slug)->first();
        }
        return view('frontend.books.show', compact('book'));
    }
}