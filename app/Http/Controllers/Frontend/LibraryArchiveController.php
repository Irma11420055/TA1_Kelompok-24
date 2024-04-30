<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\LibraryArchive;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LibraryArchiveController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function rules()
    {
        $libraryArchive = LibraryArchive::where('type', 'rules')->where('active', true)->first();
        if (!$libraryArchive) {
            return redirect()->back()->with('error', 'File not found');
        }
        return view('frontend.library-archives.rules', compact('libraryArchive'));
    }

    /**
     * Display the specified resource.
     */
    public function guidelines()
    {
        $libraryArchive = LibraryArchive::where('type', 'guidelines')->where('active', true)->first();
        if (!$libraryArchive) {
            return redirect()->back()->with('error', 'File not found');
        }
        return view('frontend.library-archives.guidelines', compact('libraryArchive'));
    }
}
