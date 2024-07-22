<?php

namespace App\Http\Controllers\Backend;

use App\Models\SiteLink;
use App\Traits\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;


class SiteLinkController extends Controller
{
    use Upload;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $siteLinks = SiteLink::latest();
            return DataTables::of($siteLinks)
                ->editColumn('id', function ($siteLink) {
                    return encodeId($siteLink->id);
                })
                ->toJson();
        }
        return view('backend.site-links.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.site-links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'url' => 'required|url|active_url',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // jika ada upload gambar
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            DB::beginTransaction();
            $siteLink = new SiteLink();
            $siteLink->name = $request->name;
            $siteLink->url = $request->url;

            // Handle image upload if exists
            if ($request->hasFile('image')) {
                $imagePath = $this->uploadFile($request->file('image'), 'site-links');
                $siteLink->image = $imagePath;
            }

            $siteLink->save();
            DB::commit();

            return redirect()->route('backend.site-links.index')->with('success', 'Site link created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return redirect()->route('backend.site-links.index')->with('error', 'Failed to create site link.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($site_link)
    {
        $siteLink = SiteLink::find(decodeId($site_link));
        if (!$siteLink) {
            return redirect()->route('backend.site-links.index')->with('error', 'Site link not found.');
        }
        return view('backend.site-links.edit', compact('siteLink'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $site_link)
    {
        try {
            $siteLink = SiteLink::find(decodeId($site_link));

            if (!$siteLink) {
                return redirect()->route('backend.site-links.index')->with('error', 'Site link not found.');
            }

            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'url' => 'required|url|active_url',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // jika ada upload gambar
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            DB::beginTransaction();
            $siteLink->name = $request->name;
            $siteLink->url = $request->url;

            // Handle image upload if exists
            if ($request->hasFile('image')) {
                // Delete existing image if any
                if ($siteLink->image) {
                    Storage::disk('public')->delete($siteLink->image);
                }
                $imagePath = $this->uploadFile($request->file('image'), 'site-links');
                $siteLink->image = $imagePath;
            }


            $siteLink->save();
            DB::commit();

            return redirect()->route('backend.site-links.index')->with('success', 'Site link updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return redirect()->route('backend.site-links.index')->with('error', 'Failed to update site link.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($site_link)
    {
        try {
            $siteLink = SiteLink::find(decodeId($site_link));
            if (!$siteLink) {
                return response()->json(['status' => 'error', 'message' => 'Site link not found']);
            }
            DB::beginTransaction();
            // Delete image if any
            if ($siteLink->image) {
                Storage::disk('public')->delete($siteLink->image);
            }
            $siteLink->delete();
            DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Site link deleted successfully']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'message' => 'Failed to delete site link']);
        }
    }
}
