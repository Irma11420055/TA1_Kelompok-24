<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index(){
        $dataPengumuman = Pengumuman::all();

        return view('Admin/pengumuman', [
            'data_pengumuman' => $dataPengumuman
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required'
        ]);

        $tambahPengumuman = Pengumuman::create($request->all());
        return redirect('admin/pengumuman')->with('status', 'Pengumuman Berhasil Ditambahkan');
    }

    public function edit($id){
        $dataPengumuman = Pengumuman::find($id);
        return view('admin.modal-edit.pengumuman', compact('pengumuman'));
    }

    public function update(Request $request, $id){
        $dataPengumuman = Pengumuman::find($id);

        $dataPengumuman->judul = $request->judul;
        $dataPengumuman->isi = $request->isi;
        $dataPengumuman->gambar = $request->gambar;

        $dataPengumuman->save();

        return redirect('admin/pengumuman')->with('status', 'Pengumuman Berhasil Diedit');
    }

    public function delete($id){

        $deletePengumuman = Pengumuman::find($id);

        if ($deletePengumuman->delete()){
            return redirect()->back()->with('status', 'Pengumuman Berhasil Dihapus');
        }
    }
}
