<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Lending;
use Illuminate\Http\Request;

class LendingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data Peminjaman dari database
        $data = Lending::orderBy('user_id')->get();

        // Mengembalikan response dalam format JSON
        return response()->json([
            'status' => true,
            'message' => 'Peminjaman ditemukan',
            'data' => $data->map(function ($lending) {
                return [
                    'id' => $lending->id,
                    'user_id' => $lending->user_id,
                    'book_id' => $lending->book_id,
                    'compact_disk_id' => $lending->compact_disk_id,
                    'created_by' => $lending->created_by,
                    'lending_date' => $lending->lending_date,
                    'return_date' => $lending->return_date,
                    'return_date_real' => $lending->return_date_real,
                    'status' => $lending->status,
                    'fine' => $lending->fine,
                    'extend_date' => $lending->extend_date,
                ];
            })
        ], 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'exists:users,id',
            'book_id' => 'nullable|exists:books,id',
            'compact_disk_id' => 'nullable|exists:compact_disks,id',
            'created_by' => 'exists:users,id',
            'lending_date' => 'date',
            'return_date' => 'required|date',
            'status' => 'required|string|in:pending,lent,returned,overdue,extend,rejected',
            'fine' => 'nullable|integer',
            'extend_date' => 'nullable|date',
        ]);

        $lending = new Lending;
        $lending->user_id = $request->user_id;
        $lending->book_id = $request->book_id;
        $lending->compact_disk_id = $request->compact_disk_id;
        $lending->created_by = $request->created_by;
        $lending->lending_date = $request->lending_date;
        $lending->return_date = $request->return_date;
        $lending->status = $request->status;
        $lending->fine = $request->fine;
        $lending->extend_date = $request->extend_date;

        $post = $lending->save();

        return response()->json([
            'status' => true,
            'message' => 'Peminjaman berhasil ditambahkan',
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $user_id)
    {
        // Mencari Peminjaman berdasarkan code
        $lending = Lending::where('code', $user_id)->first();

        if ($lending) {
            return response()->json([
                'status' => true,
                'message' => 'Peminjaman Berhasil Ditemukan',
                'data' => $lending
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Peminjaman Tidak Ditemukan'
            ], 404); // Status kode HTTP 404 untuk "Not Found"
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Mencari buku berdasarkan user_id
        $lending = Lending::where('id', $id)->first();

        if (!$lending) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal Melakukan Update Peminjaman'
            ], 404);
        }

        // Aturan validasi
        $rules = [
            'user_id' => 'exists:users,id',
            'book_id' => 'nullable|exists:books,id',
            'compact_disk_id' => 'nullable|exists:compact_disks,id',
            'created_by' => 'exists:users,id',
            'lending_date' => 'date',
            'return_date' => 'required|date',
            'status' => 'required|string|in:pending,lent,returned,overdue,extend,rejected',
            'fine' => 'nullable|integer',
            'extend_date' => 'nullable|date',
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
        $lending->update($request->only(array_keys($rules)));
        return response()->json([
            'status' => true,
            'message' => 'Sukses Melakukan Update Peminjaman',
            'data' => $lending
        ], 200); // Kode status 200 untuk "OK"
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Mencari buku berdasarkan ID
        $lending = Lending::where('id', $id)->first();

        if (!$lending) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal Menghapus Peminajam'
            ], 404);
        }

        $post = $lending->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses Melakukan Hapus Peminjaman',
            'data' => $lending
        ], 200); // Kode status 200 untuk "OK"
    }
}
