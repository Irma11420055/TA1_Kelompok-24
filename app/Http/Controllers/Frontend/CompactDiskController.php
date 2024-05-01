<?php

namespace App\Http\Controllers\Frontend;

use App\Models\CompactDisk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompactDiskController extends Controller
{
    public function index(Request $request)
    {
        $compactDisks = CompactDisk::paginate(4);
        $compactDisks->withPath(url()->current());
        return view('frontend.compact-disks.index', compact('compactDisks'));
    }

    public function show($compactDisk)
    {
        $compactDisk = CompactDisk::find(decodeId($compactDisk));
        return view('frontend.compact-disks.show', compact('compactDisk'));
    }
}
