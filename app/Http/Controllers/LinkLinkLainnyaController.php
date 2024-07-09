<?php

namespace App\Http\Controllers;

use App\Models\LinkLinkLainnya;
use Illuminate\Http\Request;

class LinkLinkLainnyaController extends Controller
{
    public function index(Request $request){
        $dataLinkLinkLainnya = LinkLinkLainnya::all();

        $query = LinkLinkLainnya::query();

        if ($request->has('search') && $request->search != null) {
            $query->where('nama', 'like', '%' . $request->search . '%')
                    -> orWhere('link', 'like', '%' . $request->search . '%');
        }

        $data_link_link_lainnya = $query->get();

        return view('admin/linklinklainnya', [
            'data_link_link_lainnya' => $dataLinkLinkLainnya,
            compact('data_link_link_lainnya')
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'link' => 'required'
        ]);

        $tambahLink = LinkLinkLainnya::create($request->all());
        return redirect('admin/linklinklainnya')->with('status', 'Link Berhasil Ditambahkan');
    }

    public function edit($id){
        $dataLink = LinkLinkLainnya::find($id);
        return view('admin.modal-edit.linklinklainnya', compact('linklinklainnya'));
    }

    public function update(Request $request, $id){
        $dataLink = LinkLinkLainnya::find($id);

        $dataLink->nama = $request->nama;
        $dataLink->link = $request->link;

        $dataLink->save();

        return redirect('admin/linklinklainnya')->with('status', 'Link Berhasil Diedit');
    }

    public function delete($id){

        $deleteLink = LinkLinkLainnya::find($id);

        if ($deleteLink->delete()){
            return redirect()->back()->with('status', 'Link Berhasil Dihapus');
        }
    }
}
