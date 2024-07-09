<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\PanduanPesanPinjam;
use App\Models\Penghargaan;
use App\Models\PeraturanPerpustakaan;
use Illuminate\Http\Request;

class TentangPerpusController extends Controller
{
    // Get Peraturan Perpustakaan
    public function peraturanperpustakaan(){
        $dataperaturan = PeraturanPerpustakaan::where('id_jenis', 3)->get();
        $dataJenis = Jenis::all();

        return view('Admin/tentangperpus/peraturanperpustakaan', [
            'data_peraturan' => $dataperaturan,
            'data_jenis' => $dataJenis
        ]);
    }

    // Get Panduan Pesan Pinjam
    public function panduan(){
        $dataPanduan = PanduanPesanPinjam::where('id_jenis', 4)->get();
        $dataJenis = Jenis::all();

        return view('Admin/tentangperpus/panduanpesanpinjam', [
            'data_panduan' => $dataPanduan,
            'data_jenis' => $dataJenis
        ]);
    }

    // Get Penghargaan
    public function penghargaan(){
        $dataPenghargaan = Penghargaan::where('id_jenis', 5)->get();
        $dataJenis = Jenis::all();

        return view('Admin/tentangperpus/penghargaan', [
            'data_penghargaan' => $dataPenghargaan,
            'data_jenis' => $dataJenis
        ]);
    }

    // Tambah Peraturan Perpustakaan
    public function store_peraturan(Request $request){
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'file' => 'required'
        ]);

        $tambahPeraturan = PeraturanPerpustakaan::create($request->all());
        return redirect('admin/tentangperpus/peraturanperpustakaan')->with('status', 'Peraturan Perpustakaan Baru Berhasil Ditambahkan');
    }

    // Tambah Panduan Pesan Pinjam
    public function store_panduan(Request $request){
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'file' => 'required'
        ]);

        $tambahPanduan = PeraturanPerpustakaan::create($request->all());
        return redirect('admin/tentangperpus/panduanpesanpinjam')->with('status', 'Panduan Pesan Pinjam Baru Berhasil Ditambahkan');
    }

    // Tambah Penghargaan
    public function store_penghargaan(Request $request){
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'file' => 'required'
        ]);

        $tambahPenghargaan = PeraturanPerpustakaan::create($request->all());
        return redirect('admin/tentangperpus/penghargaan')->with('status', 'Penghargaan Baru Berhasil Ditambahkan');
    }

    // Hapus Peraturan Perpustakaan
    public function delete_peraturan($id){

        $deletePeraturan = PeraturanPerpustakaan::find($id);

        if ($deletePeraturan->delete()){
            return redirect()->back()->with('status', 'Peraturan Perpustakaan Berhasil Dihapus');
        }
    }

    // Hapss Panduan Pesan Pinjam
    public function delete_panduan($id){

        $deletePanduan = PeraturanPerpustakaan::find($id);

        if ($deletePanduan->delete()){
            return redirect()->back()->with('status', 'Panduan Pesan Pinjam Berhasil Dihapus');
        }
    }

    // Hapus Penghargaan
    public function delete_penghargaan($id){

        $deletePenghargaan = Penghargaan::find($id);

        if ($deletePenghargaan->delete()){
            return redirect()->back()->with('status', 'Penghargaan Berhasil Dihapus');
        }
    }
}
