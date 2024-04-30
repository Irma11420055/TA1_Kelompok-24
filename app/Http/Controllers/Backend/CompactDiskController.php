<?php

namespace App\Http\Controllers\Backend;

use App\Traits\Upload;
use App\Models\CompactDisk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class CompactDiskController extends Controller
{
    use Upload;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $compactDisks = CompactDisk::query();
            return DataTables::of($compactDisks)
                ->editColumn('id', function ($compactDisk) {
                    return encodeId($compactDisk->id);
                })
                ->toJson();
        }
        return view('backend.compact-disks.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.compact-disks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $validator = Validator::make($request->all(), [
                'title' => 'required|string',
                'subject' => 'required|string',
                'author' => 'required|string',
                'description' => 'required|string',
                'source' => 'required|string',
                'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'major' => 'required|string',
                'category' => 'required|string',
                'year' => 'required|integer',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $cover = $this->uploadFile($request->file('cover'), 'CompactDisks');

            CompactDisk::create([
                'title' => $request->title,
                'subject' => $request->subject,
                'author' => $request->author,
                'description' => $request->description,
                'source' => $request->source,
                'cover' => $cover,
                'major' => $request->major,
                'category' => $request->category,
                'year' => $request->year,
            ]);

            DB::commit();

            return redirect()->route('backend.compact-disks.index   ')->with('success', 'Compact Disk created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $compactDisk)
    {
        $compactDisk = CompactDisk::find(decodeId($compactDisk));
        if (!$compactDisk) {
            return redirect()->route('backend.compact-disks.index')->with('error', 'Compact Disk not found');
        }
        return view('backend.compact-disks.show', compact('compactDisk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($compact_disk)
    {
        $compact_disk = CompactDisk::find(decodeId($compact_disk));
        return view('backend.compact-disks.edit', compact('compact_disk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $compact_disk)
    {
        try {
            DB::beginTransaction();
            $validator = Validator::make($request->all(), [
                'title' => 'required|string',
                'subject' => 'required|string',
                'author' => 'required|string',
                'description' => 'required|string',
                'source' => 'required|string',
                'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'major' => 'required|string',
                'category' => 'required|string',
                'year' => 'required|integer',
            ]);


            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $compact_disk = CompactDisk::find(decodeId($compact_disk));

            $cover = $compact_disk->cover;
            if ($request->hasFile('cover')) {
                $cover = $this->uploadFile($request->file('cover'), 'CompactDisks');
            }

            $compact_disk->update([
                'title' => $request->title,
                'subject' => $request->subject,
                'author' => $request->author,
                'description' => $request->description,
                'source' => $request->source,
                'cover' => $cover,
                'major' => $request->major,
                'category' => $request->category,
                'year' => $request->year,
            ]);

            DB::commit();

            return redirect()->route('backend.compact-disks.index')->with('success', 'Compact Disk updated successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($compact_disk)
    {
        try {
            $compact_disk = CompactDisk::find(decodeId($compact_disk));
            if (!$compact_disk) {
                return response()->json(['status' => 'error', 'message' => 'Compact Disk not found']);
            }
            // if has cover, delete the cover
            if ($compact_disk->cover) {
                $this->deleteFile($compact_disk->cover);
            }
            DB::beginTransaction();
            $compact_disk->delete();
            DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Compact Disk deleted successfully']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'message' => 'Failed to delete Compact Disk']);
        }
    }
}
