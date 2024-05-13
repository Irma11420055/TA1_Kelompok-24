<?php

namespace App\Http\Controllers\Frontend;

use App\Models\CompactDisk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompactDiskController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $compactDisks = CompactDisk::where('title', 'like', '%' . $search . '%')
            ->orWhere('author', 'like', '%' . $search . '%')
            ->paginate(4);
        $compactDisks->withPath(url()->current());
        $lastUpdated = CompactDisk::latest()->first();
        return view('frontend.compact-disks.index', compact('compactDisks', 'lastUpdated'));
    }

    public function show($compactDisk)
    {
        $compactDisk = CompactDisk::find(decodeId($compactDisk));
        return view('frontend.compact-disks.show', compact('compactDisk'));
    }
}