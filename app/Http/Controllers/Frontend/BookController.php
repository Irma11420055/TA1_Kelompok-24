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
        $books = Book::paginate(6);
        $books->withPath(url()->current());
        return view('frontend.books.index', compact('books'));
    }

    /**
     * Display the specified resource.
     */
    public function show($book)
    {
        $book = Book::find(decodeId($book));
        if (!$book) {
            return redirect()->route('books.index')->with('error', 'Data tidak ditemukan');
        }
        return view('frontend.books.show', compact('book'));
    }
}
