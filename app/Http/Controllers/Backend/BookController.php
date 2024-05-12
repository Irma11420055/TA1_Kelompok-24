<?php

namespace App\Http\Controllers\Backend;

use App\Models\Book;
use App\Traits\Upload;
use App\Imports\BooksImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    use Upload;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $books = Book::latest()->groupBy('slug');
            return DataTables::of($books)

                ->editColumn('id', function ($book) {
                    return encodeId($book->id);
                })
                ->toJson();
        }

        // total books
        $totalBooks = Book::distinct('slug')->count();
        // total copies
        $totalCopies = Book::count();
        return view('backend.books.index', compact('totalBooks', 'totalCopies'));
    }

    /**
     * Display the specified resource.
     */
    public function list($slug)
    {
        $books = Book::where('slug', $slug)->get();
        return view('backend.books.list', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.books.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string',
                'author' => 'required|string',
                'isbn' => 'required|numeric',
                'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'required|string',
                'publisher' => 'required|string',
                'language' => 'required|string  ',
                'edition' => 'required|string',
                'location' => 'required|string',
                'subject' => 'required|string',
                'classification' => 'required|string',
                'cp_or' => 'required|string',
                'year' => 'required|integer',
                'quantity' => 'required|integer',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            DB::beginTransaction();
            for ($index = 0; $index < $request->quantity; $index++) {
                $book = Book::create($request->except('_token', 'cover', 'quantity'));

                if ($request->hasFile('cover')) {
                    $cover = $this->uploadFile($request->file('cover'), 'books');
                    $book->update([
                        'cover' => $cover
                    ]);
                }
            }

            DB::commit();

            return redirect()->route('backend.books.index')->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect()->route('backend.books.index')->with('error', 'Data gagal ditambahkan');
        }

        return redirect()->route('backend.books.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($book)
    {
        $book = Book::find(decodeId($book));
        if (!$book) {
            return redirect()->route('backend.books.index')->with('error', 'Data tidak ditemukan');
        }
        return view('backend.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($book)
    {
        $book = Book::find(decodeId($book));
        return view('backend.books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $book)
    {
        $book = Book::find(decodeId($book));
        if (!$book) {
            return redirect()->route('backend.books.index')->with('error', 'Data tidak ditemukan');
        }
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string',
                'author' => 'required|string',
                'isbn' => 'required|numeric',
                'description' => 'required',
                'publisher' => 'required',
                'language' => 'required',
                'edition' => 'required',
                'subject' => 'required',
                'classification' => 'required',
                'cp_or' => 'required',
                'year' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }


            DB::beginTransaction();

            $book->update($request->except('_token', 'cover'));

            if ($request->hasFile('cover')) {
                if ($book->cover) {
                    $this->deleteFile($book->cover);
                }
                $cover = $this->uploadFile($request->file('cover'), 'books');
                $book->update([
                    'cover' => $cover
                ]);
            }

            DB::commit();

            return redirect()->route('backend.books.index')->with('success', 'Data berhasil diubah');
        } catch (\Exception $e) {
            return redirect()->route('backend.books.index')->with('error', 'Data gagal diubah');
        }

        return redirect()->route('backend.books.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($book)
    {
        try {
            $book = Book::find(decodeId($book));
            if (!$book) {
                return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan']);
            }

            // delete cover
            if ($book->cover) {
                $this->deleteFile($book->cover);
            }
            DB::beginTransaction();
            $book->delete();

            DB::commit();

            return response()->json(['status' => 'success', 'message' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Data gagal dihapus']);
        }
    }

    /**
     * Import data
     *
     */
    public function import(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:csv,xlsx,xls',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $file = $request->file('file');

        Excel::import(new BooksImport, $file);

        return redirect()->route('backend.books.index')->with('success', 'Data imported successfully');
    }
}