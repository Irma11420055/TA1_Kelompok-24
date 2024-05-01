<?php

namespace App\Http\Controllers\Backend;

use App\Traits\Upload;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\LibraryArchive;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class LibraryArchiveController extends Controller
{
    use Upload;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $type)
    {
        if ($request->ajax()) {
            $libraryArchives = LibraryArchive::where('type', $type);
            return DataTables::of($libraryArchives)
                ->editColumn('id', function ($libraryArchive) {
                    return encodeId($libraryArchive->id);
                })
                ->toJson();
        }
        return view('backend.library-archives.index', compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($type)
    {
        return view('backend.library-archives.create', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $type)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string',
                'file' => 'required|file|mimes:pdf|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            DB::beginTransaction();

            $file = $this->uploadFile($request->file('file'), 'library-archives');

            $documentCount = LibraryArchive::where('type', $type)->count();

            $number = '';
            if ($type == 'rules') {
                $number = 'PPITDEL/' . date('d') . '/' . date('m') . '/' . date('Y') . '/' . $documentCount + 1;
            } else if ($type == 'guidelines') {
                $number = 'PGITDEL/' . date('d') . '/' . date('m') . '/' . date('Y') . '/' . $documentCount + 1;
            } else if ($type == 'achivements') {
                $number = 'PAITDEL/' . date('d') . '/' . date('m') . '/' . date('Y') . '/' . $documentCount + 1;
            } else {
                $number = 'PAITDEL/' . date('d') . '/' . date('m') . '/' . date('Y') . '/' . $documentCount + 1;
            }

            $libraryArchive = LibraryArchive::create([
                'number' => $number,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'file' => $file,
                'type' => $type,
            ]);

            // if type is rules and first record, set active
            if ($type == 'rules' && $documentCount == 0) {
                $libraryArchive->update(['active' => 1]);
            }

            DB::commit();
            $message = $this->setMessage($type);
            return redirect()->route('backend.library-archives.index', $type)->with('success', $message . ' created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('backend.library-rules.index', $type)->with('error', 'Failed to create ' . $message);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($type, $libraryArchive)
    {
        $message = $this->setMessage($type);
        $libraryArchive = LibraryArchive::find(decodeId($libraryArchive));
        if (!$libraryArchive) {
            return redirect()->route('backend.library-archives.index', $type)->with('error', $message . ' not found');
        }
        return view('backend.library-archives.show', compact('libraryArchive', 'type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($type, $libraryArchive)
    {
        $message = $this->setMessage($type);
        $libraryArchive = LibraryArchive::find(decodeId($libraryArchive));
        if (!$libraryArchive) {
            return redirect()->route('backend.library-archives.index', $type)->with('error', $message . ' not found');
        }
        return view('backend.library-archives.edit', compact('libraryArchive', 'type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $type, $libraryArchive)
    {
        try {
            $message = $this->setMessage($type);

            $libraryArchive = LibraryArchive::find(decodeId($libraryArchive));
            if (!$libraryArchive) {
                return redirect()->route('backend.library-archives.index', $type)->with('error', $message . ' not found');
            }
            $validator = Validator::make($request->all(), [
                'title' => 'required|string',
                'file' => 'nullable|file|mimes:pdf|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            DB::beginTransaction();

            $file = $libraryArchive->file;
            if ($request->hasFile('file')) {
                $this->deleteFile($file);
                $file = $this->uploadFile($request->file('file'), 'library-archives');
            }

            $libraryArchive->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'file' => $file,
            ]);

            DB::commit();
            return redirect()->route('backend.library-archives.index', $type)->with('success', $message . ' updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('backend.library-archives.index', $type)->with('error', 'Failed to update ' . $message);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($libraryArchive, $type)
    {
        try {
            $message = $this->setMessage($type);
            $libraryArchive = LibraryArchive::find(decodeId($libraryArchive));
            if (!$libraryArchive) {
                return response()->json(['status' => 'error', 'message' => $message . ' not found']);
            }
            DB::beginTransaction();
            // check if file exists
            $this->deleteFile($libraryArchive->file);
            $libraryArchive->delete();
            DB::commit();
            return response()->json(['status' => 'success', 'message' => $message . ' deleted successfully']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'message' => 'Failed to delete ' . $message]);
        }
    }

    public function toggleActive($type, $libraryArchive,)
    {
        try {
            $message = $this->setMessage($type);
            $libraryArchive = LibraryArchive::find(decodeId($libraryArchive));
            if (!$libraryArchive) {
                return response()->json(['status' => 'error', 'message' => $message . ' not found']);
            }
            DB::beginTransaction();
            // find active rules
            $activeLibraryArchive = LibraryArchive::where('type', $type)->where('active', 1)->first();
            if ($activeLibraryArchive) {
                $activeLibraryArchive->update(['active' => 0]);
            }
            $libraryArchive->update(['active' => 1]);
            DB::commit();
            return response()->json(['status' => 'success', 'message' => $message . ' updated successfully']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'message' => 'Failed to update ' . $message]);
        }
    }

    private function setMessage($type)
    {
        $message = '';
        if ($type == 'rules') {
            $message = 'Peraturan perpustakaan';
        } else if ($type == 'guidelines') {
            $message = 'Pedoman perpustakaan';
        } else if ($type == 'achivements') {
            $message = 'Penghargaan perpustakaan';
        } else {
            $message = 'Arsip perpustakaan';
        }
        return $message;
    }
}
