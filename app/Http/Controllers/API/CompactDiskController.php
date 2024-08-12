<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\CompactDisk;
use Illuminate\Http\Request;

class CompactDiskController extends Controller
{
    public function index()
    {
        // Mengambil semua data CD/DVD dari database
        $data = CompactDisk::orderBy('code')->get();

        // Mengembalikan response dalam format JSON
        return response()->json([
            'status' => true,
            'message' => 'CD/DVD ditemukan',
            'data' => $data->map(function ($compactdisk) {
                return [
                    'id' => $compactdisk->id,
                    'code' => $compactdisk->code,
                    'title' => $compactdisk->title,
                    'subject' => $compactdisk->subject,
                    'author' => $compactdisk->author,
                    'description' => $compactdisk->description,
                    'source' => $compactdisk->source,
                    'cover' => $compactdisk->cover,
                    'major' => $compactdisk->major,
                    'category' => $compactdisk->category,
                    'year' => $compactdisk->year,
                    'cd_dvd' => $compactdisk->cd_dvd,
                    'status' => $compactdisk->status,
                ];
            })
        ], 200);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'code' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subject' => 'nullable|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
            'source' => 'nullable|string|max:255',
            'cover' => 'nullable|string|max:255',
            'major' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'year' => 'required|integer',
            'cd_dvd' => 'nullable|required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        $compactDisk = new CompactDisk;
        $compactDisk->code = $request->code;
        $compactDisk->title = $request->title;
        $compactDisk->subject = $request->subject;
        $compactDisk->author = $request->author;
        $compactDisk->description = $request->description;
        $compactDisk->source = $request->source;
        $compactDisk->cover = $request->cover;
        $compactDisk->major = $request->major;
        $compactDisk->category = $request->category;
        $compactDisk->year = $request->year;
        $compactDisk->cd_dvd = $request->cd_dvd;
        $compactDisk->status = $request->status;

        $post = $compactDisk->save();

        return response()->json([
            'status' => true,
            'message' => 'CD/DVD berhasil ditambahkan',
        ]);
    }

    public function show(string $code)
    {
        // Mencari CD/DVD berdasarkan code
        $compactDisk = CompactDisk::where('code', $code)->first();

        if ($compactDisk) {
            return response()->json([
                'status' => true,
                'message' => 'Buku Berhasil Ditemukan',
                'data' => $compactDisk
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Buku Tidak Ditemukan'
            ], 404); // Status kode HTTP 404 untuk "Not Found"
        }
    }


    public function update(Request $request, string $code)
    {
        // Mencari buku berdasarkan code
        $compactDisk = CompactDisk::where('code', $code)->first();

        if (!$compactDisk) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal Melakukan Update CD/DVD'
            ], 404);
        }

        // Aturan validasi
        $rules = [
            'code' => 'sometimes|required|string|unique:compact_disks,code,' . $compactDisk->id,
            'title' => 'sometimes|required|string|max:255',
            'subject' => 'nullable|string|max:255',
            'author' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'source' => 'nullable|string|max:255',
            'cover' => 'nullable|string|max:255',
            'major' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'year' => 'sometimes|required|integer',
            'cd_dvd' => 'nullable|string|max:255',
            'status' => 'sometimes|required|string|max:255',
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
        $compactDisk->update($request->only(array_keys($rules)));

        return response()->json([
            'status' => true,
            'message' => 'Sukses Melakukan Update CD/DVD',
            'data' => $compactDisk
        ], 200); // Kode status 200 untuk "OK"
    }


    public function destroy(string $code)
    {
        // Mencari buku berdasarkan ID
        $compactDisk = CompactDisk::where('code', $code)->first();

        if (!$compactDisk) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal Menghapus CD/DVD'
            ], 404);
        }

        $post = $compactDisk->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses Melakukan Hapus CD/DVD',
            'data' => $compactDisk
        ], 200); // Kode status 200 untuk "OK"
    }
}
