<?php

namespace App\Http\Controllers\Frontend;

use App\Models\LibraryArchive;
use App\Http\Controllers\Controller;

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

    /**
     * Display the specified resource.
     */
    public function achievements()
    {
        $libraryArchives = LibraryArchive::where('type', 'achievements')
            ->where('active', true)
            ->paginate(6);
        return view('frontend.library-archives.achievements', compact('libraryArchives'));
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $libraryArchive = LibraryArchive::where('slug', $slug)->where('active', true)->first();
        if (!$libraryArchive) {
            return redirect()->back()->with('error', 'File not found');
        }
        return view('frontend.library-archives.show', compact('libraryArchive'));
    }
}