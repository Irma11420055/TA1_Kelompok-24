<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $categories = Category::query();
            return DataTables::of($categories)
                ->editColumn('id', function ($category) {
                    return encodeId($category->id);
                })
                ->toJson();
        }
        return view('backend.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            DB::beginTransaction();

            Category::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name, '-'),
            ]);

            DB::commit();

            return redirect()->route('backend.categories.index')->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('backend.categories.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $category)
    {
        $category = Category::find(decodeId($category));
        if (!$category) {
            return redirect()->route('backend.categories.index')->with('error', 'Data tidak ditemukan');
        }

        return view('backend.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($category)
    {
        $category = Category::find(decodeId($category));
        if (!$category) {
            return redirect()->route('backend.categories.index')->with('error', 'Data tidak ditemukan');
        }
        return view('backend.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $category)
    {
        $category = Category::find(decodeId($category));
        if (!$category) {
            return redirect()->route('backend.categories.index')->with('error', 'Data tidak ditemukan');
        }

        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            DB::beginTransaction();
            $category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name, '-'),
            ]);

            DB::commit();

            return redirect()->route('backend.categories.index')->with('success', 'Data berhasil diubah');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('backend.categories.index')->with('error', 'Data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category)
    {
        try {
            DB::beginTransaction();

            $category = Category::find(decodeId($category));
            if (!$category) {
                return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan']);
            }
            $category->delete();

            DB::commit();

            return response()->json(['status' => 'success', 'message' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'message' => 'Data gagal dihapus']);
        }
    }
}
