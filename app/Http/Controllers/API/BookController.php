<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data buku dari database
        $data = Book::orderBy('code')->get();

        // Mengembalikan response dalam format JSON
        return response()->json([
            'status' => true,
            'message' => 'Buku ditemukan',
            'data' => $data->map(function ($book) {
                return [
                    'id' => $book->id,
                    'code' => $book->code,
                    'title' => $book->title,
                    'slug' => $book->slug,
                    'author' => $book->author,
                    'isbn' => $book->isbn,
                    'cover' => $book->cover,
                    'description' => $book->description,
                    'publisher' => $book->publisher,
                    'language' => $book->language,
                    'edition' => $book->edition,
                    'subject' => $book->subject,
                    'classification' => $book->classification,
                    'cp_or' => $book->cp_or,
                    'year' => $book->year,
                    'location' => $book->location,
                    'status' => $book->status,
                    'created_at' => $book->created_at,
                    'updated_at' => $book->updated_at,
                    'deleted_at' => $book->deleted_at
                ];
            })
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'code' => 'required|string|unique:books',
            'title' => 'required|string',
            'slug' => 'required|string',
            'author' => 'required|string',
            'isbn' => 'required|string|unique:books',
            'cover' => 'nullable|string',
            'description' => 'nullable|string',
            'publisher' => 'nullable|string',
            'language' => 'nullable|string',
            'edition' => 'nullable|string',
            'subject' => 'nullable|string',
            'classification' => 'nullable|string',
            'cp_or' => 'nullable|string',
            'year' => 'nullable|integer',
            'location' => 'nullable|string',
            'status' => 'required|string', // Pastikan status tidak kosong
        ]);

        $dataBook = new Book;
        $dataBook->code = $request->code;
        $dataBook->title = $request->title;
        $dataBook->slug = $request->slug;
        $dataBook->author = $request->author;
        $dataBook->isbn = $request->isbn;
        $dataBook->cover = $request->cover;
        $dataBook->description = $request->description;
        $dataBook->publisher = $request->publisher;
        $dataBook->language = $request->language;
        $dataBook->edition = $request->edition;
        $dataBook->subject = $request->subject;
        $dataBook->classification = $request->classification;
        $dataBook->cp_or = $request->cp_or;
        $dataBook->year = $request->year;
        $dataBook->location = $request->location;
        $dataBook->status = $request->status;



        $post = $dataBook->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses Memasukkan Buku'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $code)
    {
        // Mencari buku berdasarkan code
        $book = Book::where('code', $code)->first();

        if ($book) {
            return response()->json([
                'status' => true,
                'message' => 'Buku Berhasil Ditemukan',
                'data' => $book
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Buku Tidak Ditemukan'
            ], 404); // Status kode HTTP 404 untuk "Not Found"
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $code)
    {
        // Mencari buku berdasarkan code
        $dataBook = Book::where('code', $code)->first();

        if (!$dataBook) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal Melakukan Update Buku'
            ], 404);
        }

        // Aturan validasi
        $rules = [
            'code' => 'sometimes|required|string|unique:books,code,' . $dataBook->id,
            'title' => 'sometimes|required|string',
            'slug' => 'sometimes|required|string',
            'author' => 'sometimes|required|string',
            'isbn' => 'sometimes|required|string|unique:books,isbn,' . $dataBook->id,
            'cover' => 'nullable|string',
            'description' => 'nullable|string',
            'publisher' => 'nullable|string',
            'language' => 'nullable|string',
            'edition' => 'nullable|string',
            'subject' => 'nullable|string',
            'classification' => 'nullable|string',
            'cp_or' => 'nullable|string',
            'year' => 'nullable|integer',
            'location' => 'nullable|string',
            'status' => 'nullable|string',
        ];

        // Validasi input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi Gagal',
                'errors' => $validator->errors()
            ], 422); // Kode status 422 untuk "Unprocessable Entity"
        }

        // Jika validasi berhasil, lakukan pembaruan data
        $dataBook->update($request->only(array_keys($rules)));

        return response()->json([
            'status' => true,
            'message' => 'Sukses Melakukan Update Buku',
            'data' => $dataBook
        ], 200); // Kode status 200 untuk "OK"
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $code)
    {
        // Mencari buku berdasarkan ID
        $dataBook = Book::where('code', $code)->first();

        if (!$dataBook) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal Menghapus Buku'
            ], 404);
        }

        $post = $dataBook->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses Melakukan Hapus Buku',
            'data' => $dataBook
        ], 200); // Kode status 200 untuk "OK"
    }
}
